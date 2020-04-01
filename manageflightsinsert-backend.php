<?php

require_once"dbconnect.php";
$source=$_POST["source"];
$destination=$_POST["destination"];
$stops=$_POST["stops"];

if($stops){

	require_once "indirectflights.php";
	
}
else{
	
	require_once "directflights.php";
	

} 
?>