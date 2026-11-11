<?php include("inc/function.php"); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include "inc/head.php"; ?>
    
    <title>Top schools near me, Top 5 schools in north Delhi</title>   
      <meta name="description" content="Mahavir Junior Model School is a one of the best top schools near me/You. Your kids will learn their schooling very well"/>
      <meta name="keywords" content="Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School, Pre-Primary school of North Delhi"/>
    
</head>
<body>
<header>
<?php include "inc/header.php"; ?>
</header>

<section class="bread">
<img loading="lazy"  src="img/galleryimage.jpg" alt="Top schools near me" title="Top schools near me"/>
</section>
    
    
    
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Gallery</a></li>
		<li><a>Photo Gallery</a></li>
	</ul>
</div>
</section>
    


    <section class="pages ">
   <div class="container">
       <!----flip----->
<div><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
     <h1>Photo Gallery</h1>	
       <div class="masnorygallery photo_lisitng isotope three-collumn clearfix portfolio-holder" data-isotope-options="{&quot;itemSelector&quot; : &quot;.item&quot;,&quot;layoutMode&quot; : &quot;masonry&quot;,&quot;transitionDuration&quot;:&quot;0.7s&quot;,&quot;masonry&quot; : {&quot;columnWidth&quot;:&quot;.item&quot;}}">
       
    <?php 
$sqlQuery = "SELECT * FROM `tbl_photoalbum` WHERE `pa_status`='1' ORDER BY pa_id DESC";
$i = 1;
$results = mysqli_query($conn, $sqlQuery);
if ($results->num_rows > 0) { 
?>
    <?php foreach ($results as $data) {
        $i++;
        $abrc = mysqli_query($conn, "SELECT `p_id`, `p_name`, `p_images` FROM `tbl_photo` WHERE `photoalbum`='".$data['pa_id']."' AND `p_status`='1'");
        $bbrc = mysqli_fetch_array($abrc);
    ?>
        <div class="container">
            <div class="col-sm-12">
                <div class="item">
                    <div class="item_listing">
                        <!-- Fancybox Gallery -->
                        <?php foreach (explode(',', $bbrc['p_images']) as $key1 => $value1) { ?>
                            <a href="<?php echo SITE_URL; ?>uploads/photo/<?= $value1; ?>" data-fancybox="gallery-<?= $i; ?>" data-caption="<?= $bbrc['p_name']; ?>">
                        <?php } ?>
                            <div class="catpic">
                                <!-- Thumbnail Image -->
                                <img loading="lazy" src="<?php echo SITE_URL; ?>uploads/photo/<?= $data['pa_image']; ?>" alt="Top schools near me" title="Top schools near me" />
                                <div class="total-pics">Total Photos : <strong> 
                                    <?php 
                                    $pimages = $bbrc['p_images']; 
                                    $image = explode(",", $pimages); 
                                    echo count($image); 
                                    ?>
                                </strong></div>
                            </div>
                            <div class="catname"><?= $data['pa_name']; ?></div>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>

                 
                           
     </div>

  
  </div>
        
        <img loading="lazy"  src="img/f2.png" >
</section>


<?php include "inc/footer.php"; ?>

<?php include "inc/footer-data.php"; ?>
</body>

</html>