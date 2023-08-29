<?php 
require '../db.php';
require '../login_check.php';
$id=$_GET['id'];
$select="SELECT * FROM socials WHERE id=$id";
$select_res=mysqli_query($database_connection,$select);
$after_assoc=mysqli_fetch_assoc($select_res);

$total_active="SELECT COUNT(*) as total_active FROM socials WHERE status=1";
$total_active_res=mysqli_query($database_connection,$total_active); 
$after_assoc_active=mysqli_fetch_assoc($total_active_res);

if ($after_assoc['status']==1) {
        if ($after_assoc_active['total_active']>2) {
            $select="UPDATE socials SET status=0 WHERE  id=$id";
            $select_update=mysqli_query($database_connection,$select); 
            header('location:social.php');
        }
        else{
            $_SESSION['error']="Not less then 2";
            header('location:social.php');
        }
   
}
else{
    if ($after_assoc_active['total_active']<4) {
        $select="UPDATE socials SET status=1 WHERE  id=$id";
        $select_update=mysqli_query($database_connection,$select);
        header('location:social.php'); 
    }
    else{
        $_SESSION['error']="Not more then 4";
        header('location:social.php');
    }
}
?>