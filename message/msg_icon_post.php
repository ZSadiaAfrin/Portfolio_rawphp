<?php 
require '../db.php';
require '../login_check.php';
$icon=$_POST['icon'];
$link=$_POST['link']; 

$insert="INSERT INTO msg_icons(icon,link)VALUES('$icon','$link')"; 
mysqli_query($database_connection,$insert);
header('location:message.php');
?>