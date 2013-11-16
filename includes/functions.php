<?php


	include('includes/DbConnection.php');

	

	function get_object_by_id($object_array){
		global $connect;
			//$delete_record = $object_array[2];
	
			$id = $object_array[2];
			
			echo "<br>
				<div class='portfolio_piece'>
			
					<h1>{$object_array[2]}</h1>
			
					<img src='{$object_array[6]}'/>
					<p id='artist'>Artist: {$object_array[3]}</p>
					<p id='year'>Year Created: {$object_array[4]}</p>
					<p id='description'>About: {$object_array[5]}</p>
					
						<form action='delete_object.php' method='post'>
							<input type='hidden' name='record_id' value='{$object_array[2]}'/>
							<input type='submit' name='delete' value='Delete'/>
						</form>
					
					<hr>
			
				</div>";
	
	
	}


	function delete_the_piece($object_array){
	
	$piece_name = $object_array[2];

	
	$name = mysql_real_escape_string($piece_name);
	
	$piece_to_delete = "DELETE FROM object WHERE Name='$name'";


	$delete_it = mysql_query( $piece_to_delete, $connect);

	if(!$delete_it){
		die("delte error " . mysql_error());

	}



	}


	function show_current_portfolio(){
		global $connect;
			$query = "SELECT * FROM object WHERE MuseumID=1";

			$object_query = mysqli_query( $connect, $query) ;

			return $object_query;
	
	}

	/*function show_all_users(){
		global $connect;
			$query = "SELECT * FROM museum_users";

			$user_query = mysqli_query($connect, $query);

			return $user_query;
	}*/

	function show_user($user_id){
		global $connect;
			$query = "SELECT * FROM museum_users WHERE museum_user_id=$user_id";

			$user = mysqli_query($connect, $query);

			return $user;

	}
	


	
	

?>
