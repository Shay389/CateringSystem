<?php
require('../scripts/db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="home.php">Home</a> 
 <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
DINNER<br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Price</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from dinner;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["code"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<br>
LUNCH<br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Price</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from lunch;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["code"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<br>
BREAKFAST<br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Price</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from breakfast;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["code"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<br>
SNACKS<br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>id</strong></th>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Price</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from snacks;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["code"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>