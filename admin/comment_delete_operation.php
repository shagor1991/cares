<?php 
include('../connect.php');

$cid= $_GET['cid'];

$sql_delete="DELETE FROM comments WHERE id='$cid'";
mysqli_query($conn,$sql_delete);

header("location: manage_book_files.php");
?>