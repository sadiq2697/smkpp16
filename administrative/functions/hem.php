<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function jawatankuasa_induk_hem()
{
	$jawatankuasa_induk_hem = mysqlirealescape($_POST["jawatankuasa_induk_hem"]);
	$query = query("update `hem` set jawatankuasa_induk_hem='$jawatankuasa_induk_hem'");
	if($query==1)
	{
		redirect("../jawatankuasa_induk_hem.php?msg=done");
	}
	else
	{
		redirect('../jawatankuasa_induk_hem.php?error=1');
	}
}

function senarai_guru_tingkatan()
{
	$senarai_guru_tingkatan = mysqlirealescape($_POST["senarai_guru_tingkatan"]);
	$query = query("update `hem` set senarai_guru_tingkatan='$senarai_guru_tingkatan'");
	if($query==1)
	{
		redirect("../senarai_guru_tingkatan.php?msg=done");
	}
	else
	{
		redirect('../senarai_guru_tingkatan.php?error=1');
	}
}

