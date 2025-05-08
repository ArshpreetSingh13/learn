<?php

session_start();
if(!isset($_SESSION["email"])){
    echo "<script> window.location.assign('admin_login.php?msg=Login First please') </script>";
}


$id=$_GET['id'];



include("config.php");

$query="DELETE FROM `tutorial` WHERE `id`='$id'";

$res=mysqli_query($db,$query);


if($res>0){
    echo "<script>window.location.assign('manage_tutorials.php?msg=Deleted successfully')</script>";
}
else{
    echo "<script>window.location.assign('manage_tutorials.php?msg=Deletion unsuccessful')</script>";
}







?>