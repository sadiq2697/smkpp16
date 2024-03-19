<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function jawatankuasa_induk_kurikulum()
{
	$jawatankuasa_induk_kurikulum = mysqlirealescape($_POST["jawatankuasa_induk_kurikulum"]);
	$query = query("update `akademik` set jawatankuasa_induk_kurikulum='$jawatankuasa_induk_kurikulum'");
	if($query==1)
	{
		redirect("../jawatankuasa_induk_kurikulum.php?msg=done");
	}
	else
	{
		redirect('../jawatankuasa_induk_kurikulum.php?error=1');
	}
}

function bidang_bahasa()
{
	$bidang_bahasa = mysqlirealescape($_POST["bidang_bahasa"]);
	$query = query("update `akademik` set bidang_bahasa='$bidang_bahasa'");
	if($query==1)
	{
		redirect("../bidang_bahasa.php?msg=done");
	}
	else
	{
		redirect('../bidang_bahasa.php?error=1');
	}
}

function bidang_sains_matematik()
{
	$bidang_sains_matematik = mysqlirealescape($_POST["bidang_sains_matematik"]);
	$query = query("update `akademik` set bidang_sains_matematik='$bidang_sains_matematik'");
	if($query==1)
	{
		redirect("../bidang_sains_matematik.php?msg=done");
	}
	else
	{
		redirect('../bidang_sains_matematik.php?error=1');
	}
}


function bidang_teknik_vokasional()
{
	$bidang_teknik_vokasional = mysqlirealescape($_POST["bidang_teknik_vokasional"]);
	$query = query("update `akademik` set bidang_teknik_vokasional='$bidang_teknik_vokasional'");
	if($query==1)
	{
		redirect("../bidang_teknik_vokasional.php?msg=done");
	}
	else
	{
		redirect('../bidang_teknik_vokasional.php?error=1');
	}
}

function bidang_kemanusiaan()
{
	$bidang_kemanusiaan = mysqlirealescape($_POST["bidang_kemanusiaan"]);
	$query = query("update `akademik` set bidang_kemanusiaan='$bidang_kemanusiaan'");
	if($query==1)
	{
		redirect("../bidang_kemanusiaan.php?msg=done");
	}
	else
	{
		redirect('../bidang_kemanusiaan.php?error=1');
	}
}

