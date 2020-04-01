<html>
<head>
	<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
	<title>Admin Login</title>
	<style>
		
			a:link, a:visited {
  background-color: #2196F3;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  margin-right:  10px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    font-family: "Comic Sans MS", cursive, sans-serif;
}

a:hover, a:active {
  background-color: #0b7dda;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
		
	</style>
</head>
<body >
	<br><br>
	<center>
		<h1 class="header">Welcome to Airlines Booking Database Management Platform</h1>
		<p class = "header">Please Login to Manage Airlines Booking Database</p>
		<form  action="adminlogin-backend.php" method = "POST" class="column container">
			<label>username:</label>
			<input name = "username" placeholder = "AdminUsername" type="text"><br><br>
			<label>Password:</label>
			<input name = "password" type = "password" placeholder = "Admins Password"><br><br>
			<button class="btn success" type = "submit">Submit</button>   <button class="btn danger" type = "reset">ClearEntries</button>
	    </form>
	</center>
</body>
</html>