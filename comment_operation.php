<?php 
include('connect.php');
date_default_timezone_set("Asia/Dhaka");
$dateTime= date("Y-m-d h-i-s");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$insert="INSERT INTO comments (name,email,phone,comment,date_time) VALUES('$name','$email','$phone','$message','$dateTime')";
mysqli_query($conn,$insert);

echo '1';
mysqli_close($conn);
?>