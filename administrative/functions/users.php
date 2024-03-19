<?php
require_once("../config.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);

//
function show()
{
	// storing  request (ie, get/post) global array to a variable  
	$requestData= $_REQUEST;
	session_start();
	$adminid = $_SESSION["adminid"];
	$columns = array( 
	// datatable column index  => database column name
		0 =>'username', 
		1=> 'fullname',
		2=> 'status',
		3=> 'created',
		4=> '',
	);

	// getting total number records without any search
	$sql = "SELECT `adminid`, `username`, `fullname`, `status`, `created` ";
	$sql.=" FROM admin WHERE adminid<>'$adminid'";
	$query=query($sql);
	$totalData = $query->num_rows;
	$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
    

	$sql = "SELECT `adminid`, `username`, `fullname`, `status`, `created` ";
	$sql.=" FROM admin WHERE adminid<>'$adminid'";
	if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
		$sql.=" AND ( username LIKE '".$requestData['search']['value']."%' ";    
		$sql.=" OR fullname LIKE '".$requestData['search']['value']."%' ";

		$sql.=" OR status LIKE '".$requestData['search']['value']."%' )";
	}
	$query=query($sql);
	
	$totalFiltered = $query->num_rows; // when there is a search parameter then we have to modify total number filtered rows as per search result. 
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
	$query=query($sql);

	$data = array();
	foreach($query->rows as $row) {  // preparing an array
		$nestedData=array(); 
		if($row["status"]==1)
		{
			$status = "<label class='label label-success'>Enable</label>";
		}
		else
		{
			$status = "<label class='label label-warning'>Disabled</label>";
		}
		$nestedData[] = $row["username"];
		$nestedData[] = $row["fullname"];
		$nestedData[] = $status;
		$nestedData[] = date("d-M-Y",strtotime($row["created"]));
		$nestedData[] = '<div class="btn-group"><button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button" aria-expanded="false">				Action<span class="caret"></span></button><ul role="menu" class="dropdown-menu pull-right"><li><a title="Edit" class="edit" onclick="edituser('.$row["adminid"].')" href="#edit" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a></li><li><a title="Update Password" class="edit" onclick="pa('.$row["adminid"].')" href="#editpass" data-toggle="modal"><i class="fa fa-key"></i> Update Password</a></li><li><a title="Delete" class="delete" onclick="deleteuser('.$row["adminid"].')" href="javascript:;"><i class="fa fa-trash"></i> Delete</a></li></ul></div>';
		$data[] = $nestedData;
	}

	$json_data = array(
				"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
				"recordsTotal"    => intval( $totalData ),  // total number of records
				"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
				"data"            => $data   // total data array
				);

	echo json_encode($json_data);  // send data as json format
}
//
function add()
{
	$fullname = mysqlirealescape($_POST["fullname"]);
	$username = mysqlirealescape($_POST["username"]);
	$password = md5($_POST["password"]);
	$status = mysqlirealescape($_POST["status"]);
	
	$query = query("insert into admin set fullname='$fullname',username='$username',password='$password',status='$status'");
	if($query==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}
//
function update()
{
	$adminid = base64_decode($_POST["id"]);
	$fullname = mysqlirealescape($_POST["fullname"]);
	$status = mysqlirealescape($_POST["status"]);
	
	$query = query("update admin set fullname='$fullname',status='$status' where adminid='$adminid'");
	if($query==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}
//
function editform()
{
	$adminid = $_POST["id"];
	$query = query("SELECT `fullname`, `status` FROM `admin` WHERE adminid='$adminid'");
	$row = $query->row;
	$fullname = $row["fullname"];
	$status = $row["status"];
	?>
	
	<form role="form" id="editform" class="form-horizontal" enctype="multipart/form-data" method="post" onsubmit="return userform('editform')" action="functions/users.php?do=update">
	<input type="hidden" value="<?php echo base64_encode($adminid)?>" name="id" />
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Edit user</h4>
	</div>
	<div class="modal-body">
		<div class="form-group clearfix">
			<label class="col-md-3 control-label">Full Name</label>
			<div class="col-md-7">
				<input type="text" name="fullname" value="<?php echo $fullname?>" required="" class="form-control">
			</div>
		</div>
		<div class="form-group clearfix">
			<label class="col-md-3 control-label">Status</label>
			<div class="col-md-7">
				<select name="status" required="" class="form-control">
				<option value="1" <?php if($status==1){ echo 'selected'; }?>>Enable</option>
				<option value="0" <?php if($status==0){ echo 'selected'; }?>>Disable</option>
				</select>
			</div>
		</div>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-danger button-continue-shopping" data-dismiss="modal">Close</button>
	<button type="submit" class="btn btn-primary button-checkout">Submit</button>
	</div>
	</form>
	
	<?php
}
//
function updatepass()
{
	$adminid = $_POST["id"];
	$password = $_POST["password"];
	$newpassword = $_POST["newpassword"];
	if($password==$newpassword)
	{
		$password = md5($password);
		$query = query("update admin set password='$password' where adminid='$adminid'");
		if($query==1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	else
	{
		echo 'Did not match password';
	}
}
//
function checkusername()
{
	$username = $_POST["username"];
	$query = query("select username from admin where username='$username'");
	$num = $query->num_rows;
	if($num==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}











//
function delete()
{
	$id = $_POST["id"];
	$query = query("delete from admin where adminid='$id'");
	if($query==1)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}


?>