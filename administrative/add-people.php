<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Add new People";
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
					<form id="upform" action="functions/members.php?do=add" onsubmit="return profileupdate()" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h4 class="pull-left"><span class="fa fa-plus"></span> Add new People</h4>
                                    <div class="pull-right">
									<a href="view-people.php" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-arrow-left"></i> Back</a>									
									</div>
                                </div>
                                <div class="panel-body form-group-separated">
									<div class="form-group">
                                        <label class="col-md-4 col-xs-5 control-label">People Name</label>
                                        <div class="col-md-5 col-xs-12">
                                            <input type="text" name="name" required class="form-control">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 col-xs-5 control-label">Profile Photo</label>
                                        <div class="col-md-4 col-xs-12">
                                            <input type="file" name="photo" class="form-control pfileinput">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-4 col-xs-5 control-label">Designation</label>
                                        <div class="col-md-5 col-xs-12">
                                            <input type="text" name="designation" class="form-control">
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
	$(".pfileinput").fileinput({
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
		//initialPreview: [
		//'assets/images/.jpg',
		//],
		//initialPreviewAsData: true,
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
function check_mem(element)
{
	$(".error").html("Loading...");
	$.ajax({
		url:'functions/members.php?do=check_mem',
		type:'post',
		data:'mem_id='+element+'&id=',
		success:function(msg)
		{
			if(msg==1)
			{
				$("input[name='mem_id']").val('');
				$(".error").html("<label class='alert alert-danger'><i class='fa fa-times'></i> "+element+" member id is not available</label>");
			}
			else
			{
				$(".error").html("<label class='alert alert-success'><i class='fa fa-check'></i> "+element+" member id is available</label>");
			}
		}
	})
}
</script>
