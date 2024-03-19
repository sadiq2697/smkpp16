<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Album Details";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$gal_id = $_GET["id"];
echo $gal_id;
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
					<input type="hidden" name="purl"  value="<?php echo base64_encode($profile)?>" />
					<input type="hidden" name="curl"  value="<?php echo base64_encode($cover)?>" />
					<div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h4 class="pull-left"><span class="ti-image"></span> View Album Details</h4>
									<div class='pull-right'>
									<a href="#add" data-toggle="modal" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-plus"></i> Add new Albums</a>									
									</div>
                                </div>
                                <div class="panel-body form-group-separated" id="show"></div>
                            </div>

                        </div>
						</form>

                </div>
                <!-- end row -->
				<?php require_once("common/footer.inc.php") ?>


            </div>
			</div>
			</div>
        </div>
<div id="add" class="modal" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<form role="form" id="addform" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return forminput('addform')" action="functions/album-details.php?do=add">
<input type="hidden" name="mid" value="<?php echo base64_encode($gal_id)?>" />
<input type="hidden" name="dir" value="<?php echo $_GET["dr"]?>" />
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new Photos</h4>
</div>
<div class="modal-body">
    <div class="form-group clearfix">
		<label class="col-md-3 control-label">Photos</label>
		<div class="col-md-9">
			
			<input name="img_name[]"  accept="image/*" multiple type="file" data-show-upload="false" class="file-loading mfileinput">
			<p style="margin: 5px 0 5px 5px;"><strong>Example :</strong> <br>
			Press CTRL to select multiple<br />
			Max. image size=1MB (1024KB)<br />
			Max. image dimention=1024(W) X 768(H)<br />
			Supported image type=jpg/jpeg
			</p>
		</div>
	</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger button-continue-shopping" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary button-checkout">Submit</button>
</div>
</form>
</div>
</div>
</div>

<div id="edit" class="modal" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content" id="editdiv">

</div>
</div>
</div>


<?php
require_once("footer.php");
?>
<script>
$(document).ready(function() {
show();
$(".mfileinput").fileinput({
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
	allowedFileExtensions: ["jpg"],
});

});
function show()
{
	$("#show").html("<center>Loading..</center>");
	$.ajax({
		url:'functions/album-details.php?do=show',
		type:'post',
		data:'mid=<?php echo base64_encode($gal_id)?>&dir=<?php echo $_GET["dr"]?>',
		success:function(data)
		{
			$("#show").html(data);
		}
	})
}
function forminput(id)
{
	$("button[type='submit']").text("Please wait while uploading photos...");
	$("button[type='submit']").attr("disabled","true");
	$(".msg").html("loading...");
    $.ajax({
		url: $("#"+id).attr("action"), 
		type: "POST",             
		data: new FormData($("#"+id)[0]),
        async: true,
		contentType: false,       
		cache: false,             
		processData:false, 
		success: function(data) {
			if(data==1)
			{
				$("[data-dismiss=modal]").trigger({ type: "click" });
				show();
				$("button[type='submit']").text("Submit");
				$("button[type='submit']").removeAttr("disabled");
			}
			else
			{
				$("button[type='submit']").text("Submit");
				$("button[type='submit']").removeAttr("disabled");
			}
		}
    });
    return false;

}
function delete_mem(id)
{
	x = confirm("Are you sure want to delete");
	if(x==true)
	{
		$.ajax({
			url:'functions/album-details.php?do=delete',
			type:'post',
			data:'id='+id,
			success:function(msg)
			{
				show();
			}
		});
	}
}
</script>
