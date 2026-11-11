<?php
require('checksession.php'); 
include 'includes/function.php';     

$b=$_REQUEST['cid'];
$bdata=mysqli_query($conn,"SELECT * FROM `tbl_msmsinprint` where `ne_id`='$b'");
$brec=mysqli_fetch_array($bdata);
if(isset($_POST['update']))
{
 
  $name = mysqli_real_escape_string($conn,$_POST['name']); 
  $year = mysqli_real_escape_string($conn,$_POST['year']); 
  $link = mysqli_real_escape_string($conn,$_POST['link']); 
  $shorttext = mysqli_real_escape_string($conn,$_POST['short']);
  $description = mysqli_real_escape_string($conn,$_POST['description']);	
  $status = mysqli_real_escape_string($conn,$_POST['status']); 
  $old = mysqli_real_escape_string($conn,$_POST['oldimg']); 
  
      $bimage=$_FILES['bimage']['name'];
    if($bimage!='')
    {
        $bimage=time()."_".$bimage;
        @unlink("../uploads/page/".$old); 
        move_uploaded_file($_FILES["bimage"]["tmp_name"], "../uploads/page/".$bimage);
    }
    else
    {
        $bimage=$old;
    }


        $query=mysqli_query($conn,"UPDATE `tbl_msmsinprint` SET  `ne_name`='$name', `ne_image`='$bimage', `ne_shorttext`='$shorttext', `ne_detail`='$description', `ne_link`='$link',`ne_status`='$status',`cat_id`='$year' WHERE `ne_id`='$b'");
  
      if($query==true)
        {
		$_SESSION['success']="MSMS Print Updated successfully";
		header( "refresh:3;url=view-msmsprint.php" );		
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
				<li class="breadcrumb-item"><a href="javascript:;">MSMS in Print Management</a></li>
				<li class="breadcrumb-item active">Edit MSMS</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed MSMS in Print<small>...</small></h1>
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
							<h4 class="panel-title">Edit MSMS in Print</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
                
                 <!-- <div class="form-group">
                  <label for="bannerlink">MSMS Date</label>
                  <input type="text"  name="date"  value="<?= $brec['ne_date']; ?>" class="form-control pickdate" id="bannerlink">
                </div>
                
                <div class="form-group">
                  <label for="bannerlink">MSMS Time</label>
                  <input type="time"  name="time"  value="<?= $brec['ne_time']; ?>" class="form-control" id="bannerlink">
                </div> -->
            
                <div class="form-group">
                  <label for="heading">MSMS Name</label>
                  <input type="text"  name="name" class="form-control" id="heading" value="<?= $brec['ne_name']; ?>">
                </div>
                
                                <div class="form-group">
                  <label for="heading">Year</label>
                  <select class="form-control" name="year">
                      <!--<option value="">Choose year</option>-->
                      <?php
                      $sqlYear = mysqli_query($conn,"SELECT id,name FROM `tbl_msmsprint_cat` WHERE `status` = '1'");
                      if(mysqli_num_rows($sqlYear) > 0){
                          while($rowYear = mysqli_fetch_assoc($sqlYear)){
                              ?>
                         <option <?php if($rowYear['id'] == $brec['cat_id'] ){ echo "selected";} ?> value="<?= $rowYear['id']; ?>"><?= $rowYear['name']; ?></option>     
                    <?php          
                          }
                      }
                      ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="bannerlink">Image File</label>
                  <input type="file"  name="bimage"  class="form-control" id="bannerlink">
                  <input type="hidden" name="oldimg"  value="<?= $brec['ne_image']; ?>">
                  <img src="../uploads/page/<?= $brec['ne_image']; ?>" width="100" height="40">
                  <p class="help-block">Image dimension must be 1300 X 465 & must be jpg format</p>
                </div>
                
                 <div id="myIMG" style="display:none;">   
                  <div class="form-group">
                     <iframe src="upload_image.php" frameborder="0" style="width:100%; height:240px; border: 1px solid #000; padding: 9px;"></iframe>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="heading">MSMS Link</label>
                  <input type="text"  name="link" class="form-control" id="heading" value="<?= $brec['ne_link']; ?>">
                </div>

                 <div class="form-group">
                  <label for="heading">Short Description</label>
                  <input type="text"  name="short" class="form-control" id="heading" value="<?= $brec['ne_shorttext']; ?>">
                </div>
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea  name="description" class="editor1 form-control" id="editor1" rows="6"><?= $brec['ne_detail']; ?></textarea>
                </div>
                
                <div class="form-group">
                <input type="radio" value="1" id="optionsRadios3" name="status" <?php if($brec['ne_status']=='1'){ echo 'checked';}?>>
                <label for="optionsRadios3">Active</label>
                <input type="radio" value="0" id="optionsRadios4" name="status" <?php if($brec['ne_status']=='0'){ echo 'checked';}?>>
                <label for="optionsRadios4">Inactive</label>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
                <button type="reset" name="reset" class="btn btn-danger">Reset</button>
                <button type="button" onClick="myGetlink()" class="btn btn-warning">Get Link</button>
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
<!------------------------>
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
