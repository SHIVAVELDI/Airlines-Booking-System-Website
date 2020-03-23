<?php
require_once 'dbconnect.php';
$dstn_code=$_POST["dstn_code"];

$query="select * from airports where stn_code='$dstn_code'";
$result = mysqli_query($con,$query);
$numResults = mysqli_num_rows($result);

if($numResults == 1)
{
	$sql=mysqli_query($con, "delete from airports where stn_code='$dstn_code'");
	if($sql)echo "<br><br><br><center><h1>".$dstn_code." Successfully deleted from the Airports Database </h1></center>";
    else echo("Error description: ".mysqli_error($con)); 
}
else
{   
    echo "<br><br><br><center><h1>".$dstn_code. " is not present in the Airports database</h1></center>";
}
?>
