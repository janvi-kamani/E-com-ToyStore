<?php

@include 'config.php';

session_start();

if(isset($_SESSION['user_id'])){

    if(isset($_SESSION['user_id'])){
        $product_id = $_GET['pid'];
        echo "========".$product_id;
        $user_id = $_SESSION['user_id'];
    }else {
        $product_id = $_SESSION['product_id'];
        echo "========".$_SESSION['product_id'];
        $user_id = $_SESSION['user_id'];
    }

    $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE pid = '".$product_id."' AND user_id = '$user_id'") or die('query failed');
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE pid = '".$product_id."' AND user_id = '".$user_id."'") or die('query failed');

    if(mysqli_num_rows($check_wishlist_numbers) > 0){
        $message[] = 'already added to wishlist';
    }elseif(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, quantity) VALUES('".$user_id."', '".$product_id."', '1')") or die('query failed');
    $message[] = 'product added to wishlist';
     }
     unset($_SESSION['product_id']);
    unset($_SESSION['cart']);
    header("location:cart.php");
} else {
    session_start();
    $_SESSION['product_id'] = $_GET['pid'];
    $product_id = $_GET['pid'];
    $_SESSION['product_id'] = $product_id;
    
    $_SESSION["cart"] = true;

    header('location:login.php');
}
unset($_SESSION['product_id']);
unset($_SESSION['cart']);
header("location:cart.php");

?>
