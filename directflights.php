<html>
<head>
	<title>AirlinesBookingSystem</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="layoutsstyle.css">
</head>


 <body>
    	<div class="header">
    		<h1>Airlines Booking Platform</h1>
    		<p>Book Flight tickets and Keep track of your Booking History</p>
    	</div>
    	<div class="topnav">
    		<a href="profile.php">Profile</a>
    		<a href="adminshome.php">Home</a>
    		<a href="manageflights.php">Manage Flights</a>
    		<a href="manageairports.php">Manage Airports</a>
    		<a href="manageplanes.php">Manage Planes</a>
    	</div>
    	<center>
		<h2 class="header">Enter Plane Details</h2>
		<form  class="container" action = "direct-indirect-flights-backend.php" method = "POST" style="max-width: 1100px!important;">
			<h4 class="header" style="background-color: #333"><?php echo"Enter Details of Plane Starting From ".$source." to ".$destination; ?></h4>
			<label>Plane_ID:</label>
			<input type="text"name = "plane_id" placeholder = "Registration Number" required><br><br>
			<label>Airlines:</label>
			<input type="text"name = "airlines" placeholder = "Name Of Airlines" required><br><br>
			<label>Date And Time of Departure:</label>
			<input name = "dd" type="date" required>
			<input name = "td" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da" type="date" required>
			<input name = "ta" type="time" required><br><br>
			<label>Price &#x20b9 </label>
			<input type="number" name="fare">
			<input type="hidden" name="stops" value="<?php echo$stops; ?>">
			<input type="hidden" name="source" value="<?php echo$source; ?>">
			<input type="hidden" name="destination" value="<?php echo$destination; ?>">
			<button class="btn success" type="submit">Submit</button>
			<button class="btn danger" type="reset">Clear</button>
	</center>
</body>
</html>