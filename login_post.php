<?php
session_start();
$hostname='localhost';
$hostuser_name='root';
$password='';
$dbname='sadia';
$database_connection=mysqli_connect($hostname,$hostuser_name,$password,$dbname);
$email=$_POST['email'];
$password = $_POST['password'];

$select="SELECT COUNT(*) as get_count FROM user_tables WHERE email='$email'";
$insert=mysqli_query($database_connection,$select);
$after_assoc=mysqli_fetch_assoc($insert);

if ($after_assoc['get_count']==1) {
    $select1="SELECT * FROM user_tables WHERE email='$email'";
    $insert1=mysqli_query($database_connection,$select1);
    $after_assoc1=mysqli_fetch_assoc($insert1);
    echo $after_assoc1['password'];
    if(password_verify($password,$after_assoc1['password'])){
        $_SESSION['login_success']='Your are login successfully!';
        $_SESSION['id']=$after_assoc1['id']; 
        header('location:dashboard.php');
    }
    else{
        $_SESSION['wrong_pass']='Your Password Wrong!';
        header('location:login.php');
    }
} 
else{
    $_SESSION['invalid_email']='Your email invalid please try with your valid email!';
    header('location:login.php');
}   



?>