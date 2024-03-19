<?php
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function add()
{
	global $con;
	$notice_title = mysqlirealescape($_POST["notice_title"]);
	$date = date("Y-m-d",strtotime($_POST["date"]));
	$notice_description = mysqlirealescape($_POST["notice_description"]);
	$imgname = $_FILES['image']['name'];
	$status = $_POST["status"];
	//
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
        $image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/notice/".$image);
		$thumbimg = "../../images/notice/".$image;
        $largecrop = thumbnail_box("../../images/notice/$image",$thumbimg,1000,400);
	}
	//
	$query = query("INSERT INTO `notice`(`notice_title`,notice_description,image, `status`,notice_date) VALUES ('$notice_title','$notice_description','$image','$status','$date')");
	if($query==1)
	{	
		redirect('../notice.php?msg=done');
	}
	else
	{
		redirect('../notice.php?error=1');
	}
}
//
function edit()
{
	$notice_id = $_POST["id"];
	$query = query("SELECT  * FROM `notice` where notice_id='$notice_id'");
	$row = $query->row;
	$notice_title= $row["notice_title"];
	$notice_date = date("m/d/Y",strtotime($row["notice_date"]));
	$notice_description= $row["notice_description"];
	$image= $row["image"];
	$status= $row["status"];
	?>
	<form role="form" class="form-horizontal" method="post" action="functions/notice.php?do=update" enctype="multipart/form-data">
	<input type="hidden" name="notice_id" value="<?php echo $notice_id?>" />
	<input type="hidden" name="imageurl" value="<?php echo $image?>" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update Notice</h4>
	</div>
	<div class="modal-body">
		<div class="form-group clearfix">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <input type="text" class="form-control" required value="<?php echo $notice_title; ?>" name="notice_title" placeholder="">
            </div>
          </div>
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Date</label>
            <div class="col-md-6">
              <input type="text" class="form-control inline-date" required value="<?php echo $notice_date; ?>" name="date" placeholder="">
            </div>
          </div>
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Description</label>
            <div class="col-md-10">
              <textarea class="form-control" required name="notice_description" placeholder=""><?php echo $notice_description; ?></textarea>
            </div>
          </div>
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Image</label>
            <div class="col-md-10">
              <input name="image" type="file" data-show-upload="false" accept="image/*" class="fileinputt">
            </div>
          </div>
          <div class="form-group clearfix" style="display: none;">
            <label class="col-md-2 control-label">Status</label>
            <div class="col-md-10">
              <select class="form-control" name="status" placeholder="">
                <option value="1">Enable</option>
                <option value="0">Disable</option>
              </select>
            </div>
          </div>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-danger btn-sm button-continue-shopping" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary btn-sm button-checkout">Submit</button>
	</div>
	</form>
<script>
$(document).ready(function () {
	$('.inline-date').datepicker({
		format: "yyyy-mm-dd",
		autoclose: true,
		todayHighlight: true,
	});
	$(".fileinputt").fileinput({
		showCaption: false,
		uploadAsync: false,
		overwriteInitial: true,
		browseLabel: "Browse Image",
		browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
		showUpload: true,
		initialPreviewShowDelete: true,
		showUploadedThumbs: true,
		removeIcon: '<i class="fa fa-trash-o"></i> ',
		uploadUrl: "#",
		allowedFileExtensions: ["jpg", "png", "gif"],
		allowedFileExtensions: ["jpg", "png", "gif"],
		maxFilePreviewSize: 10240,
		initialPreview: [
		'../images/notice/<?php echo $image?>',
		],
		initialPreviewAsData: true,
		allowedFileExtensions: ["jpg", "png", "gif"],
		initialPreviewConfig: [ 
        {type: "image", size: 8000, caption: "<?php echo $image?>", url: "admin/functions/product.php?do=removeimg", key: <?php echo $notice_id?>},
        ],
		purifyHtml: true,
	});
});
</script>
<?php
}
//
function update()
{
	$notice_id = $_POST["notice_id"];
	$notice_title = mysqlirealescape($_POST["notice_title"]);
	$date = date("Y-m-d",strtotime($_POST["date"]));
	$imgname = $_FILES['image']['name'];
	$notice_description = mysqlirealescape($_POST["notice_description"]);
	$status = $_POST["status"];
	//
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
        $image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/notice/".$image);
		$thumbimg = "../../images/notice/".$image;
        $thumbcrop = thumbnail_box("../../images/notice/$image",$thumbimg,400,300);
        $largecrop = thumbnail_box("../../images/notice/$image",$thumbimg,1000,400);
	}
	else
	{
		$image = $_POST["imageurl"];
	}
	//
	$query = query("update `notice` set `notice_title`='$notice_title',image='$image',notice_description='$notice_description',notice_date=now(),`status`='$status',notice_date='$date' where notice_id='$notice_id'");
	if($query==1)
	{	
		redirect('../notice.php?msg=done');
	}
	else
	{
		redirect('../notice.php?error=1');
	}
}
//
function delete()
{
	$notice_id = $_GET["id"];
	$query = query("DELETE FROM `notice` WHERE notice_id='$notice_id'");
	if($query==1)
	{
		redirect('../notice.php?msg=done');
	}
	else
	{
		redirect('../notice.php?error=1');
	}
}
//

?>