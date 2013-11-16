<?php  include("includes/doctype.php")?>

	

		<div align="center">

		
		<h2 align="center">Current settings</h2>
		</br>
		<?php


		include("includes/DbConnection.php");

		include("includes/functions.php");

		$role = '';

		$go_go = show_user(5);

		while($query_array = mysqli_fetch_array($go_go)){

			if($query_array[5] == 1)
			{

				$role = "Administrator";

			} else if($query_array[5] == 2)
			{

				$role = "Editor";

			} else 
			{

				$role = "User";

			}

		$name = $query_array[3];


		echo "
			<div class='settings'>
				Username:  {$name}

				</br>

				
			<a href='change_username.php'><button id='change_username'>Change Username</button></a>	

				</br>
				

			Current Role: {$role}
		
				</br>


				

			<a href='change_password.php'><button id='change_password'>Change password</button></a>	
			
			

		</div>


		";

			}

?>
			</br>
			</br>

			<a href="users.php"><button class="buttons">Users</button></a>

				</div>
		
				


	<div style="width:70%;padding:50px; margin-left:auto; margin-right:auto;">

		

		<div id="user_settings">

		

		</div>

		
		</br>

			
				
				
				
			  
			<br>
			<br>
			<br>
		</div>

	</div>


<script type="text/javascript" src="settings_form.js">

</script>


</body>





</html>
