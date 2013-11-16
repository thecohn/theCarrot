<?php  include("includes/doctype.php")?>

<h2 align="center">Current Users</h2>

</br>

<h3 align="center">Add User<h3>
<div align="center">
	<form id="add_user_form" action="add_user.php" method="post">
		Name:<input type="text" name="name" id="name">
		</br>
		Email:<input type="text" name="email" id="email">
		</br>
		Username:<input type="text" name="username" id="username">
		</br>
		Password:<input type="text" name="password" id="password">
		</br>
		<input type="submit" name="submit" id="submit" value="submit">
	</form>
</div>

<?php 

			include("includes/functions.php");

			function show_all_users(){
				global $connect;
			$query = "SELECT * FROM museum_users";

			$user_query = mysqli_query($connect, $query);

			return $user_query;
			}




			$do_my_dirty_work = show_all_users();

			while($museum_user_array = mysqli_fetch_array($do_my_dirty_work)){

			$user = $museum_user_array[4];

			switch ($user) :
				case 1:
					$user_type = Admin;
				break;
				
				case 2:
					$user_type = Editor;
				break;

				default:
					$user_type = User;
				break;
			endswitch;

			echo "<div align='center'>
			      <h1>{$museum_user_array[2]}</h1>
			      <p>User type: {$user_type}</p>
			      <form action='delete_user.php' method='POST'>
				      <input type='hidden' name='choice' value='{$museum_user_array[0]}'>	
				      <input type='submit' name='delete_user' value='Delete'/>
			      </form>
			      </div>";

			}

			?>

