<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="contact.php">contact</a>
            <a href="product.php">shop</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="login.php">login</a>
            <a href="register.php">register</a>
            <a href="orders.php">my orders</a>
            <a href="cart.php">my cart</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-phone"></i> +91 <?php echo $settingrow['phoneno']; ?> </p>
            <p> <i class="fas fa-phone"></i> +91 <?php echo $settingrow['phoneno']; ?> </p>
            <p> <i class="fas fa-envelope"></i> <?php echo $settingrow['email']; ?> </p>
            <p> <i class="fas fa-map-marker-alt"></i> <?php echo $settingrow['address']; ?> </p>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i>twitter</a>
            <a href="http://www.instagram.com"><i class="fab fa-instagram"></i>instagram</a>
            <a href="http://www.linkedin.com"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Kamani Janvi</span> </div>

</section>