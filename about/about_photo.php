<?php 
require '../login_check.php';
require '../db.php';
$photo=$_FILES['photo'];
$explode=explode('.',$photo['name']);
$extension=end($explode);
$allowed_extensions=array('png','jpg','webp','jpeg');
$name=$photo['name'];
if (in_array($extension,$allowed_extensions)) { 
    if ($photo['size']<1000000) {
        $insert="INSERT INTO about_photos(photo)VALUES('$name')";
        mysqli_query($database_connection,$insert);
        $last_id=mysqli_insert_id($database_connection);
        $file_name=$last_id.'.'.$extension;
        $new_location='../uploads/about_photo/'.$file_name;
        move_uploaded_file($photo['tmp_name'],$new_location);
        header('location:about.php');

        $update="UPDATE about_photos SET photo='$file_name' WHERE id='$last_id'";
        mysqli_query($database_connection,$update);

    }
    else {
        $_SESSION['msg']='Photo size is too large!';
        header('location:about.php');
    }
}
else{
    $_SESSION['msg']='Invalid Extension!';
    header('location:about.php');
}



?>