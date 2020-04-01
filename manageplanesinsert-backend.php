<?php


/*$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';


$plane_id = $_POST["plane_id"];
$airlines = $_POST["airlines"];
$total_economy_seats = $_POST["total_economy_seats"];
$total_business_seats = $_POST["total_business_seats"];

$total_first_seats = $_POST["total_first_seats"];



$query="select * from planes where plane_id='$plane_id'";
$result = mysqli_query($con,$query);
$numResults = mysqli_num_rows($result);


if($numResults == 1)
{
	echo "<br><br><br><center><h1>Plane_id is already present</h1></center>";
}
else
{   
	//require_once 'dbconnect.php';
	$sql=mysqli_query($con, "insert into planes (plane_id,airlines,total_economy_seats,total_business_seats,total_first_seats) values ('$plane_id', '$airlines','$total_economy_seats','$total_business_seats','$total_first_seats')");
	if($sql)echo "<br><br><br><center><h1>".$plane_id." from airlines ".$airlines." is Successfully added to Database </h1></center>";
    else echo("Error description: ".mysqli_error($con)); 
}





?>
