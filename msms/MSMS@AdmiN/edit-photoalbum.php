<?php
require('checksession.php'); 
include 'includes/function.php';     

$b=$_REQUEST['cid'];
$bdata=mysqli_query($conn,"SELECT * FROM `tbl_photoalbum` where `pa_id`='$b'");
$brec=mysqli_fetch_array($bdata);
if(isset($_POST['update']))
{
  $name = mysqli_real_escape_string($conn,$_POST['name']); 
  $sort = mysqli_real_escape_string($conn,$_POST['sort']); 
  $year = mysqli_real_escape_string($conn,$_POST['year']); 
  $status = mysqli_real_escape_string($conn,$_POST['status']); 
  $old = mysqli_real_escape_string($conn,$_POST['oldimg']); 

    $bimage=$_FILES['bimage']['name'];
    if($bimage!='')
    {
         $bimage=time()."_".$bimage;
  
    @unlink("../uploads/photo/".$old); 
    move_uploaded_file($_FILES["bimage"]["tmp_name"], "../uploads/photo/".$bimage);
    }
    else
    {
        $bimage=$old;
    }
   

        $query=mysqli_query($conn,"UPDATE `tbl_photoalbum` SET `pa_name`='$name', `pa_sort`='$sort', `pa_image`='$bimage', `pa_status`='$status', `year`='$year' WHERE `pa_id`='$b'");
  
      if($query==true)
        {
		$_SESSION['success']="Photo Album Updated successfully";		
        header( "refresh:3;url=view-photoalbum.php" );
        }
        else 
        {
        // Message for unsuccessfull insertion
		$_SESSION['error']="Something went wrong. Please try again";
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
				<li class="breadcrumb-item"><a href="javascript:;">Photo Album Management</a></li>
				<li class="breadcrumb-item active">Edit Photo Album</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed Photo Album<small>...</small></h1>
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
							<h4 class="panel-title">Edit Photo Album</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
             
            
                <div class="form-group">
                  <label for="heading">Name</label>
                  <input type="text"  name="name" class="form-control" id="heading" value="<?= $brec['pa_name']; ?>">
                </div>

				<div class="form-group">
                  <label for="heading">Year</label>
                  <input type="text"  name="year" class="form-control" id="heading" value="<?= $brec['year']; ?>">
                </div>
                
                 
                
                <div class="form-group">
                  <label for="bannerlink">Image File</label>
                  <input type="file"  name="bimage"  class="form-control" id="bannerlink">
                  <input type="hidden" name="oldimg"  value="<?= $brec['pa_image']; ?>">
                  <img src="../uploads/photo/<?= $brec['pa_image']; ?>" width="100" height="40">
                  <p class="help-block">Image dimension must be 40 X 40 & must be jpg format</p>
                </div>
                
               <div class="form-group">
                  <label for="bannerlink">Sort By</label>
                  <input type="number"  name="sort"  value="<?= $brec['pa_sort']; ?>" class="form-control" id="bannerlink">
                </div>
                
                <div class="form-group">
                <input type="radio" value="1" id="optionsRadios3" name="status" <?php if($brec['pa_status']=='1'){ echo 'checked';}?>>
                <label for="optionsRadios3">Active</label>
                <input type="radio" value="0" id="optionsRadios4" name="status" <?php if($brec['pa_status']=='0'){ echo 'checked';}?>>
                <label for="optionsRadios4">Inactive</label>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
              
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
<!------------------------>

</body>
</html>
