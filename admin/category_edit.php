<?php
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
              <li class="breadcrumb-item"><a href="category.php">Category</a></li>
              <li class="breadcrumb-item active">Category Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT CATEGORY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php
                      include_once('includes/config.php');
                      $id=$_REQUEST['id'];
                      $qry = "select * from categories where id=$id";
                      $result = mysqli_query($conn,$qry) or exit("Category select fail".mysqli_error($conn));
                      $row = mysqli_fetch_array($result);
                      ?>
              <form action="category_update_db.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="catname" name="catname" placeholder="Category Name" value="<?php echo $row['catname']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category Description</label>
                    <textarea  name="catdescription" class="form-control" id="catdescription" placeholder="Category Description"><?php echo $row['catdescription']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Select Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                   
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Old Images</label>
                    <input type="hidden" name="oldimage" value="<?php echo $row['image'] ?>">
                    <img src="../images/categories/<?php echo $row['image'] ?>"  alt="" width="200px">
                  </div>
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
              </form>
            </div>
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
</body>
</html>
<?php
}else{
  $_SESSION['error'] = "you are not authorize to access this without login";
  header("location:index.php");
}
?>
