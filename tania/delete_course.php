<?php

session_start();
if(!isset($_SESSION["email"])){
    echo "<script> window.location.assign('admin_login.php?msg=Login First please') </script>";
}


$id=$_GET['id'];

echo $id;

include("config.php");

$query="DELETE FROM `course_category` WHERE `id`='$id'";

$res=mysqli_query($db,$query);


if($res>0){
    echo "<script>window.location.assign('manage_course.php?msg=Delete successfully')</script>";
}
else{
    echo "<script>window.location.assign('manage_course.php?msg=Delete unsuccessfully')</script>";
}







?>