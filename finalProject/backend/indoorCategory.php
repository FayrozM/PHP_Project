<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/indoorCategory.css">
	<title>About Us</title>
</head>

<body>
<div class="NavBar">
<a href="#" id="logo"><span>F</span>un maker</a>
<span class="NavBar1" ></span>
<ul >  
        <li><a href="index.php">Home </a></li>
		<li><a href="aboutus.php"> About us </a></li>
        <li><a href="#"> Favorite list </a></li>
        <li><a href="#"> contact us</a></li>
		<li><span> <?php echo $user_data['user_name']; ?> </span></li>
	</ul>
</span>
</div>


<br><br><br><br><br><br><br>

	<div class="hi">
	<span> - Indoor category - </span>
	</div>

</body>
</html>