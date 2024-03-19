<?php
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function changephoto()
{
	//general
	session_start();
	$id = $_SESSION["adminid"];
	$imgname = $_FILES['image']['name'];
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
		$image = $id.'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../assets/images/users/".$image);
		$thumbimg = "../assets/images/users/".$image;
		$thumbcrop = thumb_crop("../assets/images/users/$image",$thumbimg,200,200);
		redirect('../profile.php');
	}
	else
	{
		redirect('../profile.php');
	}
}
//
function update()
{
	session_start();
	//general
	$id = $_SESSION["adminid"];
	$name = mysqlirealescape($_POST["name"]);
	$oldpass = md5($_POST["oldpass"]);
	$newpass = md5($_POST["newpass"]);
	$newpass2 = md5($_POST["newpass2"]);
	if($_POST["oldpass"]!="")
	{
		if($newpass==$newpass2)
		{
			$csql = query("select adminid from admin where password='$oldpass' and adminid='$id'");
			$cnum = $csql->num_rows;
			if($cnum==1)
			{
				//update
				$query = query("UPDATE `admin` SET `fullname`='$name',password='$newpass' WHERE adminid='$id'");
				if($query==1)
				{
					createCookies("fullname",$name);
					echo 1;
				}
				else
				{
					echo "Failed to update";
				}
			}
			else
			{
				echo 'Invalid your old password';
			}
		}
		else
		{
			echo 'Your password did not match';
		}
	}
	else
	{
		$query = query("UPDATE `admin` SET `fullname`='$name' WHERE adminid='$id'");
		echo 1;
	}
}
//
function delete()
{
	$id = $_GET["id"];
	$query = query("DELETE FROM `admin` WHERE id='$id'");
	if($query==1)
	{
		redirect('../users.php?msg=done');
	}
	else
	{
		redirect('../users.php?error=1');
	}
}
//

?>