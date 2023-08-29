<?php
require '../login_check.php'; 
require '../db.php';
$id=$_GET['id'];
$delete_skill_info="DELETE FROM work_infos WHERE id=$id";
mysqli_query($database_connection,$delete_skill_info);
header('location:work.php');
?>