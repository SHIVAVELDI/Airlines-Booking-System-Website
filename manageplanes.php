<html>
<head>
	<title>Manage Planes</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
</head>
  
    <body>
    	<div class="header">
    		<h1>Airlines Database Management Platform</h1>
    		<p>Manage Flights,Airports and Planes </p>
    	</div>
    	<div class="topnav">
    		<a href="adminprofile.php">Profile</a>
    		<a href="adminshome.php">Home</a>
    		<a href="manageflights.php">Manage Flights</a>
    		<a href="manageairports.php">Manage Airports</a>
    		<a href="manageplanes.php">Manage Planes</a>
    	</div>
    	<center>
		<h1 class="header">INSERT NEW PLANES:</h1>
		<h3 class="header">Enter Plane Details </h3>
		<form class="container" action = "manageplanesinsert-backend.php" method = "POST" style="max-width: 1000px !important;">
			<label>PlaneID:</label>
			<input type="text" name = "plane_id" placeholder = "Registration_ID"><br><br>
			<label>AirLines Name:</label>
			<input type="text"name = "airlines" placeholder = "Name of the Airlines"><br><br>
			<label>Total Number of EconomyClass Seats:</label>
			<input type="number" name = "total_economy_seats" placeholder = "Number of Seats"><br><br>
			<label>Total Number of BusinessClass Seats:</label>
			<input type="number" name = "total_business_seats" placeholder = "Number of Seats"><br><br>
			<label>Total Number of FirstClass Seats:</label>
			<input type="number" name = "total_first_seats" placeholder = "Number of Seats"><br><br>
			<button class="btn success" type = "submit">Submit</button>
			<button class="btn danger"type= "reset">ClearEntries</button>
		</form>
		<h1 class="header">DELETE EXISTING PLANES FROM DATABASE</h1>
		<h3 class="header">ENTER PLANE_ID</h3>
		<form class="container"action = "manageplanesdelete-backend.php" method = "POST" >
			<label>PlaneID:</label>
			<input type="text" name = "dplane_id" placeholder = "Registration_ID"><br><br>
			<button class="btn danger" type = "submit">Delete</button>
			<button class="btn success" type= "reset">ClearPlaneID</button>
		</form>
	</center>
</body>
</html>