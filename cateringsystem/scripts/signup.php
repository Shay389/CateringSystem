<?php  
include_once 'db.php'; 
if (isset($_POST['signup'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
	$password = md5($_POST['password']);

	// echo $fname.$lname.$email.$phoneNo.$password; 

	$sql = "INSERT INTO customers (fname, lname, email, phoneNo, password) VALUES ('$fname', '$lname', '$email', '$phoneNo', '$password')";

	$query = mysqli_query($conn, $sql);

	if($query){
		echo 'Inserted form ';
	}else{
		echo mysqli_error($conn);
	}


}
?>