<!DOCTYPE html>
<html>
<head>
	<title>Manage Direct Flights</title>
</head>
<body>
		<center>
		<h3>Enter Plane Details</h3>
		<form action = "direct-indirect-flights-backend.php" method = "POST">
			<h4><?php echo"Enter Details of Plane Starting From ".$source." to Intermediate Station"; ?></h4>
			<label>Plane_ID:</label>
			<input name = "plane_id" placeholder = "Registration Number" required>
			<label>Airlines:</label>
			<input name = "airlines" placeholder = "Name Of Airlines" required><br><br>
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
			<button type="submit">Submit</button>
			<button type="reset">Clear</button>
	</center>
</body>
</html>