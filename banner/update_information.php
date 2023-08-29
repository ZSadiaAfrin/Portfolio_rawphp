<?php 
session_start();
require '../db.php';
$sub_title=$_POST['sub_title'];
$title=$_POST['title']; 
$id=$_POST['id'];

$update="UPDATE banner_informations SET sub_title='$sub_title',title='$title' WHERE id=$id";
mysqli_query($database_connection,$update );
header("location:add_banner.php");


?>