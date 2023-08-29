<?php 
session_start();
require '../db.php';
$photo=$_FILES['photo'];
$explode=explode(".",$photo['name']);
$extension=end($explode);
$allowed_extension=array("jpg","png","jpeg","webp");
$name=$photo['name'];
if(in_array($extension,$allowed_extension)){
if ($photo['size']<=100000) {
    
$insert="INSERT INTO banner2_photos(photo)VALUES('$name')";
mysqli_query($database_connection,$insert);
$last_id=mysqli_insert_id($database_connection);
$file_name=$last_id.".".$extension; 

$new_location="../uploads/banner1/".$file_name;
move_uploaded_file($photo['tmp_name'],$new_location); 


$update="UPDATE banner2_photos SET photo='$file_name' WHERE id=$last_id";
mysqli_query($database_connection,$update); 
header("location:add_banner.php");
}
else{
    $_SESSION['error1']="Photo size too large not more then 1 MB!";
    header("location:add_banner.php");  
}
}
else{
    $_SESSION['error1']="Invalid Extension!";
    header("location:add_banner.php");
}


?>