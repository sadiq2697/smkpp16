<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Home Contents";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
function getfolder($id)
{
	$folder = "";
	$query = query("select folder from home_sections where id='$id'");
	$num = $query->num_rows;
	if($num!=0)
	{
		$row = $query->row;
		$folder = $row["folder"];
	}
	return $folder;
}
$section_id = $_GET["id"];
$path = '../uploads/';
$folder = getfolder($section_id);
$query = query("SELECT `id`,`title`, `description`, `link`, `img`, `iframe` FROM `home_section_contents` WHERE `section_id`='$section_id'");
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
										View Home Contents
									</h3>
									<div class="portlet-widgets">
										<a href="home-sections.php" class="btn btn-primary btn-xs"><i class="ion-arrow-right-round"></i> Back</a>
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
														<th>Title</th>
														<th>Description</th>
														<th>Link</th>
														<th>Image</th>
														<th>Iframe</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
												<?php
												foreach($query->rows as $rows)
												{
													$id= $rows["id"];
													$title = $rows["title"];
													$description = $rows["description"];
													$link = $rows["link"];
													$img = $rows["img"];
													$iframe = $rows["iframe"];
												?>
													<tr>
														<td><?php echo $title?></td>
														<td><?php echo $description?></td>
														<td><?php echo $link?></td>
														<td><img src="<?php echo $path.$folder.'/thumb/'.$img?>" width="100px" /></td>
														<td><?php echo $iframe?></td>
														<td>
														<div class="btn-group">
															<button type="button" class="btn btn-primary btn-xs waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Action</button>
															<button type="button" class="btn btn-primary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
															<ul class="dropdown-menu drop-menu-right" role="menu">
																<li><a onclick="edit('<?php echo $id?>')" class="edit" href="#edit-modal" data-toggle="modal"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
																<li><a onclick="return confirm('Are you sure want to delete')" href="functions/home-contents.php?do=delete&id=<?php echo $id?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
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
<div class="modal-dialog modal-lg">
<div class="modal-content">
<form role="form" class="form-horizontal" method="post" action="functions/home-contents.php?do=add" enctype="multipart/form-data">
<input type="hidden" name="section_id" value="<?php echo $section_id?>" />
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new Content</h4>
</div>
<div class="modal-body">
		
			<div class="form-group">
				<label class="col-md-3 control-label">Title</label>
				<div class="col-md-6">
					<input type="text" name="title" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Link</label>
				<div class="col-md-6">
					<input type="text" name="link" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Image</label>
				<div class="col-md-4">
					<input type="file" name="image" class="form-control mfileinput">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Iframe</label>
				<div class="col-md-6">
					<textarea name="iframe" placeholder="" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group">
					<textarea name="description" class="summernotee" placeholder=""></textarea>
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
$('.summernotee').summernote({
	height: 250,                 // set editor height
	minHeight: null,             // set minimum height of editor
	maxHeight: null,             // set maximum height of editor
	focus: false                 // set focus to editable area after initializing summernote
});
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
		url:'functions/home-contents.php?do=edit',
		data:'id='+id+"&section_id=<?php echo $section_id?>",
		success:function(msg)
		{
			$("#ajaxdiv").html(msg);
			$('.summernotee').summernote({
				height: 250,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
		}
	});
}
</script>
