<?php
require('../scripts/db.php');
$id=$_REQUEST['id'];
$query1 = "DELETE FROM dinner WHERE id=$id"; 
$result = mysqli_query($conn,$query1) or die ( mysqli_error());
header("Location: update.php"); 

$query2 = "DELETE FROM lunch WHERE id=$id"; 
$result = mysqli_query($conn,$query2) or die ( mysqli_error());
header("Location: update.php"); 

$query3 = "DELETE FROM breakfast WHERE id=$id"; 
$result = mysqli_query($conn,$query3) or die ( mysqli_error());
header("Location: update.php"); 

$query4 = "DELETE FROM snacks WHERE id=$id"; 
$result = mysqli_query($conn,$query4) or die ( mysqli_error());
header("Location: update.php"); 
?>