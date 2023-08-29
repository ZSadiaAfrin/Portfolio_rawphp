<?php
session_start();
$hostname = 'localhost';
$hostuser_name = 'root';
$password = '';
$dbname = 'sadia';
$database_connection = mysqli_connect($hostname, $hostuser_name, $password, $dbname);


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$after_hash = password_hash($password, PASSWORD_DEFAULT);

$flag = true;

$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$special_char = preg_match('@[#,$,%,^,&,*]@', $password);


if (empty($name)) {
    $_SESSION['name'] = 'Please give your name';
    $flag = false;
    header('location:registration.php');
}
if (empty($email)) {
    $_SESSION['email'] = 'Please give your email';
    $flag = false;
    header('location:registration.php');
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email'] = 'Please give your email with email formate';
        $flag = false;
        header('location:registration.php');
    }
}

if (empty($password)) {
    $_SESSION['password'] = 'Please give your password';
    $flag = false;
    header('location:registration.php');
} else {
    if (!$upper || !$lower || !$number || !$special_char || strlen($password) < 8) {
        $_SESSION['password'] = 'Password must be contain 1upper letter 1 lower letter 1 special letter1 number and must contain min 8 character';
        $flag = false;
        header('location:registration.php');
    }
}


if ($flag) {
    $insert = "INSERT INTO user_tables(name,email,password) VALUES('$name','$email','$after_hash')";
    mysqli_query($database_connection, $insert);
    $_SESSION['reg_success'] = 'Your Registration Done Successfully!';
    header('location:registration.php');
} else {
    $_SESSION['name_value'] = $name;
    $_SESSION['email_value'] = $email;
    $_SESSION['pass_value'] = $password;
    header('location:registration.php');
}
