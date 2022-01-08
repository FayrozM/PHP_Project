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
<a href="#" id="logo"><span>F</span>un maker</a>
<span class="NavBar1" ></span>
<ul>  
        <li><a href="index.php">Home </a></li>
		<li><a href="aboutus.php"> About us </a></li>
        <li><a href="#"> Favorite list </a></li>
        <li><a href="#"> contact us</a></li>
</ul>
</span>
	<ul class="navnav">
		<input id="search"  placeholder="Search category ..." >
		<input id="search"  placeholder="Search attraction ...">
		<li><span> welcome back , <?php echo $user_data['user_name']; ?> </span></li>
    </ul>
</div>

<br><br><br><br><br><br><br>

	<div class="hi">
	<span>To make your weekend better :) </span>
	</div>


	<br><br><br><br><br><br>

<div class="allCategorys">
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Indoor category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text">Indoor category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Extreme category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text">Extreme category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Water category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text">Water category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Offroad category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text">Offroad category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Ski category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text">Winter category</p>
			</div>
			</div>
	</div>
</div>


</body>
</html>