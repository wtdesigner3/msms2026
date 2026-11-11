<?php
error_reporting(0);
require('checksession.php'); 
include 'includes/function.php';     

$b=$_REQUEST['cid'];
$bdata=mysqli_query($conn,"SELECT * FROM `tbl_photo` where `p_id`='$b'");
$brec=mysqli_fetch_array($bdata);
if(isset($_POST['update']))
{
  $photoalbum = mysqli_real_escape_string($conn,$_POST['photoalbum']); 	
  $name = mysqli_real_escape_string($conn,$_POST['name']); 
  $status = mysqli_real_escape_string($conn,$_POST['status']); 
  $old = mysqli_real_escape_string($conn,$_POST['oldimg']); 

  //==================================================================//	 
     foreach($_FILES['pimages']['tmp_name'] as $key => $tmp_name )
    {
        if($tmp_name!='')
        {
        unlink("../uploads/photo/".$brec['lg_image']);
        $file_name = time()."_".$_FILES['pimages']['name'][$key];
        $file[]=$file_name;
        $file_size =$_FILES['pimages']['size'][$key];
        $file_tmp =$_FILES['pimages']['tmp_name'][$key];
        $file_type=$_FILES['pimages']['type'][$key];    
        
        $desired_dir="../uploads/photo";
        if(is_dir($desired_dir)==false)
        {
            mkdir("$desired_dir", 0700);        // Create directory/path if it does not exist
        }
        move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
        }
        else
        {
            $pimages=$brec['p_images'];
            $image=explode(",",$pimages);
            for($i=0;$i<count($image);$i++)
            {
                $file[]=$image[$i];
            }
        }
    }
    $pimages=implode(",",$file); 
//==================================================================//

        $query=mysqli_query($conn,"UPDATE `tbl_photo` SET `photoalbum`='$photoalbum', `p_name`='$name', `p_images`='$pimages', `p_status`='$status' WHERE `p_id`='$b'");
        if($query==true)
        {
		$_SESSION['success']="Photo Updated successfully";		
        header( "refresh:3;url=view-photo.php" );
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
				<li class="breadcrumb-item"><a href="javascript:;">Photo Management</a></li>
				<li class="breadcrumb-item active">Edit Photo</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed Photo<small>...</small></h1>
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
							<h4 class="panel-title">Edit Photo</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
                
                 <div class="form-group">
                 <label for="heading">Album</label>
                  <select name="photoalbum" class="form-control" >
                     <option>Select Album</option>
                            <?php
                              $cdata=mysqli_query($conn,"SELECT * FROM `tbl_photoalbum` WHERE  `pa_status`='1' ");
                              while($crec=mysqli_fetch_array($cdata))
                              {
                                  if($crec['pa_id']==$brec['photoalbum'])
                                  {
                                  echo "<option value='$crec[pa_id]' selected>$crec[pa_name]</option>";
                                  }
                                  else
                                  {
                                  echo "<option value='$crec[pa_id]'>$crec[pa_name]</option>";
                                  }
                              } 
							 ?>  
                  </select>
                </div>
            
                <div class="form-group">
                  <label for="heading">Name</label>
                  <input type="text"  name="name" class="form-control" id="heading" value="<?= $brec['p_name']; ?>">
                </div>
                
                 
                
                  <div class="form-group">
                      <label for="exampleInputPassword1">Image File</label>
                      <input type="file" name="pimages[]" class="form-control" id="exampleInputPassword1" multiple>
                     <p class="help-block">Image dimension must be 227 X 340 & must be jpg format</p>
                      <p><?php 
                          $pimages=$brec['p_images'];
                          $image=explode(",",$pimages);
                          for($i=0;$i<count($image);$i++)
                          {
                          ?>
                             <img src="../uploads/photo/<?= $image[$i] ?>" height="100px" width="90px" />
                          <?php } ?>
                    </div>
                
              
                
                <div class="form-group">
                <input type="radio" value="1" id="optionsRadios3" name="status" <?php if($brec['p_status']=='1'){ echo 'checked';}?>>
                <label for="optionsRadios3">Active</label>
                <input type="radio" value="0" id="optionsRadios4" name="status" <?php if($brec['p_status']=='0'){ echo 'checked';}?>>
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
