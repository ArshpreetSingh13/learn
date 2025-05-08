<?php
$username=$_REQUEST["username"];

$email=$_REQUEST["email"];

$contact=$_REQUEST["contact"];

$address=$_REQUEST["address"];

$password=MD5($_REQUEST["password"]);
// echo "$username,$email,$contact,$password";

include("config.php");

$query="INSERT INTO `student`( `username`, `email`, `password`, `contact`, `address`) VALUES ('$username','$email','$password','$contact','$address')";


$res=mysqli_query($db,$query);

if($res>0){
    echo "<script>window.location.assign('login.php?msg=registered successfully')</script>";
}
else{
    echo "<script>window.location.assign('login.php?msg=register unsuccessfully')</script>";
}







?>