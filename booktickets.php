
<html>
<head>
	<title>
		Book Tickets
	</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
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
			
			<select  id="source" name="source" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>  
		
			<select  id="destination" name="destination" required>
				<option selected="" disabled="">Select Destination Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			
			<select style="background-color:#2196F3!important; " id="class" name="class" required>
              <option value="economy">Economy Class</option>
              <option value="business">Business Class</option>
              <option value="first">First Class</option>
            </select> <br><br>  
            <label>Date of Departure:</label>
            <input name = "date_of_depart" type= "date" required ><br><br>
			<button class="btn success" type = "Submit">Check Flights</button>
			<button class="btn danger" type ="reset">Clear Entries</button>
		</form>
	</center>
	</div>


</body>
</html>
