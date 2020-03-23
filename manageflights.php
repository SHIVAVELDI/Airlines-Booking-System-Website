<html><html>
<head>
	<title>AirlinesBookingSystem</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="layoutsstyle.css">
<style type="text/css">
	form{
		max-width: 1000px !important;
		opacity: 1.5 !important;

	}
	form:hover{
		
		opacity: 1;
	}
</style>
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
    	
    		<h2 class="header">New Flights </h2>
		<form action = "manageflightsinsert-backend.php" method = "POST" class="container" style="max-width: 500px!important;">
			<label>Source:</label>
			<input name = "source_code" placeholder = "3 letter Code" type="text" required><br><br>
			<label>destination:</label>
			<input name = "destination_code" placeholder = "3 letter code" type="text" required><br><br>
			<label>Stops:</label>
			<input type="number" name="stops" min="0" max="1" required><br><br>
			<button class="btn success" type = "submit">Proceed to Plane Details</button>
			<button class="btn warning" type = "reset">ClearEntries</button>
		</form>
		<h2 class="header">Delete Existing Flights</h2>
		<form action = "manageflightsdelete-backend.php" method = "POST" class="container">
			<label>PlaneID:</label>
			<input name = "plane_id" placeholder="Registration Number" required type="text"><br><br>
			<label>From :</label>
			<input name="source" placeholder="3 letter CODE" required type="text"><br><br>
			<label>To :</label>
			<input name="destination" placeholder="3 letter code" required type="text"><br><br>
			<label>Date and Time of Departure:</label>
			<input type="date" name="date" required type="date">
			<input type="time" name="time" required type="time"><br><br>
			<button class="btn danger"   type = "submit">Delete</button>
			<button class="btn info"   type = "reset">ClearEntries</button>
		</form>
		<h2 class="header">Update fare</h2>
		<form action = "manageflightsupdate-backend.php" method = "POST" class="container">
			<label>PlaneID:</label>
			<input name = "plane_id" type="text" placeholder="Registration Number" required><br><br>
			<label>Source:</label>
			<input name = "source" type="text" placeholder = "3 letter Code" required><br><br>
			<label>destination:</label>
			<input name = "destination" type="text" placeholder = "3 letter code" required><br><br>
			<label>Date and Time of Departure:</label>
			<input type="date" name="date" required type="date">
			<input type="time" name="time" required type="time"><br><br>
			<label>New Price &#x20b9</label>
			<input type="number" name="fare" required><br><br>
			<button class="btn warning" type = "submit">Update Fare</button>
			<button class="btn info" type = "reset">ClearEntries</button>
		</form>
        
       
    </center>
	
</body>
</html>