<?php  include("includes/doctype.php")?>




	<div style="width:70%;padding:50px; margin-left:auto; margin-right:auto;">

		<h2 align="center">Add new piece</h2>


		<hr>
		</br>

			<form action="Museum_Profile_Input.php" method="post" class="forms">

			Name: <input type="text" name="name" value="" />
				</br>
				</br>
			Artist: <input type="text" name="artist" value="" />
				</br>	
				</br>
			Year Created: <input type="text" name="year" value=""/>
				</br>
				</br>
			About: <textarea name="about" value=""></textarea>
				</br>
				</br>
			Museum ID: <input type="text" name="ID" value=""/>
				</br>
				</br>
			Photo: <input type="file" name="picture"/>
				</br>
				</br>
				<hr>
				</br>
			<input align="center" type="submit" name="submit" value="Submit" />
			
			</form>
				
				
			<!--<div data-role="collapsible" style="width:70%; margin-left:auto; margin-right:auto;">
			
				<h2>Special Reward</h2>
			
				<div data-role="fieldcontain">
				<label for="name"><h3>Name Of Reward</h3></label>
				<input type="text" name="name" id="name" value="" />
				</div> 
				<br>
				<input type="file" accept="image/*" capture="camera" name="special_reward_image">
			
				</input>
				<br>
				About<textarea name="about" id="special_reward_about">
			
				</textarea>
				<br>
				<input type="submit" value="sumbit"/>
			
			
			</div>-->
	
			   <?php

			include("includes/DbConnection.php");
		
			include("includes/functions.php");
			
			$id_set = 1;

			$current_portfolio_query = show_current_portfolio();

			echo "<br>";
			echo "<h2 class='title=bar' align='center'>Currrent Porfolio</h2>";
			echo "<hr>";

			while($portfolio_array = mysqli_fetch_array($current_portfolio_query)){
				
				get_object_by_id($portfolio_array);
			
			}
			?>  
			<br>
			<br>
			<br>
		</div>

	</div>





</body>





</html>
