<?php
require('checksession.php'); 
include 'includes/function.php';     
?>
<?php
if(isset($_POST['submit']))
{  
		
	$name = mysqli_real_escape_string($conn,$_POST['name']);	
	$year = mysqli_real_escape_string($conn,$_POST['year']);	
	$link = mysqli_real_escape_string($conn,$_POST['link']);
	$shorttext = mysqli_real_escape_string($conn,$_POST['short']);
	$description = mysqli_real_escape_string($conn,$_POST['description']);		
	$status = mysqli_real_escape_string($conn,$_POST['status']);	
	$bimage=$_FILES['bimage']['name'];
	$bimage=time()."_".$bimage;
	
		move_uploaded_file($_FILES["bimage"]["tmp_name"], "../uploads/page/".$bimage);
		

		$query=mysqli_query($conn,"INSERT INTO `tbl_msmsinprint`(`ne_name`, `ne_link`, `ne_image`, `ne_detail`, `ne_shorttext`, `ne_status`, `cat_id`) VALUES ('$name','$link','$bimage','$shorttext','$description','$status','$year')");
		if($query==true)
		{
		$_SESSION['success']="MSMS inserted successfully";
		header( "refresh:3;url=view-msmsprint.php" );	
		}
		else 
		{
		// Message for unsuccessfull insertion
		$_SESSION['error']="Something went wrong. Please try again";
		header("location:view-msmsprint.php");
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
				<li class="breadcrumb-item active">Add MSMS</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed MSMS in Print <small>...</small></h1>
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
							<h4 class="panel-title">Add MSMS in Print</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
							<form role="form" action="" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
              
              <!--  <div class="form-group">
                  <label>MSMS Date</label>
                  <input type="text"  name="date"  placeholder="Enter Date" class="form-control pickdate" id="date_begin">
                </div>
                
                <div class="form-group">
                  <label>MSMS Time</label>
                  <input type="time"  name="time"  placeholder="Enter Time" class="form-control" id="date_begin">
                </div> -->
              
                <div class="form-group">
                  <label for="heading">MSMS Name</label>
                  <input type="text"  name="name" class="form-control" id="heading" placeholder="Enter Name">
                </div>
              
                <div class="form-group">
                  <label for="heading">Year</label>
                  <select class="form-control" name="year">
                      <option value="">Choose year</option>
                      <?php
                      $sqlYear = mysqli_query($conn,"SELECT id,name FROM `tbl_msmsprint_cat` WHERE `status` = '1'");
                      if(mysqli_num_rows($sqlYear) > 0){
                          while($rowYear = mysqli_fetch_assoc($sqlYear)){
                              ?>
                         <option value="<?= $rowYear['id']; ?>"><?= $rowYear['name']; ?></option>     
                    <?php          
                          }
                      }
                      ?>
                  </select>
                </div>
                 
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">MSMS Image</label>
                  <input type="file" name="bimage" class="form-control" id="exampleInputPassword1" >
                  <p class="help-block">Image dimension must be 1300 X 465 & must be jpg format</p>
                </div>
                
                <div id="myIMG" style="display:none;">   
                  <div class="form-group">
                     <iframe src="upload_image.php" frameborder="0" style="width:100%; height:240px; border: 1px solid #000; padding: 9px;"></iframe>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="heading">MSMS Link</label>
                  <input type="text"  name="link" class="form-control" id="heading" placeholder="Enter Link">
                </div>

                 <div class="form-group">
                  <label>Short Description</label>
                  <input type="text"  name="short"  placeholder="Enter Short Description" class="form-control" >
                </div>
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea  name="description" class="editor1 form-control" id="editor1" placeholder="Enter text ..." rows="6"></textarea>
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
