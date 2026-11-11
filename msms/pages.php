<?php include("inc/function.php"); 
$pname = isset($_GET["sub_url"]) ? mysqli_real_escape_string($conn, trim($_GET["sub_url"])) : ''; 
$pdetaildata = mysqli_query($conn, "SELECT * FROM `tbl_subcategory` WHERE `SC_url`='" . $pname . "'");
$pdetailrec = ($pdetaildata) ? mysqli_fetch_array($pdetaildata) : null;

$catId = isset($pdetailrec['category_id']) ? intval($pdetailrec['category_id']) : 0;
$pdetail = mysqli_query($conn, "SELECT * FROM `tbl_category` WHERE `C_id`='" . $catId . "'");
$pdrec = ($pdetail) ? mysqli_fetch_array($pdetail) : null;
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(empty($pdetailrec['SC_title'])){ ?><?= $pdetailrec['SC_name']; ?> | Mahavir Senior Model School (MSMS) <?php } else { ?><?= $pdetailrec['SC_title']; ?><?php } ?> </title>
<meta name="description" content="<?= $pdetailrec['SC_keyword']; ?>" />
<meta name="keywords" content="<?= $pdetailrec['SC_metadesc']; ?>" />
<?php include 'inc/head.php'; ?>
<?php
if(($pname=='cyber-safety-for-students')||($pname=='cyberbullying')){?>
<style>
    .pages {
    padding: 40px 0;
    background: #ededed url(<?php echo SITE_URL;?>/img/cyber.jpg);
    background-size: cover;
    background-attachment: fixed;
}
</style>
<?php }?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['SC_image']; ?>" alt="" title=""/>
</section>

<section class="bredcrumps">
  <div class="container">
    <ul>
      <li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
      <li><a><?= $pdrec['C_name']; ?></a></li>
      <li><a> <?= $pdetailrec['SC_name']; ?></a></li>
    </ul>
  </div>
</section>


<section class="pages">
  <div class="container">
  <div class="row">
  
 
        <div id="content">
         <div class="content_listing content"  >
          <h1><?= $pdetailrec['SC_name']; ?></h1>
              <?= $pdetailrec['SC_desc']; ?>
         </div>
        </div>
		
		<aside id="sidebar" class="hidden-xs">
        <div class="sidebars">
        
          <div class="page_title"><?= $pdrec['C_name']; ?></div>
          <div class="menu_lisitng">
            <ul>
             <?php 
			$htx=mysqli_query($conn,"SELECT `SC_id`,`SC_name`,`SC_url`,`SC_title` FROM `tbl_subcategory` WHERE `category_id`='".$pdrec['C_id']."' && `SC_status`='1' ORDER BY `SC_sort` ASC");
			while($gtx=mysqli_fetch_array($htx))
			{
			?>
              <li><a href="<?php echo SITE_URL;?>page/<?= $gtx['SC_url']; ?>"><?= $gtx['SC_name']; ?></a></li>
            <?php } ?>  
            </ul>
          </div>
        </div>
       </aside> 
		
		
  </div>
    
  </div>
  <!----flip----->
  </br></br>
<div class="container"><h1 class="demo1" align="right">
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
