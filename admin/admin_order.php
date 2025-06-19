<?php
@include 'config.php';
session_start();

if(isset($_SESSION['name'])){
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1 class="m-0">categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
              <li class="breadcrumb-item active">category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <dv class="row">
      <div class="col-12">
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">category list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>User-ID</th>
                    <th>Placed on</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Total Products</th>
                    <th>Total Price</th>
                    <th>Payment Method</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
      
                          $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
                          if(mysqli_num_rows($select_orders) > 0){
                             while($fetch_orders = mysqli_fetch_assoc($select_orders)){
                    ?>
                    <?php
                    if(isset($_POST['update_order'])){
                      $order_id = $_POST['order_id'];
                      $update_payment = $_POST['update_payment'];
                      mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_id'") or die('query failed');
                      $message[] = 'payment status has been updated!';
                    }
                  ?>
                        <tr>
                          <td><span><?php echo $fetch_orders['user_id']; ?></span></td>
                          <td><span><?php echo $fetch_orders['placed_on']; ?></span></td>
                          <td><span><?php echo $fetch_orders['name']; ?></span></td>
                          <td><span><?php echo $fetch_orders['number']; ?></span></td>
                          <td><span><?php echo $fetch_orders['email']; ?></span></td>
                          <td><span><?php echo $fetch_orders['address']; ?></span></td>
                          <td><span><?php echo $fetch_orders['total_products']; ?></span></td>
                          <td><span>&#x20B9;<?php echo $fetch_orders['total_price']; ?></span></td>
                          <td><span><?php echo $fetch_orders['method']; ?></span></td>
                          
                            <!-- <td>
                              <select name="update_payment">
                                <option disabled selected><?php echo $fetch_orders['payment_status']; ?></option>
                                <option value="">pending</option>
                                <option value="">completed</option>
                              </select>
                              <a href="update_payment.php?order_id=<?php echo $_POST['order_id']; ?>"><button name="update_payment">Update</button></a>
                            </td> -->
                           
                        <td> 
                          <a href="admin_order_delete.php?id=<?php echo $fetch_orders['id'] ?>"><i class="fas fa-trash"></i>
                          <a href="order_update.php?id=<?php echo $row['id'] ?>"><i name="update_order" class="fas fa-edit"></i>

                          </td>

                        <?php
                             }
                          }else{
                             echo '<p class="empty">no orders placed yet!</p>';
                          }
                          ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>User-ID</th>
                    <th>Placed on</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Total Products</th>
                    <th>Total Price</th>
                    <th>Payment Method</th>
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
       
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

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?php
}else{
  $_SESSION['error'] = "you are not authorize to access this without login";
  header("location:index.php");
}
?>