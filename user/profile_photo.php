<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$upload_photo = $_FILES['photo'];
$after_explode = explode('.', $upload_photo['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'webp');
if (in_array($extension, $allowed_extension)) {
    if ($upload_photo['size'] <= 1000000) { 
        $file_name = $id . '.' . $extension; 
        $new_location='../uploads/user/'.$file_name;
        move_uploaded_file($upload_photo['tmp_name'],$new_location); 

        $uploads="UPDATE user_tables SET photo='$file_name' WHERE id='$id'";
        mysqli_query($database_connection,$uploads); 
        header('location:profile.php');
    } else {
        $_SESSION['error'] = 'File size is too large, max file size 1MB!';
        header('location:profile.php');
    }
}
 else {
    $_SESSION['error'] = 'Invalid Extension!';
    header('location:profile.php');
}
