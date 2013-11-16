<?php

	//include("includes/DbConnection.php");

	//include("includes/functions.php");


	//$user_to_delete = $_POST['choice'];
	

	//$delete_that = "DELETE FROM museum_users WHERE name='$user_to_delete'";

	//$go_for_it = mysqli_query($connect, $delete_that);

	

	//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=users.php">';


	include("includes/DbConnection.php");

	global $connect;
					

	$id = $_POST['choice'];
					 
					
	
							
							
	$query = "DELETE FROM museum_users WHERE museum_user_id='$id'";
							
	$do_the_deed = mysqli_query($connect, $query);

	if(!$do_the_deed){

		die("delete failed" . mysqli_error($connect));

	}

	header("Location: users.php");


?>
