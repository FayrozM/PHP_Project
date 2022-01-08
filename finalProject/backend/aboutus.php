<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/aboutus.css">
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
	</ul>
</span>
	<ul class="navnav">
		<li><span> <?php echo $user_data['user_name']; ?> </span></li>
    </ul>
</div>
   <div class="Main-Content">
      <div class="About-Us" >
        <div class="Aya Box">
        <img class="img" src="../images/Indoor category.png" alt="Card image cap">
          <div class="Info-Box">
            <h1>Aya </h1>
            <p >Hi, I am Aya Ismael ,</p>
            <p id="demo">I am a junior software developer with a year of experience doing web developments and databases</p>

          </div>
        </div>
        <div class="Fayroz Box">
        <img class="img" src="../images/Indoor category.png" alt="Card image cap">
          <div class="Info-Box">
            <h1>Fayroz </h1>
            <p >Hi, I am Fayroz Moadi ,</p>
            <p id="demo1">I am a junior software developer with a year of experience doing web developments and databases</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</body>
</html>