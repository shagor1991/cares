<?php
session_start(); 
include('../connect.php');

date_default_timezone_set("Asia/Dhaka");
$dateTime=date("Y-m-d h-i-s");
$title= $_POST['title'];
$status= $_POST['status'];

$insert="INSERT INTO book(title,date_time,status) VALUES('$title','$dateTime','$status')";
mysqli_query($conn,$insert);

$_SESSION['msg']="Successfully added a new book!";
header("location: add_book.php");
?>