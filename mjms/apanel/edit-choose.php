<?php
require('checksession.php'); 
include 'includes/function.php';     

$b=$_REQUEST['cid'];
$bdata=mysqli_query($conn,"SELECT * FROM `tbl_choose` where `c_id`='$b'");
$brec=mysqli_fetch_array($bdata);
if(isset($_POST['update']))
{
  $count = mysqli_real_escape_string($conn,$_POST['count']); 
  $name = mysqli_real_escape_string($conn,$_POST['name']); 	
  $query=mysqli_query($conn,"UPDATE `tbl_choose` SET `c_count`='$count', `c_text`='$name'  WHERE `c_id`='$b'");
  if($query==true)
	{
	$_SESSION['success']="Why Choose Updated successfully";
	header( "refresh:3;url=view_choose.php" );		
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
				<li class="breadcrumb-item"><a href="javascript:;">WHY CHOOSE</a></li>
				<li class="breadcrumb-item active">EDIT WHY CHOOSE</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">MANAGED WHY CHOOSE<small></small></h1>
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
							<h4 class="panel-title">EDIT WHY CHOOSE</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
			<form role="form" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="heading">Count</label>
                  <input type="text"  name="count" class="form-control" id="heading" value="<?= $brec['c_count']; ?>">
                </div>
                
                <div class="form-group">
                  <label for="heading">Name</label>
                  <input type="text"  name="name" class="form-control" id="heading" value="<?= $brec['c_text']; ?>">
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
		});
	</script>
<!------------------------>


</body>
</html>
