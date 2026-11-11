<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('checksession.php'); 
include 'includes/function.php'; 
$condata=mysqli_query($conn,"SELECT * FROM `tbl_about`");
$conrec=mysqli_fetch_array($condata);

if(isset($_POST['update']))
{
 $title = mysqli_real_escape_string($conn,$_POST['title']); 
  $metatag = mysqli_real_escape_string($conn,$_POST['metatag']); 
    $keyword = mysqli_real_escape_string($conn,$_POST['keyword']); 
	 $metadesc = mysqli_real_escape_string($conn,$_POST['metadesc']);
      $detail = mysqli_real_escape_string($conn,$_POST['detail']); 
      $mission = mysqli_real_escape_string($conn,$_POST['mission']);   
	  $vision = mysqli_real_escape_string($conn,$_POST['vision']);   
	  $objective = mysqli_real_escape_string($conn,$_POST['objective']);   
      $image=$_FILES['image']['name'];
      $image=time()."_".$image; 
      $fileinfo = $_FILES["image"]["tmp_name"];
      if($fileinfo!='')
	  {
        move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/page/".$image);
        $query=mysqli_query($conn,"UPDATE `tbl_about` SET `abt_title`='$title',`abt_titletag`='$metatag',`abt_keyword`='$keyword',`abt_metadesc`='$metadesc',`abt_details`='$detail',`abt_mission`='$mission',`abt_vision`='$vision',`abt_objective`='$objective',`abt_images`='$image'");
      }
       else
      {
        $query=mysqli_query($conn,"UPDATE `tbl_about` SET `abt_title`='$title',`abt_titletag`='$metatag',`abt_keyword`='$keyword',`abt_metadesc`='$metadesc',`abt_details`='$detail',`abt_mission`='$mission',`abt_vision`='$vision',`abt_objective`='$objective'");
      }
        if($query)
      {
			$_SESSION['success']="Aboutus Updated Successfull";
            header("refresh: 3;");
      }
        else
      {
           $_SESSION['error']="Something Error";
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
				<li class="breadcrumb-item"><a href="javascript:;">Aboutus Management</a></li>
				<li class="breadcrumb-item active">Add Aboutus</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Managed Aboutus <small>...</small></h1>
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
							<h4 class="panel-title">Add Aboutus</h4>
						</div>
						<!-- end panel-heading -->
						
						<!-- begin panel-body -->
						<div class="panel-body">
                        
                         <!-----------------------------------------------------/Message/------------------------------------------------>
               <?php if(isset($erromsg)!=''){ ?>
               <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> <?php echo $erromsg;?>
               </div>
                <?php  } if(isset($msg)!=''){?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong>Well done!</strong> <?php echo $msg;?>.
                  </div> 
                <?php } ?>     
              <!-----------------------------------------------------/Message/------------------------------------------------> 
                        
                          
							<form role="form" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
             
              
                <div class="form-group">
                  <label for="heading">Heading Title</label>
                  <input type="text"  name="title" class="form-control" id="heading" placeholder="Enter Title" value="<?= $conrec['abt_title']; ?>">
                </div>
                
               
                
                <div id="myDIV" style="display:none;"> 
                 <div class="form-group">
                  <label for="metatag">Meta Title</label>
                  <input type="text" name="metatag" id="metatag" placeholder="Meta Title" value="<?= $conrec['abt_titletag']; ?>" class="form-control" >
                 </div>
                 
                  <div class="form-group">
                  <label for="keyword">Meta Keyword</label>
                  <textarea name="keyword" id="keyword" placeholder="Meta Keyword" value="<?= $conrec['abt_keyword']; ?>" class="form-control" ></textarea>
                 </div>
                 
                 <div class="form-group">
                  <label for="metadescription">Meta Description</label>
                  <textarea name="metadesc" id="metadescription" placeholder="Meta Description" class="form-control" ><?= $conrec['abt_metadesc']; ?></textarea>
                 </div>
                 </div>
                
               
             
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Image File</label>
                  <input type="file"  name="image" class="form-control" id="exampleInputPassword1" >
                  <p class="help-block">Image dimension must be 1360 X 600 & must be jpg format</p>
                   <p>
                      <img src="../uploads/page/<?= $conrec['abt_images']; ?>" height="150px" width="200px" /> 
                    </p>
                </div>
                
                 
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea  name="detail" class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"><?= $conrec['abt_details']; ?></textarea>
                </div>
                
                
                <div class="col-md-12">
                 <div class="row">                
                 
                   <div class="form-group col-4">
                    <label>OUR MISSION</label>
                    <textarea  name="mission" class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"><?= $conrec['abt_mission']; ?></textarea>
                   </div>
                   
                   <div class="form-group col-4">
                    <label>OUR VISION</label>
                    <textarea  name="vision" class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"><?= $conrec['abt_vision']; ?></textarea>
                   </div>
                   
                   <div class="form-group col-4">
                    <label>OUR OBJECTIVE</label>
                    <textarea  name="objective" class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"><?= $conrec['abt_objective']; ?></textarea>
                   </div>
                 
                 </div>
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
