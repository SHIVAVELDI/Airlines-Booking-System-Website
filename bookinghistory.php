<?php
session_start();

require_once "dbconnect.php";
$email=$_SESSION["email"];


$query="select * from books where email='$email' order by timestamp DESC";
$result=mysqli_query($con,$query);
$tuples=mysqli_fetch_all($result);
$i=0;
echo'<html>
<head>
	<title>Booking History</title>
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
    	</div>';
    	
foreach($tuples as $row){
  $i=$i+1;	
  if($row[12]){
  	echo'<center>';
  echo'<div class="column container" style="width:100%"';
  echo'<h3 style="color:white;text-align:center">Indirect Flight from '.$row[8].' to '.$row[9].' via '.$row[10].' on '.$row[17].'</h3>';
  echo'<details style="text-align:center">
  <p> Booking Number : '.$row[0].'   Booking Name : '.$row[2].'    Age : '.$row[3].'</p>
  <p> Type of ID  : '.$row[4].'    '.$row[4].'Number : '.$row[5].'    PhoneNumber:'.$row[6].' </p>
  <p> Class of Ticket : '.$row[7].'</p>
  <p> Plane from '.$row[8].' to '.$row[10].' : '.$row[11].'</p>
  <p> ---------Date and Time of Depature '.$row[17].'</p>
  <p> ---------Date and Time of Arrival  '.$row[18].'</p>
  <p> Plane from '.$row[10].' to '.$row[9].' : '.$row[12].'</p>
  <p> ---------Date and Time of Depature '.$row[19].'</p>
  <p> ---------Date and Time of Arrival  '.$row[20].'</p>
  <p>Number of Adults : '.$row[14].'    Number of Infants : '.$row[15].'</p>
  <p>Total Fare : '.$row[13].'</p>
  </details>';
  echo'</div>';
  echo"</center>";
  }
  else{
  echo"<center>";
  echo'<div class="column container">';
  echo'<h3>Direct Flight from '.$row[8].' to '.$row[9].' on '.$row[17].'</h3>';
   echo'<details style="text-align:center">
  <p> Booking Number : '.$row[0].'   Booking Name : '.$row[2].'   Age : '.$row[3].'</p>
  <p> Type of ID  : '.$row[4].'    '.$row[4].'Number : '.$row[5].'   PhoneNumber:'.$row[6].' </p>
  <p> Class of Ticket : '.$row[7].'</p>
  <p> Plane from '.$row[8].' to '.$row[9].' : '.$row[11].'</p>
  <p> ---------Date and Time of Depature '.$row[17].'</p>
  <p> ---------Date and Time of Arrival  '.$row[18].'</p>
  <p>Number of Adults : '.$row[14].' Number of Infants : '.$row[15].'</p>
  <p>Total Fare : '.$row[13].'</p>
  </details>';
  echo'</div>';
  echo"</center>";
  }
} 





?>