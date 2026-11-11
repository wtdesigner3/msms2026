<?php include("inc/function.php"); ?>
<?php
$qhmpl = mysqli_query($conn, "SELECT `pro_title`,`pro_keyword`,`pro_detail` FROM `tbl_profile`");
$devel = mysqli_fetch_array($qhmpl);

$jojo = mysqli_query($conn, "SELECT * FROM `tbl_popup`");
$develinmypocket = mysqli_fetch_array($jojo);
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php if (empty($devel['pro_title'])) { ?> MSMS <?php } else { ?><?= $devel['pro_title']; ?><?php } ?></title>
  <meta name="keywords" content="<?= $devel['pro_keyword'];  ?>" />
  <meta name="description" content="<?= $devel['pro_detail'];  ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'inc/head.php'; ?>
</head>

<body>
  <style>
    .popups {
      position: fixed;
      z-index: 999999999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      background: #000;
      text-align: center;
      justify-content: center;
    }

    .popups img {
      max-width: 800px;
      max-height: 550px;
    }

    .closes {
      position: fixed;
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 40px;
      background: #fff;
      color: #000;
      top: 0;
      right: 0;
      font-size: 22px;
    }
    .popup_carousel .owl-nav {
      position: absolute;
      left: 0;
      top: 44%;
      width: 100%;
    }
    .popup_carousel .owl-nav .owl-prev {
      position: absolute;
    left: -15px;
    width: 40px!important;
    height: 40px!important;
    line-height: 40px!important;
    background: #fff!important;
    color: #000!important;
    font-size: 24px !important;
    box-shadow: 0 0 10px rgb(0 0 0 / 30%) !important
    }
    .popup_carousel .owl-nav .owl-next {
      position: absolute;
    right: -15px;
    width: 40px!important;
    height: 40px!important;
    line-height: 40px!important;
    background: #fff!important;
    color: #000!important;
    font-size: 24px !important;
    box-shadow: 0 0 10px rgb(0 0 0 / 30%) !important
    }
    #myModals .close {
      opacity: 1;
      position: absolute;
      right: -10px;
      width: 30px;
      height: 30px;
      line-height: 30px;
      z-index: 9;
      background: #ffe261;
      border-radius: 100%;
      top: -10px;
    }
  </style>
  <!--<div class="diya_header fixeds"></div> -->

