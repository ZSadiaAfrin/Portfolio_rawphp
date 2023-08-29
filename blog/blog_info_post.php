<?php 
require '../login_check.php';
require '../db.php';
date_default_timezone_set("Asia/Dhaka"); 
$sub_title=$_POST['sub_title']; 
$title=$_POST['title']; 
$photo=$_FILES['photo']; 
$date=date("Y/m/d H:i:s"); 
$name=$photo['name']; 

$desp=mysqli_real_escape_string ($database_connection,$_POST['desp']);
$insert="INSERT INTO blog_infos(sub_title,title,photo,date)VALUES('$sub_title','$title','$name','$date')";
mysqli_query($database_connection,$insert);
header('location:blog.php');

$explode=explode('.',$photo['name']);
$extension=end($explode);

$allowed_extension=array('jpg','jpeg','png','webp');
if (in_array($extension,$allowed_extension)) {
   if ($photo['size']<100000000) {
    $last_id=mysqli_insert_id($database_connection);
    $file_name=$last_id.'.'.$extension;
    $new_location='../uploads/blog/'.$file_name;
    move_uploaded_file($photo['tmp_name'],$new_location);
    $update="UPDATE blog_infos SET photo='$file_name' WHERE id='$last_id'";
    mysqli_query($database_connection,$update);

   }
   else{
    $_SESSION['error_msg']="Photo size is too large!";
    header('location:blog.php');
   }
}
else{
    $_SESSION['error_msg']="Invalid Extension!";
    header('location:blog.php');
}


?>