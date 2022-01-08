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
        <li><a href="flights.html">Home </a></li>
		<li><a href="attractions.html"> About us </a></li>
        <li><a href="hotel.html"> Favorite list </a></li>
        <li><a href="car.html"> contact us</a></li>
		<input id="search"  placeholder="Search category ..." >
		<input id="search"  placeholder="Search attraction ...">

    </ul>
</div>
		
<br>
<br><br><br><br><br><br><br>
	<div class="main">
		Hello, <?php echo $user_data['user_name']; ?>
	</div>

</body>
</html>