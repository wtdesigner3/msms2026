<?php
include("function.php");
$abts=mysqli_query($conn,"SELECT * FROM `tbl_contact`");
$deta=mysqli_fetch_array($abts)
?>

    <div class="top_header hidden-xs">
    <div class="container-fluid">
      <div class="pull-left">
        <ul class="top_list">
           <li class="blnk"><span><span class="blinks">Admission Enquiry :</span> </span> <a href="tel:<?= $deta['con_phone2']; ?>"><?= $deta['con_phone2']; ?></a> </li>
           <li class="header-icn">
               <ul class="top_list header-icn">
             
            
          <li class="fb"><a href="https://www.facebook.com/mahvirajuniormodelschool/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
          
          <li class="yt"><a href="<?= $deta['con_youtube']; ?>" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a></li>
                    <li class="insta"><a href="http://instagram.com/mjmsdelhi" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a></li>
                                 </ul>
           </li>
           <!--<li class="blnk hidden-xs"><a class="blinks" href="<?=SITE_URL;?>page/waiting-list-for-selected-candidates-for-pre-school-2021-22">Waiting List 2021-22</a></li>-->
        </ul>
      </div>
      <div class="pull-right">
        <ul class="top_list">
        
          
          <li><a href="">School Timings: Winter - 8:50 AM To 12:50 PM | Summer - 8:20 AM To 12:30 PM </a></li>
         
	        
        </ul>
      </div>
    </div>
  </div>
  <div class="main_menu">
    <nav class="navbar navbar-default ">
        
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?php echo SITE_URL;?>" title="MSMS"> <img src="<?php echo SITE_URL;?>uploads/logo.jpeg" class="img-responsive hidden-xs " alt="MSMS" title="MSMS" /> <img src="<?php echo SITE_URL;?>uploads/logo.jpeg" class="img-responsive hidden-md hidden-lg hidden-sm" alt="Ramjas School New Delhi" title="Ramjas School New Delhi" /></a> </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-6" data-hover="dropdown" data-animations="fadeInUp fadeInRight fadeInUp fadeInLeft">
        
		
          <ul class="nav navbar-nav">
              <img src="<?php echo SITE_URL;?>img/buterfly-2.png" class="oneicon" width="50">
              <li> <a href="<?php echo SITE_URL;?>">Home</a></li>
              
           
               <?php 
		  $htc=mysqli_query($conn,"SELECT `C_id`,`C_name`,`C_url`,`C_title` FROM `tbl_category` WHERE `C_status`='1' ORDER BY `C_sort` ASC");
		  while($gtrc=mysqli_fetch_array($htc))
		  {
		 ?>
          <?php if (!empty($gtrc['C_url'])) {	?>
             <li> <a href="<?php echo SITE_URL;?>school/<?= $gtrc['C_url']; ?>" role="button" aria-haspopup="true" aria-expanded="false"><?= $gtrc['C_name']; ?></a></li>
          <?php }else { ?>
             <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $gtrc['C_name']; ?></a>
              <ul class="dropdown-menu">
            <?php 
			$htx=mysqli_query($conn,"SELECT `SC_id`,`SC_name`,`SC_url`,`SC_title` FROM `tbl_subcategory` WHERE `category_id`='".$gtrc['C_id']."' && `SC_status`='1' ORDER BY `SC_sort` ASC");
			while($gtx=mysqli_fetch_array($htx))
			{
			?>
            <?php if (!empty($gtx['SC_url'])) {	?>
               <li><a href="<?php echo SITE_URL;?>page/<?= $gtx['SC_url']; ?>"><?= $gtx['SC_name']; ?></a></li>
            <?php } else { ?>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $gtx['SC_name']; ?></a>
                  <ul class="dropdown-menu">
                  <?php 
				  $ttx=mysqli_query($conn,"SELECT `SSC_id`,`SSC_name`,`SSC_url`,`SSC_title` FROM `tbl_subsubcategory` WHERE `subcategory_id`='".$gtx['SC_id']."' && `SSC_status`='1' ORDER BY `SSC_sort` ASC");
				  while($txx=mysqli_fetch_array($ttx))
				  {
				  ?>
                    <li><a href="<?php echo SITE_URL;?>pages/<?= $txx['SSC_url']; ?>"><?= $txx['SSC_name']; ?></a></li>
                  <?php } ?>  
                  </ul>
              </li>
            <?php } } ?>     
              </ul>
            </li> 
         <?php }} ?> 
            
             <!--<li> <a href="<?php echo SITE_URL;?>birthday.php" class="d-none">Student's Birthday</a></li>-->
            
             <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a href='<?php echo SITE_URL;?>photo-gallery.php'>Photo Gallery</a></li>
    <li><a href='<?php echo SITE_URL;?>video-gallery.php'>Video Gallery</a></li>
</ul>

            </li>              
           <!--<li> <a href="#">Blog</a></li>-->
           <!--<li> <a href="img/converted.pdf" target="_blanck">E-Prospectus</a></li>-->
           <li> <a href="<?= SITE_URL ?>img/prospectus1.pdf" target="_blanck">E-Prospectus</a></li>
            <li> <a href="<?php echo SITE_URL;?>contact-us.php">Contact Us</a></li>
            
          </ul>
       
        </div>
      </div>
    </nav>
  </div>
  <script>
      <script>
document.addEventListener("DOMContentLoaded", function () {
  var dropdownMenu = document.querySelector(".dropdown-menu");
  var dropdownButton = document.getElementById("dropdownMenuButton");

  // Function to toggle the display of the dropdown menu
  function toggleDropdown() {
    if (dropdownMenu.style.display === "block") {
      dropdownMenu.style.display = "none";
    } else {
      dropdownMenu.style.display = "block";
    }
  }

  // Add a click event listener to the dropdown button
  dropdownButton.addEventListener("click", toggleDropdown);

  // Close the dropdown when clicking outside of it
  document.addEventListener("click", function (event) {
    if (event.target !== dropdownButton) {
      dropdownMenu.style.display = "none";
    }
  });
});
</script>

  </script>