<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Rio Olympics Home</title>
	<link rel="stylesheet" type="text/css" href="RioStyle.css" /> 
	<meta charset="UTF-8">
</head>
<body>
	
	<header>
		<H1>Welcome to the Rio Olympics</H1>
	</header>

	<div class="menu">
		<ul>
  			<li><a href="RioHome.html">Home</a></li>
  			<li><a href="athleteController.php">Search Athletes</a></li>
  			<li><a href="countryController.php">Search Countries</a></li>
  			<li><a class="active" href="addAthleteController.php">Add Athlete</a></li>
  			<li><a href="addCountryController.php">Add Countries</a></li>
  			<li><a href="addEventController.php">Add Event</a></li>
  			<li><a href="issueMedalController.php">Issue Medal</a></li>
  			<li><a href="RioResetHome.php">Reset Database</a></li>

		</ul>
	</div>

	<div class="mainContent"> 
  		<?php
			$self = htmlentities($_SERVER['PHP_SELF']);
			echo "<form action= $self method='POST'>"
		?>
  			<label for="firstName">First Name:  </label>
  			<input class="btnSpace" type="text" name="firstName"><br><br>
  			<label for="lastName">Last Name:  </label>
  			<input class="btnSpace" type="text" name="lastName"><br><br>
  			<label for="gender">Gender: </label>
  			<input class="btnSpace" type="text" name="gender"><br><br>
  			<label for="athleteImage">Athlete Image: </label>
  			<input class="btnSpace" type="text" name="athleteImage"><br><br>
  			<label for="countryID">Country:  </label>
  			<select class="btnSpace" name="countryID">
			<?php
				foreach ($allCountries as $row) 
				{				
					echo "<option value=\"$row[countryID]\">$row[countryName]</option>";
				}
			?>
		</select>
		<br>
  			<!--Adds Athlete To the Database -->
		<button class="btnSpace" type='submit' name='addAthlete' value='addAthlete'>Add Your Athlete</button>
		</form>
	</div>
	</div>
</body>

</html>