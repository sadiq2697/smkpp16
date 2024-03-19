<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//

//
function status()
{
	$id = $_GET["id"];
	$status = $_GET["status"];
	$query = query("update blogcomments set status=$status where comment_id='$id'");
	redirect("../blog-comments.php");
}