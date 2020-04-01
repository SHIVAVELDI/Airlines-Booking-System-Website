<?php
$flight_id=$_POST["flight_id"];
$class=$_POST["class"];
$stops=$_POST["stops"];
$max=5;
if($stops){
    $seats_available1=$_POST["seats_available1"];
    $seats_available2=$_POST["seats_available2"];
    if($seats_available1<$seats_available2){
        if($seats_available1<5){
            $max=$seats_available1;
        }
    }
    else{
        if($seats_available2<5){
            $max=$seats_available2;
        }

    }


}
else{
    $seats_available=$_POST["seats_available"];
    if($seats_available<5){
        $max=$seats_available;
    }
}
?>
<html>
<head>
	<title>
		Passenger Details
	</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
</head>

<body>  
	  	<div class="header">
    		<h1>Airlines Booking Platform</h1>
    		<p>Book Flight tickets and Keep track of your Booking History</p>
    	</div>
    	<div class="topnav">
    		<a href="profile.php">Profile</a>
    		<a href="usershome.php">Home</a>
    		<a href="booktickets.php">Book Flight Ticktets</a>
    		<a href="bookinghistory.php">Your Booking History</a>
    	</div>
	
		<div class="column">
		<h3>Passenger Details</h3>
	   
	   <center>
		<form action = "proceedtopay.php" method = "POST" id="form" class="container">
			<label>BookingName:</label>
			<input type="text" name = "name" placeholder = "Name of the traveler"><br><br>
			<label>Choose Identification:</label>
			<select  for="form" id="card" name="card">
              <option value="aadhar">Aadhar Card</option>
              <option value="pan">PAN Card</option>
              <option value="voter">Voter ID</option>
            </select>  
            <label>ID_Number:</label>
            <input name = "id_num" type= "text" ><br><br>
            <label>Age:</label>
            <input name = "age" type= "number" ><br><br>
            <label>PhoneNumber:</label>
            <input type="tel" id="phone" name="phone" placeholder="10 Digit Number" pattern="[9678][0-9]{9}" required><br><br>
            <label>Number of Adults</label>
            <input type="number" name="anumticks" min="1" max="<?php echo$max; ?>"><br><br>
            <label>Number of infants</label>
            <input type="number" name="cnumticks" min="0" max="<?php echo$max; ?>">
            <input type="hidden" name="flight_id" value="<?php echo$flight_id;?>">
            <input type="hidden" name="class" value="<?php echo$class;?>">
			<button class="btn success" type = "Submit">Proceed to Pay</button>
		</form>
	</center>
	</div>
		
	
</body>
</html>


