<?php
require('checksession.php'); 
include 'includes/function.php';     

if(isset($_POST['submit']))
{   
    $heading = mysqli_real_escape_string($conn,$_POST['heading']); 
	$pgurl = mysqli_real_escape_string($conn,$_POST['pgurl']); 
	$prourrl = str_replace(array( '\'', '"', ' ', ',' , ';', '<', '>' ), '-', $pgurl);
    $newurl = strtolower($prourrl);
	$metatag = mysqli_real_escape_string($conn,$_POST['metatag']); 
	$keyword = mysqli_real_escape_string($conn,$_POST['keyword']); 
	$metadesc = mysqli_real_escape_string($conn,$_POST['metadescription']); 
	$position = mysqli_real_escape_string($conn,$_POST['position']); 
	$description = mysqli_real_escape_string($conn,$_POST['description']); 
	$status = mysqli_real_escape_string($conn,$_POST['status']); 
	$bimage=$_FILES['bimage']['name'];
	$bimage=time()."_".$bimage;
	
		move_uploaded_file($_FILES["bimage"]["tmp_name"], "../../uploads/category/".$bimage);
		$query=mysqli_query($conn,"INSERT INTO `tbl_category`(`C_name`, `C_url`, `C_title`, `C_keyword`, `C_metadesc`, `C_sort`, `C_image`, `C_desc`, `C_status`) VALUES ('$heading','$newurl','$metatag','$keyword','$metadesc','$position','$bimage','$description','$status')");
		if($query==true)
		{
		$_SESSION['success']="Menu inserted successfully";
		header("location:view-category.php");	
		}
		else 
		{
		// Message for unsuccessfull insertion
		$_SESSION['success']="Something went wrong. Please try again";
		header("location:add-category.php");	
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
				<li class="breadcrumb-item"><a href="javascript:;">Category Management</a></li>
				<li class="breadcrumb-item active">Add Category</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed Category <small>...</small></h1>
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
							<h4 class="panel-title">Add Category</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
             
              
                <div class="form-group">
                  <label for="heading">Heading Title</label>
                  <input type="text"  name="heading" class="form-control" id="heading" placeholder="Enter Page Title(Heading)">
                </div>
                
                 <div class="form-group">
                  <label for="bannerlink">Page Url</label>
                  <p class="help-block" style="color:#F00; font-weight:bold;">For Submenu Leave Url Blank </p>
                  <input type="text"  name="pgurl"  placeholder="pages.php" class="form-control" id="bannerlink">
                </div>
                
                <div id="myDIV" style="display:none; border: 1px solid #242a30;padding: 10px;background: #fdfbef;"> 
                  <div class="form-group">
                  <label for="metatag">Meta Title</label>
                  <input type="text" name="metatag" id="metatag" placeholder="Meta Title" class="form-control" >
                 </div>
                 
                  <div class="form-group">
                  <label for="keyword">Meta Keyword</label>
                  <textarea name="keyword" id="keyword" placeholder="Meta Keyword" class="form-control" ></textarea>
                 </div>
                 
                  <div class="form-group">
                  <label for="metadescription">Meta Description</label>
                  <textarea name="metadescription" id="metadescription" placeholder="Meta Description" class="form-control" ></textarea>
                 </div> 
                 </div><br/>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Sort Number</label>
                  <input type="number" name="position" class="form-control" id="exampleInputPassword1" placeholder="1-10">
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Image File</label>
                  <input type="file" name="bimage" class="form-control" id="exampleInputPassword1" >
                  <p class="help-block">Image dimension must be 1360 X 600 & must be jpg format</p>
                </div>
              
                <div id="myIMG" style="display:none;">   
                <div class="form-group">
                   <iframe src="upload_image.php" frameborder="0" style="width:100%; height:240px; border: 1px solid #000; padding: 9px;"></iframe>
                </div>
                </div>
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea  name="description" class="editor1 form-control" id="editor1" placeholder="Enter text ..." rows="12"></textarea>
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
                <button type="button" onclick="myGetlink()" class="btn btn-warning">Get Link</button>
                <button type="button" onclick="myFunction()" class="btn btn-warning">Seo tools</button>
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
			CKEDITOR.replace( 'editor1' );
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
<script>
function myGetlink() {
  var x = document.getElementById("myIMG");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</body>
</html>
