<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/admins.css">
	<title>home</title>
</head>
<body>

<div class="main">
<div class="NavBar">
<a href="index.php" id="logo"><span>F</span>un maker</a>
<span class="NavBar1" ></span>
<ul>  
		<li><a href="admins.php"> About us </a></li>
        <li><a href="#"> Favorite list </a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="#">|</a></li>
		<li><span> <?php echo $user_data['user_name']; ?> </span></li>
		<li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<br><br><br><br><br><br><br>

	<div class="hi">
	<span>About Us ;) </span>
    <h2></h2>
	</div>


	<br><br><br><br><br><br>

<div class="allCategorys">
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/fayroz.png" alt="Card image cap">
			<div class="card-body">
				<p class="card-text"><a>Hi , I'm fayroz moadi ,, 20 Y.O Software Engineer </p>
			</div>
			</div>
	</div>
	<div class="category">
			<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="../images/ayaaa.png" alt="Card image cap" style="width:157%">
			<div class="card-body">
				<p class="card-text"><a>Hi , I'm aya ismael ,, 24 Y.O Software Engineer </p>
			</div>
			</div>


	</div>
</div>


</div>

</body>
</html>