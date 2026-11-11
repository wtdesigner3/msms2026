<?php require("inc/function.php"); 
$abts=mysqli_query($conn,"SELECT * FROM `tbl_contact`");
$deta=mysqli_fetch_array($abts)
?>
<!DOCTYPE html>
<html>
<head>
          <title>Top 10 schools in north Delhi, Best school in north Delhi</title>   
      <meta name="description" content="We are one of the best in top 10 schools in north Delhi, and we are providing best facilities to learn your kids and our school campus is very clean and safe for your kids. "/>
      <meta name="keywords" content="Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Senior Model School (Junior Wing), Pre-Primary school of North Delhi"/>

    
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include "inc/head.php"; ?>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <style>
     input[type=text] { margin-bottom:5px; }
	 textarea { margin-bottom:5px; }
	 input[type=submit] { margin-bottom:5px; }
     </style>
</head>
<body>
<header>
<?php include "inc/header.php"; ?>
</header>


<section class="bread">
<img src="img/contact.jpg" alt="Contact Us" title="Contact Us"/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="index.php"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Contact Us</a></li>
	</ul>
</div>
</section>

<section class="pages">
<div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>Get in touch with us</h3>
        <p>You can reach us via the following address or contact Mahavir Senior Model School (Junior Wing) by phone, email or simply fill the contact form.</p>
        <div class="conatct_box">
          <div><a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13998.709073891841!2d77.1861691!3d28.6992992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd17cd4bd7788f7e!2sMahavir%20Junior%20Model%20School!5e0!3m2!1sen!2sin!4v1575034105332!5m2!1sen!2sin" target="_blank"><img src="img/add.png"> 
              
              <?= $deta['con_address']; ?>

              </a></div>
          <div><a href="tel:01127232398"><img src="img/phone.png">   <?= $deta['con_phone1']; ?> , <?= $deta['con_phone2']; ?></a></div>
		
          <div><a href="mailto:mjms.mjms@gmail.com"><img src="img/email.png">  <?= $deta['con_email1']; ?> </a></div>
          <div><b>School Timings : </b><br>
            Winter-8:50 AM To 12:50 PM
            <br>
            Summer-8:20 AM To 12:30 PM
          </div>
          
          <div><b>For Admission Counsellor : </b><a href="tel:<?= $deta['con_phone2']; ?>" style="font-size:18px; padding:0px"><?= $deta['con_phone2']; ?></a></div>
        </div>
        <br />
        <h4>Contact Form</h4>
        <p>You can reach us via the following address or contact Mahavir Senior Model School (Junior Wing) by phone, email or simply fill the contact form.</p>
        <div class="form">
         <form action="<?php echo SITE_URL;?>send2.php" method="post">
            <input type="text" name="name" placeholder="Name *" class="form-control" placeholder="Name" required />
            <input type="text" name="email" placeholder="Email *" class="form-control" placeholder="Email Id" required />
            <input type="text" name="phone" placeholder="Contact *" class="form-control" placeholder="Mobile No." required />
            <textarea name="mesg" rows="6" placeholder="Message" class="form-control" placeholder="Comments / Feedback / Queries"></textarea>
            <div class="g-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div>
            <button type="submit" name="submit" class="btn btn-success btn-lg">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-md-7">
        <h3>Location</h3>
        <iframe src="<?= $deta['con_map']; ?>" width="100%" height="750" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
  
  <!----flip----->
<div class="container"><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Senior Model School (Junior Wing)
</span>
</h1> </div>
<!----flip----->



  <img src="img/f2.png" >
</section>

<?php include "inc/footer.php"; ?>

<?php include "inc/footer-data.php"; ?>
</html>