<?php
$hostname = 'localhost';
$hostuser_name = 'root';
$password = '';
$dbname = 'sadia';
$database_connection = mysqli_connect($hostname, $hostuser_name, $password, $dbname);
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);
$id = $_POST['id'];

if (empty($password)) {
    $update = "UPDATE user_tables SET name='$name',email='$email' WHERE id='$id' ";
    mysqli_query($database_connection, $update);
    header('location:user.php');
} else {
    $update = "UPDATE user_tables SET name='$name',email='$email',password='$after_hash' WHERE id='$id' ";
    mysqli_query($database_connection, $update);
    header('location:user.php');
}
