<?php 
include('../connect.php');

$vid= $_GET['vid'];
$sql_video="SELECT * FROM videos WHERE id='$vid'";
$results_video= mysqli_query($conn,$sql_video);
$data_video= mysqli_fetch_assoc($results_video);
$video= $data_video['video'];
$path='../video/'.$video;
unlink($path);

$sql_delete="DELETE FROM videos WHERE id='$vid'";
mysqli_query($conn,$sql_delete);

header("location: manage_video.php");
?>