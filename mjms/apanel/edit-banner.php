<?php
require('checksession.php'); 
include 'includes/function.php';   


$b=$_REQUEST['eid'];
$bdata=mysqli_query($conn,"SELECT * FROM `tbl_banner` where `bnr_id`='$b'");
$brec=mysqli_fetch_array($bdata);
if(isset($_POST['update']))
{
   $name = mysqli_real_escape_string($conn,$_POST['name']); 
   $link = mysqli_real_escape_string($conn,$_POST['link']); 
   $sort = mysqli_real_escape_string($conn,$_POST['sort']); 
   $alt = mysqli_real_escape_string($conn,$_POST['alt']); 
   $status = mysqli_real_escape_string($conn,$_POST['status']); 
   $old = mysqli_real_escape_string($conn,$_POST['oldimg']); 
   
    $bimage=$_FILES['bimage']['name'];
    if($bimage!='')
    {
        $bimage=time()."_".$bimage;
        @unlink("../uploads/banner/".$old); 
        move_uploaded_file($_FILES["bimage"]["tmp_name"], "../uploads/banner/".$bimage);
    }
    else
    {
        $bimage=$old;
    }
    
    
        $query=mysqli_query($conn,"UPDATE `tbl_banner` SET `bnr_title`='$name', `bnr_link`='$link', `bnr_position`='$sort', `bnr_image`='$bimage', `bnr_alt`='$alt', `bnr_status`='$status' WHERE `bnr_id`='$b'");
       
  
      if($query==true)
        {
		$_SESSION['success']="Banner Updated Successfully";	
		header("refresh: 2;");
        }
        else 
        {
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
				<li class="breadcrumb-item"><a href="javascript:;">Edit Banner</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Managed Banner</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Edit Banner</h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-10 -->
				<div class="col-lg-8">
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
							<h4 class="panel-title">Edit Banner</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" method="POST"  enctype="multipart/form-data">            
              <div class="box-body">
              
                <div class="form-group">
                  <label for="banner">Banner Title</label>
                  <input type="text"  class="form-control" id="banner" name="name"  value="<?= $brec['bnr_title']; ?>">
                </div>
                
                 <div class="form-group">
                  <label for="bannerlink">Banner Link</label>
                  <input type="text"  name="link"  value="<?= $brec['bnr_link']; ?>" class="form-control" id="bannerlink">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Banner position</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="sort"  value="<?= $brec['bnr_position']; ?>">
                </div>
                
                <div class="form-group">
                  <label>File input</label>
                  <input type="file" name="bimage" class="form-control">
                  <input type="hidden" name="oldimg"  value="<?= $brec['bnr_image']; ?>">
                   <p class="help-block">Image dimension must be 1360 X 600 & must be jpg format</p>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputalt">Banner Alt</label>
                  <input type="text"  name="alt" value="<?= $brec['bnr_alt']; ?>" class="form-control" id="exampleInputalt">
                </div>
                
                <div class="form-group">
                <input type="radio" value="1" id="optionsRadios3" name="status" <?php if($brec['bnr_status']=='1'){ echo 'checked';}?>>
                <label for="optionsRadios3">Active</label>
                
                <input type="radio" value="0" id="optionsRadios4" name="status" <?php if($brec['bnr_status']=='0'){ echo 'checked';}?>>
                <label for="optionsRadios4">Inactive</label>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
              </div>
            </form>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
                
                <div class="col-lg-4">
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
							<h4 class="panel-title">View Banner</h4>
						</div>
						
						<div class="panel-body">
			
                                <table>
                               <tr>
                                <div class="col-md-12 col-sm-6">
                                    <span class="thumbnail text-center">
                                        <img src="../uploads/banner/<?= $brec['bnr_image']; ?>" style="width:100%;">
                                        <h4 class="text-danger"><?php echo $brec['bnr_title'];?></h4>                                        
                                    </span>
                                </div> 
                                <hr class="line">
                                </tr>
                       
                                
                                
                                </table>
                              	
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
			TableManageResponsive.init();
		});
	</script>

</body>
</html>
