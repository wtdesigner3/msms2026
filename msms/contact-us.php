<?php require("inc/function.php"); 
$abts=mysqli_query($conn,"SELECT * FROM `tbl_contact`");
$deta=mysqli_fetch_array($abts)
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mahavir Senior Model School (MSMS)</title>
<?php include 'inc/head.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="img/contact-us.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Contact Us</a></li>
	</ul>
</div>
</section>

<section class="pages">
<div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>Get in touch with us</h3>
        <p>You can reach us via the following address or contact Mahavir Senior Model School by phone, email or simply fill the contact form.</p>
        <div class="conatct_box">
          <div><a href="https://goo.gl/maps/fkjUv5vLsyY7cdST7" target="_blank"><img src="img/add.png"> <?= $deta['con_address']; ?></a></div>
          <div><a href="tel:<?= $deta['con_phone1']; ?>"><img src="img/phone.png"> <?= $deta['con_phone1']; ?></a></div>
          <div><a href="tel:<?= $deta['con_phone2']; ?>"><img src="img/phone.png"> <?= $deta['con_phone2']; ?></a></div>
		  <!--<div><a><img src="img/fax.png"> <?= $deta['con_phone2']; ?></a></div>-->
          <div><a href="mailto:<?= $deta['con_email1']; ?>"><img src="img/email.png"> <?= $deta['con_email1']; ?></a></div>
          <div><a href="mailto:<?= $deta['con_email2']; ?>"><img src="img/email.png"> <?= $deta['con_email2']; ?></a></div>
        </div>
        <br />
        <h4>Contact Form</h4>
        <p><?= $deta['con_detail']; ?></p>
        <div class="form">
          <form action="contact.php" method="post" class="form_control">
            <input type="text" name="name" placeholder="Name *" class="form-control" placeholder="Name" />
            <input type="email" name="email" placeholder="Email *" class="form-control" placeholder="Email Id" />
            <input type="text" name="mobile" placeholder="Contact No. *" class="form-control" placeholder="Mobile No." />
            <textarea name="message" rows="6" placeholder="Message" class="form-control" placeholder="Comments / Feedback / Queries"></textarea>
            <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div>
            <button type="submit" name="csubmit" class="btn btn-success btn-lg">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-md-7">
        <h3>Location</h3>
        <iframe src="<?= $deta['con_map']; ?>" width="100%" height="750" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
    
    <!----flip----->
    </br></br>
<div><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
    
  </div>




</section>



<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
</body></html>