<?php

include_once('dbFunction.php');
$funObj = new dbFuntion();
if (isset($_POST['login'])){
	$email=$_POST['email'];
	$password = $_POST['password'];
	$user = $funObj -> Login($email,$password);
	if($user){
		header("location:home.php");
	}
	else{
		echo "<script>alert('Emailid / Password Not Match')</script>";
	}
}

if(isset($_POST['register']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirm_password'];
	if($password == $confirmPassword)
	{
		$email = $funObj->isUserExist($email);
		if(!$email)
		{
			$register = $funObj -> UserRegister($username,$email,$password);
			if($register)
			{
				echo "<script>alert('Registartion Successful')</script>";
			}
			else
			{
				echo "<script>alert('Registartion Not Successful')</script>";
			}
		}
		else
		{
			echo "<script>alert('Email Already Exist')</script>";
		}
	}
	else{
			echo "<script>alert('Password Not Match')</script>";
		}
}


?>




<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body style="background-color: yellow;font-family: sans-serif;">

    <h1 style="text-align: center;">Login Form</h1>
	<form name = "login" method="post" action ="">
	 <p style="text-align:center;font-size: 20px;font-weight: bold;"><br>
		<label>Email-ID&ensp;&ensp;&ensp;&ensp;</label>
		<input style="padding: 6px 15px" type ="text" name="email" placeholder="enter the email-id">
	</p>
	<p style="text-align:center;font-size: 20px;font-weight: bold;"><br>
		<label>Password&ensp;&ensp;&ensp;</label>
		<input style="padding: 6px 15px" type ="password" name="password" placeholder="enter the password">
	</p>
	<p style="text-align: center;">
		<input style="padding: 6px 15px;cursor: pointer;border: 0;" type="submit" name="register" value="Login">

	</p>
	<p style="text-align: center;">
		Not yet Account?
		<a href="register.php">sign up</a>

	</p>
	</form>	
</body>
</html>