<?php 
require '../login_check.php';
require '../db.php';

$icon=$_POST['icon'];
$link=$_POST['link'];
$sub_title=$_POST['sub_title']; 
$title=mysqli_real_escape_string($database_connection,$_POST['title']);
 

$insert_icon="INSERT INTO works(icon,link,sub_title,title)VALUES('$icon','$link','$sub_title','$title')";
mysqli_query($database_connection,$insert_icon);
header('location:work.php');
?>