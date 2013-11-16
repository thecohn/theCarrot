<?php

	include("includes/DbConnection.php");

	global $connect;
					
	$check_for_delete = $_POST['delete'];

	$id = $_POST['record_id'];
					 
					
	
							
							
	$query = "DELETE FROM object where Name='$id'";
							
	$do_the_deed = mysqli_query($connect, $query);

	if(!$do_the_deed){

		die("delete failed" . mysqli_error($connect));

	}

	header("Location: profile.php");
		

	
?>
