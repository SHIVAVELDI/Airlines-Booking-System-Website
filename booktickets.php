
<html>
<head>
	<title>
		Book Flight Tickets
	</title>
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
    		<a href="usershome.php">Home</a>
    		<a href="booktickets.php">Book Flight Ticktets</a>
    		<a href="bookinghistory.php">Your Booking History</a>
    	</div>
	    <div class="column">
		<h1>Plan Your Journey</h1>
		<center>
		<form class="column container" action = "bookingtickets-backend.php" method = "POST" id="form">
			<label>From:</label>
			<input type="text" name = "source" placeholder = "Airport" required><br><br>
			<label>To:</label>
			<input type="text" name = "destination" placeholder = "Airport" required><br><br>
			<label>Class:</label>
			<select  id="class" name="class" required>
              <option value="economy">Economy Class</option>
              <option value="business">Business Class</option>
              <option value="first">First Class</option>
            </select> <br><br>  
            <label>Date of Departure:</label>
            <input name = "date_of_depart" type= "date" required ><br><br>
			<button class="btn success" type = "Submit">Check Flights</button>
			<button class="btn warning" type ="reset">Clear Entries</button>
		</form>
	</center>
	</div>


</body>
</html>
