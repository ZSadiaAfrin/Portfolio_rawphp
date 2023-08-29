<?php 
require '../db.php';
require '../login_check.php';
$icon=$_POST['icon'];
$link=$_POST['link'];

$insert="INSERT INTO socials(icon,link)VALUES('$icon','$link')"; 
mysqli_query($database_connection,$insert);
header('location:social.php');
?>