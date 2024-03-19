<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//

function structure()
{
	$structure = mysqlirealescape($_POST["structure"]);
	$query = query("update `school_structure` set structure='$structure'");
	if($query==1)
	{
		redirect("../structure.php?msg=done");
	}
	else
	{
		redirect('../structure.php?error=1');
	}
}

function medium_of_instruction()
{
	$medium_of_instruction = mysqlirealescape($_POST["medium_of_instruction"]);
	$query = query("update `school_structure` set medium_of_instruction='$medium_of_instruction'");
	if($query==1)
	{
		redirect("../medium_of_instruction.php?msg=done");
	}
	else
	{
		redirect('../medium_of_instruction.php?error=1');
	}
}

function timing()
{
	$timing = mysqlirealescape($_POST["timing"]);
	$query = query("update `school_structure` set timing='$timing'");
	if($query==1)
	{
		redirect("../timing.php?msg=done");
	}
	else
	{
		redirect('../timing.php?error=1');
	}
}

function academic_year()
{
	$academic_year = mysqlirealescape($_POST["academic_year"]);
	$query = query("update `school_structure` set academic_year='$academic_year'");
	if($query==1)
	{
		redirect("../academic_year.php?msg=done");
	}
	else
	{
		redirect('../academic_year.php?error=1');
	}
}

function girls_morning_session()
{
	$girls_morning_session = mysqlirealescape($_POST["girls_morning_session"]);
	$query = query("update `school_structure` set girls_morning_session='$girls_morning_session'");
	if($query==1)
	{
		redirect("../girls_morning_session.php?msg=done");
	}
	else
	{
		redirect('../girls_morning_session.php?error=1');
	}
}


function uniform()
{
	$uniform = mysqlirealescape($_POST["uniform"]);
	$query = query("update `school_structure` set uniform='$uniform'");
	if($query==1)
	{
		redirect("../uniform.php?msg=done");
	}
	else
	{
		redirect('../uniform.php?error=1');
	}
}

