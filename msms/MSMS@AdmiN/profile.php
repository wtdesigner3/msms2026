<?php 
require('checksession.php'); 
require('includes/function.php');    

$strl ="SELECT `id`, `name`,`username`, `email` , `image` FROM `tbl_admin`";
$rqrt = $conn->query($strl);
$roort = $rqrt->fetch_assoc();  

if(isset($_POST['update']))
{
$name = mysqli_real_escape_string($conn,$_POST['name']); 
$email = mysqli_real_escape_string($conn,$_POST['email']); 
$username= mysqli_real_escape_string($conn,$_POST['username']);  
  $image=$_FILES['image']['name'];
  $image=time()."_".$image; 
    $fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
    if($fileinfo!=''){
    
        move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/admin/".$image);
        $query=mysqli_query($conn,"UPDATE `tbl_admin` SET `name`='$name',`email`='$email',`username`='$username',`image`='$image'");
        }
       else
       {
        $query=mysqli_query($conn,"UPDATE `tbl_admin` SET `name`='$name',`email`='$email',`username`='$username'");
      }
        if($query)
        {
            $msg = "Updated Successfull";
            header("refresh: 3;");
        }
        else
        {
            $erromsg = "Something Error";
        }
    
}
 
?>
<?php 
if(isset($_POST['updatepassword']))
{ 
$old_password= mysqli_real_escape_string($conn,$_POST['old_password']);
$old_password = md5($old_password);
$new_password= mysqli_real_escape_string($conn,$_POST['new_password']);
$new_password = md5($new_password);
$con_password= mysqli_real_escape_string($conn,$_POST['con_password']);
$con_password = md5($con_password);
$chg_pwd=mysqli_query($conn,"select * from tbl_admin where id='1'");
$chg_pwd1=mysqli_fetch_array($chg_pwd);
$data_pwd=$chg_pwd1['password'];
if($data_pwd==$old_password){
if($new_password==$con_password){
$update_pwd=mysqli_query($conn,"update tbl_admin set password='$new_password' where id='1'");
$msg ="Update Sucessfully !!!";
}
else{
$erromsg="Your new and Retype Password is not match !!!";
}
}
else
{
$erromsg="Your old password is wrong !!!";
}}
?>

<!DOCTYPE html>
<html lang="en">
<?php require("includes/head.php"); ?>
<body>
	<!-- begin #page-loader -->
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<?php require("includes/header.php"); ?>
	<!-- end #header -->	
	<!-- begin #sidebar -->
	<?php require("includes/left.php"); ?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content content-full-width">
			<!-- begin profile -->
			<div class="profile">
				<div class="profile-header">
					<!-- BEGIN profile-header-cover -->
					<div class="profile-header-cover"></div>
					<!-- END profile-header-cover -->
					<!-- BEGIN profile-header-content -->
					<div class="profile-header-content">
						<!-- BEGIN profile-header-img -->
						<div class="profile-header-img">
							<img src="../uploads/admin/<?= $roort['image']; ?>" alt="">
						</div>
						<!-- END profile-header-img -->
						<!-- BEGIN profile-header-info -->
						<div class="profile-header-info">
							<h4 class="m-t-10 m-b-5"><?= $roort['name']; ?></h4>
							<p class="m-b-10"><?= $roort['email']; ?></p>
							<a href="#" class="btn btn-xs btn-yellow">Edit Profile</a>
						</div>
						<!-- END profile-header-info -->
					</div>
					<!-- END profile-header-content -->
					<!-- BEGIN profile-header-tab -->
					<ul class="profile-header-tab nav nav-tabs">
						<li class="nav-item"><a href="#profile-post" class="nav-link active" data-toggle="tab">Website Detail</a></li>

					</ul>
					<!-- END profile-header-tab -->
				</div>
			</div>
			<!-- end profile -->
			<!-- begin profile-content -->
			<div class="profile-content">
				<!-- begin tab-content -->
				<div class="tab-content p-0">
					<!-- begin #profile-post tab -->
					<div class="tab-pane fade show active" id="profile-post">
						<!-- begin timeline -->
						<ul class="timeline">
                                       
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
							
							<div class="row">
                                <!-- begin col-10 -->
                                          
                                         
                                    <div class="col-lg-6">
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
                                            <h4 class="panel-title">Contact Detail</h4>
                                        </div>
                                        <!-- end panel-heading -->
                                          
                    
                                        <!-- begin panel-body -->
                                        <div class="panel-body">
                                            <form role="form"  method="POST"  enctype="multipart/form-data">
                              <div class="box-body">
                             
                              
                                <div class="form-group">
                                  <label for="banner">Name</label>
                                  <input type="text" name="name" class="form-control" id="banner" value="<?php echo $roort['name']; ?>">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="bannerlink">Username</label>
                                  <input type="text"  name="username"  value="<?php echo $roort['username']; ?>" class="form-control" id="bannerlink">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo $roort['email']; ?>">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="exampleInputPassword1">User Profile</label>
                                  <input type="file" name="image" class="form-control" id="exampleInputPassword1" value="<?php echo $roort['image']; ?>">
                                </div>
                                
                               
                                
                                
                                
                              </div>
                              <!-- /.box-body -->
                
                              <div class="box-footer">
                                <button type="submit" name="update" onClick="if(confirm('Are You Sure Want To Update Data')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                                <button type="button" onclick="myFunction()" class="btn btn-warning">Change Password</button>
                              </div>
                            </form>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel -->
                                </div>
                                
                             
                                    <div class="col-lg-6">
                                       <div id="myDIV" style="display:none;">
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
                                            <h4 class="panel-title">Change Password</h4>
                                        </div>
                                        <!-- end panel-heading -->
                                        
                                        <!-- begin panel-body -->
                                        <div class="panel-body">
                                            <form role="form"  method="POST"  enctype="multipart/form-data">
                              <div class="box-body">
                             
                              
                                <div class="form-group">
                                  <label for="banner">Old Password</label>
                                  <input type="password" name="old_password" class="form-control" id="banner" placeholder="Enter Old Password">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="bannerlink">New Password</label>
                                  <input type="password"  name="new_password"   placeholder="Enter New Password" class="form-control" id="bannerlink">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Confirm Password</label>
                                  <input type="password" name="con_password" class="form-control" id="exampleInputPassword1" placeholder="Enter Confirm Password">
                                </div>
                              </div>
                              <!-- /.box-body -->
                
                              <div class="box-footer">
                                <button type="submit" name="updatepassword" onClick="if(confirm('Are You Sure')){ return true;} else { return false; }" class="btn btn-primary">Change Password</button>
                              </div>
                            </form>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel -->
                                </div>
                                </div>
                                <!-- end col-10 -->
                            </div>
                              
						</ul>
						<!-- end timeline -->
					</div>
                   
				</div>
				<!-- end tab-content -->
			</div>
			<!-- end profile-content -->
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<?php require("includes/footer-data.php"); ?><!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			Profile.init();
			Notification.init();
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
