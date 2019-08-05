<!DOCTYPE html>
<html>
<head>
	<title>Sponsorin</title>
	<link rel="stylesheet" type="text/css" href="/login/style-login.css">
</head>
<body>
	<div class="box">
		<div class="head">
			<h1>Sponsorin</h1>
		</div>
		
		<hr>

		<form action="/login/auth.php" method="post">
			<input type="text"name="login_username" placeholder="Username / E-mail" required="">

			<input type="password"name="login_password" placeholder="Password" required="">
			<p>Don't have any account? <a href="" id="signUp">Sign up</a> </p> 
			<div class="clearfix">
				<button type="submit" class="signupbtn">Login</button>
			</div>

		</form>	
	</div>
	