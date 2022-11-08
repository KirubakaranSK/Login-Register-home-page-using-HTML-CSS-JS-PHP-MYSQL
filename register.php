<!DOCTYPE html>
<html>
<head>
	<title>Registartion form </title>
</head>
<body style="background-color: aqua;font-family: sans-serif;">
<form name="login" method ="post" action ="index.php">
	<h1 style="text-align: center;">Register Form</h1>

	<p style="text-align:center;font-size: 20px;font-weight: bold;"><br>
		<label>UserName&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
		<input style="padding: 6px 15px" type ="text" name="username" placeholder="enter the username..">
	</p>
    <p style="text-align:center;font-size: 20px;font-weight: bold;"><br>
		<label>Email-id&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
		<input style="padding: 6px 15px" type ="text" name="email" placeholder="enter the email-id..">
	</p>
	<p style="text-align:center;font-size: 20px;font-weight: bold;"><br>
		<label>Password&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
		<input style="padding: 6px 15px" type ="password" name="password" placeholder="enter the password..">
	</p>
	<p style="text-align:center;font-size: 20px;font-weight: bold;"><br>
		<label>Confirm Password&ensp;&ensp;&ensp;&ensp;</label>
		<input style="padding: 6px 15px" type ="password" name="confirmpassword" placeholder=" Re-enter the  password..">
	</p><br>
	<p style="text-align: center;">
		<input style="padding: 6px 15px;cursor: pointer; border: 0;" type="submit" name="register" value="Register">
	</p>
	<p style="text-align: center;">
		Already Member?
		<a href="index.php">Just Login</a>
	</p>
</form>

</body>
</html>
