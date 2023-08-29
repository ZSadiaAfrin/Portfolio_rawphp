<?php 
session_start();
require '../db.php'; 
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password']; 
$after_hash=password_hash($password,PASSWORD_DEFAULT);

if (empty($password)) {
    $update="UPDATE user_tables SET name='$name',email='$email'WHERE id=$id";
    mysqli_query($database_connection,$update);
    header('location:profile.php');
}
else{
    $update="UPDATE user_tables SET name='$name',email='$email',password='$after_hash' WHERE id=$id";
    mysqli_query($database_connection,$update);
    header('location:profile.php');
}


?>