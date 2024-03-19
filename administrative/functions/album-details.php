<?php
error_reporting(0);
ini_set('memory_limit', '-1');
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);
//
function show()
{
	$mem_id = base64_decode($_POST["mid"]);
	$query = query("SELECT `gal_id`, `gal_img_name`, `gal_alb_cover` FROM `gallery` WHERE gal_alb_id='$mem_id'");
	$num = $query->num_rows;
	$dir = base64_decode($_POST["dir"]);
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
				<a href="../images/<?php echo $dir?>/<?php echo $rows["gal_img_name"]?>" class="image-popup" title="<?php echo $mem_id?>">
					<img src="../images/<?php echo $dir?>/thumb/<?php echo $rows["gal_img_name"]?>" class="thumb-img" alt="<?php echo $mem_id?>">
				</a>
				<?php
				}
				else
				{
				?>
				<a href="../images/<?php echo $dir?>/<?php echo $rows["gal_img_name"]?>" class="image-popup" title="<?php echo $mem_id?>">
					<img src="../images/<?php echo $dir?>/thumb/<?php echo $rows["gal_img_name"]?>" class="thumb-img" alt="<?php echo $mem_id?>">
				</a>
				<?php
				}
				?>
				<div class="product-action">
					<a href="javascript:;" class="btn btn-danger btn-sm" onclick="delete_mem('<?php echo base64_encode($rows["gal_id"])?>')"><i class="md md-close"></i></a>
				</div>
			</div>
		</div>
		<?php
		}
	}
	else
	{
		echo '<p class="alert alert-warning">There is no <strong>photos</strong> on this account</p>';
	}
}
function add()
{
	$mem_id = base64_decode($_POST["mid"]);
	$dir = base64_decode($_POST["dir"]);
	$img_name = $_FILES['img_name']['name'];
	$count=0;
	foreach ($img_name as $imagename) 
	{
		if(!empty($imagename))
		{
			$ext = pathinfo($imagename,PATHINFO_EXTENSION);
			$filename = basename($imagename,$ext);
			$images = uniqid(time()).'.'.$ext;
			$tmp=$_FILES['img_name']['tmp_name'][$count];
			$count=$count + 1;
			$query = query("insert into gallery set gal_alb_id='$mem_id',`gal_img_name`='$images'");
			if($query==1)
			{
				move_uploaded_file($tmp,"../../images/gallery/".$images);
				$thumbimage = "../../images/gallery/".$images;
				$thumbcropp = thumbnail_box("../../images/gallery/thumb/$images",$thumbimage,360,270);
				//$largecropp = thumbnail_box("../../images/gallery/gallery/$images",$thumbimage,600,600);
			}
		}			
	}
	echo 1;
}
function delete()
{
	$id = base64_decode($_POST["id"]);
	$query = query("delete from gallery where gal_id='$id'");
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
?>