<?php
	session_start();
	include("../common.php");

 	 $username=$_POST['std_id'];
	 $password=$_POST['password'];
	 $query = mysql_query("SELECT * FROM `user` WHERE admin ='$username' AND password='$password'");
	if (mysql_error()) {
	   die(mysql_error());
	}
	$numrows = mysql_num_rows($query);
	if($numrows == 1)
		{
			if($username=='admin')
			{
			$_SESSION['role'] =1;
			$_SESSION['name']=$username;
			
			header("Location:search.php");
			}
			
		}
	else{
	 		header("Location:index.php?loginInfo=false");
		}
?>