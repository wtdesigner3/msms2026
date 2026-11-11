<?php
@session_start();
require("inc/function.php");
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MSMS in Print | Mahavir Senior Model School (MSMS)</title>
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
    <li><a>MSMS in Print</a></li><li><a><?= $pdetailrec['ne_name']; ?></a></li>
  </ul>
</div>
</section>

<section class="pages">
<div class="container">
<style>.b_listing{margin-bottom:30px}</style>

<?php
// ---- Sanitize inputs ----
$yearOfFechResults = isset($_GET['year']) ? intval($_GET['year']) : 0;
$showRecordPerPage  = 16;

$currentPage = (isset($_GET['page']) && !empty($_GET['page'])) ? intval($_GET['page']) : 1;
if ($currentPage < 1) { $currentPage = 1; }

if ($yearOfFechResults > 0) {

$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;

$totalEmpSQL  = "SELECT * FROM `tbl_msmsinprint` WHERE `ne_status`='1' AND `cat_id` = '$yearOfFechResults' ORDER BY `ne_id` DESC";
$allEmpResult = mysqli_query($conn, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee / $showRecordPerPage);
if ($lastPage < 1) { $lastPage = 1; }

// keep currentPage within valid bounds
if ($currentPage > $lastPage) { $currentPage = $lastPage; }

$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;

$firstPage    = 1;
$nextPage     = $currentPage + 1;
$previousPage = $currentPage - 1;

$empSQL = "SELECT * FROM `tbl_msmsinprint` WHERE `ne_status`='1' AND `cat_id` = '$yearOfFechResults' ORDER BY `ne_id` DESC LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($conn, $empSQL);
?>

<div class="masnorygallery photo_lisitng isotope three-collumn clearfix portfolio-holder" data-isotope-options="{&quot;itemSelector&quot; : &quot;.item&quot;,&quot;layoutMode&quot; : &quot;masonry&quot;,&quot;transitionDuration&quot;:&quot;0.7s&quot;,&quot;masonry&quot; : {&quot;columnWidth&quot;:&quot;.item&quot;}}">

<?php
$i = 0;
while($quan = mysqli_fetch_assoc($empResult)){
$i++;
?>
      <div class="item wow fadeInUp" data-wow-delay="0.<?php echo $i;?>s">
        <div class="item_listing">
    <!--<a href="<?php echo SITE_URL;?>msms-in-prints/<?= $quan['ne_id']; ?>">-->
        <a href="<?php echo SITE_URL;?>uploads/page/<?= $quan['ne_image']; ?>" rel="prettyPhoto[<?= $i; ?>]">
          <div class="catpic">
      <img src="<?php echo SITE_URL;?>uploads/page/<?= $quan['ne_image']; ?>">

      </div>
          <div class="catname"><?= $quan['ne_name']; ?></div>
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
        <a href="<?php echo SITE_URL;?>msms-in-print.php?year=<?php echo $yearOfFechResults; ?>&page=<?php echo $firstPage; ?>" class="page-link" aria-label="Previous">
          <span aria-hidden="true">
            <span>First</span>
          </span>
        </a>
      </li>
    <?php } ?>

    <?php if($currentPage >= 2) { ?>
      <li class="page-item">
        <a class="page-link" href="<?php echo SITE_URL;?>msms-in-print.php?year=<?php echo $yearOfFechResults; ?>&page=<?php echo $previousPage; ?>"><?php echo $previousPage; ?></a>
      </li>
    <?php } ?>

    <li class="page-item active">
      <a class="page-link" href="<?php echo SITE_URL;?>msms-in-print.php?year=<?php echo $yearOfFechResults; ?>&page=<?php echo $currentPage; ?>"><?php echo $currentPage; ?></a>
    </li>

    <?php if($currentPage != $lastPage) { ?>
      <li class="page-item">
        <a class="page-link" href="<?php echo SITE_URL;?>msms-in-print.php?year=<?php echo $yearOfFechResults; ?>&page=<?php echo $nextPage; ?>"><?php echo $nextPage; ?></a>
      </li>
      <li class="page-item">
        <a class="page-link" href="<?php echo SITE_URL;?>msms-in-print.php?year=<?php echo $yearOfFechResults; ?>&page=<?php echo $lastPage; ?>" aria-label="Next">
          <span aria-hidden="true">Last</span>
        </a>
      </li>
    <?php } ?>
  </ul>
</div>

<?php } else { ?>
  <p>No year selected. Please choose a valid year to view records.</p>
<?php } ?>

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
<script type="text/javascript" src="https://msmsdelhi.in/msms/js/jquery.queryloader2.min.js"></script>
<script type="text/javascript">
$(".photo_lisitng a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'pp_default',
		slideshow: 3000,
		deeplinking: false,
		autoplay_slideshow: true
	});
</script>

</body></html>