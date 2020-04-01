<?php
session_start();




require_once"dbconnect.php";
$flight_id=$_POST["flight_id"];
$anum=$_POST["anum"];
$cnum=$_POST["cnum"];
$booking_name=$_POST["name"];
$type_of_identity_card=$_POST["card"];
$id_number=$_POST["id_num"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$total_fare=$_POST["total_fare"];
$class=$_POST["class"];
$email=$_SESSION["email"];


$query="select stops,source,destination,halt_station from flights where flight_id='$flight_id'";
$result_tuples=mysqli_query($con,$query);
$result_row=mysqli_fetch_array($result_tuples);
$stops=$result_row[0];
$source=$result_row[1];
$destination=$result_row[2];
$halt_station=$result_row[3];

if($stops){
$query="select plane_id,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival from taken_by_plane where flight_id='$flight_id' order by path";
$result_tuples=mysqli_query($con,$query);
$result_row=mysqli_fetch_all($result_tuples);
$plane_id1=$result_row[0][0];
$date_of_depart1=$result_row[0][1];
$time_of_depart1=$result_row[0][2];
$date_of_arrival1=$result_row[0][3];
$time_of_arrival1=$result_row[0][4];
$plane_id2=$result_row[1][0];
$date_of_depart2=$result_row[1][1];
$time_of_depart2=$result_row[1][2];
$date_of_arrival2=$result_row[1][3];
$time_of_arrival2=$result_row[1][4];
echo'<html>
<head>
	<title>E-Ticket</title>
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


$query= "select f.flight_id from flights as f ,taken_by_plane as t where (f.source='$source' and f.destination='$halt_station' and f.stops='0' and t.plane_id='$plane_id1' and t.date_of_depart='$date_of_depart1' and t.time_of_depart='$time_of_depart1' and f.flight_id=t.flight_id)";
$result=mysqli_query($con,$query);
$tuple=mysqli_fetch_array($result);
$flight_id1=$tuple[0];




$query= "select f.flight_id from flights as f ,taken_by_plane as t where (f.source='$halt_station' and f.destination='$destination' and f.stops='0' and t.plane_id='$plane_id2' and t.date_of_depart='$date_of_depart2' and t.time_of_depart='$time_of_depart2' and f.flight_id=t.flight_id)";
$result=mysqli_query($con,$query);
$tuple=mysqli_fetch_array($result);

$flight_id2=$tuple[0];
echo$flight_id1;
echo$flight_id2;


if($class=="economy"){

	
	$update_seats_query_plane1="update has_booked_seats_in_plane set booked_economy_seats=booked_economy_seats + '$anum' where plane_id='$plane_id1' and (flight_id='$flight_id' or flight_id='$flight_id1')";
	$update=mysqli_query($con,$update_seats_query_plane1);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
	$update_seats_query_plane2="update has_booked_seats_in_plane set booked_economy_seats=booked_economy_seats + '$anum' where plane_id='$plane_id2' and (flight_id='$flight_id' or flight_id='$flight_id2')";
	$update=mysqli_query($con,$update_seats_query_plane2);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
 
}
if($class=="business"){

	
	$update_seats_query_plane1="update has_booked_seats_in_plane set booked_business_seats=booked_business_seats + '$anum' where plane_id='$plane_id1' and (flight_id='$flight_id' or flight_id='$flight_id1')";
	$update=mysqli_query($con,$update_seats_query_plane1);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
	$update_seats_query_plane2="update has_booked_seats_in_plane set booked_business_seats=booked_business_seats + '$anum' where plane_id='$plane_id2' and (flight_id='$flight_id' or flight_id='$flight_id2')";
	$update=mysqli_query($con,$update_seats_query_plane2);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
 
}

if($class=="first"){

	
	$update_seats_query_plane1="update has_booked_seats_in_plane set booked_first_seats=booked_first_seats + '$anum' where plane_id='$plane_id1' and (flight_id='$flight_id' or flight_id='$flight_id1')";
	$update=mysqli_query($con,$update_seats_query_plane1);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
	$update_seats_query_plane2="update has_booked_seats_in_plane set booked_first_seats=booked_first_seats + '$anum' where plane_id='$plane_id2' and (flight_id='$flight_id' or flight_id='$flight_id2')";
	$update=mysqli_query($con,$update_seats_query_plane2);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
 
}


$booking_query="insert into books (email,class,booking_name,Age,type_of_identification,id_number,phone_number,source,destination,halt_station,plane_id1,plane_id2,total_fare,anum,cnum,dtd1,dta1,dtd2,dta2) values ('$email','$class','$booking_name','$age','$type_of_identity_card','$id_number','$phone','$source','$destination','$halt_station','$plane_id1','$plane_id2','$total_fare','$anum','$cnum','$date_of_depart1 $time_of_depart1','$date_of_arrival1 $time_of_arrival1','$date_of_depart2 $time_of_depart2','$date_of_arrival2 $time_of_arrival2')";
$insert=mysqli_query($con,$booking_query);
echo'<center><div class="column container">';

if($insert)echo'<h2 class="header"><center>BookingSuccessfull</center></h2>';
else echo("Error description: ".mysqli_error($con)."<br><br>");
     
   echo"GENERATED E-Ticket<br><br>";
   echo'<ul style="list-style-type:none;" >';
			   echo"<li>Flight_ID : ".$flight_id."</li>";
			   echo"<li>Booking_Name : ".$booking_name."</li>";
			   echo"<li>plane_id1 : ".$plane_id1."</li>";
			   echo"<li>plane_id2 : ".$plane_id2."</li>";
			   echo"<li>source : ".$source."</li>";
			   echo"<li>destination : ".$destination."</li>";
			   echo"<li>Halt_station : ".$halt_station."</li>";
			   echo"<li>Age : ".$age."</li>";
			   echo"<li>Identity_Card : ".$type_of_identity_card."</li>";
			   echo"<li>ID_Number : ".$id_number."</li>";
			   echo"<li>Phone_Number : ".$phone."</li>";
			   echo"<li>Class : ".$class."</li>";
			   echo"<li>date_of_depart_of ".$plane_id1." : ".$date_of_depart1."</li>";
		       echo"<li>time_of_depart_of ".$plane_id1." : ".$time_of_depart1."</li>";
		       echo"<li>date_of_arrival_of ".$plane_id1." : ".$date_of_arrival1."</li>";
		       echo"<li>time_of_arrival_of ".$plane_id1." : ".$time_of_arrival1."</li>";
		       echo"<li>date_of_depart_of ".$plane_id2." : ".$date_of_depart2."</li>";
		       echo"<li>time_of_depart_of ".$plane_id2." : ".$time_of_depart2."</li>";
		       echo"<li>date_of_arrival_of ".$plane_id2." : ".$date_of_arrival2."</li>";
		       echo"<li>time_of_arrival_of ".$plane_id2." : ".$time_of_arrival2."</li>";
			   echo"<li>Number_of_Adults : ".$anum."</li>";
			   echo"<li>Number_of_infants : ".$cnum."</li>";
			   echo"<li>Total Fare : ".$total_fare."</li>"; 
			echo"</ul>"; 
		
		echo'</div></center>';
	}


else{

$query="select plane_id,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival from taken_by_plane where flight_id='$flight_id'";
$result_tuples=mysqli_query($con,$query);
$result_row=mysqli_fetch_array($result_tuples);
$plane_id=$result_row[0];
$date_of_depart=$result_row[1];
$time_of_depart=$result_row[2];
$date_of_arrival=$result_row[3];
$time_of_arrival=$result_row[4];
echo'<html>
<head>
	<title>E-Ticket</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="layoutsstyle.css">
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
    	echo"<center>";
echo'<div class="column container">';

$query="select f.flight_id from flights as f, taken_by_plane as t where (f.stops='1' and f.source='$source' and f.halt_station='$destination' and t.plane_id='$plane_id' and t.time_of_depart='$time_of_depart' and t.date_of_depart='$date_of_depart' and f.flight_id=t.flight_id) or (f.stops='1' and f.halt_station='$source' and f.destination='$destination' and t.plane_id='$plane_id' and t.time_of_depart='$time_of_depart' and t.date_of_depart='$date_of_depart' and f.flight_id=t.flight_id)";
$result=mysqli_query($con,$query);
$flight_id1=0;
if(mysqli_num_rows($result)){
	$tuple=mysqli_fetch_array($result);
	$flight_id1=$tuple[0];
}
//echo$flight_id1;


if($class=="economy"){

	
	$update_seats_query_plane1="update has_booked_seats_in_plane set booked_economy_seats=booked_economy_seats + '$anum' where plane_id='$plane_id' and flight_id in ('$flight_id','$flight_id1')";
	$update=mysqli_query($con,$update_seats_query_plane1);
	if($update);
	else echo ("Error description: ".mysqli_error($con));

 
}
if($class=="business"){

	
	$update_seats_query_plane1="update has_booked_seats_in_plane set booked_business_seats=booked_business_seats + '$anum' where plane_id='$plane_id' and flight_id in ('$flight_id','$flight_id1')";
	$update=mysqli_query($con,$update_seats_query_plane1);
	if($update);
	else echo ("Error description: ".mysqli_error($con));

 
}

if($class=="first"){

	
	$update_seats_query_plane1="update has_booked_seats_in_plane set booked_first_seats=booked_first_seats + '$anum' where plane_id='$plane_id' and flight_id in ('$flight_id','$flight_id1')";
	$update=mysqli_query($con,$update_seats_query_plane1);
	if($update);
	else echo ("Error description: ".mysqli_error($con));
	
 
}




$booking_query="insert into books (email,class,booking_name,Age,type_of_identification,id_number,phone_number,source,destination,plane_id1,total_fare,anum,cnum,dtd1,dta1) values ('$email','$class','$booking_name','$age','$type_of_identity_card','$id_number','$phone','$source','$destination','$plane_id','$total_fare','$anum','$cnum','$date_of_depart $time_of_depart','$date_of_arrival $time_of_arrival')";
$insert=mysqli_query($con,$booking_query);
if($insert)echo"<h2>BookingSuccessfull</h2>";
else echo("Error description: ".mysqli_error($con));
echo"GENERATED E-Ticket<br><br>";

echo'<ul style="list-style-type:none;">';
			   echo"<li>Flight_ID : ".$flight_id."</li>";
			   echo"<li>Booking_Name : ".$booking_name."</li>";
			   echo"<li>plane_id : ".$plane_id."</li>";
			   echo"<li>source : ".$source."</li>";
			   echo"<li>destination : ".$destination."</li>";
			   echo"<li>Age : ".$age."</li>";
			   echo"<li>Identity_Card : ".$type_of_identity_card."</li>";
			   echo"<li>ID_Number : ".$id_number."</li>";
			   echo"<li>Phone_Number : ".$phone."</li>";
			   echo"<li>Class : ".$class."</li>";
			   echo"<li>date_of_depart : ".$date_of_depart."</li>";
			   echo"<li>time_of_depart : ".$time_of_depart."</li>";
			   echo"<li>date_of_arrival : ".$date_of_arrival."</li>";
			   echo"<li>time_of_arrival : ".$time_of_arrival."</li>";
			   echo"<li>Number_of_Adults : ".$anum."</li>";
			   echo"<li>Number_of_infants : ".$cnum."</li>";
			   echo"<li>Total Fare : ".$total_fare."</li>"; 
			echo"</ul>"; 	
			echo"</div>";
			echo"</center>";
}
?>
