<?php
require('checksession.php'); 
include 'includes/function.php';     
?>
<?php
if(isset($_POST['submit']))
{  
    $admission = mysqli_real_escape_string($conn,$_POST['admission']);
	$date = mysqli_real_escape_string($conn,$_POST['date']);
	$name = mysqli_real_escape_string($conn,$_POST['name']);	
	$status = mysqli_real_escape_string($conn,$_POST['status']);
		
	$targetDir = "../uploads/slc/";
    $fileName = basename($_FILES["bimage"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	$allowTypes = array('pdf');
    if(in_array($fileType, $allowTypes)){
	if(move_uploaded_file($_FILES["bimage"]["tmp_name"], $targetFilePath)){	
	
		$query=mysqli_query($conn,"INSERT INTO `tbl_certificate`(`slc_admissionno`, `slc_dob`, `slc_name`, `slc_file`, `slc_status`) VALUES ('$admission','$date','$name','$fileName','$status')");
		if($query==true)
		{
		$_SESSION['success']="SLC inserted successfully";
		header( "refresh:3;url=view-slc.php" );	
		}
		else 
		{
		// Message for unsuccessfull insertion
		$_SESSION['error']="Something went wrong. Please try again";
		header("location:view-slc.php");
		} 
		 }else{
            $_SESSION['warning'] = "Sorry, there was an error uploading your file.";
         }
         }else{
            $_SESSION['warning'] = 'Sorry, only PDF files are allowed to upload.';
         }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require("includes/head.php"); ?>
<head> 
    <style>
        .datepicker.datepicker-dropdown{
            top: -20px!important;
            left: 265px;
            z-index: 9999!important;
            display: block;
            margin-top: 30px;
        }
    </style>
</head>
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
				<li class="breadcrumb-item"><a href="javascript:;">School Leaving Certificate</a></li>
				<li class="breadcrumb-item active">Add School Leaving Certificate</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">School Leaving Certificate<small></small></h1>
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
							<h4 class="panel-title">Add School Leaving Certificate</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" action="" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
              
              
                <div class="form-group">
                  <label for="heading">Admission Number</label>
                  <input type="text"  name="admission" class="form-control" id="heading" placeholder="Enter Admission Number">
                </div>
              
               <div class="form-group">
                  <label>Date Of Birth</label>
                  <input type="text"  name="date"  placeholder="Enter Date" class="form-control pickdate" id="date_begin">
               </div>
              
                <div class="form-group">
                  <label for="heading">Student Name</label>
                  <input type="text"  name="name" class="form-control" id="heading" placeholder="Enter Name">
                </div>
                
                 
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Result Pdf/File</label>
                  <input type="file" name="bimage" class="form-control" id="exampleInputPassword1" accept="application/pdf" >
                  <p class="help-block">Image dimension must be 400 X 400 & must be jpg format</p>
                </div>
               
                <div class="form-group">
                <input type="radio" value="1" id="optionsRadios3" name="status" checked>
                <label for="optionsRadios3">Active</label>
                <input type="radio" value="0" id="optionsRadios4" name="status">
                <label for="optionsRadios4">Inactive</label>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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


</body>
</html>
