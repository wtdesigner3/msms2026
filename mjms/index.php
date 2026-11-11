<?php include("inc/function.php"); 
$qhmpl=mysqli_query($conn,"SELECT `pro_title`,`pro_keyword`,`pro_detail` FROM `tbl_profile`");
$devel=mysqli_fetch_array($qhmpl);
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php if(empty($devel['pro_title'])){ ?> Green India Rice Millers & Exporters Private Limited <?php } else { ?><?= $devel['pro_title']; ?><?php } ?></title>
    <meta name="keywords" content="<?= $devel['pro_keyword'];  ?>" />
    <meta name="description" content="<?= $devel['pro_detail'];  ?>" />
    
    <?php include "inc/head.php"; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<style>
.popups{position:fixed;z-index:999999999;left:0;top:0;width:100%;height:100%;display:flex;align-items:center;background:#000;text-align:center;justify-content: center;}
.popups img{max-width:800px;max-height:550px;}
.closes{position:fixed;width:40px;height:40px;text-align:center;line-height:40px;background:#fff;color:#000;top:0;right:0;font-size:22px;}
</style>
<!--<div id="myModals" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:#000;opacity:1;">&times;</button>
        <h4 class="modal-title">Admission Open 2021-22</h4>
      </div>
      <div class="modal-body">
        <a href="https://msms.campuscare.info/" target="_blank"><img loading="lazy"  src="img/mjms.jpeg" style="max-height:550px;"></a>
      </div>
    </div>

  </div>
</div>
<div class="popups">-->
<!--    <a href="https://msms.campuscare.info/" target="_blank"><img loading="lazy"  src="img/mjms.jpeg"></a>-->
<!--    <a class="closes" href="javasscript:void(0);">x</a>-->
<!--</div>     -->
<header>
<?php include "inc/header.php"; ?>
</header>
<!--<div align="center"><a class="blinks hidden-sm hidden-lg hidden-md" style="margin:10px 0;display: inline-block;" href="<?=SITE_URL;?>page/waiting-list-for-selected-candidates-for-pre-school-2021-22">Waiting List 2021-22</a></div>-->
<?php include "inc/banner.php"; ?>
<!--
<section class="announcement">
  <div class="announce_txt">Announcement</div>
  <div class="announce_scrol">
    <div class="anounce owl-carousel">
      
      <div class="item"><a target="_blank" href="uploads/FORMPRINCIPAL.doc">  Application Form for Principal <span class="click">click here <img loading="lazy"  src="img/new.gif" class="max_hei"></span></a></div>
     
      <div class="item"><a target="_blank" href="uploads/FORMPGTMATH.doc"> Application Form for PGT Maths <span class="click">click here <img loading="lazy"  src="img/new.gif" class="max_hei"></span></a></div>
     
      <div class="item"><a target="_blank" href="uploads/PBOARDDS2019.pdf">  Pre Board Date Sheet for X & XII (03.12.19 to 16.12.19) <span class="click">click here <img loading="lazy"  src="img/new.gif" class="max_hei"></span></a></div>
     
      <div class="item"><a target="_blank" href="uploads/Advisory.pdf"> Advisory for usage of Social Media <span class="click">click here <img loading="lazy"  src="img/new.gif" class="max_hei"></span></a></div>
     
      <div class="item"><a target="_blank" href="uploads/Details_asper_CBSE.pdf"> DETAILS AS PER CBSE REQUIREMENT <span class="click">click here <img loading="lazy"  src="img/new.gif" class="max_hei"></span></a></div>
     
      <div class="item"><a target="_blank" href="uploads/enewsletter2019.pdf"> E-Newsletter April-July 2019 <span class="click">click here <img loading="lazy"  src="img/new.gif" class="max_hei"></span></a></div>
      
    </div>
  </div>
</section>
-->
   <?php
   
   	 $qutt=mysqli_query($conn,"SELECT e_link,e_name,e_date FROM `tbl_event` WHERE `e_date` >= '$phpdate' AND `e_status`='1' ORDER BY `e_date`  LIMIT 5");
	 if(mysqli_num_rows($qutt) > 0){
	     
     $qutty=mysqli_query($conn,"SELECT h_id,h_name,h_date FROM `tbl_holiday` WHERE `h_date` >= '$phpdate' AND `h_status`='1' ORDER BY `h_date`  LIMIT 6");
     if(mysqli_num_rows($qutty) > 0){
         
   ?>

<section class="news news-bg">
    
<div class="container"><div class="row">

    <div class="col-md-7">
        <img loading="lazy"  src="img/bee.png" class="twoicon" style="position: absolute" width="50px">
    <h3><img loading="lazy"  src="img/news.png" style="max-height:40px;margin-right:8px;"> Holiday List</h3>
    
    <div class="row">
    <?php     
      while($quantty=mysqli_fetch_array($qutty))
      {
    ?><?php if($quantty['h_id'] % 2 == 0)  { ?>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-color green pad30 marB30">
                                <div class="service-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <div class="service-text">
                                    <h4 class="title"><?= $quantty['h_name']; ?></h4>
                                    <p>
                                        <?php $beckk = $quantty['h_date']; echo date('d F Y', strtotime($beckk)); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
    <?php } else { ?>  
    
     <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-color red pad30 marB30">
                                <div class="service-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                <div class="service-text">
                                    <h4 class="title"><?= $quantty['h_name']; ?></h4>
                                    <p>
                                        <?php $beckk = $quantty['h_date']; echo date('d F Y', strtotime($beckk)); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
    <?php }} ?>                                      
    
    <div class="clerfix"></div>
    
    <div class="col-sm-12"><a href="holiday-list" class="btn btn-dark btn-theme-color-red ">View Full Holiday List</a>
    <a class="btn btn-dark btn-primary btn-theme-color-red" href="img/prospectus1.pdf" role="button" target="_blanck">E-Prospectus</a>
    </div>
    </div>
</div>

<div class="col-md-5 d-none" style="display: none;">
    <img loading="lazy"  src="img/buterfly-2.png" class="oneicon" style="position: absolute" width="50px">
<h3><img loading="lazy"  src="img/events.png" style="max-height:40px;margin-right:8px;"> Upcoming Events</h3>
<div class="footerstyle19 ">
    
<ul class="class-details">
<?php     

	  while($quantt=mysqli_fetch_array($qutt))
	  {
?>
    <li><a target="blank" href="<?= $quantt['e_link']; ?>">
        <div class="name"><i class="la la-clock-o"></i><?= $quantt['e_name']; ?></div>
        <div class="info"><?php $beckk = $quantt['e_date']; echo date('d/m', strtotime($beckk)); ?> <br> <?php $beckk = $quantt['e_date']; echo date('Y', strtotime($beckk)); ?></div>
    </a>
    </li>
   
<?php } ?>     
 
   </ul>    

</div>
</div>

</div></div>
</section>
<?php } } ?>

<!--planner activity-->

<div class="container" style="margin-top: 6rem;"><div class="row">
<div class="col-md-12">
    <img loading="lazy"  src="img/bee.png" class="twoicon" style="position: absolute" width="50px">
<h3><img loading="lazy"  src="img/news.png" style="max-height:40px;margin-right:8px;">Planner Activities</h3>

<div>
<!-- Card 1 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd red pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Friendship Factory</h4>
            <p>3 August (Monday)</p>
            <p>Together We Grow through team games, sharing and friendship-building activities.</p>
        </div>
    </div>
</div>

<!-- Card 2 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd green pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Picture Talks Studio</h4>
            <p>5 August (Wednesday)</p>
            <p>Observe, think and confidently express ideas through creative picture discussions.</p>
        </div>
    </div>
</div>

<!-- Card 3 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd red pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Nutrition Ninjas</h4>
            <p>7 August (Friday)</p>
            <p>Fun activities encouraging healthy eating habits and smart food choices.</p>
        </div>
    </div>
</div>

<!-- Card 4 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd green pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Feelings Matter</h4>
            <p>10 August (Monday)</p>
            <p>Helping children recognise, express and understand their emotions.</p>
        </div>
    </div>
</div>

<!-- Card 5 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd red pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Count, Create & Celebrate</h4>
            <p>12 August (Wednesday)</p>
            <p>Hands-on counting, patterns and number fun through engaging activities.</p>
        </div>
    </div>
</div>

<!-- Card 6 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd green pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Salute to Real Heroes</h4>
            <p>13 August (Thursday)</p>
            <p>Patriotic performances, assembly and tricolour-themed celebrations.</p>
        </div>
    </div>
</div>

<!-- Card 7 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd red pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Magic of Play</h4>
            <p>17 August (Monday)</p>
            <p>Learning through imaginative, creative and sensory play experiences.</p>
        </div>
    </div>
</div>

<!-- Card 8 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd green pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Brain Builders</h4>
            <p>19 August (Wednesday)</p>
            <p>Logic puzzles, sequencing and reasoning challenges for young minds.</p>
        </div>
    </div>
</div>

<!-- Card 9 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd red pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Shape Builders' Challenge</h4>
            <p>21 August (Friday)</p>
            <p>Create amazing designs using colourful 2D and 3D shapes.</p>
        </div>
    </div>
</div>

<!-- Card 10 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd green pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Friends Forever</h4>
            <p>24 August (Monday)</p>
            <p>Celebrate kindness, gratitude and togetherness with friendship activities.</p>
        </div>
    </div>
</div>

<!-- Card 11 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd red pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Threads of Love</h4>
            <p>25 August (Tuesday)</p>
            <p>Rakhi Making Competition with colourful festive craft activities.</p>
        </div>
    </div>
</div>

<!-- Card 12 -->
<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="service-color service-crd green pad30 marB30">
        <div class="service-icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="service-text">
            <h4 class="title">Raksha Bandhan Celebration</h4>
            <p>27 August (Thursday)</p>
            <p>Celebrating love, care and togetherness through Indian traditions.</p>
        </div>
    </div>
</div>
</div>




</div>


</div>
</div>
</div>
<!--planner activity-->
<img loading="lazy"  alt="" src="img/f2.png" class="img-responsive">
   
 <?php
  $admission=mysqli_query($conn,"SELECT admission_status FROM `tbl_admission`");
  $admiss=mysqli_fetch_array($admission)
  ?>  
<?php if( $admiss['admission_status']=='1'){ ?>       
<section class="admission">
    
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
        <div class="admission_process">
          <div class="adm_title"><img loading="lazy"  src="img/process.png" style="max-height:40px;margin-right:8px;"> Admission 
              
          </div>
          <div>
          
              <a href="<?php echo SITE_URL;?>page/admission-criteria"><img loading="lazy"  src="img/img-1.jpg" style="margin-bottom:15px;"></a>
            
         <!--<a href="criteria.docx" download><img loading="lazy"  src="img/img-1.jpg" style="margin-bottom:15px;"></a>-->
          </div>
          
          <div>
              
              <a href="form-nursery.doc" download><img loading="lazy"  src="img/img-2.jpg" style="margin-bottom:15px;"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
        <div class="admission_process">
          <div class="adm_title"><img loading="lazy"  src="img/enquiry.png" style="max-height:40px;margin-right:8px;"> Admission Enquiry</div>
          <form  action="<?php echo SITE_URL;?>send1.php" method="post" name="admissionform">
            <input name="sname" type="text" placeholder="Student's Name" class="form-control" required>
            <select name="class" class="form-control" required="">
              <option value="" selected="" disabled="">Select Class</option>
                          <option value="Pre-Nursery">Pre-Nursery</option>
			  <option value="Nursery">Nursery</option>
			  
			 
            </select>
            <input name="fname" type="text" placeholder="Father's Name" class="form-control" required>
            <input name="mobile" type="text" placeholder="Mobile No." class="form-control" required>
            <input name="email" type="text" placeholder="Email" class="form-control" required>
            <textarea name="enquiry" rows="2" placeholder="Message" class="form-control"></textarea>
            
            
            <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
            
            <button type="submit" name="submit" class="btn-submit">Submit</button>
            
            
            
          </form>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp animated" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
        <div class="admission_process">
          <div class="adm_title"><img loading="lazy"  src="img/checklist.png" style="max-height:40px;margin-right:8px;"> Admission Form</div>
          
          <div>
              
              <a href="https://msms.campuscare.info/" target="_blank"><img loading="lazy"  src="img/img-3.jpg" style="margin-bottom:15px;"></a>
          </div>
          <div>
              
              <a href="https://msms.campuscare.info/" target="_blank"><img loading="lazy"  src="img/admission.jpeg" style="margin-bottom:15px;"></a>
          </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<section class="video">

    <div class="container">
        <div class="abouts">
            <h1>we   ENCOURAGE  </h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                        <span class="color-blue"> 
            <div class="pulsating-circle"></div> VEGETARIANISM 
        </span>
                </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                      <span class="color-blue"> 
            <div class="pulsating-circle"></div> CHARACTER BUILDING 
            
        </span>
                </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                <span class="color-blue"> 
            <div class="pulsating-circle"></div> MORAL VALUES 
            
        </span>
                </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <span class="color-blue"> 
            <div class="pulsating-circle"></div> PERSONALITY DEVELOPMENT 
            
        </span>
                </div>

        </div>
   </div>
</div>
    </div>
    

<img loading="lazy"  src="img/blue-wave.png">
</section>

<div class="section_mod-a">
<div class="iucons"><img loading="lazy"  src="img/edu.gif"></div>
  <div class="container">
    <div class="section_mod-a__inner">
      <div class="row">
        <div class="col-md-12 ">
<?php 
  $pdetailr=mysqli_query($conn,"SELECT abt_details FROM `tbl_about`");
  $pdetailr=mysqli_fetch_array($pdetailr);
?>       			
          <section class="section-advantages">
		  	<h1 class="wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom:10px;">Welcome to Mahavir Senior Model School (Junior Wing)</h1>
                        <div class="row forh3" >
                        <div class="col-sm-6">
                            <h3><b>Where Strong Foundations Create Lifelong Learners</b></h3>
                            <p>
                                
<?= $pdetailr['abt_details']; ?>
                            </p>
                           
                        </div> 
                        <div class="col-sm-6">
                            <img loading="lazy"  src="img/6.gif" class="img-responsive">
                        </div>
                        </div>
		   
		   
		   
		   
            
          </section>
            <img loading="lazy"  alt="" src="img/f2.png" class="img-responsive">
            <section class="section-advantages" style="background:url(img/p14.png)  fixed;">  
                <div class="row forh3 text-center ">
		   <h1 class="wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom:20px; color: #fff;">aims and objectives</h1>
                            

		   	<div class="col-md-4 col-sm-4 wow fadeInUp color-white" data-wow-delay="0.3s">
				<div><img loading="lazy"  src="img/holistic-icon.png" width="100"></div>
				<h3 class="color-white">Holistic Development </h3>
				
			</div>
			
			<div class="col-md-4 col-sm-4 wow fadeInUp color-white" data-wow-delay="0.6s">
				<div><img loading="lazy"  src="img/vision.png" width="100"></div>
				<h3 class="color-white">Physical Development</h3>
				
			</div>
			
			<div class="col-md-4 col-sm-4 wow fadeInUp " data-wow-delay="0.9s">
				<div><img loading="lazy"  src="img/social.png" width="100"></div>
                                <h3 class="color-white">Social  Development</h3>
                                
			</div>







                        <div class="col-md-4 col-sm-4 wow fadeInUp color-white" data-wow-delay="0.3s">
                            <div><img loading="lazy"  src="img/emotional.png" width="100"></div>
				<h3 class="color-white">Emotional  Development </h3>
				
			</div>
			
			<div class="col-md-4 col-sm-4 wow fadeInUp color-white" data-wow-delay="0.6s">
				<div><img loading="lazy"  src="img/positive.png" width="100"></div>
				<h3 class="color-white">Positive  Attitude</h3>
				
			</div>
			
			<div class="col-md-4 col-sm-4 wow fadeInUp " data-wow-delay="0.9s">
				<div><img loading="lazy"  src="img/stage.png" width="100"></div>
                                <h3 class="color-white">Stage Exposure</h3>
                                
			</div>




			
		   </div>
                
                
            </section>
           
          <!-- end section-advantages -->
        </div>
        <!-- end col -->
        
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end section_mod-a__inner -->
  </div>
  <!-- end container -->
</div>


<section class="section_mod-a" style="padding:50px 0px;">
<div class="container">
<h1 class="wow fadeInUp animated" align="center" data-wow-delay="0.3s">Holiday List 2026-2027</h1>


<div class="row">
    <div class="col-md-12">
  
<div style="max-width:1000px;width:100%;margin:auto;">

<!--<h2 style="text-align:center;margin-bottom:25px;font-size:28px;">-->
<!--List of Holidays for 2026-27-->
<!--</h2>-->

<table style="width:100%;border-collapse:collapse;margin-bottom:25px;font-size:16px;">

<tr>
<td style="padding:8px;font-weight:bold;width:220px;">Summer Vacation</td>
<td style="padding:8px;width:20px;">-</td>
<td style="padding:8px;">15.05.2026 to 30.06.2026</td>
</tr>

<tr>
<td style="padding:8px;font-weight:bold;">Autumn Break</td>
<td style="padding:8px;">-</td>
<td style="padding:8px;">17.10.2026 to 20.10.2026</td>
</tr>

<tr>
<td style="padding:8px;font-weight:bold;">Diwali Break</td>
<td style="padding:8px;">-</td>
<td style="padding:8px;">09.11.2026 to 11.11.2026</td>
</tr>

<tr>
<td style="padding:8px;font-weight:bold;">Winter Break</td>
<td style="padding:8px;">-</td>
<td style="padding:8px;">31.12.2026 to 11.01.2027</td>
</tr>

</table>

<div style="overflow-x:auto;width:100%;">

<table style="border-collapse:collapse;width:100%;min-width:750px;border:2px solid #000;font-size:15px;">

<tr style="background:#f3f3f3;">

<th style="border:1px solid #000;padding:10px;">S.No.</th>

<th style="border:1px solid #000;padding:10px;text-align:left;">
Name of the Holiday
</th>

<th style="border:1px solid #000;padding:10px;">
Date
</th>

<th style="border:1px solid #000;padding:10px;">
Day of the Week
</th>

</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">1</td>
<td style="border:1px solid #000;padding:8px;">Good Friday</td>
<td style="border:1px solid #000;padding:8px;">03 April</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">2</td>
<td style="border:1px solid #000;padding:8px;">Buddha Purnima</td>
<td style="border:1px solid #000;padding:8px;">01 May</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">3</td>
<td style="border:1px solid #000;padding:8px;">*Id-ul-Zuha (Bakraid)</td>
<td style="border:1px solid #000;padding:8px;">27 May</td>
<td style="border:1px solid #000;padding:8px;">Wednesday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">4</td>
<td style="border:1px solid #000;padding:8px;">*Muharram</td>
<td style="border:1px solid #000;padding:8px;">26 June</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">5</td>
<td style="border:1px solid #000;padding:8px;">Independence Day</td>
<td style="border:1px solid #000;padding:8px;">15 August</td>
<td style="border:1px solid #000;padding:8px;">Saturday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">6</td>
<td style="border:1px solid #000;padding:8px;">
Milad-Un-Nabi (Birthday of Prophet Mohammad)
</td>
<td style="border:1px solid #000;padding:8px;">26 August</td>
<td style="border:1px solid #000;padding:8px;">Wednesday</td>
</tr>
<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">7</td>
<td style="border:1px solid #000;padding:8px;">Janamashtmi</td>
<td style="border:1px solid #000;padding:8px;">04 September</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">8</td>
<td style="border:1px solid #000;padding:8px;">Mahatma Gandhi's Birthday</td>
<td style="border:1px solid #000;padding:8px;">02 October</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">9</td>
<td style="border:1px solid #000;padding:8px;">Dussehra (Vijaya Dashami)</td>
<td style="border:1px solid #000;padding:8px;">20 October</td>
<td style="border:1px solid #000;padding:8px;">Tuesday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">10</td>
<td style="border:1px solid #000;padding:8px;">Maharishi Valmiki's Birthday</td>
<td style="border:1px solid #000;padding:8px;">26 October</td>
<td style="border:1px solid #000;padding:8px;">Monday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">11</td>
<td style="border:1px solid #000;padding:8px;">Diwali (Deepawali)</td>
<td style="border:1px solid #000;padding:8px;">08 November</td>
<td style="border:1px solid #000;padding:8px;">Sunday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">12</td>
<td style="border:1px solid #000;padding:8px;">Guru Nanak's Birthday</td>
<td style="border:1px solid #000;padding:8px;">24 November</td>
<td style="border:1px solid #000;padding:8px;">Tuesday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">13</td>
<td style="border:1px solid #000;padding:8px;">Christmas Day</td>
<td style="border:1px solid #000;padding:8px;">25 December</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">14</td>
<td style="border:1px solid #000;padding:8px;">Republic Day</td>
<td style="border:1px solid #000;padding:8px;">26 January</td>
<td style="border:1px solid #000;padding:8px;">Tuesday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">15</td>
<td style="border:1px solid #000;padding:8px;">Id-ul-Fitr</td>
<td style="border:1px solid #000;padding:8px;">09 March</td>
<td style="border:1px solid #000;padding:8px;">Tuesday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;text-align:center;">16</td>
<td style="border:1px solid #000;padding:8px;">Holi</td>
<td style="border:1px solid #000;padding:8px;">22 March</td>
<td style="border:1px solid #000;padding:8px;">Monday</td>
</tr>

</table>

</div>
<h3 style="margin-top:30px;margin-bottom:15px;font-size:22px;">
Restricted Holidays (R.H.)
</h3>

<div style="overflow-x:auto;width:100%;">

<table style="width:100%;min-width:600px;border-collapse:collapse;border:1px solid #000;font-size:15px;">

<tr style="background:#f3f3f3;">
<th style="border:1px solid #000;padding:10px;text-align:left;">
Holiday
</th>

<th style="border:1px solid #000;padding:10px;">
Date
</th>

<th style="border:1px solid #000;padding:10px;">
Day
</th>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;">Raksha Bandhan</td>
<td style="border:1px solid #000;padding:8px;">28 August 2026</td>
<td style="border:1px solid #000;padding:8px;">Friday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;">Samvatsari</td>
<td style="border:1px solid #000;padding:8px;">14 September 2026</td>
<td style="border:1px solid #000;padding:8px;">Monday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;">*Karvachauth</td>
<td style="border:1px solid #000;padding:8px;">29 October 2026</td>
<td style="border:1px solid #000;padding:8px;">Thursday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;">Govardhan Pooja</td>
<td style="border:1px solid #000;padding:8px;">09 November 2026</td>
<td style="border:1px solid #000;padding:8px;">Monday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;">Bhai Dooj</td>
<td style="border:1px solid #000;padding:8px;">11 November 2026</td>
<td style="border:1px solid #000;padding:8px;">Wednesday</td>
</tr>

<tr>
<td style="border:1px solid #000;padding:8px;">Maha Shivratri</td>
<td style="border:1px solid #000;padding:8px;">06 March 2027</td>
<td style="border:1px solid #000;padding:8px;">Saturday</td>
</tr>

</table>

</div>

<p style="margin-top:20px;font-size:14px;">
<b>*</b> All these holidays are subject to change as per Government Order.
</p>

</div>
  
    </div>
</div>


</div>
</section>

<section class="section_mod-a" style="padding:50px 0px;">
<div class="container">
<h1 class="wow fadeInUp animated" align="center" data-wow-delay="0.3s">Quick Review</h1>


<div class="testimonial col-sm-6 col-sm-offset-3">
    <div class="testimonial-quote l">&ldquo;</div>
    <div class="testimonial-content">
      <p>
        Our pedagogy, curriculum and infrastructure is carefully
designed to develop thinking skills, such as logic and
reasoning, and creativity in all our children, while they retain
the simple joy of coming to school every day.

      </p>
      
    </div>
    <div class="testimonial-quote r">&bdquo;</div>
  </div>


</div>
</section>



<div class="holder-bg type-2 parallax-section facilitiess" style="background-image: url('img/facilities.png');background-attachment:; padding-bottom: 100px; background-size:cover;">
  <div class="container">
    <div class="title-holder text-center">
      <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom:0; color: #000">State of the art infrastructure & facilities</h2>
      <p class="wow fadeInUp" data-wow-delay="0.6s" style="color: #000">The best of infrastructural facilities, high-tech labs, well-stocked library, well equipped activity rooms, vast playgrounds, medical room, etc.</p>
    </div>
    <div class="icons-box fx-col-3 row">
      <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
 <?php     
  $sorty=mysqli_query($conn,"SELECT f_id,f_image,f_name FROM `tbl_facility` ORDER BY `f_sort`  LIMIT 9");
  $i=1;
  while($torc=mysqli_fetch_array($sorty))
  {
  
?>   
<?php if($torc['f_id'] % 2 == 0)  { ?>
      <div class="icons-wrap col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="icons-item green">
          <div class="item-box"> <img loading="lazy"  src="<?php echo SITE_URL;?>img/<?= $torc['f_image']; ?>">
            <h5 class="icons-box-title"> <a href="#"><?= $torc['f_name']; ?></a> </h5>
            
          </div>
        </div>
      </div>
<?php } else { ?>
     <div class="icons-wrap col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="icons-item red">
          <div class="item-box"> <img loading="lazy"  src="<?php echo SITE_URL;?>img/<?= $torc['f_image']; ?>">
            <h5 class="icons-box-title"> <a href="#"><?= $torc['f_name']; ?></a> </h5>
            
          </div>
        </div>
      </div>
<?php }} ?>            
     
      
      <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
      
    </div>
  </div>
</div>



<section class="photogallery" >

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="section-title type2 wow fadeInLeft" data-wow-delay="0.3s" style="margin-bottom:40px;"><img loading="lazy"  src="img/gallery.png" style="max-height:40px;margin-right:8px;"> Gallery </h2>
      <div class="welcome-section blog-type photo_gallery owl-carousel">
      
      <?php 
		$abrc=mysqli_query($conn,"SELECT pa_image FROM `tbl_photoalbum` WHERE `pa_status`='1' ORDER BY `pa_id` DESC");
		while($bbrc=mysqli_fetch_array($abrc))
		{
      ?>
              <div class="welcome-col">
          <div class="welcome-item">
            <div class="welcome-inner">
              <div class="welcome-img"> <img loading="lazy"  src="<?php echo SITE_URL;?>uploads/photo/<?php echo $bbrc['pa_image'];?>"> </div>
              
            </div>
          </div>
        </div>
    <?php } ?>      
  
             
      </div>
    </div>
    
  </div>
</div>
</br>
 <!----flip----->
<div class="container"><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Senior Model School (Junior Wing)
</span>
</h1> </div>
<!----flip----->

</section>



<div class="holder-bg counters-section with-pattern" >
  <div class="container">
    <div class="row table-row">
      <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
        <h6 class="section-pre-title">Why parents choose</h6>
        <h2 class="section-title">Mahavir Senior Model School (Junior Wing)</h2>
      </div>
      <div class="col-md-8">
        <div class="row">
        <?php $quty=mysqli_query($conn,"SELECT c_count,c_text FROM `tbl_choose` ORDER BY `c_id` ASC");
             while($quany=mysqli_fetch_array($quty))
		     {
          ?> 
                     <div class="col-md-3 col-xs-6">
            <div class="counter counted wow fadeInUp" data-wow-delay="0.3s">
              <div class="counter-inner">
                <h3 class="timer count-number numscroller" data-min='1' data-max='<?= $quany['c_count']; ?>' data-delay='5' data-increment='1'></h3>
                <p class="text-dark"><?= $quany['c_text']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>  
                   
          
    
          
        </div>
      </div>
    </div>
  </div>
 </div>



<?php include "inc/footer.php"; ?>


<?php include "inc/footer-data.php"; ?>
<script>
$('#myModals').show();    
$('#myModals').addClass('in show');
$('.close').click(function() {
    $('#myModals').hide();    
    $('#myModals').removeClass('in show');
});
</script>






<!-- Button trigger modal -->

<script>
//     $(window).load(function(){
//   setTimeout(function(){
//       $('.time-modal').modal('show');
//   }, 2000);
// });
</script>

<!-- Modal -->
<div class="modal fade time-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
  
    <div class="modal-body">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button>
        
        <!--image modal-->
        <img loading="lazy"  src="img/home-e.jpg">
        <!--image--->
        
        
      </div>
     
    </div>
  </div>
</div>
</html>