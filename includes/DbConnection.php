<?php
	
	include("constants.php");

	$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

	if(!$connect){
		die("Database connection failed: " . mysql_error());
	}


	/*$db_select = mysqli_select_db( $connect);

	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
*/
	

	
?>
