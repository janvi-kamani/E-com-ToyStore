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

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">
            <?php
                if(isset($settingrow['image']) && $settingrow['image']!=null ){
                    ?>
                        <img src="images/logo/<?php echo $settingrow['image']; ?>" width="200px" height="100px">
                    <?php
                }else{
                    ?>
                        <h1><?php echo $settingrow['sitename']; ?></h1>
                    <?php
                }
            ?>
            
        </a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="#">Category</a>
                    <ul>
                    <?php
                      $catqry = "select * from categories order by id desc";
                      $catresult = mysqli_query($conn,$catqry) or exit("Category select fail".mysqli_error($conn));
                     
                      ?>
                        <li>
                            <?php
                             while($catrow = mysqli_fetch_array($catresult)){
                            ?>
                                   <li><a href="product.php?id=<?php echo $catrow['id'] ?>"><?php echo $catrow['catname'] ?></a></li>
                            <?php
                            }
                            ?>
                        </li>
                        
                    </ul>
                </li>
              
               
                <li><a href="orders.php">orders</a></li>
                <li><a href="about.php">about us</a></li>
                <li><a href="contact.php">contact us</a></li>
                <li><a href="#">account +</a>
                    <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
                $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist`") or die('query failed');
                $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
            <?php
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
        </div>
        <?php 
            if(isset($_SESSION['user_id'])){
         ?>
            <div class="account-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>
        <?php }else{
         ?>
            <div class="account-box">
            <a href="login.php" class="delete-btn">Login</a>
        </div>
         <?php }?>

    </div>

</header>