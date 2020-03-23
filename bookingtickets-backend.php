


<?php

require_once 'dbconnect.php';

$source = $_POST["source"];
$destination = $_POST["destination"];
$class = $_POST["class"];
$date_of_depart=$_POST["date_of_depart"];



$query = "SELECT * FROM airports WHERE stn_code ='$source' or airport_name='$source'"; 

$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);


if($numResults == 0)
{
	//$query = "UPDATE users SET login_count = login_count + 1 WHERE email='$email'";
	//mysqli_query($con, $query);
	echo "<br><br><br><center><h1>Invalid SourceName!</h1></center>";

}

$query = "SELECT * FROM airports WHERE stn_code ='$destination' or airport_name='$destination'"; 
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);

if($numResults == 0)
{
	//$query = "UPDATE users SET login_count = login_count + 1 WHERE email='$email'";
	//mysqli_query($con, $query);
	echo "<br><br><br><center><h1>Invalid DestinationName!</h1></center>";

}
else{
	echo'<html>
<head>
	<title>AirlinesBookingSystem</title>
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
    echo'<div class="column">';
	echo "<h1>Direct Flights from ".$source." to ".$destination."</h1><br>";

	$query = "SELECT f.flight_id,f.stops,t.plane_id,t.path,t.path_desc,t.fare,t.date_of_depart,t.time_of_depart,t.date_of_arrival,t.time_of_arrival FROM flights as f ,taken_by_plane as t WHERE f.source ='$source' and f.destination='$destination'and f.flight_id=t.flight_id and t.date_of_depart='$date_of_depart' and f.stops=0";
	$result = mysqli_query($con, $query);
	$table=mysqli_fetch_all($result);
	$numResults = mysqli_num_rows($result);

	echo'<table>

    <tr>
    <th>flight_id</th>
    <th>stops</th> 
    <th>plane_id</th>
    <th>path</th>
    <th>path_desc</th>
    <th>fare</th>
    <th>Date_of_Depart</th> 
    <th>time_of_depart</th>
    <th>Date_of_arrival</th>
    <th>time_of_arrival</th>
    <th>Class</th>  
    <th>Seats_Available</th>
    <th>BOOK_this_flights</th>
    </tr>';
	foreach ($table as $row){
    $prev_flightid=0;
    $prev_planeid=0;	
	echo  "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";

    echo "<td>".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
    echo "<td>".$row[7]."</td>";
    echo "<td>".$row[8]."</td>";
    echo "<td>".$row[9]."</td>";
    
    if($class=="first"){
    	$query="select total_first_seats,booked_first_seats from planes where plane_id='$row[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats; 
    }
    if ($class=="business") {
    	$query="select total_business_seats , booked_business_seats from planes where plane_id='$row[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats; 
    }
    if($class=="economy"){
    	$query="select total_economy_seats , booked_economy_seats from planes where plane_id='$row[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats;
    }
    echo "<td>".$class."</td>";
    echo "<td>".$seats_available."</td>";
    echo '<td>
        <form action="book.php" method="post">
        <input type="hidden" name="flight_id" value="'.$row[0].'">
        <input type="hidden" name="plane_id" value="'.$row[2].'">
        <input type="hidden" name="path" value="'.$row[3].'">
        <input type="hidden" name="path_desc" value="'.$row[4].'">
        <input type="hidden" name="class" value="'.$class.'">
        <input type="hidden" name="fare" value="'.$row[5].'">
        <input type="hidden" name="date_of_depart" value="'.$row[6].'">
        <input type="hidden" name="time_of_depart" value="'.$row[7].'">
        <input type="hidden" name="date_of_arrival" value="'.$row[8].'">
        <input type="hidden" name="time_of_arrival" value="'.$row[9].'">
        <input type="hidden" name="total_seats" value="'.$total_seats.'">
        <input type="hidden" name="booked_seats" value="'.$booked_seats.'">
        <input type="hidden" name="seats_available" value="'.$seats_available.'">
        <input type="hidden" name="source" value="'.$source.'">
        <input type="hidden" name="destination" value="'.$destination .'">
        <input type="hidden" name="stops" value="'.$row[1].'">
        <button class="btn warning" type="submit">Book</button>
        </form>
        </td>';
    echo "</tr>";
    // $prev_flightid=$current_flightid;
    // $prev_planeid=$current_planeid;
	}
	echo"</table>";
	



    echo "<h1>Indirect Flights from ".$source." to ".$destination."</h1><br>";

	$query = "SELECT f.flight_id,f.stops,t.plane_id,t.path,t.path_desc,t.fare,t.date_of_depart,t.time_of_depart,t.date_of_arrival,t.time_of_arrival FROM flights as f ,taken_by_plane as t WHERE f.source ='$source' and f.destination='$destination'and f.flight_id=t.flight_id and ((t.date_of_depart='$date_of_depart' and t.path=1)or(t.path=2)) and f.stops=1 order by f.flight_id";
	$result = mysqli_query($con, $query);
	$table=mysqli_fetch_all($result);
	$numResults = mysqli_num_rows($result);
	echo'<table >
    <tr>
    <th>flight_id</th>
    <th>stops</th> 
    <th>plane_id</th>
    <th>path</th>
    <th>path_desc</th> 
    <th>fare</th>
    <th>Date_of_Depart</th> 
    <th>time_of_depart</th>
    <th>Date_of_arrival</th>
    <th>time_of_arrival</th>
     <th>Class</th> 
    <th>Seats_Available</th>

    <th>BOOK_this_flights</th>
    </tr>';
    $prev_flightid=0;
    $current_planeid=0;	
	foreach ($table as $row){

	$current_flightid=$row[0];
	$current_planeid=$row[2];

	if($current_flightid==$prev_flightid){
	echo  "<tr>";
    echo "<td>".$prow[0]."</td>";
    echo "<td>".$prow[1]."</td>";
    echo "<td>".$prow[2]."<br><br>".$row[2]."</td>";
    echo "<td>".$prow[3]."<br><br>".$row[3]."</td>";
    echo "<td>".$prow[4]."<br><br>".$row[4]."</td>";
    echo "<td>".$prow[5]."<br><br>".$row[5]."</td>";
    echo "<td>".$prow[6]."<br><br>".$row[6]."</td>";
    echo "<td>".$prow[7]."<br><br>".$row[7]."</td>";
    echo "<td>".$prow[8]."<br><br>".$row[8]."</td>";
    echo "<td>".$prow[9]."<br><br>".$row[9]."</td>";
    
    if($class=="first"){
    	$query="select total_first_seats,booked_first_seats from planes where plane_id='$prow[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$ptotal_seats=$seats[0];
    	$pbooked_seats=$seats[1];
    	$pseats_available=$ptotal_seats-$pbooked_seats;
    	$query="select total_first_seats,booked_first_seats from planes where plane_id='$row[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats;  
    }
    if ($class=="business") {
    	$query="select total_business_seats , booked_business_seats from planes where plane_id='$prow[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$ptotal_seats=$seats[0];
    	$pbooked_seats=$seats[1];
    	$pseats_available=$ptotal_seats-$pbooked_seats;
    	$query="select total_business_seats , booked_business_seats from planes where plane_id='$row[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats; 
    }
    if($class=="economy"){
    	$query="select total_economy_seats , booked_economy_seats from planes where plane_id='$prow[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$ptotal_seats=$seats[0];
    	$pbooked_seats=$seats[1];
    	$pseats_available=$ptotal_seats-$pbooked_seats;
    	$query="select total_economy_seats , booked_economy_seats from planes where plane_id='$row[2]'";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats;
    }
    echo "<td>".$class."</td>";
    echo "<td>".$pseats_available."<br><br>".$seats_available."</td>";
    
    echo '<td>
        <form action="book.php" method="post">
        <input type="hidden" name="flight_id" value="'.$row[0].'">
        <input type="hidden" name="plane_id1" value="'.$prow[2].'">
        <input type="hidden" name="plane_id2" value="'.$row[2].'">
        <input type="hidden" name="path1" value="'.$prow[3].'">
        <input type="hidden" name="path2" value="'.$row[3].'">
        <input type="hidden" name="path_desc1" value="'.$prow[4].'">
        <input type="hidden" name="path_desc2" value="'.$row[4].'">
        <input type="hidden" name="class" value="'.$class.'">
        <input type="hidden" name="fare1" value="'.$prow[5].'">
        <input type="hidden" name="fare2" value="'.$row[5].'">
        <input type="hidden" name="date_of_depart1" value="'.$prow[6].'">
        <input type="hidden" name="date_of_depart2" value="'.$row[6].'">
        <input type="hidden" name="time_of_depart1" value="'.$prow[7].'">
        <input type="hidden" name="time_of_depart2" value="'.$row[7].'">
        
        <input type="hidden" name="date_of_arrival1" value="'.$prow[8].'">
        <input type="hidden" name="date_of_arrival2" value="'.$row[8].'">
        <input type="hidden" name="time_of_arrival1" value="'.$prow[9].'">
        <input type="hidden" name="time_of_arrival2" value="'.$row[9].'">
        <input type="hidden" name="total_seats1" value="'.$ptotal_seats.'">
        <input type="hidden" name="total_seats2" value="'.$total_seats.'">
        <input type="hidden" name="booked_seats1" value="'.$pbooked_seats.'">
        <input type="hidden" name="booked_seats2" value="'.$booked_seats.'">
        <input type="hidden" name="seats_available1" value="'.$pseats_available.'">
        <input type="hidden" name="seats_available2" value="'.$seats_available.'">
        <input type="hidden" name="source" value="'.$source.'">
        <input type="hidden" name="destination" value="'.$destination .'">
       
         <input type="hidden" name="stops" value="'.$row[1].'">
        <button class="btn warning" type="submit">Book</button>
        </form>
        </td>';
    
    echo "</tr>";
    }
    $prev_flightid=$current_flightid;
    $prev_planeid=$current_planeid;
    $prow[0]=$row[0];
	$prow[1]=$row[1];	
	$prow[2]=$row[2];
	$prow[3]=$row[3];
	$prow[4]=$row[4];
	$prow[5]=$row[5];
	$prow[6]=$row[6];
	$prow[7]=$row[7];
	$prow[8]=$row[8];
	$prow[9]=$row[9];
	}
	echo"</table>";
	echo"</div>";
	echo'</body></html>';



}
?>