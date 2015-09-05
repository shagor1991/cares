<?php 
error_reporting(0);
session_start();

include('../connect.php');

$hidid= $_POST['hidid'];
$title= $_POST['title'];

$update="UPDATE book SET title='$title' WHERE id='$hidid'";
mysqli_query($conn,$update);

header("location: manage_book.php");
?>