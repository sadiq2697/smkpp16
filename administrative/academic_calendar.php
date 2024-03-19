<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Academic Calendar";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$query = query("SELECT `id`, `title`,description, `date`, `status` FROM `events_calendar` WHERE 1");
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
										View Academic Calendar
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
														<th>Event Title</th>
														<th>Description</th>
														<th>Date</th>
														<th>Status</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
												<?php
												foreach($query->rows as $rows)
												{
													$id= $rows["id"];
													$title= $rows["title"];
													$date= date("d-M-Y",strtotime($rows["date"]));
													$status = $rows["status"];
													if($status==1)
													{
														$status = "<label class='label label-success'>Enabled</label>";
													}
													else
													{
														$status = "<label class='label label-danger'>Disabled</label>";
													}
												?>
													<tr>									
														<td><?php echo $title?></td>
														<td><?php echo $rows["description"]; ?></td>
														<td><?php echo $date?></td>
														<td><?php echo $status?></td>
														<td  class="col-md-2">
														<div class="btn-group">
															<button type="button" class="btn btn-primary btn-xs waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Action</button>
															<button type="button" class="btn btn-primary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
															<ul class="dropdown-menu drop-menu-right" role="menu">
																<li><a onclick="edit('<?php echo $id?>')" class="edit" href="#edit" data-toggle="modal"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
																<li><a onclick="return confirm('Are you sure want to delete')" href="functions/academic_calendar.php?do=delete&id=<?php echo $id?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
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
<div class="modal-dialog">
<div class="modal-content">
<form role="form" class="form-horizontal" method="post" action="functions/academic_calendar.php?do=add" enctype="multipart/form-data">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new Event</h4>
</div>
<div class="modal-body">
	<div class="form-group clearfix">
		<label class="col-md-2 control-label">Event Title</label>
		<div class="col-md-10">
			<input type="text" class="form-control" required name="title" placeholder="">
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label class="col-md-2 control-label">Description</label>
		<div class="col-md-10">
			<textarea type="text" rows="4" class="form-control" name="description" placeholder=""></textarea>
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label class="col-md-2 control-label">Date</label>
		<div class="col-md-6">
			<input type="text" class="form-control inline-date" required name="date" placeholder="">
		</div>
	</div>
	
	<div class="form-group clearfix">
		<label class="col-md-2 control-label">Status</label>
		<div class="col-md-6">
			<select class="form-control" name="status" placeholder="">
			<option value="1">Enable</option>
			<option value="0">Disable</option>
			</select>
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
<div class="modal-dialog">
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
$('.inline-date').datepicker({		
	format: "dd-mm-yyyy",		
	autoclose: true,		
	todayHighlight: true,	
});
});
function edit(id)
{
	$.ajax({
		type:'post',
		url:'functions/academic_calendar.php?do=edit',
		data:'id='+id,
		success:function(msg)
		{
			$("#ajaxdiv").html(msg);
			$('.inline-date').datepicker({		
				format: "dd-mm-yyyy",		
				autoclose: true,		
				todayHighlight: true,	
			});
		}
	});
}
</script>
