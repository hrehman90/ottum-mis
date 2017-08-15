<?php
	error_reporting (0);
	include ( 'f_constants.php' );

	function ottumDB ( $query ) { 
     $connection = new mysqli ( DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME ) or die ( 'Invalid Database' );
	 
	 $result = $connection->query ( $query ) or die ( 'Query to get blah failed with error:'. $connection->connect_error () );
	 return $result;
	}	
?>