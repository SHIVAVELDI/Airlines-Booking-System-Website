<?php

// Start the session
session_start();

require_once "dbconnect.php";
$email = $_POST["email"];
$password = $_POST["password"];
$password = md5($password);
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);

if($numResults == 1)
{
	$query = "UPDATE users SET login_count = login_count + 1 WHERE email='$email'";
	mysqli_query($con, $query);
   $_SESSION["email"]=$email;
	require_once "usershome.php";

}
else
{
	echo "<br><br><br><center><h1>Invalid credentials!</h1></center>";
}

?>

