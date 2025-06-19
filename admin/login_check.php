<?php
session_start();
include_once('includes/config.php');
extract($_POST);
$qry="select * from user where name='$name' && password='".md5($password)."'";
$result = mysqli_query($conn,$qry) or exit("select user fail".mysqli_error($conn));
$count=mysqli_num_rows($result);

if($count>0){
    $_SESSION['name']=$name;   
    header("location:homepage.php");
}else{
    $_SESSION["error"] = "username or password is incorrect";
    header("location:index.php");
}
?>
