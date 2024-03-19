<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function affilation()
{
	$affilation = mysqlirealescape($_POST["affilation"]);
	$query = query("update `affilation` set affilation='$affilation'");
	if($query==1)
	{
		redirect("../affilation.php?msg=done");
	}
	else
	{
		redirect('../affilation.php?error=1');
	}
}
