<?php 
require '../login_check.php';
require '../db.php';
$id=$_GET['id'];
$dlt="DELETE FROM  blogs WHERE  id='$id'";
mysqli_query($database_connection,$dlt);
header('location:blog.php');

?>