<?php 
	require "functions.php";
	$id = $_GET["id"];
	echo "$id";
	$query = "UPDATE orders SET
					status = 'Siap'
				WHERE id = $id";
	mysqli_query($link, $query);

 ?>