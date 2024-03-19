<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Pentadbir";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$query = query("SELECT * FROM `pentadbir` WHERE 1");
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
										View Alumini Corner
									</h3>
									<div class="portlet-widgets">
										<a href="#add" data-toggle="modal" class="btn btn-primary btn-xs"><i class="ion-plus-round"></i> Add new</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div id="portlet2" class="panel-collapse collapse in">
									<div class="portlet-body">
										<div class="">
											<table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer  responsive">
												<thead>
													<tr>
														<th>Image</th>
														<th>Name</th>
														<th>Designation</th>
														<th>Email</th>
																								
													
														
														<th></th>
													</tr>
												</thead>
												<tbody>
												<?php
												foreach($query->rows as $rows)
												{
													$pentadbir_id= $rows["pentadbir_id"];
													$image= $rows["image"];
													$name= $rows["name"];
													$designation = $rows["designation"];
													$details = $rows["details"];
												?>
													<tr>
														
														<td><img src="../images/pentadbir/<?php echo $image?>" width="70px" alt="<?php echo $name?>" /></td>	
														<td><?php echo $name?></td>
														<td><?php echo $designation?></td>									
														<td><div style="max-height:200px;overflow:auto;max-width:350px"><?php echo $details?></div></td>
													
														<td  class="col-md-2">
														<div class="btn-group">
															<button type="button" class="btn btn-primary btn-xs waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Action</button>
															<button type="button" class="btn btn-primary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
															<ul class="dropdown-menu drop-menu-right" role="menu">
																<li><a onclick="edit('<?php echo $pentadbir_id?>')" class="edit" href="#edit" data-toggle="modal"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
																<li><a onclick="return confirm('Are you sure want to delete')" href="functions/pentadbir.php?do=delete&id=<?php echo $pentadbir_id?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
															</ul>
														</div>
														</td>
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
				
				<?php require_once("common/footer.inc.php") ?>


            </div>
        </div>

<div id="add" class="modal" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<form role="form" class="form-horizontal" method="post" action="functions/pentadbir.php?do=add" enctype="multipart/form-data">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add Alumini Corner</h4>
</div>
<div class="modal-body">

	<div class="form-group clearfix">
				<label class="col-md-1 control-label">Image</label>
				<div class="col-md-10">
					<input name="image" type="file" required data-show-upload="false" accept="image/*" class="fileinput">
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="col-md-1 control-label">Name</label>
				<div class="col-md-10">
					<input type="text" class="form-control" required name="name" placeholder="">
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="col-md-1 control-label">Designation</label>
				<div class="col-md-10">
					<input type="text" class="form-control" required name="designation" placeholder="">
				</div>
			</div>
			
			<div class="form-group clearfix">
				<label class="col-md-1 control-label">Email</label>
					<div class="col-md-10">
		<!-- 		<textarea name="email" class="summernote"></textarea> -->
				<input type="text" class="form-control" required name="email" placeholder="">
			</div>

			</div>
			
			
			
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger btn-sm button-continue-shopping" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary btn-sm button-checkout">Submit</button>
</div>
</form>
</div>
</div>
</div>

<div id="edit" class="modal" style="display: none;">
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
		url:'functions/pentadbir.php?do=edit',
		data:'id='+id,
		success:function(msg)
		{
			$("#ajaxdiv").html(msg);
			$('.summernote').summernote({
				height: 250,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
		}
	});
}
</script>
