<?php 
require '../login_check.php';
require '../db.php';
$logo=$_FILES['logo_name'];
$after_explode=explode('.',$logo['name']);
$extension=end($after_explode);
$allowed_extensions=array('jpg','jpeg','webp','png');
$name=$logo['name'];
if(in_array($extension, $allowed_extensions)){
if($logo['size'] <= 1000000 ){
    $insert="INSERT INTO logos(logo)VALUES('$name')";
    mysqli_query($database_connection,$insert);
    $last_id=mysqli_insert_id($database_connection);
    $file_name=$last_id.'.'.$extension;
    $new_location="../uploads/logo/".$file_name;
    move_uploaded_file($logo['tmp_name'],$new_location);

    $update="UPDATE logos SET logo='$file_name' WHERE id=$last_id";
    mysqli_query($database_connection,$update);
    header('location:add_logo.php');


}
else{
    $_SESSION['error']="File size not more than 1MB!";
    header('location:add_logo.php');

}
}
else{
    $_SESSION['error']='Invalid Extension!';
    header('location:add_logo.php');
}



// $insert="INSERT INTO logos(logo)VALUES('$logo')";


?>