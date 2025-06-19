<?php
    include_once("includes/config.php");
    $order_id = $_REQUEST['order_id'];
    $update_payment = $_POST['update_payment'];
    mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_id'") or die('query failed');
    $message[] = 'payment status has been updated!';
?>