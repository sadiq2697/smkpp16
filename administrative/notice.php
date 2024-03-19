<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "Notice";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
//
$query = query("SELECT * FROM `notice`");
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
            <h3 class="portlet-title text-dark text-uppercase"> View Notice </h3>
            <div class="portlet-widgets"> <a href="#add" data-toggle="modal" class="btn btn-primary btn-xs"><i class="ion-plus-round"></i> Add new</a> </div>
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
                      <th>Image</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
						foreach($query->rows as $rows)
						{
							$notice_id= $rows["notice_id"];
							$notice_title= $rows["notice_title"];
							$notice_description= $rows["notice_description"];
							$image= $rows["image"];
							$date=date_create($rows['notice_date']);
							$status= $rows["status"];
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
                      <td><?php echo $notice_title?></td>
                      <td><?php echo $notice_description?></td>
                      <td><img src="../images/notice/<?php echo $image?>" width="70px" alt="" /></td>
                      <td><?php echo date_format($date, 'jS F Y'); ?></td>
                      <td><?php echo $status?></td>
                      <td  class="col-md-2"><div class="btn-group">
                          <button type="button" class="btn btn-primary btn-xs waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Action</button>
                          <button type="button" class="btn btn-primary btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                          <ul class="dropdown-menu drop-menu-right" role="menu">
                            <li><a onClick="edit('<?php echo $notice_id?>')" class="edit" href="#edit" data-toggle="modal"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                            <li><a onClick="return confirm('Are you sure want to delete')" href="functions/notice.php?do=delete&id=<?php echo $notice_id?>"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                          </ul>
                        </div></td>
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
      </div>
      <!-- end col --> 
      
    </div>
    <!-- end row -->
    
    <?php require_once("common/footer.inc.php") ?>
  </div>
</div>
<div id="add" class="modal" style="display: none;">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form role="form" class="form-horizontal" method="post" action="functions/notice.php?do=add" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Add new Notice</h4>
        </div>
        <div class="modal-body">
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <input type="text" class="form-control" required name="notice_title" placeholder="">
            </div>
          </div>
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Date</label>
            <div class="col-md-6">
              <input type="text" class="form-control inline-date" required name="date" placeholder="">
            </div>
          </div>
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Description</label>
            <div class="col-md-10">
              <textarea class="form-control" required name="notice_description" rows="4"></textarea>
            </div>
          </div>
          <div class="form-group clearfix">
            <label class="col-md-2 control-label">Image</label>
            <div class="col-md-10">
              <input name="image" type="file" data-show-upload="false" accept="image/*" class="fileinput">
            </div>
          </div>
          <div class="form-group clearfix" style="display: none;">
            <label class="col-md-2 control-label">Status</label>
            <div class="col-md-10">
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
  <div class="modal-dialog modal-md">
    <div class="modal-content" id="ajaxdiv"> </div>
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
		url:'functions/notice.php?do=edit',
		data:'id='+id,
		success:function(msg)
		{
			$("#ajaxdiv").html(msg);
		}
	});
}
</script> 
