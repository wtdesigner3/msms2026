<?php include("inc/function.php");  ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admission Enquiry Form</title>
 
<?php include 'inc/head.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['C_image']; ?>" alt="" title=""/>
</section>

<section class="bredcrumps">
  <div class="container">
    <ul>
      <li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
      <li><a>Admission Enquiry Form</a></li>
    </ul>
  </div>
</section>


<section class="pages">
  <div class="container">
  <div class="row">
  
 
       <div>
         <div class="content_listing content"  >
          <h1>Admission Enquiry Form</h1>
         
         
         
         <div class="form">
          <form action="contact.php" method="post" class="form_control">
              <div class="form-group col-md-6">
                  <div>
                       <input type="text" name="name" placeholder="Full name of Student *" class="form-control">
                  </div>
              </div>
              
                <div class="form-group col-md-6">
                  <div>
                       <input type="text" name="name" placeholder="DOB - i.e dd/mm/yyyy *" class="form-control">
                  </div>
              </div>
              
              <div class="form-group col-md-6">
                  <div>
                       <input type="text" name="name" placeholder="Father Name *" class="form-control">
                  </div>
              </div>
              
              <div class="form-group col-md-6">
                  <div>
                       <input type="text" name="name" placeholder="Mother Name *" class="form-control">
                  </div>
              </div>
              
              <div class="form-group col-md-6">
                  <div>
                       <input type="tel" name="name" placeholder="Contact Number *" class="form-control">
                  </div>
              </div>
              
              <div class="form-group col-md-6">
                  <div>
                       <input type="tel" name="name" placeholder="Class in which addmission is sought.(except class X & XII) *" class="form-control">
                  </div>
              </div>
              
              <div class="form-group col-md-6">
                  <div>
                       <input type="tel" name="name" placeholder="Annual income of family *" class="form-control">
                  </div>
              </div>
              
              <div class="form-group col-md-6">
                  <div>
                       <input type="email" name="name" placeholder="Valid Email address *" class="form-control">
                  </div>
              </div>
              
              
         
 
          
            <button type="submit" name="csubmit" class="btn btn-success btn-lg">Submit</button>
          </form>
        </div>
         </div>
        </div>
		
 
		
		
  </div>
    
  </div>
  <!----flip----->
  </br></br>
<div class="container"><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
</section>
<?php 
include 'inc/footer.php';
include 'inc/footer-data.php';
?>
<script src="<?php echo SITE_URL;?>js/stickySidebar.js"></script> 
<script>
		$(document).ready(function() {
	
			$('#sidebar').stickySidebar({
				sidebarTopMargin: 20,
				footerThreshold: 40
			});
		
		});
		</script>
</body></html>
