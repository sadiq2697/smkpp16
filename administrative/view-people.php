<?php
ob_start(); 
require_once("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$title = "People";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
?>

        <?php
		require_once("common/header.inc.php")
		?>
		<!-- Top Bar End -->
        <!-- Begin page -->
        <div class="wrapper">



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <!-- col -->
                        	<div class="col-lg-12">
                        		<div class="card-box">
                                    <a href="add-people.php" class="pull-right btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-plus"></i> Add new People</a>
                        			<h4 class="text-dark header-title m-t-0">People</h4>
                        			<p class="text-muted m-b-30 font-13">
										<hr />
									</p>

                                        <table id="data-grid" class="table table-striped table-bordered  responsive">
												<thead>
													<tr>
														<th>Photo</th>
														<th>Name</th>
														<th>Designation</th>
														<th>Action</th>
													</tr>
												</thead>
										</table>

                        		</div>
                        	</div>
                        	<!-- end col -->



                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                <?php
				require_once("common/footer.inc.php");
				?>

            </div>

<div id="add" class="modal" style="display: none;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form role="form" id="addform" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return userform('addform')" action="functions/users.php?do=add">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add new user</h4>
</div>
<div class="modal-body">
    <div class="form-group clearfix">
		<label class="col-md-3 control-label">Full Name</label>
		<div class="col-md-7">
			<input type="text" name="fullname" required="" class="form-control">
		</div>
	</div>
	<div class="form-group clearfix">
		<label class="col-md-3 control-label">Username</label>
		<div class="col-md-7">
			<input type="text" name="username" required="" class="form-control">
		</div>
	</div>
	<div class="form-group clearfix">
		<label class="col-md-3 control-label">Password</label>
		<div class="col-md-7">
			<input type="password" name="password" required="" class="form-control">
		</div>
	</div>
	<div class="form-group clearfix">
		<label class="col-md-3 control-label">Status</label>
		<div class="col-md-7">
			<select name="status" required="" class="form-control">
			<option value="1">Enable</option>
			<option value="0">Disable</option>
			</select>
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
<div class="modal-dialog modal-md">
<div class="modal-content" id="editdiv">

</div>
</div>
</div>

<div id="editpass" class="modal" style="display: none;">
<div class="modal-dialog modal-sm">
<div class="modal-content">

<form role="form" id="editformpass" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return userform('editformpass')" action="functions/users.php?do=updatepass">
	<input type="hidden" name="id" id="pid" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Update user password</h4>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<label class="control-label">Password</label>
				<input autocomplete="off" name="password" required id="password" class="form-control small" type="password">
			</div>
			<div class="col-md-12">
				<label class="control-label">Confirm Password</label>
				<input autocomplete="off" required name="newpassword" class="form-control small" type="password" placeholder="">
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


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->
<?php
require_once("footer.php");
?>
<script type="text/javascript" language="javascript" >
$(document).ready(function() {
    membersdata();
});
</script>