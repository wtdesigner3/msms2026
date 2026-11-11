<?php
@session_start();
require("inc/function.php");
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News & Events | Mahavir Senior Model School (MSMS)</title>
<?php 
include 'inc/head.php';
?>
</head>
<?php
include 'inc/header.php';
?>

<section class="bread">
<img src="<?php echo SITE_URL;?>img/about-us.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>News & Events</a></li><li><a><?= $pdetailrec['ne_name']; ?></a></li>
	</ul>
</div>
</section>

<section class="pages">
<div class="container">
<style>.b_listing{margin-bottom:30px}</style>
<div class="row">

<?php
$showRecordPerPage = 16;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM `tbl_newsevent` WHERE `ne_status`='1' ORDER BY `ne_date` DESC";
$allEmpResult = mysqli_query($conn, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT * FROM `tbl_newsevent` WHERE `ne_status`='1' ORDER BY `ne_date` DESC LIMIT $startFrom, $showRecordPerPage ";
$empResult = mysqli_query($conn, $empSQL);
?>
<?php
while($quan = mysqli_fetch_assoc($empResult)){
?>  
  
  
      <div class="col-md-3 col-sm-3 item wow fadeInUp" data-wow-delay="0.<?php echo $i++;?>s">
        <div class="b_listing">
		<a href="<?php echo SITE_URL;?>news/<?= $quan['ne_id']; ?>">
          <div class="blog_img">
		  <img src="<?php echo SITE_URL;?>uploads/page/<?= $quan['ne_image']; ?>"><div class="circle_box"><span class="text_1"><?php $beck = $quan['ne_date']; echo date('d', strtotime($beck)); ?></span><?php $beck = $quan['ne_date']; echo date('M', strtotime($beck)); ?></div>
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
    
<div class="blog-pagination justify-content-center d-flex">
                           <ul class="pagination">
                             <?php if($currentPage != $firstPage) { ?>
                               <li class="page-item">
                                   <a href="<?php echo SITE_URL;?>all-news.php?page=<?php echo $firstPage ?>" class="page-link" aria-label="Previous">
                                       <span aria-hidden="true">
                                           <span >First</span>
                                       </span>
                                   </a>
                               </li>
                               <?php } ?>
                 <?php if($currentPage >= 2) { ?>
                     <li class="page-item"><a class="page-link" href="<?php echo SITE_URL;?>all-news.php?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="<?php echo SITE_URL;?>all-news.php?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="<?php echo SITE_URL;?>all-news.php?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="<?php echo SITE_URL;?>all-news.php?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php }  ?>
                           </ul>
                       </div>   
    
<!----flip----->
<div><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
</div>
</section>



<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
</body></html>