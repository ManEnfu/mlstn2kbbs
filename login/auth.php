<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["idkasir"]) and isset($_POST["psw"])) {
			if ($_POST["idkasir"] == "user" and $_POST["psw"] == "password") {
				$_SESSION["loggedid"] = $_POST["idkasir"];
				header("Location: ../index.php");
			} else {
				header("Location: index.php");
			}
		} 
	}
?>