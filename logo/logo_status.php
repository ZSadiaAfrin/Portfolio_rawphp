<?php 
session_start();
require '../db.php';
$id=$_GET['id'];
$logo="SELECT * FROM logos WHERE id=$id";
$logo_res=mysqli_query($database_connection,$logo); 
$after_assoc=mysqli_fetch_assoc($logo_res);
if ($after_assoc['status']==1){
   
    $update2="UPDATE logos SET status=0 WHERE id=$id";
    mysqli_query($database_connection,$update2);
    header('location:add_logo.php');
   
}
else{
    $update="UPDATE logos SET status=0";
    mysqli_query($database_connection,$update);
    $update3="UPDATE logos SET status=1 WHERE id=$id";
    mysqli_query($database_connection,$update3);
    header('location:add_logo.php');
}


?>