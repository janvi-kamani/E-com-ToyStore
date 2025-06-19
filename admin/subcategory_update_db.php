<?php
session_start();
if(isset($_SESSION['name'])){
    include_once('includes/config.php');
    extract($_POST);
    $subcatdescription= mysqli_real_escape_string($conn,$subcatdescription);


    //print_r($_FILES);exit;
    if($_FILES['image']['error']==0){

        $filename=time()."_".$_FILES['image']['name'];
    $path="../images/subcategories/".$filename;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
        $qry="update subcategories set catid='".$catid."', subcatname='".$subcatname."',subcatdescription='".$subcatdescription."',image='".$filename."'where id=$id";
        mysqli_query($conn,$qry) or exit("subcategory update fail".mysqli_error($conn));
        $_SESSION['error'] = "subcategory update successfully";
        header("location:subcategory.php");
    }else{
        $_SESSION['error'] = "file upload fail";
        header("location:subcategory_add.php");

    }
    }else{
        $qry="update subcategories set catid='".$catid."', subcatname='".$subcatname."',subcatdescription='".$subcatdescription."'where id=$id";
        mysqli_query($conn,$qry) or exit("subcategory insert fail".mysqli_error($conn));
        $_SESSION['error'] = "subcategory updated successfully";
        header("location:subcategory.php");
    }
    

}else{
    $_SESSION['error'] = "you are not authorize to access this page without login";
    header("location:index.php");
}

?>