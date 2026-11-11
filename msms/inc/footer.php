<?php
include("function.php");
$abts=mysqli_query($conn,"SELECT * FROM `tbl_contact`");
$deta=mysqli_fetch_array($abts)
?>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6  col-xs-12 contact-info">
        <div class="footer_logo"><img src="<?php echo SITE_URL;?>img/footer_logo.png"></div>
        <div class="items"><a href=""><i class="fa fa-map-marker"></i> <?= $deta['con_address']; ?></a></div>
        <div class="items"><a href="tel:<?= $deta['con_phone1']; ?>"><i class="fa fa-phone"></i> <?= $deta['con_phone1']; ?></a></div>
        <div class="items"><a href="mailto:<?= $deta['con_email1']; ?>"><i class="fa fa-envelope-o"></i> <?= $deta['con_email1']; ?></a></div>
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
     <div class="col-md-3 col-sm-6  col-xs-6">
        <h4><?= $gtrc['C_name']; ?></h4>
        <ul class="list_itemss">
      <?php 
	  $htx=mysqli_query($conn,"SELECT `SC_id`,`SC_name`,`SC_url`,`SC_title` FROM `tbl_subcategory` WHERE `category_id`='".$gtrc['C_id']."' && `SC_status`='1' ORDER BY `SC_sort` ASC");
	  while($gtx=mysqli_fetch_array($htx))
	  {
	  ?>
          <?php if($gtx['SC_url']!=''){?><li><a href="<?php echo SITE_URL;?>page/<?= $gtx['SC_url']; ?>"><?= $gtx['SC_name']; ?></a></li><?php } ?>
        <?php 
	  $ttx=mysqli_query($conn,"SELECT `SSC_id`,`SSC_name`,`SSC_url`,`SSC_title` FROM `tbl_subsubcategory` WHERE `subcategory_id`='".$gtx['SC_id']."' && `SSC_status`='1' ORDER BY `SSC_sort` ASC");
	  while($txx=mysqli_fetch_array($ttx))
	  {
	  ?> 
      <li><a href="<?php echo SITE_URL;?>pages/<?= $txx['SSC_url']; ?>"><?= $txx['SSC_name']; ?></a></li>
      <?php } ?>   
      <?php } ?>    
        </ul>
      </div>
 <?php } ?> 
 
  <?php 
	$htc=mysqli_query($conn,"SELECT `C_id`,`C_name`,`C_url`,`C_title` FROM `tbl_category` WHERE `C_status`='1' ORDER BY `C_sort` ASC LIMIT 3,1");
	while($gtrc=mysqli_fetch_array($htc))
	{
   ?>     
     <div class="col-md-3 col-sm-6  col-xs-6 hidden-xs">
        <h4><?= $gtrc['C_name']; ?></h4>
        <ul class="list_itemss">
      <?php 
	  $htx=mysqli_query($conn,"SELECT `SC_id`,`SC_name`,`SC_url`,`SC_title` FROM `tbl_subcategory` WHERE `category_id`='".$gtrc['C_id']."' && `SC_status`='1' ORDER BY `SC_sort` ASC");
	  while($gtx=mysqli_fetch_array($htx))
	  {
	  ?>
          <li><a href="<?php echo SITE_URL;?>page/<?= $gtx['SC_url']; ?>"><?= $gtx['SC_name']; ?></a></li>
        <?php 
	  $ttx=mysqli_query($conn,"SELECT `SSC_id`,`SSC_name`,`SSC_url`,`SSC_title` FROM `tbl_subsubcategory` WHERE `subcategory_id`='".$gtx['SC_id']."' && `SSC_status`='1' ORDER BY `SSC_sort` ASC");
	  while($txx=mysqli_fetch_array($ttx))
	  {
	  ?> 
      <li><a href="<?php echo SITE_URL;?>pages/<?= $txx['SSC_url']; ?>"><?= $txx['SSC_name']; ?></a></li>
      <?php } ?>   
      <?php } ?>    
        </ul>
      </div>
 <?php } ?>     
      
    <!--  <div class="col-md-3 col-sm-6   col-xs-6">
        <h4>&nbsp;</h4>
        <ul class="list_itemss">
          <li><a href="">School Transport</a></li>
          <li><a href="">Results</a></li>
          <li><a href="">Syllabus</a></li>
          <li><a href="">Student's Appointment</a></li>
          <li><a href="">Hall of Fame</a></li>
          <li><a href="">Faculty</a></li>
          <li><a href="">Classroom</a></li>
          <li><a href="">Library</a></li>
          <li><a href="">Information Technology</a></li>
          <li><a href="">Playground</a></li>
          <li><a href="">Medical Room</a></li>
          <li><a href="">Science Lab</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6   col-xs-6">
        <h4>&nbsp;</h4>
        <ul class="list_itemss">
          <li><a href="">Maths' Lab</a></li>
          <li><a href="">Art &amp; Craft</a></li>
          <li><a href="">Audio Visual Room</a></li>
          <li><a href="">Music, Dance &amp; Instrument</a></li>
          <li><a href="">Activities</a></li>
          <li><a href="">Rules &amp; Regulation</a></li>
          <li><a href="">Guidelines for Parents</a></li>
          <li><a href="">School Timing &amp; Uniform</a></li>
          <li><a href="">Important Dates &amp; Holidays</a></li>
          <li><a href="">School Calendar</a></li>
          <li><a href="">Career &amp; Opportunity</a></li>
          <li><a href="">Alumni Registration</a></li>
        </ul>
      </div>-->
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mob-text-center"> &copy; <?= date('Y');?> Copyright Mahavir Senior Model School (MSMS) Delhi. </div>
        <div class="col-md-6 text-right mob-text-center"> Design by <a href="https://www.thewebtycoons.com" target="_blank"><img src="<?php echo SITE_URL;?>img/thewebtycoons-x.png" style="position:relative;max-height:30px;top:-4px;"/></a> </div>
      </div>
    </div>
  </div>
  
</footer>
