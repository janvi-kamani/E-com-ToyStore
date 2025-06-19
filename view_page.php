<?php

@include 'config.php';

session_start();

if(isset($_POST['add_to_wishlist'])){

   include_once('add_wishlist.php');
}

if(isset($_POST['add_to_cart'])){

   include_once('add_cart.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quick view</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
          $settingqry = "select * from sitesettings ";
          $settingresult = mysqli_query($conn,$settingqry) or exit("Settings select fail".mysqli_error($conn));
          $settingrow = mysqli_fetch_array($settingresult);
      ?>
   
<?php @include 'header.php'; ?>

<section class="quick-view">

    <h1 class="title">product details</h1>

    <?php  
        if(isset($_GET['pid'])){
            $pid = $_GET['pid'];
            $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$pid'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
    ?>
    <form action="" method="POST">
    
    
    <img id="main-image" src="images/products/<?php echo $fetch_products['image']; ?>"  class="image">
         <div class="name"><?php echo $fetch_products['productname']; ?></div>
         <div class="price"><p> &#x20B9;<?php echo $fetch_products['productprice']; ?></p></div>
         <div class="details"><?php echo $fetch_products['productdescription']; ?></div>
         <input type="number" name="product_quantity" value="1" min="0" class="qty">
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['productname']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['productprice']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
         <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn"></tr>
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
          
      </form>
    <?php
            }
        }else{
        echo '<p class="empty">no products details available!</p>';
        }
    }
    ?>

    <div class="more-btn">
        <a href="home.php" class="option-btn">go to home page</a>
    </div>

</section>
<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>