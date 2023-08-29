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

$insert="INSERT INTO abouts(sub_title,title,desp,name,dob,address,zip,email,phone)VALUES('$sub_title','$title','$desp','$name','$dob','$address','$zip_code','$email','$phone')";
mysqli_query($database_connection,$insert);
header('location:about.php');
?>