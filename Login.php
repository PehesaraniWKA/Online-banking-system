<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<title>ABC Bank User Login</title>
</head>
<body>
	
	
	<div class="container">	
		<form action="includes/login.inc.php" method="post" class="login-email">
			<!--error messages for incorrect details -->
			<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p align='center' style='font-size:20px; font-weight:bold; color:red'>Fill in all fields!</p>";
				}
				elseif ($_GET["error"] == "wronglogin") {
					echo "<p align='center' style='font-size:20px; font-weight:bold; color:red'>Incorrect login information!!!</p>";
				}
			}
			?>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login in to User Profile</p>
			<div class="input-group">
				<input type="text" name="uid" placeholder="Username/Email.." required>
			</div>
			<div class="input-group">
				<input type="password" name="pwd" placeholder="Password.." required>
			</div>
			<div class="input-group">
				<p align="center">
				<button type="submit" name="submit" class="btn">Log In</button>
				</p>
			</div>
			<p class="login-register-text">Not Registered Yet?<br>Get the best online banking experience with ABC Bank</p>
			<p class="regbtn"><a href="Register.php">Register Now</a></p>
			</div>
		</form>
	</div>
</body>
</html>