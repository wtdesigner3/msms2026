<?php include('inc/function.php'); 
$pname = isset($_GET["ne_url"]) ? intval($_GET["ne_url"]) : 0; 
$pdetaildata = mysqli_query($conn, "SELECT * FROM `tbl_msmsinprint` WHERE `ne_id`='" . $pname . "'");
$pdetailrec = ($pdetaildata) ? mysqli_fetch_array($pdetaildata) : null;
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $pdetailrec['ne_name'];  ?> | Mahavir Senior Model School (MSMS)</title>
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

<img src="<?php echo SITE_URL;?>uploads/page/<?= $pdetailrec['ne_image'];  ?>">
<br>
<br>

 <h3><?= $pdetailrec['ne_name']; ?></h3>  
 <p><?= $pdetailrec['ne_detail']; ?></p> 

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