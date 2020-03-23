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
    	<div class="column">
	
		<h2 class="header">Enter New Airport Details</h2>
		<center>
		<form class="container" action = "manageairportsinsert-backend.php" method = "POST">
			<label>AirportCode:</label>
			<input type="text" name = "stn_code" placeholder = "3 letter Code"><br><br>
			<label>AirportName:</label>
			<input type="text" name = "airport_name" placeholder = "Name of the Airport"><br><br>
			<button class="btn success" type = "submit">Submit</button>
			<button class="btn danger" type = "reset">ClearEntries</button>
		</form></center>
		<h3 class="header">Delete Existing Airport Details</h3>
		<center>
		<form  class="container" action = "manageairportsdelete-backend.php" method = "POST">
			<label>AirportCode:</label>
			<input  type="text" name = "dstn_code" placeholder = "3 letter Code"><br><br>
			<button class="btn danger" type = "submit">Delete Airport</button>
			<button class="btn info" type = "reset">ClearEntries</button>
		</form></center>
	</div>
	</center>
</body>
</html>