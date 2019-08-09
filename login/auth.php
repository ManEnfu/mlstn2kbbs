<?php
	require('../db_connect.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["idkasir"]) and isset($_POST["psw"])) {
			// Assigning POST values to variables.
		    $username = $_POST['idkasir'];
		    $password = $_POST['psw'];

		    // CHECK FOR THE RECORD FROM TABLE
		    $query = "SELECT * FROM login WHERE username='$username' and password='$password'";
		 
		    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		    $count = mysqli_num_rows($result);

		    if ($count == 1){
		        // echo "Login Credentials verified";
		        $_SESSION["loggedid"] = $username;
		        header("Location: ../index.php");
		    }else{
		    	$_SESSION['login_invalid'] = true;
		        header("Location: ../login");
		    }

		    mysqli_close($connection);
		} 
	}
?>