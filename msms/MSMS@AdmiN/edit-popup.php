<?php
require('checksession.php');
include 'includes/function.php';
$eid = $_GET['eid'];
$condata = mysqli_query($conn, "SELECT * FROM `tbl_popup` WHERE `abt_id`='$eid'");
$conrec = mysqli_fetch_array($condata);
if (isset($_POST['update'])) {
  $detail = mysqli_real_escape_string($conn, $_POST['detail']);
  $image = $_FILES['image']['name'];
  if ($image != '') {
    $image = time() . "_" . $image;
    // $fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
    move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/popup/" . $image);
  } else {
    $image = $_POST['oldimage'];
  }
  $query = mysqli_query($conn, "UPDATE `tbl_popup` SET `abt_details`='$detail',`abt_images`='$image' WHERE `abt_id`='$eid'");
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
      <li class="breadcrumb-item active">Edit Popup</li>
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
            <h4 class="panel-title">Edit Popup</h4>
          </div>
          <!-- end panel-heading -->

          <!-- begin panel-body -->
          <div class="panel-body">



            <form role="form" method="POST" enctype="multipart/form-data">
              <div class="box-body">



                <div class="form-group">
                  <label for="exampleInputPassword1">Change Popup Image</label>
                  <input type="file" name="image" class="form-control">
                  <input type="hidden" name="oldimage" class="form-control" value="<?=$conrec['abt_images'];?>">
                  <p class="help-block">Image dimension must be 750px X 662px & jpg format.</p>
                  <img src="../uploads/popup/<?=$conrec['abt_images'];?>" width="100" alt="">
                 
                </div>



                <div class="form-group">
                  <label>Link</label>
                  <input name="detail" class="form-control" value="<?=$conrec['abt_details'];?>">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
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