<?php require("inc/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Careers | Mahavir Senior Model School (MSMS)</title>
<?php include 'inc/head.php'; ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="img/career.jpg" alt="Careers" title="Careers"/>
</section>
<section class="bredcrumps">
  <div class="container">
    <ul>
      <li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
      <li><a>Careers</a></li>
    </ul>
  </div>
</section>

<section class="pages">
  <div class="container">
    <h3>Careers</h3>
    <form action="cquery.php" method="post" name="alumni" enctype="multipart/form-data" class="career">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="row">
		  	<div class="col-md-6 col-sm-6">
				<div class="field">
					<select name="jobtype" class="textbox-text" required>
						<option value="" selected disabled>Select Type</option>
						<option value="Full Time">Full Time</option>
						<option value="Part Time">Part Time</option>
					</select>
				   </div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="field">
					<select name="category" required>
						<option value="" selected disabled>Select Category</option>
						<option value="PGT">PGT</option>
						<option value="TGT">TGT</option>
						<option value="Nursery">Nursery</option>
					</select>
				   </div>
			</div>
		  </div>
        </div>
        
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input name="subject" placeholder="Subject Specialisation" type="text" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="name" placeholder="Full Name" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="dob" placeholder="Date of Birth" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="residence" placeholder="Residence Address" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="mobile" placeholder="Mobile Number" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="email" name="email" placeholder="Email Address" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="qualification" placeholder="Academic qualification" required>
          </div>
        </div>
		<div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="experience" placeholder="Experience Details" required>
          </div>
        </div>
		<div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="texperience" placeholder="Total Experience in Years" required>
          </div>
        </div>
		<div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="salary" placeholder="Salary Expected" required>
          </div>
        </div>
		<div class="col-md-4 col-sm-4">
          <div class="field">
            <select name="exstudent" required>
				<option value="" selected disabled>Ex-Student of MSMS</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
          </div>
        </div>
		
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="father" placeholder="Father's Name" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="field">
            <input type="text" name="mother" placeholder="Mother's Name">
          </div>
        </div>
		<div class="col-md-4 col-sm-4">
          <div class="field">
            <select name="mstatus" required>
				<option value="" selected disabled>Marital Status</option>
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Widow">Widow</option>
				<option value="Divorce">Divorce</option>
			</select>
          </div>
        </div>
		<div class="col-md-12 col-sm-12">
		    <div align="center"><div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div></div>
        	<button type="submit" name="crsubmit" class="btn-submit">Submit</button>
		</div>
      </div>
    </form>
  
  <!----flip----->
  <br><br>
<div><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
  
  </div>
</section>

<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/datepicker.js"></script>
<script type="text/javascript">$('input[name="dob"]').datepicker({endDate: new Date(),autoclose: true,format:'dd/mm/yyyy'});</script>
</body>
</html>
