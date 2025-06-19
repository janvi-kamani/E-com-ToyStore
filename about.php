<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

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

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="features">
   <div class="feature-card">
      <i class="fas fa-shipping-fast"></i>
      <h3>FREE SHIPPING</h3>
      <p>On all orders</p>
   </div>
   <div class="feature-card" >
      <i class="fas fa-box-open"></i>
      <h3>CASH ON DELIVERY</h3>
      <p>100% money back guarantee</p>
   </div>
   <div class="feature-card">
      <i class="fas fa-gift"></i>
      <h3>SPECIAL GIFT CARD</h3>
      <p>Offer special bonuses with gift</p>
   </div>
   <div class="feature-card">
      <i class="fas fa-headset"></i>
      <h3>24/7 CUSTOMER SERVICE</h3>
      <p>Call us 24/7 at 123-456-7890</p>
   </div>
</section>




<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>