<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/style.css">
	<title>home</title>
</head>
<body>
<div class="NavBar">
<a href="index.html" id="logo"><span>F</span>un maker</a>
    <ul>  
        <li><a class="act" href="home.php">Home</a></li>
        <li><a href="flights.html">Flights </a></li>
        <li><a href="hotel.html"> Hotel </a></li>
        <li><a href="car.html"> Car Rentals </a></li>
        <li><a href="attractions.html"> Attractions </a></li>
        <li><a href="signup.php" > Sign in </a></li>
		<li><a href="logout.php">Logout</a></li>
        
    </ul>
</div>
		
<br>
<br><br><br><br><br><br><br>
	<div class="main">
	<a> href="logout.php">Logout</a>
		<br>
		Hello, <?php echo $user_data['user_name']; ?>
	</div>

</body>
</html>