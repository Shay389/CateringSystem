<?php

	$conn = mysqli_connect('localhost', 'root', '', 'cateringsystem');
	if(!$conn){
	
		echo 'connection error: '.mysqli_connect_error().' ';
	}
?>