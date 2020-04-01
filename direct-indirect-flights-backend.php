<?php
require_once "dbconnect.php";
$stops=$_POST["stops"];
$source=$_POST["source"];
$destination=$_POST["destination"];

if($stops){
	$plane_id1=$_POST["plane_id1"];
	$date_of_depart1=$_POST["dd1"];
	$time_of_depart1=$_POST["td1"];
	$date_of_arrival1=$_POST["da1"];
	$time_of_arrival1=$_POST["ta1"];
	$economy_fare1=$_POST["economy_fare1"];
	$business_fare1=$_POST["business_fare1"];
	$first_fare1=$_POST["first_fare1"];

	$economy_fare2=$_POST["economy_fare2"];
	$business_fare2=$_POST["business_fare2"];
	$first_fare2=$_POST["first_fare2"];
	$plane_id2=$_POST["plane_id2"];
	$date_of_depart2=$_POST["dd2"];
	$time_of_depart2=$_POST["td2"];
	$date_of_arrival2=$_POST["da2"];
	$time_of_arrival2=$_POST["ta2"];
	
	$halt=$_POST["halt"];




	$insert_query="insert into flights (source,destination,stops,halt_station) values ('$source','$destination','$stops','$halt')";
	$insert=mysqli_query($con,$insert_query);




	if($insert){
		echo"<center><h2>Data Successfully inserted into [Flights] Database</h2></center>"; 
		$flight_id_query="select * from flights order by flight_id";
		$result=mysqli_query($con,$flight_id_query);
		$tuples=mysqli_fetch_all($result);
		$last_row=mysqli_num_rows($result);
		$flight_id=$tuples[$last_row - 1][0];
		
		$insert_query="insert into taken_by_plane (flight_id,plane_id,path,path_desc,economy_fare,business_fare,first_fare,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival) values ('$flight_id','$plane_id1','1','$source to $halt','$economy_fare1','$business_fare1','$first_fare1','$date_of_depart1','$time_of_depart1','$date_of_arrival1','$time_of_arrival1')";
		$insert=mysqli_query($con,$insert_query);


		if($insert){
			echo"<center></h2>Data of Plane1 inserted Successfully into [planes] database</h2></center> ";

 			$insert_query_1="insert into has_booked_seats_in_plane (flight_id,plane_id) values ('$flight_id','$plane_id1')";
		    $insert_1=mysqli_query($con,$insert_query_1);
		    if($insert_1)echo"<center></h2>Data of Plane1 inserted Successfully into [has_booked_seats_in_plane] database</h2></center> ";
		    else echo"<center><h2>Insert of plane1 Failed in [has_booked_seats_in_plane] Database : ".mysqli_error($con)."</h2></center>";
		}
		else echo"<center><h2>Insert of plane1 Failed in [Planes] Database : ".mysqli_error($con)."</h2></center>";


	    $insert_query="insert into taken_by_plane (flight_id,plane_id,path,path_desc,economy_fare,business_fare,first_fare,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival) values ('$flight_id','$plane_id2','2','$halt to $destination','$economy_fare2','$business_fare2','$first_fare2','$date_of_depart2','$time_of_depart2','$date_of_arrival2','$time_of_arrival2')";
		$insert=mysqli_query($con,$insert_query);


		if($insert){
			echo"<center></h2>Data of Plane2 inserted Successfully into [planes] database</h2></center> ";


			$insert_query_1="insert into has_booked_seats_in_plane (flight_id,plane_id) values ('$flight_id','$plane_id2')";
		    $insert_1=mysqli_query($con,$insert_query_1);


		    if($insert_1)echo"<center></h2>Data of Plane2 inserted Successfully into [has_booked_seats_in_plane] database</h2></center> ";
		    else echo"<center><h2>Insert of plane2 Failed in [has_booked_seats_in_plane] Database : ".mysqli_error($con)."</h2></center>";


        }
		else echo"<center><h2>Insert of plane2 Failed in [Planes] Database : ".mysqli_error($con)."</h2></center>";


	}
	else echo("<center><h2>Insert Failed in [Flights] database : ".mysqli_error($con)."</h2></center>");








    $insert_query="insert into flights (source,destination) values ('$source','$halt')";
    $insert=mysqli_query($con,$insert_query);
	if($insert){
		echo"<center><h2>Data of plane1 Successfully inserted into [Flights] Database as Direct flight to intermediate station</h2></center>"; 
		$flight_id_query="select * from flights order by flight_id";
		$result=mysqli_query($con,$flight_id_query);
		$tuples=mysqli_fetch_all($result);
		$last_row=mysqli_num_rows($result);
		$flight_id=$tuples[$last_row - 1][0];
		
		$insert_query="insert into taken_by_plane (flight_id,plane_id,path,path_desc,economy_fare,business_fare,first_fare,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival) values ('$flight_id','$plane_id1','0','Direct','$economy_fare1','$business_fare1','$first_fare1','$date_of_depart1','$time_of_depart1','$date_of_arrival1','$time_of_arrival1')";

		$insert=mysqli_query($con,$insert_query);
		if($insert){
			echo"<center></h2>Data of Plane1 inserted Successfully into [taken_by_planes] database as direct plane to intermediate station</h2></center> ";

 			$insert_query_1="insert into has_booked_seats_in_plane (flight_id,plane_id) values ('$flight_id','$plane_id1')";
		    $insert_1=mysqli_query($con,$insert_query_1);
		    if($insert_1)echo"<center></h2>Data of Plane1 inserted Successfully into [has_booked_seats_in_plane] database as direct plane to intermediate station</h2></center> ";
		    else echo"<center><h2>Insert of plane1 Failed in [has_booked_seats_in_plane] Database : ".mysqli_error($con)."</h2></center>";
		}

		else echo"<center><h2>Insert of plane1 Failed in [Planes] Database as direct flight : ".mysqli_error($con)."</h2></center>";
	}
	else echo("<center><h2>Insert of plane1 Failed in [Flights] database as direct flight : ".mysqli_error($con)."</h2></center>");
    


    $insert_query="insert into flights (source,destination) values ('$halt','$destination')";
    $insert=mysqli_query($con,$insert_query);
	if($insert){
		echo"<center><h2>Data of plane2 Successfully inserted into [Flights] Database as Direct flight from intermediate station to destination</h2></center>"; 
		$flight_id_query="select * from flights order by flight_id";
		$result=mysqli_query($con,$flight_id_query);
		$tuples=mysqli_fetch_all($result);
		$last_row=mysqli_num_rows($result);
		$flight_id=$tuples[$last_row - 1][0];
		
		$insert_query="insert into taken_by_plane (flight_id,plane_id,path,path_desc,economy_fare,business_fare,first_fare,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival) values ('$flight_id','$plane_id2','0','Direct','$economy_fare2','$business_fare2','$first_fare2','$date_of_depart2','$time_of_depart2','$date_of_arrival2','$time_of_arrival2')";

		$insert=mysqli_query($con,$insert_query);
		if($insert){
			echo"<center></h2>Data of Plane2 inserted Successfully into [taken_by_planes] database as direct plane from intermediate station to destination</h2></center> ";

 			$insert_query_1="insert into has_booked_seats_in_plane (flight_id,plane_id) values ('$flight_id','$plane_id2')";
		    $insert_1=mysqli_query($con,$insert_query_1);
		    if($insert_1)echo"<center></h2>Data of Plane2 inserted Successfully into [has_booked_seats_in_plane] database as direct plane from intermediate station to destination station</h2></center> ";
		    else echo"<center><h2>Insert of plane2 Failed in [has_booked_seats_in_plane] Database as direct flight: ".mysqli_error($con)."</h2></center>";
		}

		else echo"<center><h2>Insert of plane2 Failed in [Planes] Database as direct flight : ".mysqli_error($con)."</h2></center>";
	}
	else echo("<center><h2>Insert of plane2 Failed in [Flights] database as direct flight : ".mysqli_error($con)."</h2></center>");


	
}
else{
	$plane_id=$_POST["plane_id"]; 
	$date_of_depart=$_POST["dd"];
	$time_of_depart=$_POST["td"];
	$date_of_arrival=$_POST["da"];
	$time_of_arrival=$_POST["ta"];
	$economy_fare=$_POST["economy_fare"];
	$business_fare=$_POST["business_fare"];
	$first_fare=$_POST["first_fare"];
	$insert_query="insert into flights (source,destination,stops) values ('$source','$destination','$stops')";
	$insert=mysqli_query($con,$insert_query);
	if($insert){
		echo"<center><h2>Data Successfully inserted into [Flights] Database</h2></center>";
		$flight_id_query="select * from flights order by flight_id"; 
		$result=mysqli_query($con,$flight_id_query);
		$tuples=mysqli_fetch_all($result);
		$last_row=mysqli_num_rows($result);
		$flight_id=$tuples[$last_row - 1][0];
		
		$insert_query="insert into taken_by_plane (flight_id,plane_id,path,path_desc,economy_fare,business_fare,first_fare,date_of_depart,time_of_depart,date_of_arrival,time_of_arrival) values ('$flight_id','$plane_id','0','Direct','$economy_fare','$business_fare','$first_fare','$date_of_depart','$time_of_depart','$date_of_arrival','$time_of_arrival')";
		$insert=mysqli_query($con,$insert_query);
		
		if($insert){
			echo"<center><h2>Data   Successfully inserted into [taken_by_plane] database</h2></center>";

			$insert_query_1="insert into has_booked_seats_in_plane (flight_id,plane_id) values ('$flight_id','$plane_id')";
		    $insert_1=mysqli_query($con,$insert_query_1);
		    if($insert_1)echo"<center></h2>Data of Plane inserted Successfully into [has_booked_seats_in_plane] database</h2></center> ";
		    else echo"<center><h2>Insert of plane Failed in [has_booked_seats_in_plane] Database : ".mysqli_error($con)."</h2></center>";

		}


		else echo"<center><h2>Insert Failed in [Planes] Database : ".mysqli_error($con)."</h2></center>";
	}
	else echo("<center><h2>Insert Failed in [Flights] database : ".mysqli_error($con)."</h2></center>");
}


?>