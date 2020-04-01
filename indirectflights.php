<html>
<head>
	<title>Indirect Flights Insert</title>
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
		<h3 class="header">Enter Plane Details</h3>
		<form class="container"action = "direct-indirect-flights-backend.php" method = "POST" style="max-width: 1100px!important">
			
			<select  id="halt" name="halt" required>
				<option selected="" disabled="">Select Intermediate Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<h4 class="header" style="background-color: #333"><?php echo"Enter Details of Plane Starting From ".$source." to Intermediate Station"; ?></h4>
			<select  id="plane_id1" name="plane_id1" required>
				<option  selected="" disabled="">Select Planes</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[0].' (Airlines - '.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>
			<label>Date And Time of Departure:</label>
			<input name = "dd1" type="date" required>
			<input name = "td1" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da1" type="date" required>
			<input name = "ta1" type="time" required><br><br>
			<label>Economy Class Price &#x20b9 </label>
			<input type="number" name="economy_fare1"><br>
			<label>Business Class Price &#x20b9 </label>
			<input type="number" name="business_fare1"><br>
			<label>First Class Price &#x20b9 </label>
			<input type="number" name="first_fare1"><br>
         
			<h4 class="header" style="background-color: #333"><?php echo"Enter Details of Plane Starting From Intermediate Station to ".$destination; ?></h4>
			<select  id="plane_id2" name="plane_id2" required>
				<option  selected="" disabled="">Select Planes</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[0].' (Airlines - '.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>
			<label>Date And Time of Departure:</label>
			<input name = "dd2" type="date" required>
			<input name = "td2" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da2" type="date" required>
			<input name = "ta2" type="time" required><br><br>
			<label>Economy Class Price &#x20b9 </label>
			<input type="number" name="economy_fare2"><br>
			<label>Business Class Price &#x20b9 </label>
			<input type="number" name="business_fare2"><br>
			<label>First Class Price &#x20b9 </label>
			<input type="number" name="first_fare2"><br>
			<input type="hidden" name="stops" value="<?php echo$stops; ?>">
			<input type="hidden" name="source" value="<?php echo$source; ?>">
			<input type="hidden" name="destination" value="<?php echo$destination; ?>">
			<button class="btn success" type="submit">Submit</button>
			<button class="btn danger" type="reset">Clear</button>
	</center>
</body>
</html>