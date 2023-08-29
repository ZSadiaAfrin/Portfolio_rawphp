<?php 
session_start();
require '../login_check.php';
$hostname='localhost';
$hostuser_name='root';
$password='';
$dbname='sadia';
$database_connection=mysqli_connect($hostname,$hostuser_name,$password,$dbname);

$id=$_GET['id'];
$delete="DELETE FROM user_tables WHERE id=$id";
$delete_user=mysqli_query($database_connection,$delete);

$_SESSION['delete']='User deleted successfully!';
header('location:user.php');
?>