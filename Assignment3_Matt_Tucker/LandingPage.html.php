<!--
	Matt Tucker
	Assignment 3
	Date 16/11/16
-->
<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" /> 
		<meta charset="UTF-8">
</head>
<body>
	<header>
	</header>
		<div class="subBannerLogin">
			<H1>Exercise Tracker</H1>		
			<?php
				$self = htmlentities($_SERVER['PHP_SELF']);
				echo "<form action= $self method='POST'>"
			?>
				<button class="cornerButtons" name='Login' type="submit">Login</button>
			</form>
			<?php
				$self = htmlentities($_SERVER['PHP_SELF']);
				echo "<form action= $self method='POST'>"
			?>	
				<button class="cornerButtons" name='Register' type="submit">Register</button>
			</form>
				<div class="clearFloat"></div>
		</div>
		<div id="landingPage">
			<h1 class="welcomeInfo">Welcome To The Exercise Tracker</h1>
			<br>
			<h1 class="welcomeInfo">Please Login or Register Above</h1>

			<h1 class="welcomeInfo">This website is used for tracking your workouts and providing statitical feedback on your progress. You can also compare your activity to your friends.</h1>
		</div>
</body>

</html>