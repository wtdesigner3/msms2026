<?php 
require('checksession.php'); 
require('includes/function.php');

$sqqll ="SELECT `pro_id`, `pro_logo`, `pro_favicon` , `pro_title`, `pro_keyword`, `pro_detail` FROM `tbl_profile`";
$resulltt = $conn->query($sqqll);
$rowww = $resulltt->fetch_assoc();
//-------------------------------------//
$stl ="SELECT `con_id`, `con_phone1`, `con_phone2` , `con_email1`, `con_email2`, `con_address`, `con_detail`, `con_map`,`con_facebook`,`con_instagram`,`con_skype`,`con_linkedin`,`con_twitter`,`con_youtube`, `con_google` FROM `tbl_contact`";
$rqt = $conn->query($stl);
$root = $rqt->fetch_assoc(); 

$strl ="SELECT `id`, `name`, `email` , `image` FROM `tbl_admin`";
$rqrt = $conn->query($strl);
$roort = $rqrt->fetch_assoc();   
?>
<?php
if(isset($_POST['logosubmit'])){
	$tmpName = $_FILES['logo']['tmp_name'];

	if(file_exists($tmpName)){
		$fileName = $_FILES['logo']['name'];	
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$fileName = 'logo.'.$ext;

		if(move_uploaded_file($tmpName, '../uploads/'.$fileName)==true){
			mysqli_query($conn, "UPDATE  tbl_profile SET pro_logo = '$fileName' WHERE pro_id = 1 ");
			$_SESSION['success']="Logo successfully updated";	
			header("refresh: 1;");
		}else{
			$_SESSION['error']="Something  wrong";	
		}
	}else{
		$_SESSION['warning']="please select image only";	
	}

}
if(isset($_POST['faviconsubmit'])){
	$tmpName=$_FILES['favicon-icon']['tmp_name'];
	if(file_exists($tmpName)){
		$fileName=$_FILES['favicon-icon']['name'];
		$ext=pathinfo($fileName,PATHINFO_EXTENSION);
		$fileName="fevi-icon.".$ext;
		if(move_uploaded_file($tmpName, "../uploads/".$fileName)==true){
			mysqli_query($conn,"UPDATE tbl_profile SET pro_favicon ='$fileName' WHERE pro_id = 1");
			$_SESSION['success']="site image has been uploaded successfully";		
            header("refresh: 1;");
		}else{
			$_SESSION['error']="something went wrong";
		}

	}

}
if(isset($_POST['submitseo'])){
	$meta_title=mysqli_real_escape_string($conn,$_POST['metatitle']);
	$meta_keyword=mysqli_real_escape_string($conn,$_POST['metakeyword']);
	$meta_description=mysqli_real_escape_string($conn,$_POST['metadesc']);
	
    $actionQ="UPDATE tbl_profile SET pro_title='$meta_title',pro_keyword= '$meta_keyword',pro_detail='$meta_description' WHERE pro_id=1";
			$action=mysqli_multi_query($conn,$actionQ);

			if($action==true){
				$_SESSION['success']="Updated successfully";		
				header("refresh: 1;");
			}else{
				$_SESSION['error']="something went wrong";	
			}


}

if(isset($_POST['sociallink'])){
	$facebook = mysqli_real_escape_string($conn,$_POST['facebook']);
	$instagram = mysqli_real_escape_string($conn,$_POST['instagram']);
	$skype=mysqli_real_escape_string($conn,$_POST['skype']);
	$linkedin=mysqli_real_escape_string($conn,$_POST['linkedin']);
	$twitter=mysqli_real_escape_string($conn,$_POST['twitter']);
	$youtube=mysqli_real_escape_string($conn,$_POST['youtube']);
	$google=mysqli_real_escape_string($conn,$_POST['google']);
	
	$actionQ="UPDATE tbl_contact SET con_facebook='$facebook', con_instagram= '$instagram', con_skype='$skype', con_linkedin='$linkedin', con_twitter= '$twitter', con_youtube='$youtube',  con_google='$google' WHERE con_id=1";
	$action=mysqli_multi_query($conn,$actionQ);
	//echo $sql;
	if($action==true){
		$_SESSION['success']="Social link successfully updated";	
		header("refresh: 1;");
	}else{
		$_SESSION['error']="Something went wrong, Please try again";	
	}

}
//update contact detail....
if(isset($_POST['subcontact'])){
	$phone1=mysqli_real_escape_string($conn,$_POST['phone1']);
	$phone2=mysqli_real_escape_string($conn,$_POST['phone2']);
	$email1=mysqli_real_escape_string($conn,$_POST['email1']);
	$email2=mysqli_real_escape_string($conn,$_POST['email2']);
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	$map=mysqli_real_escape_string($conn,$_POST['location']);
	
    $actionQ="UPDATE tbl_contact SET con_phone1 = '$phone1', con_phone2='$phone2', con_email1='$email1', con_email2='$email2', con_address='$address', con_map='$map' WHERE con_id =1";

	         $action=mysqli_multi_query($conn,$actionQ);

     	if($action==true){
			$_SESSION['success']="Contact successfully updated";	
			header("refresh: 1;");
		}else{
			$_SESSION['error']="Something went wrong, Please try again.";	
		}
	}
	
