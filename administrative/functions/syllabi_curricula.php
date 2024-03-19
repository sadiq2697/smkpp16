<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function syllabus()
{
	$syllabus = mysqlirealescape($_POST["syllabus"]);
	$query = query("update `syllabi_curricula` set syllabus='$syllabus'");
	if($query==1)
	{
		redirect("../syllabus.php?msg=done");
	}
	else
	{
		redirect('../syllabus.php?error=1');
	}
}

function character_education()
{
	$character_education = mysqlirealescape($_POST["character_education"]);
	$query = query("update `syllabi_curricula` set character_education='$character_education'");
	if($query==1)
	{
		redirect("../character_education.php?msg=done");
	}
	else
	{
		redirect('../character_education.php?error=1');
	}
}

function teaching_training()
{
	$teaching_training = mysqlirealescape($_POST["teaching_training"]);
	$query = query("update `syllabi_curricula` set teaching_training='$teaching_training'");
	if($query==1)
	{
		redirect("../teaching_training.php?msg=done");
	}
	else
	{
		redirect('../teaching_training.php?error=1');
	}
}

function extra_curricular()
{
	$extra_curricular = mysqlirealescape($_POST["extra_curricular"]);
	$query = query("update `syllabi_curricula` set extra_curricular='$extra_curricular'");
	if($query==1)
	{
		redirect("../extra_curricular.php?msg=done");
	}
	else
	{
		redirect('../extra_curricular.php?error=1');
	}
}

function school_houses()
{
	$school_houses = mysqlirealescape($_POST["school_houses"]);
	$query = query("update `syllabi_curricula` set school_houses='$school_houses'");
	if($query==1)
	{
		redirect("../school_houses.php?msg=done");
	}
	else
	{
		redirect('../school_houses.php?error=1');
	}
}
