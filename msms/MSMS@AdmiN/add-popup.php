<?php
require('checksession.php');
include 'includes/function.php';
$condata = mysqli_query($conn, "SELECT * FROM `tbl_popup`");
$conrec = mysqli_fetch_array($condata);
$conrec = mysqli_fetch_array($condata);
if (isset($_POST['add'])) {
  $detail = mysqli_real_escape_string($conn, $_POST['detail']);
  $sort = mysqli_real_escape_string($conn, $_POST['sort']);
  $image = $_FILES['image']['name'];
  if ($image != '') {
    $image = time() . "_" . $image;
    $fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/popup/" . $image);
  } else {
    $image = 0;
  }
  $query = mysqli_query($conn, "INSERT INTO `tbl_popup`(`abt_details`, `abt_images`, `sort`) VALUES ('$detail','$image','$sort')");
  if ($query) {
    $_SESSION['success'] = "Popup Uploaded Successfully.";
    header("refresh:3;url=view_popup");
  } else {
    $_SESSION['error'] = "Something Went Wrong. Please Try Again.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require("includes/head.php"); ?>

<body>


  <!-- begin #page-container -->
  <?php require("includes/header.php"); ?>
  <!-- end #header -->
  <!-- begin #sidebar -->
  <?php require("includes/left.php"); ?>

  <!-- begin #content -->
  <div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
      <li class="breadcrumb-item"><a href="javascript:;">Popup Management</a></li>
      <li class="breadcrumb-item active">Add Popup</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Manage Popup <small>...</small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
      <!-- begin col-10 -->
      <div class="col-lg-12">
        <!-- begin panel -->
        <div class="panel panel-inverse">
          <!-- begin panel-heading -->
          <div class="panel-heading">
            <div class="panel-heading-btn">
              <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
              <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Add Popup</h4>
          </div>
          <!-- end panel-heading -->

          <!-- begin panel-body -->
          <div class="panel-body">



            <form role="form" method="POST" enctype="multipart/form-data">
              <div class="box-body">



                <div class="form-group">
                  <label for="exampleInputPassword1">Upload Popup Image</label>
                  <input type="file" name="image" class="form-control">
                  <p class="help-block">Image dimension must be 750px X 662px & jpg format.
                 
                </div>



                <div class="form-group">
                  <label>Link</label>
                  <input type="url" name="detail" class="form-control">
                </div>

                <div class="form-group">
                  <label>Position</label>
                  <input type="number" name="sort" class="form-control" placeholder="1 - 10">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="add" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- end panel-body -->
        </div>
        <!-- end panel -->
      </div>
      <!-- end col-10 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end #content -->



  <!-- begin scroll to top btn -->
  <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
  <!-- end scroll to top btn -->
  </div>
  <!-- end page container -->

  <?php require("includes/footer-data.php"); ?>

  <script>
    $(document).ready(function() {
      App.init();
      FormWysihtml5.init();
    });
  </script>
  <script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>
</body>

</html>