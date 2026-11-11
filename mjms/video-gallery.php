<?php include("inc/function.php"); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include "inc/head.php"; ?>
    
    <title>Top 10 schools in Delhi for nursery admissions, Best school near me</title>   
      <meta name="description" content="Mahavir Junior Model School is a top 10 school in Delhi for nursery admissions. MJMS making bright future for your kids and giving a lean way to become a perfect person in their life."/>
      <meta name="keywords" content="Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School, Pre-Primary school of North Delhi"/>
    
    
</head>
<body>
<header>
<?php include "inc/header.php"; ?>
</header>

<section class="bread">
<img src="img/video.jpg" alt="Top 10 schools in Delhi for nursery admissions" title="Top 10 schools in Delhi for nursery admissions"/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="index.php"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Gallery</a></li>
		<li><a>Video Gallery</a></li>
	</ul>
</div>
</section>

<section class="pages">
<div class="container">
    <!----flip----->
<div><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
    
<h1>Video Gallery</h1>	
	
<div class="masnorygallery video_lisitng isotope three-collumn clearfix portfolio-holder" data-isotope-options='{"itemSelector" : ".item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".item"}}'>
<?php
     $sqqll ="SELECT * FROM `tbl_videoalbum` WHERE `pa_status`='1' ORDER BY `pa_id` ";
     $resulltt = $conn->query($sqqll);
     if ($resulltt->num_rows > 0) {
     // output data of each row
     while($rowww = $resulltt->fetch_assoc()) {
     ?>  
  
  <div class="item">
  <div class="item_listing">
  <a href="https://youtu.be/<?= $rowww['pa_video']; ?>" rel="prettyPhoto">
    <div class="catpic"><iframe width="100%" height="250" src="https://www.youtube.com/embed/<?= $rowww['pa_video']; ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    
    
    </a> 
	</div>
	</div>
     <?php }} else { ?> <h3>Coming Soon...</h3>  <?php }  ?>
    
 
    
  
  
</div>	
	
	
</div>
      <img src="img/f2.png" alt="Top 10 schools in Delhi for nursery admissions" title="Top 10 schools in Delhi for nursery admissions">
</section>




<?php include "inc/footer.php"; ?>
<?php include "inc/footer-data.php"; ?>
</html>