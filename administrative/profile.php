<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Profiles";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$query = query("SELECT `fullname` FROM `admin` WHERE adminid=$userid");
$row = $query->row;
$name = $row["fullname"];
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

						<div class="col-md-3 col-sm-4 col-xs-5">                           
                            
						<div class="panel panel-default">                                
							<div class="panel-body">
								<h3><span class="fa fa-user"></span> <?php echo $name?></h3>
								<p></p>
								<div class="text-center" id="user_image">
									<img src="assets/images/users/<?php echo $userid?>.jpg" class="img-thumbnail">
								</div>                                    
							</div>
							<div class="panel-body form-group-separated">
								
								<div class="form-group">                                        
									<div class="col-md-12 col-xs-12">
										<a href="#" class="btn btn-primary btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_photo">Change Photo</a>
									</div>
								</div>
								
								
							</div>
						</div>
	
					</div>
					<form id="upform" action="functions/profile.php?do=update" onsubmit="return profileupdate()" method="post" class="form-horizontal">
					<div class="col-md-9 col-sm-8 col-xs-7">

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3><span class="fa fa-pencil"></span> Profile</h3>
                                    
                                </div>
                                <div class="panel-body form-group-separated">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Name</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="text" name="name" required value="<?php echo $name?>" class="form-control">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Old Password</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="password"  name="oldpass" placeholder="Leave empty if you do not wish to update password" class="form-control">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Password</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="password"  name="newpass" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-5 control-label">Re-enter Password</label>
                                        <div class="col-md-9 col-xs-7">
                                            <input type="password"  name="newpass2" class="form-control">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="col-md-12 col-xs-5">
                                            <button type="submit" class="btn btn-primary btn-rounded pull-right">Save</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
						</form>

                </div>
                <!-- end row -->
				
					<div class="modal animated fadeIn" id="modal_change_photo" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post" action="functions/profile.php?do=changephoto">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Change photo</h4>
                    </div>                    
                    <div class="modal-body text-center">
                        <div class="clearfix">
						<input name="image" type="file" required data-show-upload="false" accept="image/*" class="file-loading pfileinput">   
                        </div>						
                    </div>                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Accept</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
				</form>
                </div>
            </div>
        </div>
				
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
		browseLabel: "Browse Document",
		browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
		showUpload: true,
		initialPreviewShowDelete: true,
		showUploadedThumbs: true,
		removeIcon: '<i class="fa fa-trash-o"></i> ',
		uploadUrl: "#",
		allowedFileExtensions: ["jpg"],
		maxFilePreviewSize: 10240,
		initialPreview: [
		'assets/images/users/<?php echo $userid?>.jpg',
		],
		initialPreviewAsData: true,
	});
});
function profileupdate()
{
	form = $("#upform");
	data = form.serialize();
	$.ajax({
		type:'post',
		url:$(form).attr("action"),
		data:data,
		success: function(msg)
		{
			if(msg==1)
			{
				alert("Update done");
				window.location="";
			}
			else
			{
				alert(msg);
			}
		}
	});
	return false;
}
</script>
