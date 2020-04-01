<?php
session_start();
require_once"dbconnect.php";

$email=$_SESSION["email"];

$profile_query="select name from users where email='$email' ";
$result=mysqli_query($con,$profile_query);
$profile=mysqli_fetch_array($result);
$name=$profile[0];


?>

<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
 
    a:hover{
        box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 black;
        background: #da190b;

    }

</style>
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
        <center>
            <div class="container">
            <img src="user.png" height="300" width="300">
            <ul>
                <li><?php echo'<p class="header">Name: '.$name.'</p>'; ?></li>
                <li><?php echo'<p class="header">Email: '.$email.'</p>'; ?></li>      

            </ul>
            <a style="   display:block;
        padding:25px;
        margin:25px;
        border-radius: 25px;
        color:white;
        background-color: #f44336;
        box-sizing: 30%;
        text-decoration: none;"   href="logout.php">LogOut</a>   
        </div>
    </center>
</body>
</html>

    
