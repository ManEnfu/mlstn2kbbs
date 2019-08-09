<?php 
	function query($conn, $query) {
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}
 ?>