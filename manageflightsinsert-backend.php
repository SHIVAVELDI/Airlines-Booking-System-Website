<?php

require_once"dbconnect.php";
$source=$_POST["source_code"];
$destination=$_POST["destination_code"];
$stops=$_POST["stops"];

if($stops){

	require_once "indirectflights.php";
	
}
else{
	
	require_once "directflights.php";
	

} 
?>