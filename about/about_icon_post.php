<?php 
require '../db.php';
require '../login_check.php';
$icon=$_POST['icon'];
$link=$_POST['link'];
$name=$_POST['name'];

$insert="INSERT INTO about_icons(icon,link,name)VALUES('$icon','$link','$name')"; 
mysqli_query($database_connection,$insert);
header('location:about.php');
?>