if(isset($_POST['subdetail'])){
	$details=mysqli_real_escape_string($conn,$_POST['details']);
	
    $actionQ="UPDATE tbl_contact SET con_detail = '$details' WHERE con_id =1";

	         $action=mysqli_multi_query($conn,$actionQ);

     	if($action==true){
			$_SESSION['success']="Data Updated Successfully";	
			header("refresh: 1;");
		}else{
			$_SESSION['error']="Something went wrong, Please try again";	
		}
	}

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
                        <li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">Website Detail Edit</a></li>
					</ul>
					<!-- END profile-header-tab -->
				</div>
			</div>
			<!-- end profile -->
             <!-----------------------------------------------------/Message/------------------------------------------------>
              <?php if(isset($errmsg)!=''){ ?>
               <div class="alert alert-danger fade show">
                  <span class="close" data-dismiss="alert">×</span>
                  <strong>Warning!</strong> <?php echo $errmsg;?>
               </div>
                <?php  } if(isset($msg)!=''){?>
                  <div class="alert alert-success fade show">
                     <span class="close" data-dismiss="alert">×</span> <?php echo $msg;?>.
                  </div> 
                <?php } ?>     
              <!-----------------------------------------------------/Message/------------------------------------------------> 
			<!-- begin profile-content -->
			<div class="profile-content">
				<!-- begin tab-content -->
				<div class="tab-content p-0">
					<!-- begin #profile-post tab -->
					<div class="tab-pane fade show active" id="profile-post">
						<!-- begin timeline -->
						<ul class="timeline">
							
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
                                            <h4 class="panel-title">Website Details</h4>
                                        </div>
                                        <!-- end panel-heading -->
                                        
                                        <!-- begin panel-body -->
                                        <div class="panel-body">
                                            <div class="row">
		
                                                  <div class="col-md-8">
                                                  
                                                    <div class="col-md-3 col-lg-3 " align="center"> 
                                                  <img alt="User Pic" src="../uploads/<?php echo $rowww['pro_logo'];?>" class="img-circle img-responsive"> </div>
                                                      
                                                  </div>
                                                  <div class="col-md-8">
                                                 
                                                          <div class=" col-md-9 col-lg-9 ">
                                                                          <table class="table table-user-information">
                                                                              <tbody>
                                                                                  <tr>
                                                                                      <td><strong>Phone :</strong></td>
                                                                                      <td><strong><?php echo $root['con_phone1'];?>, <?php echo $root['con_phone2'];?></strong></td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><strong>Email : </strong></td>
                                                                                      <td><strong><?php echo $root['con_email1'];?>, <?php echo $root['con_email2'];?></strong></td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                      <td><strong>Address</strong></td>
                                                                                      <td><strong><?php echo $root['con_address'];?></strong></td>
                                                                                  </tr>
                                          
                                                                                  <tr>
                                                                                      <tr>
                                                                                          <td><strong>Short Detail</strong></td>
                                                                                          <td><strong><?php echo $root['con_detail'];?></strong></td>
                                                                                      </tr>
                                                                                      <tr>
                                                                                          <td><strong>Social Link</strong></td>
                                                                                          <td>
                                                                                            <?php if(empty($root['con_facebook'])){ ?> <?php } else { ?> 
                <a target="_blank" href="<?= $root['con_facebook']; ?>" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a> 
              <?php } ?>  
              <?php if(empty($root['con_instagram'])){ ?> <?php } else { ?> 
                <a target="_blank" href="<?= $root['con_instagram']; ?>" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a> 
              <?php } ?>  
              <?php if(empty($root['con_skype'])){ ?> <?php } else { ?>
                <a target="_blank" href="<?= $root['con_skype']; ?>" class="btn btn-social-icon btn-skype"><i class="fa fa-skype"></i>
                </a>
              <?php } ?>
              <?php if(empty($root['con_linkedin'])){ ?> <?php } else { ?>
                <a target="_blank" href="<?= $root['con_linkedin']; ?>" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
              <?php } ?>
              <?php if(empty($root['con_twitter'])){ ?> <?php } else { ?>
                <a target="_blank" href="<?= $root['con_twitter']; ?>" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter-square"></i></a>
              <?php } ?>
              <?php if(empty($root['con_youtube'])){ ?> <?php } else { ?>
                <a target="_blank" href="<?= $root['con_youtube']; ?>" class="btn btn-social-icon btn-youtube"><i class="fa  fa-youtube-play"></i></a>
              <?php } ?>
              <?php if(empty($root['con_google'])){ ?> <?php } else { ?>
                <a target="_blank" href="<?= $root['con_google']; ?>" class="btn btn-social-icon btn-whatsapp"><i class="fa fa-whatsapp"></i></a>
              <?php } ?>
                                                                                          </td>
                                                                                      </tr>
                                                                                      
                                          
                                                                                  </tr>
                                          
                                                                              </tbody>
                                                                          </table>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>                                   
                                <!-- end col-10 -->
                            </div>
                              
						</ul>
						<!-- end timeline -->
					</div>
                  <!-- begin #profile-post tab -->
                    <div class="tab-pane fade" id="profile-about">
						<!-- begin table -->
						<ul class="timeline">
							
							<div class="row">
                                <!-- begin col-10 -->
                               <div class="col-lg-4">
                                <!--     begin panel -->
                                    <div class="panel panel-inverse">
                                      
                                        <div class="panel-heading">
                                            <div class="panel-heading-btn">
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                            </div>
                                            <h4 class="panel-title">Website Logo</h4>
                                        </div>
                                       
                                        <div class="panel-body">
                                            <form role="form"  method="POST"  enctype="multipart/form-data">
                                                <div class="box-body">
                                                  <div class="form-group">
                                                   <p><img src="../uploads/<?php echo $rowww['pro_logo'];?>"></p>
                                                    <input type="file" name="logo" class="form-control" id="exampleInputFile">                                  
                                                  </div>
                                                </div>
                                               
                                               <div class="box-footer">
                                                  <button type="submit" name="logosubmit" onClick="if(confirm('Are You Sure Want To Change This Logo')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                                               </div>
                                         </form>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-4">
                                  <div class="panel panel-inverse">
                                      
                                        <div class="panel-heading">
                                            <div class="panel-heading-btn">
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                            </div>
                                            <h4 class="panel-title">Website Favicon</h4>
                                        </div>
                                       
                                        <div class="panel-body">
                                            <form role="form" method="POST"  enctype="multipart/form-data">
                                              <div class="box-body">
                                                <div class="form-group">
                                                   <p><img src="../uploads/<?php echo $rowww['pro_favicon'];?>" width="80" height="55"></p>
                                                    <input type="file" name="favicon-icon" class="form-control" id="exampleInputFile">
                                                </div>
                                               </div>
                                              <div class="box-footer">
                                                <button type="submit" name="faviconsubmit" onClick="if(confirm('Are You Sure Want To Change This Logo')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                                              </div>
                                            </form>
                                        </div>
                                      </div>
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
                                            <h4 class="panel-title">website detail</h4>
                                        </div>
                                        <!-- end panel-heading -->
                                        
                                        <!-- begin panel-body -->
                                        <div class="panel-body">
                                            <form role="form"  method="POST"  enctype="multipart/form-data">
                              <div class="box-body">
                             
                              
                                <div class="form-group">
                                  <label for="banner">Description</label>
                                  <textarea name="details" rows="5" class="form-control"><?php echo $root['con_detail'];?></textarea>
                                </div>
                                </div>
                              <!-- /.box-body -->
                
                              <div class="box-footer">
                                <button type="submit" name="subdetail" onClick="if(confirm('Are You Sure Want To Change Website Details')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel -->
                                </div>
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
                                            <h4 class="panel-title">Seo Meta/Keyword</h4>
                                        </div>
                                        <!-- end panel-heading -->
                                        
                                        <!-- begin panel-body -->
                                        <div class="panel-body">
                              <form role="form" method="POST"  enctype="multipart/form-data">
                              <div class="box-body">
                             
                              
                                <div class="form-group">
                                  <label for="banner">Meta Title <code> Title Tag Here </code></label>
                                  <input type="text" name="metatitle" class="form-control" id="banner" value="<?php echo $rowww['pro_title'];?>">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="bannerlink">Meta Keyword <code> Keyword Tag Here </code></label>
                                  <textarea  name="metakeyword" class="form-control"><?php echo $rowww['pro_keyword'];?></textarea>
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Meta Desc <code> Meta Description Here </code></label>
                                  <textarea name="metadesc" class="form-control" id="bannerlink"><?php echo $rowww['pro_detail'];?></textarea>
                                </div>
                               </div>
                              <!-- /.box-body -->
                              <div class="box-footer">
                                <button type="submit" name="submitseo" onClick="if(confirm('Are You Sure Want To Change This SEO Meta Tags')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel -->
                                    
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
                                            <h4 class="panel-title">Social Links</h4>
                                        </div>
                                        <!-- end panel-heading -->
                                        
                                        <!-- begin panel-body -->
                                        <div class="panel-body">
                                            <form role="form"  method="POST"  enctype="multipart/form-data">
                              <div class="box-body">
                             

                              
                                <div class="form-group">
                                  <label for="banner"><code>Facebook</code></label>
                                  <input type="text" name="facebook" class="form-control" id="banner" value="<?php echo $root['con_facebook'];?>">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="bannerlink"><code>Instagram</code></label>
                                  <input type="text"  name="instagram"  value="<?php echo $root['con_instagram'];?>" class="form-control" id="bannerlink">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1"><code>Skype</code></label>
                                  <input type="text" name="skype" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_skype'];?>">
                                </div>
                                
                               <div class="form-group">
                                  <label for="exampleInputPassword1"><code>Linkedin</code></label>
                                  <input type="text" name="linkedin" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_linkedin'];?>">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1"><code>Twitter</code></label>
                                  <input type="text" name="twitter" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_twitter'];?>">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1"><code>Youtube</code></label>
                                  <input type="text" name="youtube" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_youtube'];?>">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1"><code>Whatsapp</code></label>
                                  <input type="text" name="google" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_google'];?>">
                                </div>
                                
                              </div>
                              <!-- /.box-body -->
                
                              <div class="box-footer">
                                <button type="submit" name="sociallink" onClick="if(confirm('Are You Sure Want To Change This Social Link')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel -->   
                                </div>
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
                                  <label for="banner">Phone-1</label>
                                  <input type="text" name="phone1" class="form-control" id="banner" value="<?php echo $root['con_phone1'];?>">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="bannerlink">Phone-2</label>
                                  <input type="text"  name="phone2"  value="<?php echo $root['con_phone2'];?>" class="form-control" id="bannerlink">
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Email-1</label>
                                  <input type="text" name="email1" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_email1'];?>">
                                </div>
                                
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Email-2</label>
                                  <input type="text" name="email2" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_email2'];?>">
                                </div>
                                
                                 <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <textarea class="form-control" name="address"><?php echo $root['con_address'];?></textarea>
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Maps <code>Paste Code Under-["https://maps"]</code></label>
                                  <input type="text" name="location" class="form-control" id="exampleInputPassword1" value="<?php echo $root['con_map'];?>">
                                </div>
                                
                              </div>
                              <!-- /.box-body -->
                
                              <div class="box-footer">
                                <button type="submit" name="subcontact" onClick="if(confirm('Are You Sure Want To Change This Contact Details')){ return true;} else { return false; }" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                                        </div>
                                        <!-- end panel-body -->
                                    </div>
                                    <!-- end panel -->
                                </div>
                                <!-- end col-10 -->
                            </div>
                              
						</ul>
						<!-- end table -->
					</div>
                  <!-- begin #profile-post tab -->
                    
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
	
	<?php require("includes/footer-data.php"); ?>
	
	<script>
		$(document).ready(function() {
			App.init();
			Profile.init();
		});
	</script>

</body>
</html>
