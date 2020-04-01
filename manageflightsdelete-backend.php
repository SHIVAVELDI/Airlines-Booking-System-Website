<?php
require_once "dbconnect.php";
$plane_id=$_POST["plane_id"];
$source=$_POST["source"];
$destination=$_POST["destination"];
$date_of_depart=$_POST["date"];
$time_of_depart=$_POST["time"];
 $query="select flight_id from taken_by_plane where plane_id='$plane_id' and date_of_depart='$date_of_depart' and time_of_depart='$time_of_depart'";
 $result=mysqli_query($con,$query);
 $result_row=mysqli_fetch_array($result);
 $flight_id=$result_row[0];
$delete_query="delete from taken_by_plane where flight_id='$flight_id'";
$delete=mysqli_query($con,$delete_query);

if($delete){
	echo"<center><h2>Successfully Deleted from Taken_By_plane Database</h2></center>";
	$delete_query="delete from flights where flight_id='$flight_id'";
    $delete=mysqli_query($con,$delete_query);
    if($delete)echo"<center><h2>Successfully Deleted from Flights</h2></center>";
    else echo"<center><h2>Error in Deleting from [Flights] Database".mysqli_error($con)."</h2></center>";

}
else  echo"<center><h2>Error in Deleting from [Taken_By_plane] Database ".mysqli_error($con)."</h2></center>";

?>