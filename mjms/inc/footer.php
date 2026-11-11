<?php
include("function.php");
$abts=mysqli_query($conn,"SELECT * FROM `tbl_contact`");
$deta=mysqli_fetch_array($abts)
?>
<footer class="footer">
    
    <div class="video-bg">
        <video src="img/video-bg.mp4" muted="" loop="" autoplay=""></video>
   </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6  col-xs-12 contact-info">
          <div class="footer_logo"><img src="<?php echo SITE_URL;?>uploads/footer_logo.png" width="100"></div>
        <div class="items"><a href="#"><i class="fa fa-map-marker"></i>  <?= $deta['con_address']; ?> </a></div>
        <div class="items"><a href="tel:<?= $deta['con_phone1']; ?>"><i class="fa fa-phone"></i>  <?= $deta['con_phone1']; ?>  <?= $deta['con_phone2']; ?></a></div>
        <div class="items"><a href="mailto:<?= $deta['con_email1']; ?>"><i class="fa fa-envelope-o"></i> <?= $deta['con_email1']; ?></a></div>
        
        <div class="items"><span style="color:#fff;">For Admission Counsellor  :</span> <a href="tel:<?= $deta['con_phone2']; ?>" style="font-size:18px; padding:0px"><?= $deta['con_phone2']; ?></a></div>
        
        
        <ul class="top_list">
             
        <?php if(empty($deta['con_facebook'])){ ?> <?php } else { ?>    
          <li class="fb"><a href="<?= $deta['con_facebook']; ?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
         <?php } if(empty($deta['con_youtube'])){ ?> <?php } else { ?> 
          <li class="yt"><a href="<?= $deta['con_youtube']; ?>" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a></li>
          <?php } if(empty($deta['con_instagram'])){ ?> <?php } else { ?>
          <li class="insta"><a href="<?= $deta['con_instagram']; ?>" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
           <?php } if(empty($deta['con_linkedin'])){ ?> <?php } else { ?>
          <li class="li"><a href="<?= $deta['con_linkedin']; ?>" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a></li>
          <?php } if(empty($deta['con_skype'])){ ?> <?php } else { ?>
          <li class="li"><a href="<?= $deta['con_skype']; ?>" target="_blank" rel="nofollow"><i class="fa fa-skype"></i></a></li>
          <?php } if(empty($deta['con_twitter'])){ ?> <?php } else { ?>
          <li class="li"><a href="<?= $deta['con_twitter']; ?>" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
          <?php } if(empty($deta['con_google'])){ ?> <?php } else { ?>
          <li class="li"><a href="<?= $deta['con_google']; ?>" target="_blank" rel="nofollow"><i class="fa fa-whatsapp"></i></a></li>
          <?php } ?>
                  </ul>
      </div>

 <?php 
	$htc=mysqli_query($conn,"SELECT `C_id`,`C_name`,`C_url`,`C_title` FROM `tbl_category` WHERE `C_status`='1' ORDER BY `C_sort` ASC LIMIT 2");
	while($gtrc=mysqli_fetch_array($htc))
	{
   ?> 
       
     <div class="col-md-3 col-sm-6">
        <h4><?= $gtrc['C_name']; ?></h4>
        <ul class="list_itemss">
            
                <?php 
	  $htx=mysqli_query($conn,"SELECT `SC_id`,`SC_name`,`SC_url`,`SC_title` FROM `tbl_subcategory` WHERE `category_id`='".$gtrc['C_id']."' && `SC_status`='1' ORDER BY `SC_sort` ASC");
	  while($gtx=mysqli_fetch_array($htx))
	  {
	  ?>
	          
                <li><a href="<?php echo SITE_URL;?>page/<?= $gtx['SC_url']; ?>"><?= $gtx['SC_name']; ?></a></li>
            <?php 
	  $ttx=mysqli_query($conn,"SELECT `SSC_id`,`SSC_name`,`SSC_url`,`SSC_title` FROM `tbl_subsubcategory` WHERE `subcategory_id`='".$gtx['SC_id']."' && `SSC_status`='1' ORDER BY `SSC_sort` ASC ");
	  while($txx=mysqli_fetch_array($ttx))
	  {
	  ?> 

                <li><a href="<?php echo SITE_URL;?>pages/<?= $txx['SSC_url']; ?>"><?= $txx['SSC_name']; ?></a></li>
                      <?php } ?>  
                      
                       
      <?php } ?> 
      <li> <a href="<?= SITE_URL ?>img/prospectus1.pdf" target="_blanck">E-Prospectus</a></li>
        
       
        
        </ul>
      </div>
       <?php } ?> 
      

     <div class="col-md-3 col-sm-6 ">
        <h4>Quick Contact</h4>
        
        <form name="footer" action="<?php echo SITE_URL;?>send3.php" method="post">
            <input type="text" name="names" placeholder="Name" required="required" >
            <input type="text" name="emails" placeholder="Email-Id" required="required" >
            <input type="text" name="phones" placeholder="contact No" required="required" >
            <textarea name="mesg"></textarea>
            <div class="clearfix"></div>
            
            <input type="submit" name="submit1" >
        </form>
      </div>
      
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mob-text-center"> &copy; <?= date('Y'); ?> Copyright Mahavir Senior Model School (Junior Wing) Delhi. </div>
        <div class="col-md-6 text-right mob-text-center"> Design by <a href="https://www.thewebtycoons.com/" target="_blank"><img src="<?php echo SITE_URL;?>img/thewebtycoons-x.png" style="position:relative;max-height:30px;top:-4px;"/></a> </div>
      </div>
    </div>
  </div>
</footer>

<a href="javascript:" id="return-to-top">
    <img src="<?php echo SITE_URL;?>img/loader.gif" >
    
</a>