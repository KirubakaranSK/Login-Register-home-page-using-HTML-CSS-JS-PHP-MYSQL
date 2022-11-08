<?php 
include_once('dbFunction.php');
if (isset($_POST['welcom'])){
	session_unset();
	session_destroy();
}
if(!($_SESSION)){
	header("Location:index.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>User Homepage</title>
</head>
<body style="background-color: pink;font-family: sans-serif;">
	<form name ="login" method = "post" action="">
		<h1> welcome <?=$_SESSION['username']?></h1><br>
		<p style = "text-align : center;">
			<label for="email" calss="uname"> Name:</label>
		    <?=$_SESSION['username']?>
		</p>
		<p style = "text-align : center;">
			<label for="email" calss="youpasswd"> Email:</label>
		    <?=$_SESSION['email']?>
		</p><br>
		<p class="login button" style="text-align:center;">
          <input type ="submit" name = "welcome" value="Logout" />
         </p>
     </form>

</body>
</html>