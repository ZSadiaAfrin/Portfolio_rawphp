<?php 
require '../login_check.php';
require '../db.php';
$sub_title=$_POST['sub_title']; 
$title=$_POST['title']; 
$desp=mysqli_real_escape_string ($database_connection,$_POST['desp']);
$insert="INSERT INTO contacts(sub_title,title,desp)VALUES('$sub_title','$title','$desp')";
mysqli_query($database_connection,$insert);
header('location:message.php');

?>