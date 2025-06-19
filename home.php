<?php

@include 'config.php';
session_start();

if(isset($_POST['action'])){
   if(isset($_POST['add_to_wishlist'])){

      include_once('add_wishlist.php');
   }
   
   if(isset($_POST['add_to_cart'])){
   
      include_once('add_cart.php');
   
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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
   
<?php include_once ('header.php'); ?>

<section class="home">

   <div class="content">
      <h3>Time Start To Play</h3>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime reiciendis, modi placeat sit cumque molestiae.</p>-->
      <a href="about.php" class="btn">discover more</a>
   </div>
</section>
<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form name="action" method="POST" class="box">
         <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <img src="images/products/<?php echo $fetch_products['image']; ?>" alt="" class="image">
         <div class="name"><?php echo $fetch_products['productname']; ?></div>
         <!--<div class="price"><p> &#x20B9; <?php echo $fetch_products['productprice']; ?></p></div>-->
         <!--<input type="number" name="product_quantity" value="1" min="0" class="qty">-->
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['productname']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['productprice']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>"><br><br>
         <a href="add_wishlist.php?pid=<?php echo $fetch_products['id']; ?>" class="option-btn">add to wishlist</a>
         <!-- <input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn"> -->
         <a href="add_cart.php?pid=<?php echo $fetch_products['id']; ?>" class="btn">add to cart</a>
      </form>

      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="more-btn">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section>


<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p></p>
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>

<?php include_once ('footer.php'); ?>

<script src="js/script.js"></script>

</body>
</html>