<?php 
require '../login_check.php';
require '../db.php';
$id=$_GET['id'];
$select="SELECT * FROM banner2_photos WHERE id=$id";
$select_res=mysqli_query($database_connection,$select);
$after_assoc_status=mysqli_fetch_assoc($select_res);
if ($after_assoc_status['status']==1) {
    $update="UPDATE banner_photos SET status=0 id='$id";
    mysqli_query($database_connection,$update);
    header('location:add_banner.php');
}
else{ 
    $update="UPDATE banner2_photos SET status=0";
    mysqli_query($database_connection,$update);
    header('location:add_banner.php');

    $update="UPDATE banner2_photos SET status=1 WHERE id='$id'";
    mysqli_query($database_connection,$update);
    header('location:add_banner.php');
}


?>