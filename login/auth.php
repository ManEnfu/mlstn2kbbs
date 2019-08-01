<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["login_username"]) and isset($_POST["login_password"])) {
			if ($_POST["login_username"] == "user" and $_POST["login_password"] == "password") {
				$_SESSION["user"] = $_POST["login_username"];
				header("Location: /index.php");
			} else {
				header("Location: /login");
			}
		} 
	}
?>