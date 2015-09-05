<?php
include('../connect.php');

$vid= $_GET['vid'];
$status='0';

$sql_videos="SELECT * FROM videos WHERE id='$vid'";
$results_videos= mysqli_query($conn,$sql_videos);
$data_videos= mysqli_fetch_array($results_videos);
$data_status= $data_videos['status'];
if($data_status==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE videos SET status='$status' WHERE id='$vid'";
$update_query= mysqli_query($conn,$update);

header("location: manage_video.php");


?>