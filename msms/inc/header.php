<?php
include("function.php");
$abts=mysqli_query($conn,"SELECT * FROM `tbl_contact`");
$deta=mysqli_fetch_array($abts)
?>
<header>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="top_header">
    <div class="container-fluid">
      <div class="pull-left hidden-xs">
        <ul class="top_list">
          <li><a href=""><i class="fa fa-phone"></i> <?= $deta['con_phone2']; ?></a></li>
          <li class="hidden-sm"><a href="mailto: <?= $deta['con_email1']; ?>"><i class="fa fa-envelope-o"></i>  <?= $deta['con_email1']; ?></a></li>
          <!--<li class="hidden-sm hidden-xs"><a class="blinks" href="<?=SITE_URL;?>page/waiting-list-of-candidates-for-admission-to-pre-school-for-2021-2022">WAITING LIST 2021-22</a></li>-->
        </ul>
      </div>
      <div class="pull-right pull-right-mn">
        <a class="topnav hidden-sm hidden-lg hidden-md">Top Navigation <i class="fa fa-navicon"></i></a>  
        <ul class="top_list">
		  <li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i> Home</a></li>
		  <!--<li><a href="http://iguardianerp.litchi.co.in/iguardian/login_msmsgt.aspx" target="_blank"><i class="fa fa-stethoscope"></i> Health Champs</a></li>-->
          <!--<li><a href="https://msms.cilfi.com/" target="_blank"><i class="fa fa-money"></i> Online Fee Payment</a></li>-->
          <li><a href="https://msms.campuscare.info/" target="_blank"><i class="fa fa-money"></i> Online Fee Payment</a></li>
          <li><a href="<?php echo SITE_URL;?>uploads/Alumni.pdf" target="_blank"><i class="fa fa-address-book"></i> Alumni</a></li>
          <!--<li><a href="<?php echo SITE_URL;?>alumni-registration"><i class="fa fa-address-book"></i> Alumni Registration</a></li>-->
          <li><a href="<?php echo SITE_URL;?>careers"><i class="fa fa-briefcase"></i> Careers</a></li>
          <li><a href="<?php echo SITE_URL;?>slc"><i class="fa fa-copy"></i> SLC</a></li>
		  <li><a href="<?php echo SITE_URL;?>contact-us"><i class="fa fa-envelope-o"></i> Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="main_menu">
    <nav class="navbar navbar-default ">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="javascript:void(0);"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></a>
          <a href="<?php echo SITE_URL;?>" class="navbar-brand" title="MSMS"> <img src="<?php echo SITE_URL;?>img/logo.png" class="img-responsive hidden-xs " alt="MSMS" title="MSMS" /> <img src="<?php echo SITE_URL;?>img/logo.png" class="img-responsive hidden-md hidden-lg hidden-sm" alt="Mahavir Senior Model School (MSMS)" title="Mahavir Senior Model School (MSMS)" /></a> </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-6" data-hover="dropdown" data-animations="fadeInUp fadeInRight fadeInUp fadeInLeft">
        
		
          <ul class="nav navbar-nav">
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
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
              <ul class="dropdown-menu">
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Gallery</a>
                        <ul class="dropdown-menu">
                          <?php
                          $sql="select distinct year from tbl_photoalbum where pa_status='1' order by year DESC";
                          $result=mysqli_query($conn,$sql);
                          if(mysqli_num_rows($result)>0)
                          {
                              while($row=mysqli_fetch_assoc($result))
                              {
                                ?>
                                <li><a href='<?php echo SITE_URL;?>list-of-schools-in-north-delhi-3?year=<?php echo $row["year"]; ?>'><?php echo $row["year"]; ?></a></li>
                              <?php
                              }
                          }
                          ?>
                        </ul>
                    </li>
                <li class="dropdown"><a href='<?php echo SITE_URL;?>top-schools-in-north-delhi-4' href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Video Gallery</a>
                <ul class="dropdown-menu">
                      <?php
                      $sqls="select distinct pa_year from tbl_videoalbum where pa_status='1' and pa_year !='0' order by pa_year DESC";
                      $results=mysqli_query($conn,$sqls);
                      if(mysqli_num_rows($results)>0)
                      {
                          while($rows=mysqli_fetch_assoc($results))
                          {
                            ?>
                            <li><a href='<?php echo SITE_URL;?>top-schools-in-north-delhi-4?year=<?php echo $rows["pa_year"]; ?>'><?php echo $rows["pa_year"]; ?></a></li>
                          <?php
                          }
                      }
                      ?>
                  </ul>     
                </li>
                <li class="dropdown"><a href='<?php echo SITE_URL;?>top-schools-in-north-delhi-4' href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MSMS in Print</a>
                <ul class="dropdown-menu">
                      <?php
                      $sqlprint="select id,name from tbl_msmsprint_cat where status='1' order by sort";
                      $resultprint=mysqli_query($conn,$sqlprint);
                      if(mysqli_num_rows($resultprint)>0)
                      {
                          while($rowsprint=mysqli_fetch_assoc($resultprint))
                          {
                            ?>
                            <li><a href='<?php echo SITE_URL;?>msms-in-print?year=<?php echo $rowsprint["id"]; ?>'><?php echo $rowsprint["name"]; ?></a></li>
                          <?php
                          }
                      }
                      ?>
                  </ul>     
                </li>
                <!--<li><a href='<?php echo SITE_URL;?>msms-in-print'>MSMS in Print</a></li>-->
                
              </ul>
            </li>
          </ul>
       
        </div>
      </div>
    </nav>
    <!--<div class="diya_header"></div>-->
    <!--<div align="center" class="hidden-lg hidden-md"><a class="blinks" href="<?=SITE_URL;?>page/waiting-list-of-candidates-for-admission-to-pre-school-for-2021-2022">WAITING LIST 2021-22</a></div>-->
  </div>
</header>

