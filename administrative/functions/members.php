<?php
require_once("../config.php");
require_once("../common/image.php");
//
$func = filter_var($_GET["do"]);
call_user_func($func);

//
function show()
{
	// storing  request (ie, get/post) global array to a variable  
	$requestData= $_REQUEST;
	$columns = array( 
	// datatable column index  => database column name 
		0=> 'photo',
		2=> 'name',
		3=> 'designation',
		4=> 'name'
	);

	// getting total number records without any search
	$sql = "SELECT `people_id`, `name`, `photo`, `designation` ";
	$sql.="  FROM `people` WHERE 1";
	$query=query($sql);
	$totalData = $query->num_rows;
	$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
    

	$sql = "SELECT `people_id`, `name`, `photo`, `designation` ";
	$sql.="  FROM `people` WHERE 1";
	if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
		$sql.=" AND ( photo LIKE '".$requestData['search']['value']."%' ";    
		$sql.=" OR name LIKE '".$requestData['search']['value']."%' ";

		$sql.=" OR designation LIKE '".$requestData['search']['value']."%' )";
	}
	$query=query($sql);
	
	$totalFiltered = $query->num_rows; // when there is a search parameter then we have to modify total number filtered rows as per search result. 
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
	$query=query($sql);

	$data = array();
	$sno =1;
	foreach($query->rows as $row) {  // preparing an array
		$nestedData=array(); 
		$nestedData[] = '<img src="../uploads/people/'.$row["photo"].'" width="80" height="80">';
		$nestedData[] = $row["name"];
		$nestedData[] = $row["designation"];
		$nestedData[] = '<div class="btn-group"><button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button" aria-expanded="false">Action<span class="caret"></span></button><ul role="menu" class="dropdown-menu pull-right"><li><a title="Edit" class="edit" href="edit-people.php?id='.base64_encode($row["people_id"]).'"><i class="fa fa-edit"></i> Edit</a></li><li><a title="Delete" class="delete" onclick="deletemembers('.$row["people_id"].')" href="javascript:;"><i class="fa fa-trash"></i> Delete</a></li></ul></div>';
		$data[] = $nestedData;
		$sno++;
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
	global $con;
	$name = mysqlirealescape($_POST["name"]);
	$photo = $_FILES["photo"]["name"];
	$designation = mysqlirealescape($_POST["designation"]);
	if(!empty($photo))
	{
		$ctxt = pathinfo($photo,PATHINFO_EXTENSION);
		$cname = basename($photo,$ctxt);
		$photo = 'cover_'.uniqid().'.'.$ctxt;
		$ctemp = $_FILES['photo']['tmp_name'];
		move_uploaded_file($ctemp,"../../uploads/people/".$photo);
		$cthumb = "../../uploads/people/".$photo;
		$ccrop = thumb_crop("../../uploads/people/$photo",$cthumb,300,300);
	}
	
	$query = query("insert into `people` SET `name`='$name',`photo`='$photo',`designation`='$designation'");
	if($query==1)
	{
		
		redirect("../view-people.php?msg=done");
	}
	else
	{
		redirect("../view-people.php?msg=error");
	}
}
//
function update()
{
	$id = base64_decode($_POST["id"]);
	$name = mysqlirealescape($_POST["name"]);
	$photo = $_FILES["photo"]["name"];
	$designation = mysqlirealescape($_POST["designation"]);
	if(!empty($photo))
	{
		$ctxt = pathinfo($photo,PATHINFO_EXTENSION);
		$cname = basename($photo,$ctxt);
		$photo = 'cover_'.uniqid().'.'.$ctxt;
		$ctemp = $_FILES['photo']['tmp_name'];
		move_uploaded_file($ctemp,"../../uploads/people/".$photo);
		$cthumb = "../../uploads/people/".$photo;
		$ccrop = thumb_crop("../../uploads/people/$photo",$cthumb,300,300);
	}
	else
	{
		$photo = base64_decode($_POST["purl"]);
	}
	$query = query("update `people` SET `name`='$name',`photo`='$photo',`designation`='$designation'  where people_id='$id'");
	if($query==1)
	{
		
		redirect("../view-people.php?msg=done");
	}
	else
	{
		redirect("../view-people.php?msg=error");
	}
}
//
function delete()
{
	$id = $_POST["id"];
	$query = query("delete from people where people_id='$id'");
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