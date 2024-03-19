<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function facilities()
{
	$facilities = mysqlirealescape($_POST["facilities"]);
	$query = query("update `facilities` set facilities='$facilities'");
	if($query==1)
	{
		redirect("../facilities.php?msg=done");
	}
	else
	{
		redirect('../facilities.php?error=1');
	}
}
