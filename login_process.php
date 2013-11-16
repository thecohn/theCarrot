<?php
	include("includes/DbConnection.php");

	$username = $_POST["username"];
	$password = $_POST["password"];

	$user = "SELECT Password FROM museum_users WHERE Login='$username'";

	if(!$user){
		echo"Username does not exist";
	}

	$go_user = mysqli_query($connect, $user);

	$do_that = mysqli_fetch_array($go_user);

	if($do_that[0] == $password)
	{
		header("Location: profile.php");
	} else {
		echo"login Failed";
	}

?>
