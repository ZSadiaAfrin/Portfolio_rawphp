<?php
require '../login_check.php'; 
require '../db.php';
$id=$_GET['id'];
$delete_skill_service="DELETE FROM work_services WHERE id=$id";
mysqli_query($database_connection,$delete_skill_service);
header('location:work.php');
?>