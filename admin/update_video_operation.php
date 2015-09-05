<?php 
include('../connect.php');

$title= $_POST['title'];
$hidid= $_POST['hidid'];

$update="UPDATE videos SET title='$title' WHERE id='$hidid'";
mysqli_query($conn,$update);

header("location: manage_video.php");

?>