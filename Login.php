<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
		echo "<p>Fill in all fields!</p>";
	}
	elseif ($_GET["error"] == "wronglogin") {
		echo "<p>Incorrect login information!</p>";
	}
}
?>
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login in to your Account</p>
			<div class="input-group">
				<input type="text" name="uid" placeholder="Username/Email.." required>
			</div>
			<div class="input-group">
				<input type="password" name="pwd" placeholder="Password.." required>
			</div>
			<div class="input-group">
				<button type="submit" name="submit" class="btn">Log In</button>
			</div>
			<p class="login-register-text">Not Registered Yet?<br>Get the best online banking experience with ABC Bank<br><a href="Register.php">Register Now</a></p>
		
</div>
</form>
	
</body>
</html>