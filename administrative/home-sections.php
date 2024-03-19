<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Home Sections";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$query = query("SELECT `id`, `section`, `folder` FROM `home_sections` order by section asc");
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
										View Home Sections
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
														<th>Sections</th>
														<th>Folder</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
												<?php
												foreach($query->rows as $rows)
												{
													$id= $rows["id"];
													$section = $rows["section"];
													$folder = $rows["folder"];
												?>
													<tr>
														<td  class="col-md-3"><?php echo $section?></td>
														<td  class="col-md-3"><?php echo $folder?></td>
														<td  class="col-md-2">
														<div class="btn-group">
															<button type="button" class="btn btn-primary btn-xs waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Action</button>
															<button type="button" class="btn btn-primary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
															<ul class="dropdown-menu drop-menu-right" role="menu">
																<li><a href="home-contents.php?id=<?php echo $id?>"><i class="fa fa-file-o fa-fw"></i> Manage Contents</a></li>
																<li><a onclick="edit('<?php echo $id?>')" class="edit" href="#edit-modal" data-toggle="modal"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
																<li><a onclick="return confirm('Are you sure want to delete')" href="functions/home-sections.php?do=delete&id=<?php echo $id?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
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
				
				<?php require_once("common/footer.inc.php")?>


            </div>
        </div>

<div id="add" class="modal" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form role="form" class="form-horizontal" method="post" action="functions/home-sections.php?do=add">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new Section</h4>
</div>
<div class="modal-body">
<div class="form-group">
	<label class="col-md-3 control-label">Section</label>
	<div class="col-md-9">
		<input type="text" class="form-control" name="section" placeholder="">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label">Folder</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="folder" placeholder="">
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
<div id="edit-modal" class="modal" style="display: none;">
<div class="modal-dialog modal-md">
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
		url:'functions/home-sections.php?do=edit',
		data:'id='+id,
		success:function(msg)
		{
			$("#ajaxdiv").html(msg);
		}
	});
}
</script>
