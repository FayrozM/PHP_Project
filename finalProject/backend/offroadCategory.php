<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/offroadCategory.css">
	<title>Offroad Category</title>
</head>

<body>
<div class="NavBar">
<a href="index.php" id="logo"><span>F</span>un maker</a>
<span class="NavBar1" ></span>
<ul >  
        <li><a href="index.php">Home </a></li>
		<li><a href="admins.php"> About us </a></li>
        <li><a href="#"> Favorite list </a></li>
        <li><a href="feedback.php">Feedback</a></li>
		<li><a></a>|</li>
		<li><span> <?php echo $user_data['user_name']; ?> </span></li>
		<li><a href="logout.php">Logout</a></li>

	</ul>
</span>
</div>


<br><br><br><br><br><br><br>

	<div class="hi">
	<span> - Offroad category - </span>
	</div>

</body>
</html>