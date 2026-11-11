<?php include("inc/function.php"); 
$pname = isset($_GET["subm_url"]) ? mysqli_real_escape_string($conn, trim($_GET["subm_url"])) : ''; 
$pdetaildata = mysqli_query($conn, "SELECT * FROM `tbl_subsubcategory` WHERE `SSC_url`='" . $pname . "'");
$pdetailrec = ($pdetaildata) ? mysqli_fetch_array($pdetaildata) : null;

$subCatId = isset($pdetailrec['subcategory_id']) ? intval($pdetailrec['subcategory_id']) : 0;
$pdetails = mysqli_query($conn, "SELECT * FROM `tbl_subcategory` WHERE `SC_id`='" . $subCatId . "'");
$pdrecs = ($pdetails) ? mysqli_fetch_array($pdetails) : null;

$catId = isset($pdetailrec['category_id']) ? intval($pdetailrec['category_id']) : 0;
$pdetail = mysqli_query($conn, "SELECT * FROM `tbl_category` WHERE `C_id`='" . $catId . "'");
$pdrec = ($pdetail) ? mysqli_fetch_array($pdetail) : null;
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php if(empty($pdetailrec['SSC_title'])){ ?><?= $pdetailrec['SSC_name']; ?> <?php } else { ?><?= $pdetailrec['SSC_title']; ?><?php } ?></title>
<meta name="description" content="<?= $pdetailrec['SSC_keyword']; ?>" />
<meta name="keywords" content="<?= $pdetailrec['SSC_metadesc']; ?>" />
    <?php include "inc/head.php"; ?>
</head>
<body>


    <?php include "inc/header.php"; ?>


<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['SSC_image']; ?>" alt="<?= $pdetailrec['SSC_name']; ?>" title="<?= $pdetailrec['SSC_name']; ?>"/>
</section>

<section class="bredcrumps">
  <div class="container">
    <ul>
       <li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
      <li><a><?= $pdrec['C_name']; ?></a></li>
        <li><a><?= $pdrecs['SC_name']; ?></a></li>
      <li><a> <?= $pdetailrec['SSC_name']; ?></a></li>
     
    </ul>
  </div>
</section>


<section class="pages">
  <div class="container">
      
      <!----flip----->
<div><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
  <div class="row">
  
 
        <div id="content">
         <div class="content_listing content"  >
          <h1><?= $pdetailrec['SSC_name']; ?></h1>
              <?= $pdetailrec['SSC_desc']; ?>
         </div>
        </div>
		
		<aside id="sidebar" class="hidden-xs">
        <div class="sidebars">
          <div class="page_title"><?= $pdrecs['SC_name']; ?></div>
          <div class="menu_lisitng">
            <ul>
             <?php 
			$htx=mysqli_query($conn,"SELECT `SSC_id`,`SSC_name`,`SSC_url`,`SSC_title` FROM `tbl_subsubcategory` WHERE `subcategory_id`='".$pdrecs['SC_id']."' && `SSC_status`='1' ORDER BY `SSC_sort` ASC");
			while($gtx=mysqli_fetch_array($htx))
			{
			?>
              <li><a href="<?php echo SITE_URL;?>pages/<?= $gtx['SSC_url']; ?>"><?= $gtx['SSC_name']; ?></a></li>
            <?php } ?>  
            </ul>
          </div>
        </div>
       </aside> 
		
		
  </div>
    
  </div>
    <img src="<?php echo SITE_URL;?>img/f2.png" >
</section>
<?php include "inc/footer.php"; ?>
 <?php include "inc/footer-data.php"; ?>

        
</body></html>
