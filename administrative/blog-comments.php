<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Blog Comments";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//

$query = query("SELECT `comment_id`,blogcomments.name,title, `userid`,customers.name as customer,type, `comment`,blogcomments.status, `datetime` FROM `blogcomments` left join customers on userid=customer_id left join blog on blog.blog_id=blogcomments.blog_id order by datetime desc");
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
										View Blog Comments
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
													<th>Blog</th>
													<th>User</th>
													<th>Comment</th>
													<th>Date</th>
													<th>Status</th>
													</tr>
												</thead>
												<tbody>
												<?php
												foreach($query->rows as $rows)
												{
													$comment_id = $rows["comment_id"];
													$title= $rows["title"];
													$user= $rows["customer"];
													$comment= $rows["comment"];									
													$date = date("d-M-Y",strtotime($rows["datetime"]));
													$status= $rows["status"];
													if($status==1)
													{
														$status = '<span class="label label-success">Enabled</span>';
													}
													else
													{
														$status = '<span class="label label-danger">Disabled</span>';
													}
													if($user=="")
													{
														$user = $rows["name"];
													}
												?>
													<tr>
														<td><?php echo $title?></td>
														<td><?php echo $user?></td>
														<td><div style="max-height:200px;overflow:auto;max-width:350px"><?php echo $comment?></div></td>
														<td><?php echo $date?></td>
														<td>
														<?php
														if($rows["status"]==0)
														{
														?>
														<a onclick="return confirm('Mark as Active?')" href="functions/blogcomments.php?do=status&id=<?php echo $comment_id?>&status=1" class="text-danger" title="Mark as Active"><b>Inctive</b></a>
														<?php
														}
														else
														{
														?>
														<a onclick="return confirm('Mark as Inactive?')" href="functions/blogcomments.php?do=status&id=<?php echo $comment_id?>&status=0" class="text-success" title="Mark as Inactive"><b>Active</b></a>
														<?php
														}
														?>
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
<form role="form" class="form-horizontal" method="post" action="functions/blog.php?do=add" enctype="multipart/form-data">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new Blog</h4>
</div>
<div class="modal-body">
			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Title</label>
				<div class="col-md-8">
					<input type="text" class="form-control" required name="title" placeholder="">
				</div>
			</div>
			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Image</label>
				<div class="col-md-8">
					<input name="image" type="file" required data-show-upload="false" accept="image/*" class="fileinput">
				</div>
			</div>
			<div class="form-group clearfix">
				<textarea name="blog" class="summernote"></textarea>
			</div>
			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Sort</label>
				<div class="col-md-4">
					<input name="sort" type="text" value="0" class="form-control">
				</div>
			</div>
			<div class="form-group clearfix">
				<label class="col-md-4 control-label">Status</label>
				<div class="col-md-4">
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
		url:'functions/blog.php?do=edit',
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
