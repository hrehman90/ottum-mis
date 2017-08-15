<?php 
	include( "includes/functions.php" ); 
	if( isset ( $_POST ) ) {
		$action						= $_POST['action'];
		$department['dept_name']	= cleanString( $_POST['dept_name'] );
		
		if( $action == "add" )
			add_department ( $department );
				
		if( $action == "update" ) {
			$department['id'] 	= cleanString($_POST['id']) * 1;
			$id 				= $_POST['id'];
			update_department ( $department );
			header("location: add-update-department.php?action=update&id=".$id);
			exit();
		}
		if( isset ( $_GET['action'] ) && $_GET['action'] == "delete" ) {
			$id 				= $_GET['id'];
			delete_department ( $id );
		}

	}
	header("location: departments.php");
?>