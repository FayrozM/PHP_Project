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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../frontend/login.css">
	<title>Login</title>
</head>
<body>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 10px;color: black;">Login</div>
			<br>
			<input id="text" type="text" name="user_name" placeholder="Enter your username ..."><br><br>
			<input id="text" type="password" name="password" placeholder="Enter your password ..."><br><br>

			<input id="button" type="submit" value="Login">

			<div style="font-size: 20px;margin: 10px;color: black;"><a href="signup.php">Click me Signup</a><br><br></div>
			
		</form>
	</div>

</body>
</html>



<style>

#text{

height: 40px;
border-radius: 5px;
padding: 4px;
border: solid thin black;
width: 100%;
border-bottom-right-radius: 45px;
border-top-right-radius: 45px;


}

#button{

padding: 20px;
width: 150px;
color: black;
background-color: ##bf8040;
border: none;
border-bottom-right-radius: 45px;
border-top-right-radius: 45px;

}

#box{
background-color:##66a3ff;
margin: auto;
width: 500px;
padding: 100px;
margin-top: 5%;
box-shadow: 0 0 25px rgb(0, 0, 0);
margin-right:70%;

}


	
body{

background-image: url('../images/bicycle.jpg');
background-size: 100%;
background-repeat: no-repeat; 
}

</style>