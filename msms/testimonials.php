<?php include('inc/function.php'); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Testimonials | Mahavir Senior Model School (MSMS)</title>
<?php 
include 'inc/head.php';
?>
</head>
<?php
include 'inc/header.php';
?>

<section class="bread">
<img src="<?php echo SITE_URL;?>img/about-us.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Testimonials</a></li>
	</ul>
</div>
</section>

<section class="pages">
<div class="container">
<h3>Testimonials</h3>
<style>.testimonials_listing{column-count:1;padding:0;}</style>
<ul class="testimonials_listing">
<?php
	$testid = $_GET['id'];
	$ptesti=mysqli_query($conn,"SELECT * FROM `tbl_testimonial` WHERE tt_id='$testid' and `tt_status`='1'");
	while($ptestirow=mysqli_fetch_array($ptesti))
	{
?>	
	<li>
	<div class="testi_desc">
	<i class="fa fa-quote-left"></i>
	<?php echo $ptestirow['tt_detail'];?>
	</div>
	<div class="testi_auth_desc">
		<div class="testi_auth"><img src="<?php echo SITE_URL;?>uploads/testimonial/<?php echo $ptestirow['tt_image'];?>"></div>
		<div class="testi_auth_name"><?php echo $ptestirow['tt_name'];?> <small><?php echo $ptestirow['tt_profession'];?></small></div>
		<div style="margin-top:10px;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
	</div>
	</li>
	
<?php } ?>	
	
</ul>


</div>
<!----flip----->
</br>
<div class="container"><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
</section>



<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
</body></html>