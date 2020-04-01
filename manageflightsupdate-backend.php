<?php
require_once "dbconnect.php";
$plane_id=$_POST["plane_id"];
$source=$_POST["source"];
$destination=$_POST["destination"];
$date_of_depart=$_POST["date"];
$time_of_depart=$_POST["time"];
$economy_fare=$_POST["economy_fare"];
$business_fare=$_POST["business_fare"];
$first_fare=$_POST["first_fare"];

$verification_query = "select * from taken_by_plane as t ,flights as f where t.plane_id='$plane_id' and t.date_of_depart='$date_of_depart' and t.time_of_depart='$time_of_depart' and t.flight_id=f.flight_id and f.source='$source' and f.destination='$destination'";
$result = mysqli_query($con, $verification_query);
$numResults = mysqli_num_rows($result); 

if($numResults)
{
    $update_query="update taken_by_plane set economy_fare=economy_fare+'$economy_fare',business_fare=business_fare+'$business_fare',first_fare=first_fare+'$first_fare' where plane_id='$plane_id' and date_of_depart='$date_of_depart' and time_of_depart='$time_of_depart' ";
    $update=mysqli_query($con,$update_query);
    if($update)echo"<center><h2>Update of fare is Successfull</center></h2>";
    else echo"<center><h2>Failed to update fare : ".mysqli_eror($con);

}
else
{
	echo "<br><br><br><center><h1>Update Failed : No Such Flights Exists!</h1></center>";
	
}

?>