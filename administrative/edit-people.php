<?php
ob_start(); 
require_once("header.php");
if(isset($_GET["id"]))
{
	$id = base64_decode($_GET["id"]);
	$query = query("SELECT `people_id`, `name`, `photo`, `designation` FROM `people` WHERE people_id='$id'");
	$row = $query->row;
	$name = $row["name"];
	$photo = $row["photo"];
	$designation = $row["designation"];
}
else
{
	redirect("view-members.php");
}
$buffer=ob_get_contents();
ob_end_clean();
$title = "Update $name";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
?>


        <?php
		require_once("common/header.inc.php")
		?>
		<!-- Top Bar End -->
        <!-- Begin page -->
        <div class="wrapper">
            <!-- Left Sidebar End -->
		    <div class="content-page">
			<!-- Start content -->
			<div class="content">
            <div class="container">


                        <div class="row">
					<form id="upform" action="functions/members.php?do=update" onsubmit="return profileupdate()" method="post" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="id"  value="<?php echo base64_encode($id)?>" />
					<input type="hidden" name="purl"  value="<?php echo base64_encode($photo)?>" />
					<div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h4 class="pull-left"><span class="fa fa-refresh"></span> Update <?php echo $name?></h4>
                                    <div class="pull-right">
									<a href="view-people.php" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-arrow-left"></i> Back</a>									
									</div>
                                </div>
                                <div class="panel-body form-group-separated">
									<div class="form-group">
                                        <label class="col-md-4 col-xs-5 control-label">People Name</label>
                                        <div class="col-md-5 col-xs-12">
                                            <input type="text" name="name" required value="<?php echo $name?>" class="form-control">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 col-xs-5 control-label">Photo</label>
                                        <div class="col-md-4 col-xs-12">
                                            <input type="file" name="photo" class="form-control cfileinput">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 col-xs-5 control-label">Designation</label>
                                        <div class="col-md-4 col-xs-12">
                                            <input type="text" name="designation" required value="<?php echo $designation?>" class="form-control pfileinput">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="col-md-12 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-rounded pull-right">Submit</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
						</form>

                </div>
                <!-- end row -->
				<?php require_once("common/footer.inc.php")?>


            </div>
			</div>
			</div>
        </div>
<?php
require_once("footer.php");
?>
<script>
$(document).ready(function() {
	$(".cfileinput").fileinput({
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
		'../uploads/people/<?php echo $photo?>',
		],
		initialPreviewAsData: true,
	});
	$('.inline_date').datepicker(
	{
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		maxDate: 0,
		changeYear: true,
		showButtonPanel: true,
		yearRange: '1900:+0',
		dateFormat: 'dd/MM/yy',
		
	});
});
</script>
