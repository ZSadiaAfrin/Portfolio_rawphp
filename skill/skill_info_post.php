<?php 
require '../login_check.php';
require '../db.php';

$sub_title=$_POST['sub_title'];
$title=$_POST['title'];
$desp=$_POST['desp'];


$insert="INSERT INTO skill_infos(sub_title,title,desp)VALUES('$sub_title','$title','$desp')";
mysqli_query($database_connection,$insert);
header('location:skill.php');
?>