<?php


		include("includes/DbConnection.php");



		$query = "SELECT * FROM Museum_users WHERE Name='Jesse Cohn'";

		$run_query = mysqli_query($connect, $query);

		$query_array = mysqli_fetch_array($run_query);

		$username = $query_array[2];
		$role = $query_array[5];
		$login = $query_array[4];


		echo "
				Username:  {$username}

				</br>

				</br>
				</br>

			<a href='#''>Change username</a>	

				</br>
				</br>

			Current Role: {$role}
		
				</br>
				</br>

		<a href='#''>Change password</a>



		"



?>