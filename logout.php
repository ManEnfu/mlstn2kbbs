<?php
	session_start();
	unset($_SESSION["loggedid"]);
	header("Location: index.php");
?>