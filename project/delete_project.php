<?php
require '../login_check.php'; 
require '../db.php';
$id=$_GET['id'];
$delete_project="DELETE FROM projects WHERE id=$id";
mysqli_query($database_connection,$delete_project);
header('location:project.php');
?>