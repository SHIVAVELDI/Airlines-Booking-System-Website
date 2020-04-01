<html>
<head>
	<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
	<title>Airlines Booking</title>
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
<body>
	<br><br>
	<center>
		<div class="header">
		<h1>Welcome to Airlines Booking Platform</h1>
		<p>Please Login to book your tickets</p>
	</div>
		<form  class="container" action="login-backend.php" method = "POST" >
			<label>Email:</label>
			<input type="email" name = "email" placeholder = "abc@example.com" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required><br><br>
			<label>Password:</label>
			<input name = "password" type = "password" placeholder = "Password" required><br><br>
			<button class="btn success" type = "submit">Submit</button>
			<button class="btn warning" type="reset">ClearEntries</button><br><br>
	        <a href="signup.php">Create New account</a>             
	        <a href="adminlogin.php">login for admin</a>
	    </form>
	</center>
</body>
</html>
