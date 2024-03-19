<?php
//db host values
define("db_host","localhost");
define("db_user","root");
define("db_password","STO@2022");
define("db_name","smkpp16");
$con = mysqli_connect(db_host,db_user,db_password);
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($con,db_name)or die(mysql_error());
function query($sql)
{
	global $con;
	$query = $con->query($sql);
	if (!$con->errno){
		if (isset($query->num_rows)) {
			$data = array();
			while ($row = $query->fetch_assoc()) {
				$data[] = $row;
			}
		        $result = new stdClass();
				$result->num_rows = $query->num_rows;
				$result->row = isset($data[0]) ? $data[0] : array();
				$result->rows = $data;

				unset($data);

				$query->close();

				return $result;
			} else{
				return true;
			}
	}
	else {
		throw new ErrorException('Error: ' . $con->error . '<br />Error No: ' . $con->errno . '<br />' . $sql);
		exit();
	}
}
function mysqlirealescape($val)
{
	global $con;
	return mysqli_real_escape_string($con,$val);
}
function redirect($page)
{
	header("location:".$page);
	exit;
}
function checkSession($prefix)
{
	session_start();
	if(isset($_SESSION["adminid"]))
	{
		redirect($prefix."index.php");
	}
}
//authentication
function authentication($prefix)
{
session_start();
if(!isset($_SESSION["adminid"]))
{
	redirect($prefix."login.php");
}
}
function session($sessionname,$sessionvalue)
{
	session_start();
	$_SESSION[$sessionname]=$sessionvalue;
}
function createCookies($ckname,$ckval)
{
	$ckexpire = 86400 * 30;
	setcookie($ckname,$ckval,time() + ($ckexpire), "/");
}
function removeCookies()
{
	if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
	$parts = explode('=', $cookie);
	$name = trim($parts[0]);
	setcookie($name, '', time()-1000);
	setcookie($name, '', time()-1000, '/');
    }
}
}
function text_limit($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
?>
