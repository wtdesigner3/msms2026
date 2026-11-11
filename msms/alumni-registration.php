<?php include('inc/function.php'); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mahavir Senior Model School (MSMS)</title>
<link rel="stylesheet" type="text/css" href="css/datepicker.css">
<?php 
include 'inc/head.php'; ?>
</head>
<?php include 'inc/header.php';?>

<section class="bread">
<img src="img/alumni.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="index.php"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Alumni Registration</a></li>
	</ul>
</div>
</section>
<style>.bredcrumps{background:#ededed;}</style>
<section class="pages" style="background:#fff;">
<div class="container">
<h3>Alumni Registration</h3>

<form action="msmsalumini.php" method="post"  class="aumni">
<div class="row">
<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="name" placeholder="Enter Name" required><label for="fullname">Alumni Name</label><i class="fa fa-user"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="class" placeholder="Enter Class" required><label for="fullname">Class</label><i class="fa fa-list"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="section" placeholder="Enter Section" required><label for="fullname">Section</label><i class="fa fa-copy"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="year" placeholder="Select Year" required><label for="fullname">Year of Passing</label><i class="fa fa-calendar"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="mobile" placeholder="Enter Mobile No." required><label for="fullname">Mobile Number</label><i class="fa fa-phone"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="email" placeholder="Enter Email Id" required><label for="fullname">Email Address</label><i class="fa fa-envelope"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="location" placeholder="Enter Location" required><label for="fullname">Current Location</label><i class="fa fa-map-marker"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="organisation" placeholder="Enter Organisation" required><label for="fullname">Current Organisation</label><i class="fa fa-briefcase"></i></div>
</div>

<div class="col-md-4 col-sm-4">
	<div class="field"><input type="text" name="designation" placeholder="Enter Designation" required><label for="fullname">Current Designation</label><i class="fa fa-pencil"></i></div>
</div>

<div class="col-md-12 col-sm-12">
	<div class="field"><input type="text" name="specialization" placeholder="Enter Specialization/Major" required><label for="fullname">Specialization/Major</label><i class="fa fa-bookmark"></i></div>
</div>

<div class="col-md-12 col-sm-12">		
<div class="field"><input type="text" name="about" placeholder="Enter About"><label for="fullname" required>About Me</label><i class="fa fa-address-book"></i></div>
</div>	

<div class="col-md-12 col-sm-12" align="left">
 <div class="g-recaptcha" data-sitekey="6LdXlcYUAAAAAPSI0i_3LoEjTHNKNY9OybJRF0Ed"></div>
 </div>
 
<div class="col-md-12 col-sm-12">
	<button type="submit" name="submit" class="btn-submit">Submit</button>
</div>

	
	</div>
</form>

<!----flip----->
</br></br>
<div><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->

</div>
</div>
</section>



<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript">$('input[name="year"]').datepicker({minViewMode: 'years',format: 'yyyy',autoclose: true});</script>
</body></html>