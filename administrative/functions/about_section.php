<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function about()
{
	$about = mysqlirealescape($_POST["about"]);
	$query = query("update `about_section` set about='$about'");
	if($query==1)
	{
		redirect("../sejarah_sekolah.php?msg=done");
	}
	else
	{
		redirect('../sejarah_sekolah.php?error=1');
	}
}

function piagam_pelanggan()
{
	$piagam_pelanggan = mysqlirealescape($_POST["piagam_pelanggan"]);
	$query = query("update `about_section` set piagam_pelanggan='$piagam_pelanggan'");
	if($query==1)
	{
		redirect("../piagam_pelanggan.php?msg=done");
	}
	else
	{
		redirect('../piagam_pelanggan.php?error=1');
	}
}

function logo_sekolah()
{
	$logo_sekolah = mysqlirealescape($_POST["logo_sekolah"]);
	$query = query("update `about_section` set logo_sekolah='$logo_sekolah'");
	if($query==1)
	{
		redirect("../logo_sekolah.php?msg=done");
	}
	else
	{
		redirect('../logo_sekolah.php?error=1');
	}
}

function lagu_sekolah()
{
	$lagu_sekolah = mysqlirealescape($_POST["lagu_sekolah"]);
	$query = query("update `about_section` set lagu_sekolah='$lagu_sekolah'");
	if($query==1)
	{
		redirect("../lagu_sekolah.php?msg=done");
	}
	else
	{
		redirect('../lagu_sekolah.php?error=1');
	}
}


function lagu_persekutuan()
{
	$lagu_persekutuan = mysqlirealescape($_POST["lagu_persekutuan"]);
	$query = query("update `about_section` set lagu_persekutuan='$lagu_persekutuan'");
	if($query==1)
	{
		redirect("../lagu_persekutuan.php?msg=done");
	}
	else
	{
		redirect('../lagu_persekutuan.php?error=1');
	}
}
