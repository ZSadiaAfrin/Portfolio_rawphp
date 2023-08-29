<?php
require '../login_check.php'; 
require '../db.php';
$id=$_GET['id'];
$delete_skill="DELETE FROM skills WHERE id=$id";
mysqli_query($database_connection,$delete_skill);
header('location:skill.php');
?>