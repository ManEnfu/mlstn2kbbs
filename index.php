<?php
	session_start();	
?>

<!DOCTYPE HTML>

<html>
	<body>
		<?php
			if (isset($_SESSION["loggedid"])) {
				$s_user = $_SESSION["loggedid"];
				$s_self = $_SERVER["PHP_SELF"];
				echo "<p>Welcome $s_user !</p>";
				echo "<form action=\"logout.php\"> <input type = \"submit\" value=\"Logout\"> </form>"; 
			} else {
				echo "<p>Welcome!</p>";
				echo "<form action=\"login\"> <input type = \"submit\" value=\"Login\"> </form>";
			}
		?>
	</body>
</html>