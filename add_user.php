<?php
	include("includes/DbConnection.php");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$new_user = "INSERT into museum_users(Name, Login, Password) VALUES ('$name', '$username', '$password')";

	$add_user = mysqli_query($connect, $new_user);

	header("Location: users.php");	


?>
