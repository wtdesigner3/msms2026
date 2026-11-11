<?php include("inc/function.php"); 
$pname = isset($_GET["p_url"]) ? mysqli_real_escape_string($conn, trim($_GET["p_url"])) : ''; 
$pdetaildata = mysqli_query($conn, "SELECT * FROM `tbl_category` WHERE `C_url`='" . $pname . "'");
$pdetailrec = ($pdetaildata) ? mysqli_fetch_array($pdetaildata) : null;
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(empty($pdetailrec['C_title'])){ ?><?= $pdetailrec['C_name']; ?>Mahavir Senior Model School (MSMS) <?php } else { ?><?= $pdetailrec['C_title']; ?> <?php } ?></title>
<meta name="description" content="<?= $pdetailrec['C_keyword']; ?>" />
<meta name="keywords" content="<?= $pdetailrec['C_metadesc']; ?>" />
<?php include 'inc/head.php'; ?>
<style>
    img{
        width:100% !important;
        height:auto !important;
    }
</style>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['C_image']; ?>" alt="" title=""/>
</section>

<section class="bredcrumps">
  <div class="container">
    <ul>
      <li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
      <li><a><?= $pdetailrec['C_name']; ?></a></li>
    </ul>
  </div>
</section>


<section class="pages">
  <div class="container">
  <div class="row">
  
 
       <div id="content">
         <div class="content_listing content"  >
          <h1><?= $pdetailrec['C_name']; ?></h1>
          <?= $pdetailrec['C_desc']; ?>
         </div>
        </div>
		
		<!--<aside id="sidebar">
        <div class="sidebars">
          <div class="page_title">In this section...</div>
          <div class="menu_lisitng">
            <ul>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="#">History</a></li>
              <li><a href="#">Our Mission & Vision</a></li>
              <li><a href="#">Our Principles</a></li>
              <li><a href="#">From Principal's Desk</a></li>
              <li><a href="#">Management</a></li>
              <li><a href="#">CBSE Affiliation</a></li>
            </ul>
          </div>
        </div>
       </aside> -->
		
		
  </div>
    
  </div>
  <!----flip----->
  </br></br>
<div class="container">
    <h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
</section>
<?php 
include 'inc/footer.php';
include 'inc/footer-data.php';
?>
<script src="<?php echo SITE_URL;?>js/stickySidebar.js"></script> 
<script>
		$(document).ready(function() {
	
			$('#sidebar').stickySidebar({
				sidebarTopMargin: 20,
				footerThreshold: 40
			});
		
		});
		</script>
</body></html>
