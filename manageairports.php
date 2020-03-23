<html>
<body>
	<br><br>
	<center>
		<h3>Enter New Airport Details</h3>
		<form action = "manageairportsinsert-backend.php" method = "POST">
			<label>AirportCode:</label>
			<input name = "stn_code" placeholder = "3 letter Code"><br><br>
			<label>AirportName:</label>
			<input name = "airport_name" placeholder = "Name of the Airport"><br><br>
			<button type = "submit">Submit</button>
			<button type = "reset">ClearEntries</button>
		</form>
		<h3>Delete Existing Airport Details</h3>
		<form action = "manageairportsdelete-backend.php" method = "POST">
			<label>AirportCode:</label>
			<input name = "dstn_code" placeholder = "3 letter Code"><br><br>
			<button type = "submit">Submit</button>
			<button type = "reset">ClearEntries</button>
		</form>
	</center>
</body>
</html>