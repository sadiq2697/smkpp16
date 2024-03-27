<?php

// Define database connection parameters
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "your_password");
define("DB_NAME", "smkpp16");

// Connect to the database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Select the database
$db_selected = mysqli_select_db($con, DB_NAME);
if (!$db_selected) {
    die("Failed to select database: " . mysqli_error($con));
}

// Function to execute SQL queries
function query($sql) {
    global $con;
    $result = mysqli_query($con, $sql);
    if ($result === false) {
        throw new Exception('Error executing query: ' . mysqli_error($con));
    }
    return $result;
}

// Function to escape SQL values
function mysqlirealescape($val) {
    global $con;
    return mysqli_real_escape_string($con, $val);
}

// Function to redirect to a specified page
function redirect($page) {
    header("Location: " . $page);
    exit;
}

// Function to check if a session exists
function checkSession($prefix) {
    session_start();
    if (isset($_SESSION["adminid"])) {
        redirect($prefix . "index.php");
    }
}

// Function to handle authentication
function authentication($prefix) {
    session_start();
    if (!isset($_SESSION["adminid"])) {
        redirect($prefix . "login.php");
    }
}

// Function to set session variables
function setSession($sessionname, $sessionvalue) {
    session_start();
    $_SESSION[$sessionname] = $sessionvalue;
}

// Function to create cookies
function createCookie($name, $value) {
    $expiration = time() + (86400 * 30); // 30 days
    setcookie($name, $value, $expiration, "/");
}

// Function to remove cookies
function removeCookies() {
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach ($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time() - 3600, '/');
        }
    }
}

// Function to limit text length
function text_limit($text, $length) {
    if (strlen($text) <= $length) {
        return $text;
    } else {
        return substr($text, 0, $length) . '...';
    }
}

?>
