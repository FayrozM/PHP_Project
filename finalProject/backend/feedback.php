<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/feedback.css">
	<title>feedback</title>
</head>

<body>
<div class="NavBar">
<a href="home.php" id="logo"><span>F</span>un maker</a>
<span class="NavBar1" ></span>
<ul >  
        <li><a href="home.php">Home </a></li>
		<li><a href="admins.php"> About us </a></li>
        <li><a href="#">Favorite list </a></li>
        <li><a></a>|</li>
		<li><span> <?php echo $user_data['user_name']; ?> </span></li>
        <li><a href="logout.php">Logout</a></li>

	</ul>
</span>
</div>

<br><br><br><br><br><br><br>

	<div class="hi">
	<span> - feedback - </span>
	</div>


    <br><br><br><br><br><br><br>

    <form  method="POST" action="1.php"  enctype="multipart/form-data">
       <div class="giveFeedback">
       <span>Give Us Your Feedback - </span>
       <h4>We'd love to hear what you thought about this attraction . </h4> 
       </div>

       <div class="feedbackErea">
           <h2>Email *</h2>
       <textarea name="text" cols="50" rows="2" ></textarea>
       <br><br>
       <input type="hidden" id="backing7">


           <h2>What is the best thing ,, what should we improve ? </h2>
       <textarea name="text" cols="50" rows="4" ></textarea>
       <br><br>

       <div class="feedbackButton">
       <button id="feedback" onclick="window.location.href = 'feedback.php';">Send feedback</button>

       </div>

       </div>
       <div class="lala">
           
       </div>
   </form>


</body>
</html>
