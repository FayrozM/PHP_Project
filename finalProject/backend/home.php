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
	<div class="main">
	<div class="NavBar">
<a href="finalProject/backend/home.php" id="logo"><span>F</span>un maker</a>
<span class="NavBar1" ></span>
<ul>  
		<li><a href="admins.php"> About us </a></li>
        <li><a href="#"> Favorite list </a></li>
        <li><a href="feedback.php">Feedback</a></li>
</ul>
</span>
	<ul class="navnav">
		<input id="search"  placeholder="Search category ..." >
		<input id="search"  placeholder="Search attraction ...">
		<li><span> welcome back , <?php echo $user_data['user_name']; ?> </span></li>
		<li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<br><br><br><br><br><br><br><br><br><br>

	<div class="hi">
	<span>To make your weekend better :) 
	<br><br><br>
	The israel is home to some of the most spectacular scenery in the world <br> 
	and some of the most recognizable icons on the planet. <br>
				Many of the top attractions in israel are bucket list destinations, drawing visitors from around the world.<br>

				Plenty of options await you, with incredible sights sprinkled across the country. 
				<br>
				<br>
				--> Note: Some businesses may be temporarily closed due to recent global health and safety issues - ( Covid-19 ).
	</span>
</div>




	<br><br><br><br><br><br>

<div class="allCategorys">
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Indoor category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><a href="indoorCategory.php">Indoor category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Extreme category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><a href="extremeCategory.php">Extreme category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Water category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><a href="waterCategory.php">Water category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Offroad category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><a href="offroadCategory.php">Offroad category</p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/Ski category.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><a href="winterCategory.php">Winter category</p>
			</div>
			</div>
	</div>
</div>

	</div>
</body>
</html>