<?php 
	include("includes/functions.php"); 
	if(isset($_POST)){
		$action=$_POST['action'];
		$employee['emp_name']=cleanString($_POST['emp_name']);
		
		if($action=="add")
			add_employee($employee);
				
		if($action=="update") {
			$employee['id']= cleanString($_POST['id']) * 1;
			$id=$_POST['id'];
			update_employee($employee); 
			header("location: add-update-employee.php?action=edit&id=".$id);
			exit();
		}
		if(isset($_GET['action']) && $_GET['action']=="delete") {
			$id=$_GET['id'];
			delete_employee($id);
		}

	}
	header("location: employees.php");
?>