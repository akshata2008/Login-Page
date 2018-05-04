<?php

	require 'dbconfig/config.php';
	ob_start(); 
	session_start(); 
	if(isset($_SESSION['username']) && !empty($_SESSION['username']))		//this will return TRUE if you are logged in, because the USERNAME IS SET ISSET isset()
	{
		header('Location: homepage.php'); 
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="CSS/style.css">
</head>

<body style="background-color:#95a5a6">
	
	<div id="main">
	<center><h2>Login Form</h2>
	<img src="Images/male.png" class="profile">
	</center>
	<form class="myform" action="index.php" method="post">
		<label>Username</label><br>
		<input name="username" type= "text" class= "ivalues" placeholder="Enter your username"/>
		<label id="p_label">Password</label><br>
		<input name="password" type= "password" class= "ivalues" placeholder="Enter your password"/>

		<input name="submit_btn" type= "submit" id= "login_btn" value="Login"/><br>
		<a href="register.php"><input type= "button" id= "register_btn" value="Register"/></a><br>
	</form>
	
	<?php
	
	if(isset($_POST['submit_btn']))
	{
		//echo'<script type="text/javascript"> alert("Login button clicked")</script>';
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = " select * from login WHERE username='$username' AND password='$password'";
		$query_run = mysqli_query($con,$query);
		
		echo'<script type="text/javascript"> alert($query)</script>';
		if(mysqli_num_rows($query_run)>0)		//valid user
		{
			$_SESSION['username']=$username;	//store the values so as they can be accessed in the home page; lasts throughout the lifecyle of the browser 
												//values will be available in all thr pages
												
			header('location:homepage.php');	//transfer control to homepage
		}
		else									//invalid user
		{
			echo '<script text="text/javascript"> alert("Invalid user.")</script>';
		}
	}
	
	?>
	</div>
</body>
</html>