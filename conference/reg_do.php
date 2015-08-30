<?php

include("common.php");



$name=$_POST['title'].$_POST['name'];

$institution=$_POST['institution'];

$address=$_POST['address'];

$email=$_POST['email'];

$contact=$_POST['contact'];

$attend_conf=$_POST['attend_conf'];

$paper=$_POST['paper'];

$poster=$_POST['poster'];

$pay_mode=$_POST['pay_mode'];

$passport=$_POST['passport'];





//------------------------------------------
if ((($_FILES["photo"]["type"] == "image/gif")
|| ($_FILES["photo"]["type"] == "image/jpeg")
|| ($_FILES["photo"]["type"] == "image/jpg")
|| ($_FILES["photo"]["type"] == "image/tiff")
|| ($_FILES["photo"]["type"] == "image/pjpeg"))
&& ($_FILES["photo"]["size"] < 900000000))
{
	if ($_FILES["photo"]["error"] > 0)
	{
		header("location: error.html");
	}
	else
		{
			"Upload: " . $_FILES["photo"]["name"] . "<br />";
			"Type: " . $_FILES["photo"]["type"] . "<br />";
			"Size: " . ($_FILES["photo"]["size"] / 1024) . " Kb<br />";
			"Temp file: " . $_FILES["photo"]["tmp_name"] . "<br />";
			$ext = explode('.',$_FILES['photo']['name']);
			$ext2=substr(strrchr($_FILES['photo']['name'], "."),1);
			$extension = $ext[1];
			srand(time(0));
			$token=100000+rand()%(900000-100000);
			$newname=$token.'.'.$ext2;
			
			if (file_exists("upload/" . $newname))
			{
				 $_FILES["photo"]["name"] . " already exists. ";
			}
			else
			{
				move_uploaded_file($_FILES["photo"]["tmp_name"],
				"upload/" . $newname);
				"Stored in: " . "upload/" . $_FILES["photo"]["name"];

				 $insert_sql="INSERT `registration`(name,institution, address,email,contact,attend_conf,paper,poster,pay_mode,photo,passport)
				VALUES('$name','$institution','$address','$email','$contact','$attend_conf','$paper','$poster','$pay_mode','$newname','$passport')";

				mysql_query($insert_sql);
				
				header("location:index.php");
			} 
		} 
}



?>