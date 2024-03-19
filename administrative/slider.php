<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Slider";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$query = query("SELECT `slider_id`, `image`, `description`, `link`,sort, `status` FROM `slider` order by sort");
?>
        <!-- Navigation Bar-->
        <?php require_once("common/header.inc.php");?>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">


                        <div class="row">

						<div class="col-lg-12">

							<div class="portlet"><!-- /primary heading -->
								<div class="portlet-heading">
									<h3 class="portlet-title text-dark text-uppercase">
										View Slider
									</h3>
									<div class="portlet-widgets">
									<a href="#add" data-toggle="modal" class="btn btn-primary btn-xs"><i class="ion-plus-round"></i> Add new Slider	</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div id="portlet2" class="panel-collapse collapse in">
									<div class="portlet-body">
										<div class="">
											<table class="table">
												<thead>
													<tr>
														<th>Slider</th>
														<th>Description</th>
														<th>Link</th>
														<th>Sort</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												<?php 
												foreach($query->rows as $rows)
												{
													$slider_id = $rows["slider_id"];
													$image = $rows["image"];
													$description = $rows["description"];
													$link = $rows["link"];
													$sort = $rows["sort"];
													$status = $rows["status"];
													if($status==1)
													{
														$status = '<span class="label label-success">Enabled</span>';
													}
													else
													{
														$status = '<span class="label label-danger">Disabled</span>';
													}
												?>
												<tr>
												<td><img src="../images/slider/<?php echo $image?>" width="400px" alt="<?php echo $sort?>" /></td>
												<td><?php echo $description?></td>
												<td><?php echo $link?></td>
												<td><?php echo $sort?></td>
												<td><?php echo $status?></td>
												<td><a onclick="edit('<?php echo $slider_id?>')" class="btn btn-warning waves-effect waves-light btn-sm" href="#edit-modal" data-toggle="modal">Edit</a> <a class="btn btn-primary waves-effect waves-light btn-sm" onclick="return confirm('Are you sure want to delete?')" href="functions/slider.php?do=delete&id=<?php echo $slider_id?>">Delete</a></td>
												</tr>
												<?php
												}
												?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div><!-- end col -->

                </div>
                <!-- end row -->
				
				<?php require_once("common/footer.inc.php")?>


            </div>
        </div>

<div id="add" class="modal" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<form role="form" class="form-horizontal" method="post" action="functions/slider.php?do=add" enctype="multipart/form-data">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new Custom Html</h4>
</div>
<div class="modal-body">
		
			<div class="form-group">
				<label class="col-md-3 control-label">Slider</label>
				<div class="col-md-8">
					<input name="image" type="file" required data-show-upload="false" accept="image/*" class="file-loading mfileinput">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Link</label>
				<div class="col-md-8">
					<input name="link" type="text" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Sort</label>
				<div class="col-md-4">
					<input name="sort" type="text" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Status</label>
				<div class="col-md-4">
					<select class="form-control" name="status" placeholder="">
					<option value="1">Enable</option>
					<option value="0">Disable</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Description</label>
				<div class="col-md-8">
					<textarea class="form-control" name="description"></textarea>
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
</div>
<div id="edit-modal" class="modal" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content" id="ajaxdiv">
		
</div>
</div>
</div>
<?php
require_once("footer.php");
?>
<script>
$(document).ready(function () {
'use strict';
$("#datatable-buttons").length && $("#datatable-buttons").DataTable({
	dom: "Bfrtip",
	buttons: [
	{
		extend: "csv",
		text:'Export to CSV',
		className: "btn-sm"
	}, {
		extend: "excel",
		className: "btn-sm"
	},],
	language: {
		paginate: {
		  next: '<i class="fa fa-arrow-right">', // or '→'
		  previous: '<i class="fa fa-arrow-left">' // or '←' 
		}
	},
	"drawCallback": function( settings ) {
        $(".edit").click(function(){
			// Instantiate new modal
		});
    }
});
});
function edit(id)
{
	$.ajax({
		type:'post',
		url:'functions/slider.php?do=edit',
		data:'id='+id,
		success:function(msg)
		{
			$("#ajaxdiv").html(msg);
		}
	});
}
</script>
