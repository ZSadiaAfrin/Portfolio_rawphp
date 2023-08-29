<?php 
require '../login_check.php';
require '../db.php';

$sub_title=$_POST['sub_title'];
$title=mysqli_real_escape_string($database_connection,$_POST['title']);
$photo=$_FILES['photo']; 
$name=$photo['name'];

$insert="INSERT INTO project_describes(sub_title,title,photo)VALUES('$sub_title','$title','$name')"; 
mysqli_query($database_connection,$insert); 
$explode=explode('.',$photo['name']);
$extension=end($explode);
$allowed_extension=array('jpg','jpeg','webp','png');
if (in_array($extension,$allowed_extension)) {
    if ($photo['size']<10000000) {
        $last_id=mysqli_insert_id($database_connection);
        $file_name=$last_id.'.'.$extension;
        $new_location='../uploads/project/'.$file_name;
        move_uploaded_file($photo['tmp_name'],$new_location);
        $update="UPDATE project_describes SET photo='$file_name' WHERE id='$last_id'";
        mysqli_query($database_connection,$update);
        header('location:project.php');
    }
    else{
        $_SESSION['error_msg']="Photo size is too large!";
        mysqli_query($database_connection,$insert);
    }
}
else{
    $_SESSION['error_msg']="Invalid extension!";
    header('location:project.php');
}
// header('location:work.php');
?>