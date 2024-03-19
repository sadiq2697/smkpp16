<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function add()
{
    $section = mysqlirealescape($_POST["section"]);
	$folder = mysqlirealescape($_POST["folder"]);
	$query = query("INSERT INTO `home_sections` set section='$section',folder='$folder'");
	if($query==1)
	{
		$path = '../../uploads/';
		if (!file_exists($path.$folder)) {
			mkdir($path.$folder, 0777, true);
			mkdir($path.'/'.$folder.'/thumb/', 0777, true);
		}
		redirect('../home-sections.php?msg=done');
	}
	else
	{
		redirect('../home-sections.php?error=1');
	}
}
//
function edit()
{
	$home_sections_id = $_POST["id"];
	$query = query("SELECT section,folder FROM `home_sections` where id='$home_sections_id'");
	$row = $query->row;
	$section= $row["section"];
	$folder = $row["folder"];
	?>
	<form role="form" class="form-horizontal" method="post" action="functions/home-sections.php?do=update">
	<input type="hidden" name="id" value="<?php echo $home_sections_id?>" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update home section</h4>
	</div>
	<div class="modal-body">
			<div class="modal-body">
			<div class="form-group">
				<label class="col-md-3 control-label">Section</label>
				<div class="col-md-9">
					<input type="text" class="form-control" value="<?php echo $section?>" name="section" placeholder="">
				</div>
			</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Folder</label>
				<div class="col-md-9">
					<input type="text" class="form-control" value="<?php echo $folder?>" name="folder" placeholder="">
				</div>
			</div>
			</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger button-continue-shopping" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary button-checkout">Submit</button>
</div>
</form>
	<?php
}
//
function update()
{
	$home_sections_id = $_POST["id"];
	$section = mysqlirealescape($_POST["section"]);
	$folder = mysqlirealescape($_POST["folder"]);
	$query = query("update `home_sections` set section='$section',folder='$folder' where id='$home_sections_id'");
	if($query==1)
	{
		redirect('../home-sections.php?msg=done');
	}
	else
	{
		redirect('../home-sections.php?error=1');
	}
}
//
function delete()
{
	$home_sections_id = $_GET["id"];
	$query = query("DELETE FROM `home_sections` WHERE id='$home_sections_id'");
	if($query==1)
	{
		redirect('../home-sections.php?msg=done');
	}
	else
	{
		redirect('../home-sections.php?error=1');
	}
}
//

?>