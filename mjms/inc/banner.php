<section class="sliders">

  <div class="mainslider owl-carousel">
  <?php 
	  $abrc1=mysqli_query($conn,"SELECT `bnr_title`,`bnr_link`,`bnr_alt`,`bnr_image` FROM `tbl_banner` WHERE `bnr_status`='1' ORDER BY `bnr_position` ASC");
	  while($bbrc1=mysqli_fetch_array($abrc1))
	  {
	?>
       <div class="item"><a href="<?= $bbrc1['bnr_link']; ?>" target="_blank"><img src="<?php echo SITE_URL;?>uploads/banner/<?= $bbrc1['bnr_image']; ?>" alt="" title=""/></a>
      <!--<div class="img_title">59th in All India Ranking" and "4th in Southwest Delhi</div>-->
   
    </div> <?php } ?>
     <!--   <div class="item"><img src="<?php echo SITE_URL;?>uploads/banner/1574765368_banner2.jpg" alt="" title=""/>-->
      <!--<div class="img_title">59th in All India Ranking" and "4th in Southwest Delhi</div>-->
    </div>
        
       
	
  </div>
</section>