<?php

	require_once "../scripts/db.php";

	if (isset($_REQUEST['_location_'])){
		$location = $_REQUEST['_location_'];

		$sql = "SELECT * FROM venues WHERE location LIKE '$location' ";
		$query = mysqli_query($conn, $sql);

		while ($rows = mysqli_fetch_assoc($query)){
			return $rows['venueName'];
		}
	}


?>