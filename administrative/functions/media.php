<?php
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function show()
{
	$query = query("SELECT `alb_id`, gal_img_name,`alb_title` FROM `album` left join gallery on alb_id=gal_alb_id WHERE `section_id`='1' group by alb_id");
	$num = $query->num_rows;
	if($num!=0)
	{
		foreach($query->rows as $rows)
		{
		?>
		<div class="col-sm-6 col-lg-3 col-md-4 mobiles">
			<div class="product-list-box thumb">
				<?php
				if($rows["gal_img_name"]!="")
				{
				?>
				<a href="album-details.php?id=<?php echo $rows["alb_id"]?>&dr=<?php echo base64_encode('media')?>" class="image-popup" title="<?php echo $rows["alb_title"]?>">
					<img src="../uploads/media/thumb/<?php echo $rows["gal_img_name"]?>" class="thumb-img" alt="<?php echo $rows["alb_title"]?>">
				</a>
				<?php
				}
				else
				{
				?>
				<a href="album-details.php?id=<?php echo $rows["alb_id"]?>&dr=<?php echo base64_encode('media')?>" class="image-popup" title="<?php echo $rows["alb_title"]?>">
					<img src="../images/members/photos/thumb/blank_person.png" class="thumb-img" alt="<?php echo $rows["alb_title"]?>">
				</a>
				<?php
				}
				?>
				<div class="product-action">
					<a onclick="edit('<?php echo base64_encode($rows["alb_id"])?>')" href="#edit" data-toggle="modal" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
					<a href="javascript:;" class="btn btn-danger btn-sm" onclick="delete_mem('<?php echo base64_encode($rows["alb_id"])?>')"><i class="md md-close"></i></a>
				</div>
				<div class="detail">
					<h4 class="m-t-0"><a href="gallery-details.php?aid=<?php echo $rows["alb_title"]?>&dr=<?php echo base64_encode('media')?>" class="text-dark"><?php echo $rows["alb_title"]?></a> </h4>
				</div>
			</div>
		</div>
		
		<?php
		}
	}
	else
	{
		echo '<p class="alert alert-warning">There is no <strong>media</strong></p>';
	}
}
function add()
{
	$section_id = $_POST['section_id'];
	$alb_title = mysqlirealescape($_POST['alb_title']);
	$query = query("insert into album set section_id='$section_id',alb_title='$alb_title'");
	echo 1;
}
function update()
{
	$id = base64_decode($_POST["id"]);
	$alb_title = mysqlirealescape($_POST['alb_title']);
	$query = query("update album set alb_title='$alb_title' where alb_id='$id'");
	echo 1;
}
function editform()
{
	$id = base64_decode($_POST["id"]);
	$query = query("select alb_title from album where alb_id='$id'");
	$row = $query->row;
?>
<form role="form" id="form2" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return forminput('form2')" action="functions/media.php?do=update">
<input type="hidden" name="id" value="<?php echo base64_encode($id)?>" />
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Update Media</h4>
</div>
<div class="modal-body">
    <div class="form-group clearfix">
		<label class="col-md-3 control-label">Media Title</label>
		<div class="col-md-9">
			
			<input type="text" name="alb_title" class="form-control" value="<?php echo $row["alb_title"]?>">
			</p>
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
function delete()
{
	$id = base64_decode($_POST["id"]);
	$query = query("delete from album where alb_id='$id'");
	if($query==1)
	{
		$del2 = query("DELETE FROM `gallery` WHERE `gal_alb_id`='$id'");
		echo 1;
	}
	else
	{
		echo 0;
	}
}

//
?>