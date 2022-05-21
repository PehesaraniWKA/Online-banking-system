<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/register.css">
	<title>ABC Bank User Login</title>
</head>
<body>	
	<section class="signup-form">		
		<form action ="includes/register.inc.php" method="post"><br />
			<h3>Register Here</h3>
			<div class="flex">
				<div class="inputBox">
					<span>Personal details</span>
					<input type="text" class="box" name="name" placeholder="Full name.."><br />
					<input type="text" class="box" name="Nic" placeholder ="NIC Number.."><br />
					<input type="text" class="box" name="addr" placeholder ="Home Address.."><br />
					<input type="tel"  class="box" name="phone" placeholder ="Contact Number..(0778554991)"><br />
					<span>Add your clear picture</span>
					<input type="file"  name="pimage" accept="image/jpg, image/jpeg, image/png"></br>
				</div>	
				<div class="inputBox">
				<span>Login Details</span>
				<input type="text" class="box" name="email" placeholder="Email.."><br />
				<input type="text"  class="box" name="uid" placeholder="User name.."><br />
				<input type="password" class="box" name="pwd" id="pwd" placeholder="Password.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br />
				<input type="password" class="box" name="pwdrepeat" placeholder="Repeat password.."><br /></br>
				<textarea rows="2" cols="50" class="box" name="snote" placeholder="Special Notes(optional).."></textarea></br><br />	
				</div> 	
			</div>	
					
				<!--error messages for incorrect details -->
			<?php
					if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
					elseif ($_GET["error"] == "invaliduid") {
					echo "<p>Choose a proper username!</p>";
				}
					elseif ($_GET["error"] == "invalidemail") {
					echo "<p>Choose a proper email!</p>";
				}
					elseif ($_GET["error"] == "passwordsdontmatch") {
					echo "<p>Passwords doesn't match!</p>";
				}
					elseif ($_GET["error"] == "stmtfaild") {
					echo "<p>Something went wrong, Please try again!</p>";
				}
					elseif ($_GET["error"] == "usernametaken") {
					echo "<p>User name or email already taken please try with different one!</p>";
				}
					elseif ($_GET["error"] == "none") {
					echo "<p>Registration completed! Click login now below</p>";
					//header("location: ../lab12n/Login.php");
					//exit(); //stop running
				}
				}
			?>        
			<p align="center"><button type="submit" class="btn" name="submit">Sign Up</button></p></br>
			<h3 align = "center"class="">Alrady Have an Account<br></h3>
			<p  align="center">	
				<button class="btn" type="button"><a href="Login.php">Login Now</a></button>
			</p>
				<button class="btnback" type="button"><a href ="Register intro.php">Back</a></button>
		</form>	
	</section>
	<div class="pwbox">
		<div class="input-box">
				<div id="message">
				<h4>Password must contain the following:</h4>
				<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
				<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
				<p id="number" class="invalid">A <b>number</b></p>
				<p id="length" class="invalid">Minimum <b>8 characters</b></p>
			</div>
		</div>				  
	</div>	
			
	<script src="js files/register.js"></script>
</body>
</html>