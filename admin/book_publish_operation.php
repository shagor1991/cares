<?php
include('../connect.php');

$bid= $_GET['bid'];
$status='0';

$sql_comment="SELECT * FROM book WHERE id='$bid'";
$results_comment= mysqli_query($conn,$sql_comment);
$data_comments= mysqli_fetch_array($results_comment);
$data_status= $data_comments['status'];
if($data_status==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE book SET status='$status' WHERE id='$bid'";
$update_query= mysqli_query($conn,$update);

header("location: manage_book.php");


?>