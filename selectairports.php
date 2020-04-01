<?php
require_once "dbconnect.php";

$query="select * from airports order by airport_name";
$result=mysqli_query($con,$query);
$tuples=mysqli_fetch_all($result);



?>
