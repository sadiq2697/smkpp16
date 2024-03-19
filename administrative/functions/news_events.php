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
	$blog_category_id = '';
	$title = mysqlirealescape($_POST["title"]);
	$imgname = $_FILES['image']['name'];
	$description = mysqlirealescape($_POST["blog"]);
	$sort = $_POST["sort"];
	$status = $_POST["status"];
	//
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
        $image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/news_events/".$image);
		$thumbimg = "../../images/news_events/".$image;
       
        $largecrop = thumbnail_box("../../images/news_events/$image",$thumbimg,1000,400);
	}
	//
	$query = query("INSERT INTO `news_events`(blog_category_id,`title`,image,description,sort, `status`) VALUES ('$blog_category_id','$title','$image','$description','$sort','$status')");
	if($query==1)
	{	
		redirect('../news_events.php?msg=done');
	}
	else
	{
		redirect('../news_events.php?error=1');
	}
}
//
function edit()
{
	$blog_id = $_POST["id"];
	$query = query("SELECT  `title`,`image`, `description`, sort,status FROM `news_events` where blog_id='$blog_id'");
	$row = $query->row;
	$title= $row["title"];
	$image= $row["image"];
	$description= $row["description"];
	$sort = $row["sort"];
	$status= $row["status"];
	?>
	<form role="form" class="form-horizontal" method="post" action="functions/news_events.php?do=update" enctype="multipart/form-data">
	<input type="hidden" name="blog_id" value="<?php echo $blog_id?>" />
	<input type="hidden" name="imageurl" value="<?php echo $image?>" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update News & Events</h4>
	</div>
	<div class="modal-body">
			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Title</label>
				<div class="col-md-8">
					<input type="text" class="form-control" required name="title" value="<?php echo $title?>" placeholder="">
				</div>
			</div>
			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Image</label>
				<div class="col-md-8">
					<input name="image" type="file" accept="image/*"  class="file-loading fileinputt">
				</div>
			</div>
			<div class="form-group clearfix">
				<textarea name="blog" class="summernote"><?php echo $description?></textarea>
			</div>
			<div class="form-group clearfix" style="display: none;">
				<label class="col-md-4 control-label">Sort</label>
				<div class="col-md-4">
					<input name="sort" type="text"  value="<?php echo $sort?>" class="form-control">
				</div>
			</div>
			<div class="form-group clearfix" style="display: none;">
				<label class="col-md-4 control-label">Status</label>
				<div class="col-md-4">
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
<script>
$(document).ready(function () {
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
		'../images/news_events/<?php echo $image?>',
		],
		initialPreviewAsData: true,
		allowedFileExtensions: ["jpg", "png", "gif"],
		initialPreviewConfig: [ 
        {type: "image", size: 8000, caption: "<?php echo $image?>", url: "admin/functions/product.php?do=removeimg", key: <?php echo $blog_id?>},
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
	$blog_id = $_POST["blog_id"];
	$blog_category_id = '';
	$title = mysqlirealescape($_POST["title"]);
	$imgname = $_FILES['image']['name'];
	$blog = mysqlirealescape($_POST["blog"]);
	$sort = $_POST["sort"];
	$status = $_POST["status"];
	//
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
        $image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/news_events/".$image);
		$thumbimg = "../../images/news_events/".$image;
        $largecrop = thumbnail_box("../../images/news_events/$image",$thumbimg,1000,400);
	}
	else
	{
		$image = $_POST["imageurl"];
	}
	//
	$query = query("update `news_events` set blog_category_id='0',`title`='$title',image='$image',description='$blog',sort=$sort,`status`='$status' where blog_id='$blog_id'");
	if($query==1)
	{	
		redirect('../news_events.php?msg=done');
	}
	else
	{
		redirect('../news_events.php?error=1');
	}
}
//
function delete()
{
	$blog_id = $_GET["id"];
	$query = query("DELETE FROM `news_events` WHERE blog_id='$blog_id'");
	if($query==1)
	{
		redirect('../news_events.php?msg=done');
	}
	else
	{
		redirect('../news_events.php?error=1');
	}
}
//

?>