<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function jk_induk_kokurikulum()
{
	$jk_induk_kokurikulum = mysqlirealescape($_POST["jk_induk_kokurikulum"]);
	$query = query("update `kokurikulum` set jk_induk_kokurikulum='$jk_induk_kokurikulum'");
	if($query==1)
	{
		redirect("../jk_induk_kokurikulum.php?msg=done");
	}
	else
	{
		redirect('../jk_induk_kokurikulum.php?error=1');
	}
}

function sukan_permainan()
{
	$sukan_permainan = mysqlirealescape($_POST["sukan_permainan"]);
	$query = query("update `kokurikulum` set sukan_permainan='$sukan_permainan'");
	if($query==1)
	{
		redirect("../sukan_permainan.php?msg=done");
	}
	else
	{
		redirect('../sukan_permainan.php?error=1');
	}
}

function unit_beruniform()
{
	$unit_beruniform = mysqlirealescape($_POST["unit_beruniform"]);
	$query = query("update `kokurikulum` set unit_beruniform='$unit_beruniform'");
	if($query==1)
	{
		redirect("../unit_beruniform.php?msg=done");
	}
	else
	{
		redirect('../unit_beruniform.php?error=1');
	}
}

function kelab_persatuan()
{
	$kelab_persatuan = mysqlirealescape($_POST["kelab_persatuan"]);
	$query = query("update `kokurikulum` set kelab_persatuan='$kelab_persatuan'");
	if($query==1)
	{
		redirect("../kelab_persatuan.php?msg=done");
	}
	else
	{
		redirect('../kelab_persatuan.php?error=1');
	}
}