<?php
$popuprow = mysqli_query($conn, "SELECT * FROM `tbl_popup` WHERE `abt_status`='1' ORDER BY `sort` ASC");
$popupnumrow = mysqli_num_rows($popuprow);
if($popupnumrow > 0) {
?>  
  <div id="myModals" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" style="color:#000;opacity:1;">&times;</button>
        <div class="modal-body text-center" align="center">
          <div class="popup_carousel owl-carousel">
          <?php
            
            while ($popuprows = mysqli_fetch_array($popuprow)) {
          ?>
            <div class="item">
              <a href="<?=$popuprows['abt_details'];?>" target="_blank">
                <img src="<?=SITE_URL;?>uploads/popup/<?=$popuprows['abt_images'];?>" style="max-height:550px;">
              </a>
            </div>
          <?php }?>
          </div>
        </div>
      </div>

    </div>
  </div>
<?php }?>
  <?php include 'inc/header.php'; ?>
  <section class="sliders">
    <div class="mainslider owl-carousel">
      <?php
      $abrc1 = mysqli_query($conn, "SELECT `bnr_title`,`bnr_link`,`bnr_alt`,`bnr_image` FROM `tbl_banner` WHERE `bnr_status`='1' ORDER BY `bnr_position` ASC");
      while ($bbrc1 = mysqli_fetch_array($abrc1)) {
      ?>
        <div class="item"><a href="<?= $bbrc1['bnr_link']; ?>" target="_blank"><img src="<?php echo SITE_URL; ?>uploads/banner/<?= $bbrc1['bnr_image']; ?>" alt="" title="" /></a>
          <!--<div class="img_title">59th in All India Ranking" and "4th in Southwest Delhi</div>-->
        </div>
      <?php } ?>

    </div>

  </section>

  <section class="announcement">
    <div class="announce_txt">Announcement</div>
    <div class="announce_scrol">
      <div class="anounce owl-carousel">
        <?php
        //$phpdated = date("m-d");  
        $btrc = mysqli_query($conn, "SELECT * FROM `tbl_announcement` WHERE `an_status`='1' ORDER BY `an_edate` DESC");
        while ($crtb = mysqli_fetch_array($btrc)) {
        ?>
          <div class="item"><a target="_blank" href="<?= $crtb['an_link']; ?>"> <?= $crtb['an_text']; ?> <span class="click">click here
                <!--<img src="img/new.gif" class="max_hei">-->
              </span></a></div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="principal_msg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 bdrr wow fadeInLeft" data-wow-delay="0.5s">
          <h3><img src="<?php echo SITE_URL; ?>img/idea.png" style="max-height:40px;margin-right:8px;"> School Philosophy</h3>
          <p align="justify"><strong>The soul of MSMS is, of course, its philosophy - respond with in minimum time to all the requirements.</strong></p>
          <p align="justify"><strong>These lines by Robert Frost guide our actions and initiatives :</strong></p>
          <p>"I shall be telling this with a sigh somewhere ages and ages hence;
            Two roads diverged in a wood, and I<br>
            I took the one less travelled by,<br>
            And that has made all the difference...!"</p>
          <a href="<?php echo SITE_URL; ?>page/top-schools-near-me" class="viewall" style="margin-top:15px;display:block;position:relative;left:0">Read More<i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-8">
          <div class="padlr20 wow fadeInRight" data-wow-delay="0.8s">
            <a href="<?php echo SITE_URL; ?>page/top-10-schools-in-north-delhi-2--"><img src="img/principal.jpg" class="align-right" style="border-radius:6px;"></a>
            <h3><img src="<?php echo SITE_URL; ?>img/feedback.png" style="max-height:40px;margin-right:8px;"> FROM PRINCIPAL'S DESK</h3>
            <p align="justify">At <strong>Mahavir Senior Model School</strong>, we endeavour to impart holistic education to budding minds, wherein we hone the academic abilities of our students, fine-tune their aesthetic sense and build sportsman skills towards building a culture that values the individuality of each pupil.</p>
            <p align="justify">While promoting academic excellence, we are constantly integrating, redefining and rejuvenating ourselves, ever trying to safeguard and nurture the sensitive human being in every student, embracing contex-specific and context-relevant strategies.</p>
            <a href="<?php echo SITE_URL; ?>page/top-10-schools-in-north-delhi-2--" class="viewall" style="margin-top:15px;display:block;position:relative;left:0">Read More<i class="fa fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>

  </section>



  <section class="news">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h3><img src="<?php echo SITE_URL; ?>img/news.png" style="max-height:40px;margin-right:8px;"> News & Events <a href="<?php echo SITE_URL; ?>all-news.php" class='newsbtn'>View All</a></h3>
          <div class="newss owl-carousel owl-theme">
            <?php $qut = mysqli_query($conn, "SELECT * FROM `tbl_newsevent` WHERE `ne_status`='1' ORDER BY ne_date DESC");
            while ($quan = mysqli_fetch_array($qut)) {
            ?>
              <div class="item ">
                <div class="b_listing">
                  <a href="<?php echo SITE_URL; ?>news/<?= $quan['ne_id']; ?>">
                    <div class="blog_img">
                      <img src="<?php echo SITE_URL; ?>uploads/page/<?= $quan['ne_image']; ?>">
                        <div class="circle_box">
                          <span class="text_1"><?php $beck = $quan['ne_date'];
                                echo date('d', strtotime($beck)); ?>
                          </span>
                                <?php $beck = $quan['ne_date'];
                                echo date('M', strtotime($beck)); ?>
                        </div>
                      <svg class="bigHalfCircles" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                      </svg>
                    </div>
                    <div class="blog_title"><?= $quan['ne_name']; ?></div>
                    <div class="blog_desc"><?= $quan['ne_detail']; ?></div>
                  </a>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 holiday" >
          <h3><img src="<?php echo SITE_URL; ?>img/events.png" style="max-height:40px;margin-right:8px;"> Holiday List</h3>
          <div class="footerstyle19 ">
            <ul class="scp-tribe-events">
              <?php
              $qutty = mysqli_query($conn, "SELECT * FROM `tbl_holiday` WHERE `h_date` >= '$phpdate' AND `h_status`='1' ORDER BY `h_date`  LIMIT 5");
              while ($quantty = mysqli_fetch_array($qutty)) {
              ?>
                <li class="event">
                  <div class="date"><span class="month-MM"><?php $beckk = $quantty['h_date'];
                                                            echo date('M', strtotime($beckk)); ?></span><span class="day-dd"><?php $beckk = $quantty['h_date'];
                                                                                                                                                                echo date('d', strtotime($beckk)); ?></span></div>
                  <div class="info-div">
                    <div class="title"><a style="" href="javascript:void(0);" rel="bookmark"><?= $quantty['h_name']; ?></a></div>
                  </div>
                </li>
              <?php } ?>
            </ul>

          </div>
        </div>

       


      </div>
    </div>
  </section>

  <?php
  $admission = mysqli_query($conn, "SELECT * FROM `tbl_admission`");
  $admiss = mysqli_fetch_array($admission)
  ?>
  <?php if ($admiss['admission_status'] == '1') { ?>
    <section class="admission">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="admission_process">
              <div class="adm_title"><img src="img/process.png" style="max-height:40px;margin-right:8px;"> Admission</div>
              <div><a href="https://msmsdelhi.in/msms/pages/top-5-schools-in-north-delh"><img src="img/admission.jpg" style="margin-bottom:15px;"></a></div>
              <div><a href="https://msms.campuscare.info/" target="_blank"><img src="img/admission-forms.jpg"></a></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" id="enq">
            <div class="admission_process">
              <div class="adm_title"><img src="img/enquiry.png" style="max-height:40px;margin-right:8px;"> Admission Enquiry</div>
              <form action="admenquiry.php" method="post" name="admissionform">
                <input name="name" type="text" placeholder="Student's Name" class="form-control" required="">
                <select name="class" class="form-control" required="">
                  <option value="" selected disabled>Select Class</option>
                  <option value="PS">PS</option>
                  <option value="PP">PP</option>
                  <option value="I">I</option>
                  <option value="II">II</option>
                  <option value="III">III</option>
                  <option value="IV">IV</option>
                  <option value="V">V</option>
                  <option value="VI">VI</option>
                  <option value="VII">VII</option>
                  <option value="VIII">VIII</option>
                  <option value="IX">IX</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
                <input name="fathername" type="text" placeholder="Father's Name" class="form-control" required="">
                <input name="mobile" type="text" placeholder="Mobile No." class="form-control" required="">
                <input name="email" type="email" placeholder="Email" class="form-control" required="">
                <textarea name="message" rows="5" placeholder="Message" class="form-control"></textarea>
                <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div>
                <button type="submit" name="qsubmit" class="btn-submit">Submit</button>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
            <div class="admission_process">
              <div class="adm_title"><img src="img/checklist.png" style="max-height:40px;margin-right:8px;"> Important Links</div>
              <!--<div><a href="https://msms.campuscare.info/" target="_blank"><img src="img/admissions.jpg" style="margin-bottom:15px;"></a></div>-->
              <div><a href="https://msms.campuscare.info/" target="_blank"><img src="img/fee.jpg" style="margin-bottom:15px;border:1px solid #ddd"></a></div>
              <div><a href="http://iguardianerp.litchi.co.in/iguardian/login_msmsgt.aspx" target="_blank"><img src="img/health.jpg"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>

  <!--<section class="dynamics">
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">

  <div class="headingsclrful1 grn"><img src="<?php echo SITE_URL; ?>img/book.png" style="max-height:40px;margin-right:8px;"> Download Datesheet / Syllabus</div>
  <div class="bgwhiesshdo ">
    <div class="section-content events syallbus">
     <marquee scrollamount="3" direction="up" class="myMarqueeee" id="myMarqueeee" onMouseOver="this.stop()" onMouseOut="this.start()" height="320px">
      <?php
      $qutts = mysqli_query($conn, "SELECT * FROM `tbl_syllabus` WHERE `s_status`='1' ORDER BY `s_datetime` DESC  LIMIT 20");
      while ($quantts = mysqli_fetch_array($qutts)) {
      ?>
       <div class="event-item">
        <p class="date-label"><a target="_blank" href="<?= $quantts['s_url']; ?>"><i class="fa fa-file-pdf-o"></i></a></p>
        <div class="details">
          <h2 class="title"><a target="_blank" href="<?= $quantts['s_url']; ?>"><?= $quantts['s_name']; ?></a></h2>
          <p class="time"><i class="fa fa-calendar"></i><?php $beckks = $quantts['s_datetime'];
                                                        echo date('d-m-Y', strtotime($beckks)); ?>  &nbsp;|&nbsp; <?php $beckks = $quantts['s_datetime'];
                                                                                                                                                          echo date('h:i', strtotime($beckks)); ?></p>
        </div>
      </div>
     <?php } ?>
     </marquee>
      <a href="<?php echo SITE_URL; ?>download-syllabus" class="viewall">View All Syllabus<i class="fa fa-angle-right"></i></a> </div>
  </div>
</div>



<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
  <div class="headingsclrful1 grn"><img src="<?php echo SITE_URL; ?>img/book.png" style="max-height:40px;margin-right:8px;"> Download Results</div>
  <div class="bgwhiesshdo ">
    <div class="section-content events syallbus">
      <marquee scrollamount="3" direction="up" class="myMarquee" id="myMarquee" onMouseOver="this.stop()" onMouseOut="this.start()" height="320px">   
<?php
$birth = mysqli_query($conn, "SELECT * FROM `tbl_result` WHERE  `b_status`='1' ORDER BY `b_date`");
while ($birthd = mysqli_fetch_array($birth)) {
?>  
 <div class="event-item">
        <p class="date-label"><a target="_blank" href="<?= $birthd['b_image']; ?>"><i class="fa fa-file-pdf-o"></i></a></p>
        <div class="details">
          <h2 class="title"><a target="_blank" href="<?= $birthd['b_image']; ?>"><?= $birthd['b_name']; ?></a></h2>
          <p class="time"><i class="fa fa-calendar"></i><?php $beckkks = $birthd['b_date'];
                                                        echo date('d-m-Y', strtotime($beckkks)); ?>  </p>
        </div>
      </div> 

<?php } ?>  
	  
      </marquee>
      <a href="<?php echo SITE_URL; ?>download-result" class="viewall">View All Results <i class="fa fa-angle-right"></i></a> </div>
  </div>
</div>


<div class="col-md-4 col-sm-4 holiday  wow fadeInUp" data-wow-delay="0.9s">
<h3><img src="<?php echo SITE_URL; ?>img/events.png" style="max-height:40px;margin-right:8px;"> Holiday List</h3>
<div class="footerstyle19 ">
<ul class="scp-tribe-events">
<?php
$qutty = mysqli_query($conn, "SELECT * FROM `tbl_holiday` WHERE `h_date` >= '$phpdate' AND `h_status`='1' ORDER BY `h_date`  LIMIT 5");
while ($quantty = mysqli_fetch_array($qutty)) {
?>
  <li class="event">
    <div class="date"><span class="month-MM"><?php $beckk = $quantty['h_date'];
                                              echo date('M', strtotime($beckk)); ?></span><span class="day-dd"><?php $beckk = $quantty['h_date'];
                                                                                                                                                  echo date('d', strtotime($beckk)); ?></span></div>
    <div class="info-div">
      <div class="title"><a style="" href="javascript:void(0);" rel="bookmark"><?= $quantty['h_name']; ?></a></div>
    </div>
  </li>
<?php } ?>  
</ul>

</div>
</div>



</div>
</div>
</section>-->




  <section class="video">

    <!--<div class="abouts">
	<h1>About Mahavir Senior Model School</h1>
</div>-->

    <!--<video width="100%" height="300" controls="false" autoplay="autoplay" loop="true" style="object-fit: fill;">
  <source src="img/video.mp4" type="video/mp4">
</video>-->
    <img src="<?php echo SITE_URL; ?>img/aboutus.jpg">
  </section>

  <div class="section_mod-a">
    <div class="iucons"><img src="<?php echo SITE_URL; ?>img/edu.gif"></div>
    <div class="container">
      <div class="section_mod-a__inner">
        <div class="row">
          <div class="col-md-12 text-center">
            <?php
            $pdetailr = mysqli_query($conn, "SELECT * FROM `tbl_about`");
            $pdetailr = mysqli_fetch_array($pdetailr);
            ?>
            <section class="section-advantages">
              <h1 class="wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom:10px;"><?= $pdetailr['abt_title']; ?></h1>

              <p><?= $pdetailr['abt_details']; ?></p>

              <div class="row forh3" style="margin-top:60px;">

                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div><img src="<?php echo SITE_URL; ?>img/mission.png"></div>
                  <h3>OUR MISSION</h3>
                  <p><?= $pdetailr['abt_mission']; ?></p>
                </div>

                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                  <div><img src="<?php echo SITE_URL; ?>img/vision.png"></div>
                  <h3>OUR VISION</h3>
                  <p><?= $pdetailr['abt_vision']; ?> </p>
                </div>

                <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                  <div><img src="<?php echo SITE_URL; ?>img/graduate.png"></div>
                  <h3>OUR OBJECTIVE</h3>
                  <p><?= $pdetailr['abt_objective']; ?></p>
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




  <div class="holder-bg type-2 parallax-section facilitiess" style="background-image: url('<?php echo SITE_URL; ?>img/facilities.jpg');background-attachment:fixed;background-size:cover;">
    <div class="container">
      <div class="title-holder text-center">
        <h2 class="section-title wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom:0">State of the art infrastructure & facilities</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">The best of infrastructural facilities, high-tech labs, well-stocked library, well equipped activity rooms, vast playgrounds, medical room, etc.</p>
      </div>
      <div class="icons-box fx-col-3 row">
        <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
        <?php
        $sorty = mysqli_query($conn, "SELECT * FROM `tbl_facility` ORDER BY `f_sort`  LIMIT 9");
        $i = 1;
        while ($torc = mysqli_fetch_array($sorty)) {

        ?>
          <div class="icons-wrap col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.<?php echo $i++; ?>s">
            <a href="<?= $torc['f_link']; ?>">
              <div class="icons-item">
                <div class="item-box"><img src="<?php echo SITE_URL; ?>img/<?= $torc['f_image']; ?>">
                  <h5 class="icons-box-title"><?= $torc['f_name']; ?></h5>
                  <p><?= $torc['f_detail']; ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
        <!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->

      </div>
    </div>
  </div>



  <section class="photogallery">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title type2 wow fadeInLeft" data-wow-delay="0.3s" style="margin-bottom:40px;"><img src="<?php echo SITE_URL; ?>img/gallery.png" style="max-height:40px;margin-right:8px;"> Latest @ MSMS</h2>
          <div class="welcome-section blog-type photo_gallery owl-carousel">
            <?php
            $abrc = mysqli_query($conn, "SELECT * FROM `tbl_photoalbum` WHERE `pa_status`='1' ORDER BY `pa_id` DESC");
            while ($bbrc = mysqli_fetch_array($abrc)) {
            ?>
              <div class="welcome-col">
                <div class="welcome-item">
                  <div class="welcome-inner">
                    <div class="welcome-img"> <img src="<?php echo SITE_URL; ?>uploads/photo/<?php echo $bbrc['pa_image']; ?>"> </div>
                    <div class="welcome-content">
                      <svg class="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 100 C40 0 60 0 100 100 Z"></path>
                      </svg>
                      <div class="entry">
                        <div class="entry-body">
                          <h5 class="entry-title"><a href="<?=SITE_URL;?>list-of-schools-in-north-delhi-3.php?year=<?= $bbrc['year'];?>"><?= $bbrc['pa_name'];?></a></h5>
                        </div>
                        <div class="entry-meta"> <a href="<?=SITE_URL;?>list-of-schools-in-north-delhi-3.php?year=<?= $bbrc['year'];?>" class="entry-news">VIEW ALL</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>


          </div>
        </div>

      </div>
    </div>

  </section>



  <div class="holder-bg counters-section with-pattern">
    <div class="container">
      <div class="row table-row">
        <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.3s">
          <h6 class="section-pre-title">Why parents choose</h6>
          <h2 class="section-title">Mahavir Senior Model School</h2>
        </div>
        <div class="col-md-8">
          <div class="row">
            <?php $quty = mysqli_query($conn, "SELECT * FROM `tbl_choose` ORDER BY `c_id` ASC");
            while ($quany = mysqli_fetch_array($quty)) {
            ?>
              <div class="col-md-3 col-xs-6">
                <div class="counter counted wow fadeInUp" data-wow-delay="0.3s">
                  <div class="counter-inner">
                    <h3 class="timer count-number numscroller" data-min='1' data-max='<?= $quany['c_count']; ?>' data-delay='5' data-increment='1'></h3>
                    <p><?= $quany['c_text']; ?></p>
                  </div>
                </div>
              </div>
            <?php } ?>


          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="parent_testimonials" id="testimonials" style="overflow-x:hidden;">
    <div class="container">
      <h1 class="wow fadeInUp animated" align="center" data-wow-delay="0.3s">What Parents Say</h1>
      <div class="testimonialss owl-carousel owl-theme">

        <?php
        $ptesti = mysqli_query($conn, "SELECT * FROM `tbl_testimonial` WHERE `tt_status`='1' order by `tt_date` desc limit 5");
        while ($ptestirow = mysqli_fetch_array($ptesti)) {
        ?>

          <div class="item">

            <div class="item_box">
              <div class="quotes"><i class="fa fa-quote-left"></i></div>

              <div class="quote_desc"><?php $bb = $ptestirow['tt_detail'];
                                      $aa =  substr($bb, 0, 200);   ?> <?php echo $aa; ?>...<a href="testimonials/<?php echo $ptestirow['tt_id']; ?>">read more</a></div>

              <div class="author_details">
                <div class="author_img"><img src="<?php echo SITE_URL; ?>uploads/testimonial/<?php echo $ptestirow['tt_image']; ?>"></div>
                <div class="author_name"><?php echo $ptestirow['tt_name']; ?> <small><?php echo $ptestirow['tt_profession']; ?></small></div>
                <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <div align="center"><a href="<?php echo SITE_URL; ?>parents-testimonials" class="testi_btn">View All Testimonials</a></div>


      <!----flip----->
      </br></br>
      <div>
        <h1 class="demo1" align="left">
          <span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
          </span>
        </h1>
      </div>
      <!----flip----->

    </div>



  </section>

  <?php
  include 'inc/footer.php';
  include 'inc/footer-data.php';
  ?>
  <script>
    $('#myModals').show();
    $('#myModals').addClass('in show');

    $('.close').click(function() {
      $('#myModals').hide();
      $('#myModals').removeClass('in show');
    });
  </script>
    <script>
      
$('.news-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
});
  </script>
</body>

</html>