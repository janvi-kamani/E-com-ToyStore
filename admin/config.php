<?php
$hostname="localhost";
$username="root";
$pass="";
$datbase="project1_2024";
$conn=mysqli_connect($hostname,$username,$pass,$datbase) or exit("connection fail");

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
?>
