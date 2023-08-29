<?php 
require '../login_check.php';
require '../db.php';
$id=$_GET['id'];
$select="SELECT * FROM about_photos WHERE status=1";
$select_res=mysqli_query($database_connection,$select);
$after_assoc_about=mysqli_fetch_assoc($select_res);
if ($after_assoc_about['status']==1) {
    $update="UPDATE about_photos SET status=0 WHERE id='$id'";
    mysqli_query($database_connection,$update);
    header('location:about.php');
}
else{
    $update1="UPDATE about_photos SET status=0";
    mysqli_query($database_connection,$update1);

    $update2="UPDATE about_photos SET status=1 WHERE id='$id' ";
    mysqli_query($database_connection,$update2);
    header('location:about.php');
}


?>