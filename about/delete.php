<?php   
require '../login_check.php';
require '../db.php';
$id=$_GET['id'];
$delete="DELETE FROM about_photos WHERE id='$id'";
mysqli_query($database_connection,$delete);
header('location:about.php');


?>