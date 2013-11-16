<?php

	
$connect = mysql_connect("68.178.142.47","cohnjesse","Magnum#10");

	if(!$connect){
		die("Database connection failed: " . mysql_error());
	}


	$db_select = mysql_select_db("cohnjesse", $connect);

	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}




	$name = $_POST['artist'];
	$name = mysql_real_escape_string($name);
	//$year = $_POST['year'];
	$year = intval($_POST['year']);
	$description = $_POST['about'];
	$description = mysql_real_escape_string($description);

	$picture = $_FILES["file"];

	$file_name = $_FILES["uploaded_file"]["name"];

	$file_path = "images/" . $file_name;

	move_uploaded_file($picture, $file_path);
	

	$query = "INSERT INTO object (MuseumID, Name, Year, Description) VALUES (1,'$name', $year, '$description')";

	mysql_query($query,$connect);

	
	
	header("Location: profile.php");
	

mysql_close($connect);

	


?>
