<!DOCTYPE html>
<html>
<head>
	<title>Manage Indirect Flights</title>
</head>
<body>
		<center>
		<h3>Enter Plane Details</h3>
		<form action = "direct-indirect-flights-backend.php" method = "POST">
			<label>Airlines:</label>
			<input name = "airlines" placeholder = "Name Of Airlines" required>
			<label>Intermediate Station:</label>
			<input name="halt" placeholder="3 Letter Code" required><br><br>
			<h4><?php echo"Enter Details of Plane Starting From ".$source." to Intermediate Station"; ?></h4>
			<label>Plane_ID:</label>
			<input name = "plane_id1" placeholder = "RegistrationNumber" required><br><br>
			<label>Date And Time of Departure:</label>
			<input name = "dd1" type="date" required>
			<input name = "td1" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da1" type="date" required>
			<input name = "ta1" type="time" required><br><br>
			<label>Price &#x20b9 </label>
			<input type="number" name="fare1">
         
			<h4><?php echo"Enter Details of Plane Starting From Intermediate Station to ".$destination; ?></h4>
			<label>Plane_ID:</label>
			<input name = "plane_id2" placeholder = "RegistrationNumber" required><br><br>
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
			<button type="submit">Submit</button>
			<button type="reset">Clear</button>
	</center>
</body>
</html>