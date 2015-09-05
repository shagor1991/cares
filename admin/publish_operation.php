<?php
include('../connect.php');

$cid= $_GET['cid'];
$status='0';

$sql_comment="SELECT * FROM comments WHERE id='$cid'";
$results_comment= mysqli_query($conn,$sql_comment);
$data_comments= mysqli_fetch_array($results_comment);
$data_status= $data_comments['status'];
if($data_status==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE comments SET status='$status' WHERE id='$cid'";
$update_query= mysqli_query($conn,$update);

header("location: comments_table.php");


?>