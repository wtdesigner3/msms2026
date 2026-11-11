<?php 
include("inc/function.php"); 
$year = $_GET['year'];
?>
<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Top schools in north Delhi, Top 10 schools in north Delhi</title>
   <meta name="keywords" content="Best school in north Delhi, school in north Delhi, north delhi top schools, best school in north west delhi, schools for nursery admission near me, schools for nursery admission in delhi, top 10 schools in north delhi, top 5 schools in north delhi, top schools near me, best school near me, top 10 schools in delhi for nursery admissions, list of schools in north delhi, top schools in north delhi" />
   <meta name="description" content="Mahavir Senior Model School is one of the best school in north Delhi. Top Schools in north Delhi." />
   <?php include 'inc/head.php'; ?>
   <style>.pp_content_container iframe{margin-bottom: 0;}</style>
</head>

<body>
   <?php include 'inc/header.php'; ?>
   <section class="bread">
      <img src="img/about-us.jpg" alt="" title="" />
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

         <h1>Video Gallery</h1>

         <div class="masnorygallery video_lisitng isotope three-collumn clearfix portfolio-holder" data-isotope-options='{"itemSelector" : ".item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".item"}}'>

            <?php
            $sqqll = "SELECT * FROM `tbl_videoalbum` WHERE `pa_status`='1' AND `pa_year`='$year' ORDER BY `pa_id` desc ";
            $resulltt = $conn->query($sqqll);
            if ($resulltt->num_rows > 0) {
               // output data of each row
               while ($rowww = $resulltt->fetch_assoc()) {
            ?>
                  <div class="item">
                     <div class="item_listing">
                        <a href="https://youtu.be/<?= $rowww['pa_video']; ?>" rel="prettyPhoto" title="<?= $rowww['pa_name']; ?>">
                           <div class="catpic"><iframe width="100%" height="250" src="https://www.youtube.com/embed/<?= $rowww['pa_video']; ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>


                        </a>
                     </div>
                  </div>
               <?php }
            } else { ?> <h3>Coming Soon...</h3> <?php }  ?>



         </div>


      </div>
      <!----flip----->
      </br></br>
      <div class="container">
         <h1 class="demo1" align="left">
            <span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
            </span>
         </h1>
      </div>
      <!----flip----->
   </section>



   <?php
   include 'inc/footer.php';
   include 'inc/footer-data.php';
   ?>
   <script type="text/javascript">
$("a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'pp_default',
		slideshow: 3000,
		deeplinking: false,
		autoplay_slideshow: false
	});
</script>
</body>

</html>