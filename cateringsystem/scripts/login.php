<?php
	require_once "db.php";

	session_start();
	
	if (isset($_REQUEST['loginBtn'])){
		$username = $_REQUEST['username'];
		$password = md5($_REQUEST['password']);

		$sql = "SELECT * FROM customers WHERE email = '$username'";
		$query = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($query);

		
		if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $username;
			header("Location: ../dashboard/index.php");
		
		}else{
			if (isset($_REQUEST['loginBtn'])){
		$username = $_REQUEST['username'];
		$password = md5($_REQUEST['password']);

		$sql = "SELECT * FROM users WHERE email = '$username'";
		$query2 = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($query2);
		/*while($rows = mysqli_fetch_assoc($query)){
			$userid = $rows['userID']; 
			$pass = $rows['password'];
		}*/
			if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $username;
			header("Location: ../admin/home.php");

		}
		}

		else{
			echo "Invalid username/password";
		}

	}
}


?>