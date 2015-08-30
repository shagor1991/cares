<?php 
$conn= mysqli_connect('localhost','root','','cares');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>