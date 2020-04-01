<?php
require_once "dbconnect.php";

$query="select * from planes order by plane_id";
$result=mysqli_query($con,$query);
$tuples=mysqli_fetch_all($result);



?>