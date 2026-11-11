<?php
require('checksession.php'); 
include 'includes/function.php';     

$b=$_REQUEST['cid'];
$bdata=mysqli_query($conn,"SELECT * FROM `tbl_category` where `C_id`='$b'");
$brec=mysqli_fetch_array($bdata);
if(isset($_POST['update']))
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
  $old = mysqli_real_escape_string($conn,$_POST['oldimg']);

    $bimage=$_FILES['bimage']['name'];
    if($bimage!='')
    {
        $bimage=time()."_".$bimage;
        @unlink("../uploads/category/".$old); 
        move_uploaded_file($_FILES["bimage"]["tmp_name"], "../uploads/category/".$bimage);
    }
    else
    {
        $bimage=$old;
    }
   

        $query=mysqli_query($conn,"UPDATE `tbl_category` SET `C_name`='$heading', `C_url`='$newurl', `C_title`='$metatag', `C_keyword`='$keyword', `C_metadesc`='$metadesc', `C_sort`='$position', `C_image`='$bimage', `C_desc`='$description', `C_status`='$status' WHERE `C_id`='$b'");
  
      if($query==true)
        {
		$_SESSION['success']="Record updated successfully";
		header("location:view-category.php");			
        }
        else 
        {
        // Message for unsuccessfull insertion
		$_SESSION['success']="Something went wrong. Please try again";
		header("location:view-category.php");
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
                  <input type="text"  name="heading" class="form-control" id="heading" value="<?= $brec['C_name']; ?>">
                </div>
                
                 <div class="form-group">
                  <label for="bannerlink">Page Url</label>
                  <p class="help-block" style="color:#F00; font-weight:bold;">For Submenu Leave Url Blank </p>
                  <input type="text"  name="pgurl"  value="<?= $brec['C_url']; ?>" class="form-control" id="bannerlink">
                </div>
                
                <div id="myDIV" style="display:none;"> 
                 <div class="form-group">
                  <label for="metatag">Meta Title</label>
                  <input type="text" name="metatag" id="metatag" value="<?= $brec['C_title']; ?>" class="form-control" >
                 </div>
                 
                  <div class="form-group">
                  <label for="keyword">Meta Keyword</label>
                  <textarea name="keyword" id="keyword" class="form-control" ><?= $brec['C_keyword']; ?></textarea>
                 </div>
                 
                 <div class="form-group">
                  <label for="metadescription">Meta Description</label>
                  <textarea name="metadescription" id="metadescription"  class="form-control" ><?= $brec['C_metadesc']; ?></textarea>
                 </div>
                 </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Sort Number</label>
                  <input type="number" name="position" class="form-control" id="exampleInputPassword1" value="<?= $brec['C_sort']; ?>">
                </div>
                
                <div class="form-group">
                  <label for="bannerlink">Image File</label>
                  <input type="file"  name="bimage"  class="form-control" id="bannerlink">
                  <input type="hidden" name="oldimg"  value="<?= $brec['C_image']; ?>">
                  <img src="../uploads/category/<?= $brec['C_image']; ?>" width="100" height="40">
                  <p class="help-block">Image dimension must be 1360 X 600 & must be jpg format</p>
                </div>
                
                <div class="form-group">
                  <label>Description</label>
                    <textarea  name="description" class="textarea form-control" id="editor1"  rows="12"><?= $brec['C_desc']; ?></textarea>
                </div>
                
                <div class="form-group">
                <input type="radio" value="1" id="optionsRadios3" name="status" <?php if($brec['C_status']=='1'){ echo 'checked';}?>>
                <label for="optionsRadios3">Active</label>
                <input type="radio" value="0" id="optionsRadios4" name="status" <?php if($brec['C_status']=='0'){ echo 'checked';}?>>
                <label for="optionsRadios4">Inactive</label>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
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
// 			FormWysihtml5.init();
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
</body>
</html>
