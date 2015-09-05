<?php
include('../connect.php');

$fid= $_GET['fid'];
$status='0';

$sql_videos="SELECT * FROM books_file WHERE id='$fid'";
$results_videos= mysqli_query($conn,$sql_videos);
$data_videos= mysqli_fetch_array($results_videos);
$data_status= $data_videos['status'];
if($data_status==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE books_file SET status='$status' WHERE id='$fid'";
$update_query= mysqli_query($conn,$update);

header("location: manage_book_files.php");


?>