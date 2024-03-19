<?php
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function show()
{
	$query = query("SELECT `id`,`vid_link` FROM `videos` order by id desc");
	$num = $query->num_rows;
	if($num!=0)
	{
		foreach($query->rows as $rows)
		{
		?>
		<div class="col-sm-6 col-lg-3 col-md-4 mobiles">
			<div class="product-list-box thumb">
				<a href="javascript:void(0);" class="image-popup" title="Screenshot-1">
					<iframe width="100%" height="200" src="<?php echo $rows["vid_link"]?>" frameborder="0" allowfullscreen="" style="margin: 0 0 10px 5px;"></iframe>
				</a>

				<div class="product-action">
					<a onclick="edit('<?php echo base64_encode($rows["id"])?>')" href="#edit" data-toggle="modal" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
					<a href="javascript:;" class="btn btn-danger btn-sm" onclick="delete_mem('<?php echo base64_encode($rows["id"])?>')"><i class="md md-close"></i></a>
				</div>
			</div>
		</div>
		<?php
		}
	}
	else
	{
		echo '<p class="alert alert-warning">There is no <strong>videos</strong> on this account</p>';
	}
}
function add()
{
	$vid_link = mysqlirealescape($_POST["vid_link"]);
	$query = query("insert into videos set `vid_link`='$vid_link'");
	if($query==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}
function update()
{
	$id = base64_decode($_POST["id"]);
	$vid_link = mysqlirealescape($_POST["vid_link"]);
	$query = query("update videos set `vid_link`='$vid_link' where id='$id'");
	if($query==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}
function delete()
{
	$id = base64_decode($_POST["id"]);
	$query = query("delete from videos where id='$id'");
	if($query==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}

//
function editform()
{
	$id = base64_decode($_POST["id"]);
	$query = query("SELECT `vid_link` FROM `videos` WHERE id='$id'");
	$row = $query->row;
	$vid_link = $row["vid_link"];
?>
<form role="form" id="editform" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return forminput('editform')" action="functions/videos.php?do=update">
<input type="hidden" name="id" value="<?php echo base64_encode($id)?>" />
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Update Video</h4>
</div>
<div class="modal-body">
    <div class="form-group clearfix">
		<label class="col-md-3 control-label">Video Embed Link</label>
		<div class="col-md-9">
			<textarea name="vid_link" id="vid_link" cols="35" rows="5" class="form-control" required="required"><?php echo $vid_link?></textarea>
			<p style="margin: 5px 0 5px 5px;"><strong>Example :</strong> https://www.youtube.com/embed/_qzEdi-AB2k</p>
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
?>