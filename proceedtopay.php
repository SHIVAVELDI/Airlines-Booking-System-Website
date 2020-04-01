<?php
require_once "dbconnect.php";
$flight_id=$_POST["flight_id"];
$anum=$_POST["anumticks"];
$cnum=$_POST["cnumticks"];
$booking_name=$_POST["name"];
$type_of_identity_card=$_POST["card"];
$id_number=$_POST["id_num"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$class=$_POST["class"];

//echo$email;
//echo$flight_id;
if($class=="economy"){
$fare_of_single_ticket_query="select sum(economy_fare) from taken_by_plane where flight_id='$flight_id'";
$result_tuples=mysqli_query($con,$fare_of_single_ticket_query);
$result_row=mysqli_fetch_array($result_tuples);
$fare_of_single_ticket=$result_row[0];
$total_fare=$anum*$fare_of_single_ticket;
}
if($class=="business"){
$fare_of_single_ticket_query="select sum(business_fare) from taken_by_plane where flight_id='$flight_id'";
$result_tuples=mysqli_query($con,$fare_of_single_ticket_query);
$result_row=mysqli_fetch_array($result_tuples);
$fare_of_single_ticket=$result_row[0];
$total_fare=$anum*$fare_of_single_ticket;
}
if($class=="first"){
$fare_of_single_ticket_query="select sum(first_fare) from taken_by_plane where flight_id='$flight_id'";
$result_tuples=mysqli_query($con,$fare_of_single_ticket_query);
$result_row=mysqli_fetch_array($result_tuples);
$fare_of_single_ticket=$result_row[0];
$total_fare=$anum*$fare_of_single_ticket;
}



?>
<html>
<head>
	<title>Payment</title>
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
    	</div>
	
     <div class="column">
  
          <center>
     <form action="pay.php" method="POST" class="container">
     	   	<ul style="list-style-type: none;">
     	  <li><?php echo"Flight_ID : ".$flight_id; ?></li>
     	  <li><?php echo"Bookig_Name : ".$booking_name; ?></li>
          <li><?php echo"Age : ".$age; ?></li>
          <li><?php echo"Type_of_Identification : ".$type_of_identity_card; ?></li>
          <li><?php echo"ID_Number : ".$id_number; ?></li>
          <li><?php echo"Phone_Number : ".$phone; ?></li>
          <li><?php echo"Number of Adults : ".$anum; ?></li>
          <li><?php echo"Number of Infants : ".$cnum; ?></li>
          <li><?php echo"Total Fare : ".$total_fare; ?></li>
      </ul>
     	
     	<input type="hidden" name="flight_id" value="<?php echo$flight_id;?>">
     	<input type="hidden" name="name" value="<?php echo$booking_name;?>">
     	<input type="hidden" name="age" value="<?php echo$age;?>">
     	<input type="hidden" name="card" value="<?php echo$type_of_identity_card;?>">
     	
     	<input type="hidden" name="id_num" value="<?php echo$id_number;?>">
     	<input type="hidden" name="phone" value="<?php echo$phone;?>">
     	<input type="hidden" name="anum" value="<?php echo$anum;?>">
     	<input type="hidden" name="cnum" value="<?php echo$cnum;?>">
     	<input type="hidden" name="total_fare" value="<?php echo$total_fare;?>">
     	<input type="hidden" name="class" value="<?php echo$class;?>">
     	<button class="btn warning" type = "Submit">Pay</button>


     </form>


 </center>
</div>
</body>
</html>