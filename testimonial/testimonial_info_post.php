<?php 
require '../login_check.php';
require '../db.php';
$sub_title=$_POST['sub_title']; 
$title=$_POST['title']; 
$photo=$_FILES['photo'];
$name=$photo['name']; 

$desp=mysqli_real_escape_string ($database_connection,$_POST['desp']);
$insert="INSERT INTO testimonial_infos(sub_title,title,desp,photo)VALUES('$sub_title','$title','$desp','$name')";
mysqli_query($database_connection,$insert);
header('location:testimonial.php');

$explode=explode('.',$photo['name']);
$extension=end($explode);

$allowed_extension=array('jpg','jpeg','png','webp');
if (in_array($extension,$allowed_extension)) {
   if ($photo['size']<1000000) {
    $last_id=mysqli_insert_id($database_connection);
    $file_name=$last_id.'.'.$extension;
    $new_location='../uploads/testimonial/'.$file_name;
    move_uploaded_file($photo['tmp_name'],$new_location);
    $update="UPDATE testimonial_infos SET photo='$file_name' WHERE id='$last_id'";
    mysqli_query($database_connection,$update);

   }
   else{
    $_SESSION['error_msg']="Photo size is too large!";
    header('location:testimonial.php');
   }
}
else{
    $_SESSION['error_msg']="Invalid Extension!";
    header('location:testimonial.php');
}


?>