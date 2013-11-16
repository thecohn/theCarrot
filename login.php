<?php include("includes/DbConnection.php");?>

<!DOCTYPE html>

		<html>


		<head>

				<link rel='stylesheet' href='style.css'/>


		</head>



		<body>


<div>

	<form id="login" action="login_process.php" method="post">
		Username:<input type="text" id="username" name="username"/>
		</br>
		Password:<input type="password" id="password" name="password"/>
		</br>
		<input type="submit" value="Sign In"/>
	</form>

</div>

</body>





</html>
