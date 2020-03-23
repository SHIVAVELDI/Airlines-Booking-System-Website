html><html>
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
		<h3 class="header">Enter Plane Details</h3>
		<form class="container"action = "direct-indirect-flights-backend.php" method = "POST" style="max-width: 1100px!important">
			<label>Airlines:</label>
			<input type="text" name = "airlines" placeholder = "Name Of Airlines" required><br><br>
			<label>Intermediate Station:</label>
			<input type="text" name="halt" placeholder="3 Letter Code" required><br><br>
			<h4 class="header" style="background-color: #333"><?php echo"Enter Details of Plane Starting From ".$source." to Intermediate Station"; ?></h4>
			<label>Plane_ID:</label>
			<input type="text" name = "plane_id1" placeholder = "RegistrationNumber" required><br><br>
			<label>Date And Time of Departure:</label>
			<input name = "dd1" type="date" required>
			<input name = "td1" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da1" type="date" required>
			<input name = "ta1" type="time" required><br><br>
			<label>Price &#x20b9 </label>
			<input type="number" name="fare1">
         
			<h4 class="header" style="background-color: #333"><?php echo"Enter Details of Plane Starting From Intermediate Station to ".$destination; ?></h4>
			<label>Plane_ID:</label>
			<input  type="text"name = "plane_id2" placeholder = "RegistrationNumber" required><br><br>
			<label>Date And Time of Departure:</label>
			<input name = "dd2" type="date" required>
			<input name = "td2" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da2" type="date" required>
			<input name = "ta2" type="time" required><br><br>
			<label>Price &#x20b9 </label>
			<input type="number" name="fare2">
			<input type="hidden" name="stops" value="<?php echo$stops; ?>">
			<input type="hidden" name="source" value="<?php echo$source; ?>">
			<input type="hidden" name="destination" value="<?php echo$destination; ?>">
			<button class="btn success" type="submit">Submit</button>
			<button class="btn danger" type="reset">Clear</button>
	</center>
</body>
</html>