<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="../frontend/signup.css">

</head>
<body>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 20px;color: black;">- Signup - </div>

			<input id="text" type="text" name="user_name" placeholder="Enter your name ..."><br><br>
			<input id="text" type="password" name="password" placeholder="Enter your password ..."><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<span class="login"><a href="login.php" >Click me to Login</a><br><br></span>
		</form>
	</div>
	</div>
</body>
</html>

<style type="text/css">

body{

		background-image: url('../images/surfing.jpg');
		background-size: 105%;
		background-repeat: no-repeat; 
	}
	#text{

		height: 35px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 130%;
		border-bottom-right-radius: 45px;
		border-top-right-radius: 45px;
	}

	#button{

		padding: 10px;
		width: 150px;
		color: white;
		background-color: #006699;
		border: none;
		border-bottom-right-radius: 45px;
		border-top-right-radius: 45px;
	}

	#box{
		margin: auto;
		width: 350px;
		padding: 20px;
		margin-top: 10%;

	}


.Bg-Image {
  background-repeat: no-repeat; /* להציג את התמונה פעם אחת בלבד  */  background-position: center;
  background-size: cover;
}

	</style>

