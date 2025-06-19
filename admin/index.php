<?php
session_start();

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
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>

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
<form action="login_check.php" method="post">
   <div class="hand"></div>
   <div class="hand rgt"></div>
     <!--ends of hand design-->
     <h3>login now</h3>
     <?php
         if(isset($_SESSION['error'])){
            ?>
             <p calss="text-danger"><?php echo $_SESSION['error']; ?></p>
             <?php
             unset($_SESSION['error']);
         }
     ?>
    
     <div class="form-group">
         <input type="text" name="name" class="box" placeholder="enter your name" required ;>
     </div>
     <div class="form-group">
         <input type="password" name="password" class="box" placeholder="enter your password" required>
         <input type="submit" class="btn" name="submit" value="login now">
         

      </div>

      <!--<h3>login now</h3>
      <input type="email" name="email" class="box" placeholder="enter your email" required ;>
      <input type="password" name="pass" class="box" placeholder="enter your password" required>
      <input type="submit" class="btn" name="submit" value="login now">
      <p>don't have an account? <a href="register.php">register now</a></p>-->
</form>
</section>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-->

</body>
</html>