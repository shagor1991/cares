<?php 
session_start();

$username=$_POST['username'];
$password=$_POST['password'];


if($username=="wpcares" && $password=='wp123456'){
	
	$_SESSION['isLogin']='1';
	// exit();

	header("location: home.php");
}else{
	$_SESSION['msg_adm']="Username or Password is incorrect!!";
	header("location: home.php");
}
?>