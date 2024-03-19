<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function login()
{
	$username = $_POST["username"];
    $password = md5($_POST["password"]);
	$query = query("SELECT adminid,`username`, `password`,`fullname`,`rolecode` FROM `admin` WHERE `username`='$username' and password='$password' and status=1");
	$check = $query->num_rows;
	if($check==1)
	{
		loginlogs($username);
		$row = $query->row;
		$adminid =$row["adminid"];
		$fullname =$row["fullname"];
		$rolecode =$row["rolecode"];
		//
		session("adminid",$adminid);
		//redirect('../index.php');
	}
	else
	{
		echo 0;
		//redirect('../login.php?error=1');
	}
}
//
function loginlogs($username)
{
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$browser = $_SERVER["HTTP_USER_AGENT"];
	$query = query("INSERT INTO `admin_login`(`userid`, `ip_address`, `browser`, `date_time`) VALUES ('$username','$ip_address','$browser',now())");
}
//
function logout()
{
	session_start();
	session_regenerate_id(true);
	session_unset();
	session_destroy();
	$username = $_COOKIE["username"];
	removeCookies();
	redirect("../login.php");
}
//
function forgot()
{
	$username = $_POST["username"];
	$newpassword = $_POST["newpassword"];
	$newpassword2 = $_POST["newpassword2"];
	$csql = query("select username from admin where username='$username'");
	$cnum = $csql->num_rows;
	if($cnum==1)
	{
		if($newpassword==$newpassword2)
	    {
			$newpassword = md5($newpassword);
			$result = query("update admin set password='$newpassword' where username='$username'");
			echo 1;
		}
		else
		{
			echo 'Did not match your password';
		}
	}
	else
	{
		echo 'Invalid username. Please enter valid username';
	}
}
?>