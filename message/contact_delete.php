<?php
require '../login_check.php'; 
require '../db.php';
$id=$_GET['id'];
$delete_contact_info="DELETE FROM contacts WHERE id=$id";
mysqli_query($database_connection,$delete_contact_info);
header('location:message.php');
?>