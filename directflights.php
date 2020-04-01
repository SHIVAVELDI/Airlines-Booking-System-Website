<html>
<head>
	<title>Direct Flights Insert</title>
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
		<h2 class="header">Enter Plane Details</h2>
		<form  class="container" action = "direct-indirect-flights-backend.php" method = "POST" style="max-width: 1100px!important;">
			<h4 class="header" style="background-color: #333"><?php echo"Enter Details of Plane Starting From ".$source." to ".$destination; ?></h4>
			<select  id="plane_id" name="plane_id" required>
				<option  selected="" disabled="">Select Planes</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[0].' (Airlines - '.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>
			<!-- <label>Airlines:</label>
			<input type="text"name = "airlines" placeholder = "Name Of Airlines" required><br><br> -->
			<label>Date And Time of Departure:</label>
			<input name = "dd" type="date" required>
			<input name = "td" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da" type="date" required>
			<input name = "ta" type="time" required><br><br>
			<label>Economy Class Price &#x20b9 </label>
			<input type="number" name="economy_fare"><br>
				<label>Business Class Price &#x20b9 </label>
			<input type="number" name="business_fare"><br>
				<label>First Class Price &#x20b9 </label>
			<input type="number" name="first_fare"><br>
			<input type="hidden" name="stops" value="<?php echo$stops; ?>">
			<input type="hidden" name="source" value="<?php echo$source; ?>">
			<input type="hidden" name="destination" value="<?php echo$destination; ?>">
			<button class="btn success" type="submit">Submit</button>
			<button class="btn danger" type="reset">Clear</button>
	</center>
</body>
</html>