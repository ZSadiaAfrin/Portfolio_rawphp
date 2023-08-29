<?php
require '../login_check.php'; 
require '../db.php';
$id=$_GET['id'];
$delete_msg_info="DELETE FROM messages WHERE id=$id";
mysqli_query($database_connection,$delete_msg_info);
header('location:message.php');
?>