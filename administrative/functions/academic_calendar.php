<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function add()
{
	$title = mysqlirealescape($_POST["title"]);
	$description = mysqlirealescape($_POST["description"]);
	$date = mysqlirealescape($_POST["date"]);
	$date = date("Y-m-d",strtotime($date));
	$status = $_POST["status"];
	//
	$query = query("INSERT INTO `events_calendar` set title='$title',description='$description',date='$date',status='$status',created=now(),modified=now()");
	if($query==1)
	{	
		redirect('../academic_calendar.php?msg=done');
	}
	else
	{
		redirect('../academic_calendar.php?error=1');
	}
}
//
function edit()
{
	$id = $_POST["id"];
	$query = query("SELECT  * FROM `events_calendar` where id='$id'");
	$row = $query->row;
	$title= $row["title"];
	$description = $row["description"];
	$date= date("d/m/Y",strtotime($row["date"]));
	$status= $row["status"];
	?>
	<form role="form" class="form-horizontal" method="post" action="functions/academic_calendar.php?do=update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id?>" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update Event</h4>
	</div>
	<div class="modal-body">
			<div class="form-group clearfix">
				<label class="col-md-2 control-label">Title</label>
				<div class="col-md-10">
					<input type="text" class="form-control" required name="title" value="<?php echo $title?>">
				</div>
			</div>
			<div class="form-group clearfix">
				<label class="col-md-2 control-label">Description</label>
				<div class="col-md-10">
					<textarea type="text" rows="4" class="form-control" name="description" placeholder=""><?php echo $description; ?></textarea>
				</div>
			</div>
			<div class="form-group clearfix">
				<label class="col-md-2 control-label">Date</label>
				<div class="col-md-6">
					<input type="text" class="form-control inline-date" required name="date"  value="<?php echo $date?>">
				</div>
			</div>
	
		
			<div class="form-group clearfix">
				<label class="col-md-2 control-label">Status</label>
				<div class="col-md-6">
					<select class="form-control" name="status" placeholder="">
					<option value="1" <?php if($status==1){ echo 'selected'; }?>>Enable</option>
					<option value="0" <?php if($status==0){ echo 'selected'; }?>>Disable</option>
					</select>
				</div>
			</div>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-danger btn-sm button-continue-shopping" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary btn-sm button-checkout">Submit</button>
	</div>
	</form>
<?php
}
//
function update()
{
	$id = $_POST["id"];
	$title = mysqlirealescape($_POST["title"]);
	$description = mysqlirealescape($_POST["description"]);
	$date = mysqlirealescape($_POST["date"]);
	$date = date("Y-m-d",strtotime($date));
	$status = $_POST["status"];
	//
	$query = query("update `events_calendar` set title='$title',description='$description',date='$date',status='$status',modified=now() where id='$id'");
	if($query==1)
	{	
		redirect('../academic_calendar.php?msg=done');
	}
	else
	{
		redirect('../academic_calendar.php?error=1');
	}
}
//
function delete()
{
	$id = $_GET["id"];
	$query = query("DELETE FROM `events_calendar` WHERE id='$id'");
	if($query==1)
	{
		redirect('../academic_calendar.php?msg=done');
	}
	else
	{
		redirect('../academic_calendar.php?error=1');
	}
}
//

?>