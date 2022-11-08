<?php
require_once'dbConnect.php';
session_start();
class dbFuntion
{

    function __construct()
    {

     $db = new dbConnect();;

    }

public function UserRegister($username,$email,$password)
{
	$password = ($password);
	$qr = mysql_query("INSERT INTO users(username,email,password) values('".$username."','".$email."','".$password."')") or die (mysql_error());
	return $qr;

}
public function Login ($email,$password)
{
	$res = mysql_query("SELECT * FROM users where email ='".$email."' AND password = '".($password)."'");
	$user_data = mysql_fetch_array($res);
	$no_rows = mysql_num_rows($res);

	if($no_rows == 1)
	{
		$_SESSION['login']= true;
		$_SESSION['uid'] = $user_data['id'];
		$_SESSION['username'] = $user_data['username'];
		$_SESSION['email']=$user_data['username'];
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}
public function isUserExist($email)
{
	$qr= mysql_query("SELECT * FROM users WHERE email = '".$email."'");
	echo $row = mysql_num_rows($qr);
	if($row > 0)
	{
		return true;
	}
	else
	{
		return false;

	}
}

}


?>