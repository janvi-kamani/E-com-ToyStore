
<?php
session_start();

@include 'config.php';
//$admin_id = $_SESSION['admin_id'];

if(!isset($_SESSION['name'])){
   header('location:index.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

 <!---------- add your style hear ----->

 <?php
include_once('includes/style.php');
?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 <!--- add navbar here --->

 <?php
include_once('includes/header.php');
?>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
    <!--- add sidebar here -->

    <?php
    include_once('includes/sidebar.php');
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner"> 
             
              <?php
            $select_category = mysqli_query($conn, "SELECT * FROM `categories`") or die('query failed');
            $number_of_category = mysqli_num_rows($select_category);
         ?>
                <h3> <?php echo $number_of_category; ?></h3>

                <p>categories</p> 
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
                
              </div>
            </div>
          </div>
          <div class="box">       
      </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
             <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
            $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            $number_of_products = mysqli_num_rows($select_products);
         ?>
         <h3><?php echo $number_of_products; ?></h3>
         <p>products added</p>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                 <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
                $number_of_orders = mysqli_num_rows($select_orders);
              ?>
              <h3><?php echo $number_of_orders; ?></h3>
              <p>orders placed</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

              <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>normal users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
             
              <?php
            $select_admin = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
            $number_of_admin = mysqli_num_rows($select_admin);
         ?>
         <h3><?php echo $number_of_admin; ?></h3>
         <p>admin users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
            $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            $number_of_account = mysqli_num_rows($select_account);
         ?>
         <h3><?php echo $number_of_account; ?></h3>
         <p>total accounts</p>

              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>new messages</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-drafts"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- add footer here -->

   <?php
    include_once('includes/footer.php');
    ?>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!--- add script here -->

<?php
include_once('includes/script.php');
?>
</body>
</html>
<?php
