<?php include('inc/function.php'); 

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>School Leaving Certificate | Mahavir Senior Model School (MSMS)</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>css/datepicker.css">
<?php include 'inc/head.php';?>
</head>
<?php include 'inc/header.php'; ?>

<section class="bread">
<img src="<?php echo SITE_URL;?>img/about-us.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>School Leaving Certificate</a></li>
	</ul>
</div>
</section>

<section class="pages">
<div class="container">
<h3>School Leaving Certificate</h3>
<style>.searchform input[type="text"]{width:100%;height:36px;padding:0 10px;}</style>
<style>
.searchform input[type="text"]{width:100%;height:36px;padding:0 10px;}
.student_listing{padding:30px;background:#fff;margin:30px 0;box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);}
.pdf-show{display:block;text-align:center;margin:15px 0;}
.pdf-show img{max-height:200px;}
.stu_img{display:block;text-align:center;margin-bottom:15px;}
.stu_img img{border-radius:100%;min-height:100px;max-height:100px;max-width:100px;}
.stu_desc{display:block;text-align:center;}
.stu_desc .stu_name{font-size:18px;color:#000;}
.stu_desc .stu_dob{color:#555;}
</style>
        <form  method="post" class="searchform">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <input type="text" name="username" placeholder="Enter Admission No." id="UserName" autocomplete="off" required>
              <span id="name_status"></span>
            </div> 
            <div class="col-md-4 col-sm-4">
              <input type="text" name="dob"  placeholder="Date of Birth" id="UserEmail" autocomplete="off">
              <span id="email_status"></span>
            </div>
          
            <div class="col-md-4 col-sm-4">
              <button type="submit" name="submit_form" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
</div>
  <?php
  if(isset($_POST['submit_form'])) { 
      $admissionNo = mysqli_real_escape_string($conn, trim($_POST['username'] ?? ''));
      $dob = mysqli_real_escape_string($conn, trim($_POST['dob'] ?? ''));
      $query = "SELECT * FROM `tbl_certificate` WHERE `slc_admissionno`='$admissionNo' AND `slc_dob`='$dob'";
      $Data = mysqli_query($conn, $query);
      
      while($Data && $searchData = mysqli_fetch_array($Data)){
      ?>
        <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="col-md-4 col-sm-4">
        <div class="student_listing">
        <div class="stu_img"><img src="img/demo.jpg"></div>
        <div class="stu_desc">
        <div class="stu_name"><?= $searchData['slc_name']; ?></div>
        <div class="stu_dob"><?= $searchData['slc_dob']; ?></div>
        <div class="pdf-show"><embed src="uploads/slc/<?= $searchData['slc_file']; ?>"></div>
        <div align="center">
            <a target="_blank" href="uploads/slc/<?= $searchData['slc_file']; ?>" class="btn btn-success">View</a>
            <a href="uploads/slc/<?= $searchData['slc_file']; ?>" class="btn btn-success" download>Download</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4"></div>
        </div>
  <?php } }  ?>

</section>



<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/datepicker.js"></script>
<script type="text/javascript">$('input[name="dob"]').datepicker({format: 'yyyy-mm-dd',autoclose: true});</script>



</body>
</html>