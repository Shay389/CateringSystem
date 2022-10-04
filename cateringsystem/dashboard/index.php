

<!DOCTYPE html>
<html>
<head>
	<title>Logged In User's Name | Catering System</title>
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/e&v.css">
</head>
<body>

	<div class="dash">
		
		<div class="leftside">
			<!-- <div id="avatar">
				<img src="../img/avatar-male.jpg">
			</div> -->
			<div class="user">
				<span class="name">Shaymah Said</span><br>
				<a href="logout.php">logout</a>
			</div>
			
		</div>
		<div class="rightside">
			<a href="../menu.html">MENU</a>
			<div class="form_container">
	    <div class="form_title">Venue</div>
		<form action="#" method="POST" class="venue_form">
			<!-- <input type="text" name="Venue" placeholder="Venue"><br> -->
			<select name="Venue" class="fetch">
				<option value="">Choose Venue</option>
					<option>Sarit Centre</option>
					<option>Villa Rosa Kempinski</option>
					<option>Rosedale Gardens Kilimani</option>
					<option>Marula Manor ltd</option>
					<option>Maru Gardens</option>
			</select>
		
			<input type="submit" value="send" onclick="myFunction()" name="Submit" class="submit_button">
		

		</form>
	</div>

		<form class="event_form">
			<select>
				<option>Wedding Reception</option>
				<option>Conference Meeting</option>
				<option>Birthday Party</option>
				<option>Funeral</option>


			</select>
		</form>

         

		</div>
 
            
	</div>

</body>
</html>













