<?php 
require '../login_check.php';
require '../db.php';
$sub_title=$_POST['sub_title'];
$title=$_POST['title'];
$desp=$_POST['desp'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$zip_code=$_POST['zip'];
$email=$_POST['email'];
$phone=$_POST['phone']; 

$update="UPDATE abouts SET sub_title='$sub_title',title='$title',desp='$desp',name='$name',address='$address',zip='$zip_code',email='$email',phone='$phone'";
mysqli_query($database_connection,$update);
header('location:about.php');
?>