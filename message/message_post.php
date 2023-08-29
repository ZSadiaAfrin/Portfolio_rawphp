<?php 
session_start();
require '../login_check.php';
require '../db.php';
date_default_timezone_set("Asia/Dhaka"); 
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$date=date("Y-m-d h:i:s"); 
$insert="INSERT INTO messages(name,email,message,date)VALUES('$name','$email','$msg','$date')";
mysqli_query($database_connection,$insert);
$_SESSION['msg']="Your msg sent successfully!";
header('location:../index.php#contact-section')
?>