<?php 
require '../login_check.php';
require '../db.php';

$skill=$_POST['skill']; 
$percentage=$_POST['percentage'];
$week_per=$_POST['week_per'];
$week=$_POST['week'];
$month_per=$_POST['month_per'];
$month=$_POST['month'];

$insert="INSERT INTO skills(skill,percentage,week_per,week,month_per,month)VALUES('$skill','$percentage','$week_per','$week','$month_per','$month')";
mysqli_query($database_connection,$insert);
header('location:skill.php');
?>