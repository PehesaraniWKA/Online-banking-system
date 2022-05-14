<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="styles/register.css">

	<title>ABC Bank User Login</title>
</head>
<body>
	<div class="container">
		<form class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Registration Form</p>
			<div class="input-group">
				<input type="text" placeholder="First Name" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="Last Name" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="NIC number" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="Addres Line 1" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="Addres Line 2" required>
			</div>
            <div class="input-group">
				<input type="email" placeholder="Email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" required>
			</div>
			<div class="input-group">
                <p align ="right">
				<button class="btn">Submit</button></p>
			</div></br>
			<p align = "right"class="login-register-text">Alrady Have an Account<br><a href="Login.php">Login Now</a></p>
            <button class="homebt" type="button"><a href ="Register.html">Back</a></button>
		</form>
	</div>
</body>
</html>