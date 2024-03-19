<?php
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
//
function getfolder($id)
{
	$folder = "";
	$query = query("select folder from home_sections where id='$id'");
	$num = $query->num_rows;
	if($num!=0)
	{
		$row = $query->row;
		$folder = $row["folder"];
	}
	return $folder;
}
//
function add()
{
	$section_id = mysqlirealescape($_POST["section_id"]);
	$title = mysqlirealescape($_POST["title"]);
	$link = mysqlirealescape($_POST["link"]);
	$image = mysqlirealescape($_FILES["image"]["name"]);
	$iframe = mysqlirealescape($_POST["iframe"]);
    $description = mysqlirealescape($_POST["description"]);
	$folder = getfolder($section_id);
	if(!empty($image))
	{
		$path = '../../uploads/';
		if (!file_exists($path.$folder)) {
			mkdir($path.$folder, 0777, true);
			mkdir($path.$folder.'/thumb/', 0777, true);
		}
		$ptxt = pathinfo($image,PATHINFO_EXTENSION);
		$pname = basename($image,$ptxt);
		$image = uniqid(time()).'.'.$ptxt;
		$ptemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($ptemp,$path.$folder.'/'.$image);
		$pthumb = $path.$folder.'/'.$image;
		$pcrop = thumb_crop($path.$folder.'/thumb/'.$image,$pthumb,300,300);
	}
	$query = query("INSERT INTO `home_section_contents` set `section_id`='$section_id', `title`='$title', `link`='$link', `img`='$image', `iframe`='$iframe', `description`='$description'");
	if($query==1)
	{
		redirect("../home-contents.php?id=$section_id&msg=done");
	}
	else
	{
		redirect('../home-contents.php?id=$section_id&error=1');
	}
}
//
function edit()
{
	
	$id = $_POST["id"];
	$section_id = $_POST["section_id"];
	$path = '../uploads/';
	$folder = getfolder($section_id);
	$query = query("SELECT  `title`, `description`, `link`, `img`, `iframe` FROM `home_section_contents` where id='$id'");
	$row = $query->row;
	$title= $row["title"];
	$description= $row["description"];
	$link= $row["link"];
	$img= $row["img"];
	$iframe= $row["iframe"];
	?>
	<form role="form" class="form-horizontal" method="post" action="functions/home-contents.php?do=update" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id?>" />
	<input type="hidden" name="section_id" value="<?php echo $section_id?>" />
	<input type="hidden" name="img" value="<?php echo $img?>" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update cms content</h4>
	</div>
	<div class="modal-body">
			<div class="form-group">
				<label class="col-md-3 control-label">Title</label>
				<div class="col-md-6">
					<input type="text" name="title" value="<?php echo $title?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Link</label>
				<div class="col-md-6">
					<input type="text" name="link" value="<?php echo $link?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Image</label>
				<div class="col-md-6">
					<input type="file" name="image" class="form-control imgfile">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Iframe</label>
				<div class="col-md-6">
					<textarea name="iframe" placeholder="" class="form-control"><?php echo $iframe?></textarea>
				</div>
			</div>
			<div class="form-group">
					<textarea name="description" class="summernotee" placeholder=""><?php echo $description?></textarea>
			</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger button-continue-shopping" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary button-checkout">Submit</button>
</div>
</form>
<script>
$(".imgfile").fileinput({
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
	allowedFileExtensions: ["jpg"],
	maxFilePreviewSize: 10240,
	initialPreview: [
	'<?php echo $path.$folder.'/'.$img?>',
	],
	initialPreviewAsData: true,
});
</script>
	<?php
}
//
function update()
{
	$section_id = $_POST["section_id"];
	$id = $_POST["id"];
	$title = mysqlirealescape($_POST["title"]);
	$link = mysqlirealescape($_POST["link"]);
	$image = mysqlirealescape($_FILES["image"]["name"]);
	$iframe = mysqlirealescape($_POST["iframe"]);
    $description = mysqlirealescape($_POST["description"]);
	$folder = getfolder($section_id);
	if(!empty($image))
	{
		$path = '../../uploads/';
		if (!file_exists($path.$folder)) {
			mkdir($path.$folder, 0777, true);
			mkdir($path.$folder.'/thumb/', 0777, true);
		}
		$ptxt = pathinfo($image,PATHINFO_EXTENSION);
		$pname = basename($image,$ptxt);
		$image = uniqid(time()).'.'.$ptxt;
		$ptemp = $_FILES['image']['tmp_name'];
		move_uploaded_file($ptemp,$path.$folder.'/'.$image);
		$pthumb = $path.$folder.'/'.$image;
		$pcrop = thumb_crop($path.$folder.'/thumb/'.$image,$pthumb,300,300);
	}
	else
	{
		$image = $_POST["img"];
	}
	$query = query("update `home_section_contents` set `title`='$title', `link`='$link', `img`='$image', `iframe`='$iframe', `description`='$description' where id='$id'");
	if($query==1)
	{
		redirect("../home-contents.php?id=$section_id&msg=done");
	}
	else
	{
		redirect('../home-contents.php?id=$section_id&error=1');
	}
}
//
function delete()
{
	$id = $_GET["id"];
	$section_id = $_GET["section_id"];
	$query = query("DELETE FROM `home_section_contents` WHERE id='$id'");
	if($query==1)
	{
		redirect("../home-contents.php?id=$section_id&msg=done");
	}
	else
	{
		redirect('../home-contents.php?id=$section_id&error=1');
	}
}
//

?>