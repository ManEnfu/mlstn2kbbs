<!DOCTYPE html >
<html>
<head>
<title>MASHLOG LOGIN FORM</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body id="body_bg">
<div class="imgcontainer">
	<img src="Assets/logo.png" class="logo">
</div>

<div class="container">
<h2>LAMAN LOGIN KASIR</h2>
	<div class="form_input">
		<form id="login-form" method="post" action="authen_login.php">
			<label for="idkasir"><b>ID Kasir</b></label>
			<input type="text" placeholder="Masukkan ID Kasir" id="idkasir" name="idkasir" required>
	
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Masukkan Password" id="psw" name="psw" required>
			
			<button type="submit">Login</button>
			
		</form>
	</div>

  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>