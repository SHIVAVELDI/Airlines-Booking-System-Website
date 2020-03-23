<html>
<body>
	<br><br>
	<center>
		<h1>INSERT NEW PLANES:</h1>
		<h3>Enter Plane Details </h3>
		<form action = "manageplanesinsert-backend.php" method = "POST">
			<label>PlaneID:</label>
			<input name = "plane_id" placeholder = "Registration_ID"><br><br>
			<label>AirLines Name:</label>
			<input name = "airlines" placeholder = "Name of the Airlines"><br><br>
			<label>Total Number of EconomyClass Seats:</label>
			<input type="number" name = "total_economy_seats" placeholder = "Number of Seats"><br><br>
			<label>Total Number of BusinessClass Seats:</label>
			<input type="number" name = "total_business_seats" placeholder = "Number of Seats"><br><br>
			<label>Total Number of FirstClass Seats:</label>
			<input type="number" name = "total_first_seats" placeholder = "Number of Seats"><br><br>
			<button type = "submit">Submit</button>
			<button type= "reset">ClearEntries</button>
		</form>
		<h1>DELETE EXISTING PLANES FROM DATABASE</h1>
		<h3>ENTER PLANE_ID</h3>
		<form action = "manageplanesdelete-backend.php" method = "POST">
			<label>PlaneID:</label>
			<input name = "dplane_id" placeholder = "Registration_ID"><br><br>
			<button type = "submit">Delete</button>
			<button type= "reset">ClearPlaneID</button>
		</form>
	</center>
</body>
</html>