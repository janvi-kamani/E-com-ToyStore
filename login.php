<?php

@include 'config.php';
error_reporting(0);  
session_start();

if(isset($_POST['submit'])){
   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');


   if(mysqli_num_rows($select_users) > 0){
      session_start();
      $row = mysqli_fetch_array($select_users);

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         
         if(isset($_SESSION["cart"])){
            $_SESSION['user_id'] = $row['id'];
            echo "=========".$_SESSION['product_id'];
            include_once("add_cart.php");
         }else if(isset($_SESSION["wishlist"])){
            $_SESSION['user_id'] = $row['id'];
            echo "=========".$_SESSION['product_id'];
            include_once("add_wishlist.php");
         }else{
            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
         }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
          $settingqry = "select * from sitesettings ";
          $settingresult = mysqli_query($conn,$settingqry) or exit("Settings select fail".mysqli_error($conn));
          $settingrow = mysqli_fetch_array($settingresult);
      ?>

<?php include_once ('header.php'); ?>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
 
<section class="form-container">
   
      <!--start panda design-->
 <div class="panda">
   <div class="ear"></div>
      <!-- face -->
         <div class="face">
            <div class="eye-shade"></div>
            <div class="eye-white">
               <div class="eye-ball"></div>
            </div>
            <div class="eye-rgt"></div>
            <div class="eye-white rgt">
               <div class="eye-ball"></div>
            </div>
            <div class="nose"></div>
            <div class="mouth"></div>
        </div>
      <!-- and of face-->
       <!--body start-->
      <div class="body1"></div>
      <div class="foot">
         <div class="finger"></div>
      </div>
      <div class="foot rgt">
         <div class="finger"></div>
     </div>
</div>
<!--end od panda-->

<!--starts login design-->
<form action="" method="post">
   <div class="hand"></div>
   <div class="hand rgt"></div>
     <!--ends of hand design-->
     <h3>login now</h3>
     <div class="form-group">
         <input type="email" name="email" class="box" placeholder="enter your email" required ;>
     </div>
     <div class="form-group">
         <input type="password" name="pass" class="box" placeholder="enter your password" required>
         <input type="submit" class="btn" name="submit" value="login now">
         <p>don't have an account? </p>
         <p><a href="register.php">register now</a></p>

      </div>

      <!--<h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="enter your email" required ;>
      <input type="password" name="pass" class="box" placeholder="enter your password" required>
      <input type="submit" class="btn" name="submit" value="login now">
      <p>don't have an account? <a href="register.php">register now</a></p>-->
</form>
</section>
<?php include_once ('footer.php'); ?>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-->

</body>
</html>