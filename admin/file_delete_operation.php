<?php 
include('../connect.php');

$fid= $_GET['fid'];
$sql_video="SELECT * FROM books_file WHERE id='$fid'";
$results_video= mysqli_query($conn,$sql_video);
$data_video= mysqli_fetch_assoc($results_video);
$file= $data_video['filename'];
$path='../video/'.$file;
unlink($path);

$sql_delete="DELETE FROM books_file WHERE id='$fid'";
mysqli_query($conn,$sql_delete);

header("location: manage_book_files.php");
?>