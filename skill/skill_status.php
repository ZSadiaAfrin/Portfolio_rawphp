<?php
require '../login_check.php';
require '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM skills WHERE id=$id";
$select_res = mysqli_query($database_connection, $select);
$after_assoc_res = mysqli_fetch_assoc($select_res);
if ($after_assoc_res['status'] == 1) {
    $update = "UPDATE skills SET status=0 WHERE id=$id";
    mysqli_query($database_connection, $update);
    header('location:skill.php');
} else {
   
    $update2 = "UPDATE skills SET status=1 WHERE id=$id ";
    mysqli_query($database_connection, $update2);
    header('location:skill.php');
}
