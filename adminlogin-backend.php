<?php

session_start();

require_once 'dbconnect.php';
$username = $_POST["username"];
$password = $_POST["password"];
$query = "SELECT * FROM admin WHERE username='$username' and password='$password'";

$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);

if($numResults == 1)
{
	$query = "UPDATE admin SET admin_login_count = admin_login_count + 1 WHERE username='$username'";
	mysqli_query($con, $query);
	// echo '<center><h1 class="column">Hi ".$row["username"]."!</h1></center>';
	$_SESSION["name"]=$username;

	require_once"adminshome.php";

}
else
{
	echo "<br><br><br><center><h1>Invalid credentials!</h1></center>";
}

?>

