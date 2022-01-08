<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/index.css">
	<title>home</title>
</head>
<body>
<div>
	<div class="Navbar">
		<a href="index.html" id="logo"><span>V</span>ubert</a>
			<!--ID - של סרגל הכלים -->
			<ul id="Toolbar">
			<li><a href="index.html">Home</a></li>
			<li><a href="bundles.html">Bundles</a></li>
			<li><a href="community.html">Community</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="about.html">About</a></li>
			<li>|</li>
			<li><a href="signIn.html">Sign in</a></li>
			</ul>
	</div>

		<a href="logout.php">Logout</a>
		<h1>This is the index page</h1>

		<br>
		Hello, <?php echo $user_data['user_name']; ?>
</div>

</body>
</html>