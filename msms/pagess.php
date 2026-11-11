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

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if(empty($pdetailrec['SSC_title'])){ ?><?= $pdetailrec['SSC_name']; ?> | Mahavir Senior Model School (MSMS) <?php } else { ?><?= $pdetailrec['SSC_title']; ?><?php } ?> </title>
<meta name="description" content="<?= $pdetailrec['SSC_keyword']; ?>" />
<meta name="keywords" content="<?= $pdetailrec['SSC_metadesc']; ?>" />
<?php include 'inc/head.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['SSC_image']; ?>" alt="" title=""/>
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
