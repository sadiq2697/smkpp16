<?php
ini_set('memory_limit', '-1');
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function add()
{
	$imgname = $_FILES['image']['name'];
	$description = mysqlirealescape($_POST["description"]);
	$link = mysqlirealescape($_POST["link"]);
	$sort = mysqlirealescape($_POST["sort"]);
	$status = $_POST["status"];
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
		$image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/slider/".$image);
		$thumbimg = "../../images/slider/".$image;
		$thumbcrop = thumb_crop("../../images/slider/$image",$thumbimg,1349,550);
	}
	//insert
	$query = query("INSERT INTO `slider`(`image`,`description`,`link`,`sort`,`status`) VALUES ('$image','$description','$link','$sort','$status')");
	if($query==1)
	{
		
		redirect('../slider.php');
	}
	else
	{
		redirect('../slider.php?error=1');
	}
}
//
function update()
{
	$slider_id = $_POST["id"];
	$imgname = $_POST["sid"];
	$description = mysqlirealescape($_POST["description"]);
	$link = mysqlirealescape($_POST["link"]);
	$sort = mysqlirealescape($_POST["sort"]);
	$status = $_POST["status"];
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
		$image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/slider/".$image);
		$thumbimg = "../../images/slider/".$image;
		$thumbcrop = thumb_crop("../../images/slider/$image",$thumbimg,1349,550);
	}
	$query = query("update `slider` set image='$image',`description`='$description', `link`='$link',sort='$sort',`status`='$status' where slider_id='$slider_id'");
	if($query==1)
	{
		redirect('../slider.php?msg=done');
	}
	else
	{
		redirect('../slider.php?error=1');
	}
}
function edit()
{
	$slider_id = $_POST["id"];
	$result = query("select image,description,link,sort,status from slider where slider_id='$slider_id'");
	$row = $result->row;
	$slider = $row["image"];
	$description = $row["description"];
	$link = $row["link"];
	$sort = $row["sort"];
	$status = $row["status"];
?>
<form role="form" class="form-horizontal" method="post" action="functions/slider.php?do=update" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $slider_id?>" />
<input type="hidden" name="sid" value="<?php echo $slider?>" />
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Update Slider</h4>
</div>
<div class="modal-body">
<div class="form-group">
	<label class="col-md-3 control-label">Slider</label>
	<div class="col-md-8">
		<input name="image" type="file" data-show-upload="false" accept="image/*" class="file-loading eslider">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label">Link</label>
	<div class="col-md-8">
		<input name="link" type="text" value="<?php echo $link?>" class="form-control">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label">Sort</label>
	<div class="col-md-4">
		<input name="sort" type="text" value="<?php echo $sort?>" class="form-control">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label">Status</label>
	<div class="col-md-4">
		<select class="form-control" name="status" placeholder="">
		<option value="1" <?php if($status==1){ echo 'selected'; }?>>Enable</option>
		<option value="0" <?php if($status==0){ echo 'selected'; }?>>Disable</option>
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label">Description</label>
	<div class="col-md-8">
		<textarea class="form-control" name="description"><?php echo $description?></textarea>
	</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger button-continue-shopping" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary button-checkout">Submit</button>
</div>
</form>
<script>
$(document).ready(function() {
	$(".eslider").fileinput({
		showCaption: false,
		uploadAsync: false,
		overwriteInitial: true,
		browseLabel: "Browse Photos",
		browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
		showUpload: true,
		initialPreviewShowDelete: true,
		showUploadedThumbs: true,
		removeIcon: '<i class="fa fa-trash-o"></i> ',
		uploadUrl: "#",
		allowedFileExtensions: ["jpg", "png", "gif"],
		maxFilePreviewSize: 10240,
		initialPreview: [
		'../images/slider/<?php echo $slider?>',
		],
		initialPreviewAsData: true,
	});
});
</script>
<?php
}
//
function delete()
{
	$slider_id = $_GET["id"];
	$query = query("DELETE FROM `slider` WHERE slider_id='$slider_id'");
	if($query==1)
	{
		redirect('../slider.php?msg=done');
	}
	else
	{
		redirect('../slider.php?error=1');
	}
}
//

?>