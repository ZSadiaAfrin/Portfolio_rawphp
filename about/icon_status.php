<?php
require '../db.php';
require '../login_check.php';
$id = $_GET['id'];
$select = "SELECT * FROM about_icons WHERE id=$id";
$select_res = mysqli_query($database_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_res);

if ($after_assoc['status'] == 1) {

    $select = "UPDATE about_icons SET status=0 WHERE  id=$id";
    $select_update = mysqli_query($database_connection, $select);
    header('location:about.php');
} else {

    $select = "UPDATE about_icons SET status=1 WHERE  id=$id";
    $select_update = mysqli_query($database_connection, $select);
    header('location:about.php');
}
