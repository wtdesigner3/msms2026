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
    <title><?php if(empty($pdetailrec['SC_title'])){ ?><?= $pdetailrec['SC_name']; ?> <?php } else { ?><?= $pdetailrec['SC_title']; ?><?php } ?> </title>
<meta name="description" content="<?= $pdetailrec['SC_keyword']; ?>" />
<meta name="keywords" content="<?= $pdetailrec['SC_metadesc']; ?>" />
    <?php include "inc/head.php"; ?>
</head>
<body>


    <?php include "inc/header.php"; ?>

<?php 
if(!empty($pdetailrec['SC_image'])){

?>
<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['SC_image']; ?>" alt="<?= $pdetailrec['SC_name']; ?>" title="<?= $pdetailrec['SC_name']; ?>"/>
</section>
<?php } ?>


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
      <!----flip----->
<div><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
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
    <img src="<?php echo SITE_URL;?>img/f2.png" >
</section>
<?php include "inc/footer.php"; ?>
 <?php include "inc/footer-data.php"; ?>

        
</body></html>
