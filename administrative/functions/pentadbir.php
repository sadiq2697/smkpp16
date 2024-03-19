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
	$name = mysqlirealescape($_POST["name"]);
	$imgname = $_FILES['image']['name'];
	$designation = mysqlirealescape($_POST["designation"]);
	$details = $_POST["details"];
	//
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
        $image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/pentadbir/".$image);
		$thumbimg = "../../images/pentadbir/".$image;
       
        // $largecrop = thumbnail_box("../../images/pentadbir/$image",$thumbimg,1000,400);
	}
	//
	$query = query("INSERT INTO `pentadbir`(image,name,designation,details) VALUES ('$image','$name','$designation','$details')");
	if($query==1)
	{	
		redirect('../pentadbir.php?msg=done');
	}
	else
	{
		redirect('../pentadbir.php?error=1');
	}
}
//
function edit()
{
	$pentadbir_id = $_POST["id"];
	$query = query("SELECT  * FROM `pentadbir` where pentadbir_id='$pentadbir_id'");
	$row = $query->row;
	$image= $row["image"];
	$name= $row["name"];
	$designation= $row["designation"];
	$details = $row["details"];
	?>
	<form role="form" class="form-horizontal" method="post" action="functions/pentadbir.php?do=update" enctype="multipart/form-data">
	<input type="hidden" name="pentadbir_id" value="<?php echo $pentadbir_id?>" />
	<input type="hidden" name="imageurl" value="<?php echo $image?>" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update Alumini Corner</h4>
	</div>
	<div class="modal-body">

		<div class="form-group clearfix">
				<label class="col-md-4 control-label">Image</label>
				<div class="col-md-8">
					<input name="image" type="file" accept="image/*"  class="file-loading fileinputt">
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Name</label>
				<div class="col-md-8">
					<input type="text" class="form-control" required name="name" value="<?php echo $name?>" placeholder="">
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Designation</label>
				<div class="col-md-4">
					<input name="designation" type="text"  value="<?php echo $designation?>" class="form-control">
				</div>
			</div>
			

			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Email</label>
				<div class="col-md-4">
				<input name="details" type="text"  value="<?php echo $details?>" class="form-control">
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
		'../images/pentadbir/<?php echo $image?>',
		],
		initialPreviewAsData: true,
		allowedFileExtensions: ["jpg", "png", "gif"],
		initialPreviewConfig: [ 
        {type: "image", size: 8000, caption: "<?php echo $image?>", url: "admin/functions/product.php?do=removeimg", key: <?php echo $pentadbir_id?>},
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
	$pentadbir_id = $_POST["pentadbir_id"];
	$blog_category_id = '';
	$name = mysqlirealescape($_POST["name"]);
	$imgname = $_FILES['image']['name'];
	$designation = mysqlirealescape($_POST["designation"]);
	$details = $_POST["details"];
	//
	if(!empty($_FILES['image']['name']))
	{
		$imgext = pathinfo($imgname,PATHINFO_EXTENSION);
		$imgfilename = basename($imgname,$imgext);
        $image = uniqid(time()).'.'.$imgext;
		$imagetemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imagetemp,"../../images/pentadbir/".$image);
		$thumbimg = "../../images/pentadbir/".$image;
        $largecrop = thumbnail_box("../../images/pentadbir/$image",$thumbimg,1000,400);
	}
	else
	{
		$image = $_POST["imageurl"];
	}
	//
	$query = query("update `pentadbir` set `image`='$image',name='$name',designation='$designation',details='$details' where pentadbir_id='$pentadbir_id'");
	if($query==1)
	{	
		redirect('../pentadbir.php?msg=done');
	}
	else
	{
		redirect('../pentadbir.php?error=1');
	}
}
//
function delete()
{
	$pentadbir_id=$_GET["id"];
	$query = query("DELETE FROM `pentadbir` WHERE pentadbir_id='$pentadbir_id'");
	if($query==1)
	{
		redirect('../pentadbir.php?msg=done');
	}
	else
	{
		redirect('../pentadbir.php?error=1');
	}
}
//

?>