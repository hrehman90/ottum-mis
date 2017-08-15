<?php 
include ('includes/config.php');

function cleanString ( $string ) {
	return addcslashes ( $string, "\x00\n\r\'\x1a\x3c\x3e\x25" );
}

function add_department ( $department ) {
	$query="insert into tbl_departments (dept_name) values('$department[dept_name]')";
 	ottumDB($query);
}

function get_departments () {
	$query 		= "select * from tbl_departments order by id desc";
	$result 	= ottumDB ( $query );
	$tempArray 	= array();
	$finalArray = array();
	while ($row = mysqli_fetch_array($result) ) {
		$tempArray['id']		= $row['id'];
		$tempArray['dept_name'] = $row['dept_name'];
		array_push ( $finalArray, $tempArray );
	}
	return $finalArray;
}

function get_department ( $filter ) {
	$finalArray		= array();
	$query 			= "SELECT * FROM tbl_departments ".$filter;
	$result 		= ottumDB ( $query );
	while ( $row 	= mysqli_fetch_array ( $result ) ) {
		  $tempArray['id'] 	 	  = $row['id'];
		  $tempArray['dept_name'] = $row['dept_name'];
		  array_push($finalArray, $tempArray);
	}

    return $finalArray;
}

function update_department ( $department ) {
	$query="update tbl_departments set 
		dept_name = '$department[dept_name]'
		
		where id  = $department[id]
	";
	ottumDB($query);
}

function delete_department ( $id ) {
	$query 		 = "delete from tbl_departments where id = $id";
	ottumDB ( $query );
}

// function get_employees () {
// 	$query 		= "select * from tbl_departments";
// 	$result 	= ottumDB ( $query );
// 	$tempArray 	= array();
// 	$finalArray = array();
// 	while ($row = mysqli_fetch_array($result) ) {
// 		$tempArray['id']		= $row['id'];
// 		$tempArray['dept_name'] = $row['dept_name'];
// 		array_push ( $finalArray, $tempArray );
// 	}
// 	return $finalArray;
// }

// function get_employee ( $filter ) {
// 	$finalArray=array();
// 	$query="SELECT * FROM tbl_employees ".$filter;
// 	$result = ottumDB($query);
// 	$total_rows = mysql_num_rows($result);
// 	  while($row = mysql_fetch_array($result)) 
// 	  {
// 		  $tempArray['id'] = $row['id'];
// 		  $tempArray['name'] = $row['name'];
// 		  array_push($finalArray, $tempArray);
// 	  }
//     return $finalArray;
// }

// function update_employee ( $employee ) {
// 	$query="update tbl_employees set 
// 		name='$employee[name]'
		
// 		where id=$employee[id]
// 	";
// 	ottumDB($query);
// }
// function add_employee ($employee){
// 	$query="insert into tbl_employees (name) values('$employee[name]')";
// 	ottumDB($query);
// }
// function delete_employee($id){
// 	$query="delete from tbl_employees where id=$id";
// 	ottumDB($query);
// }
// ?>