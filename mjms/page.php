<?php include("inc/function.php"); 
$pname = isset($_GET["p_url"]) ? mysqli_real_escape_string($conn, trim($_GET["p_url"])) : ''; 
$pdetaildata = mysqli_query($conn, "SELECT * FROM `tbl_category` WHERE `C_url`='" . $pname . "'");
$pdetailrec = ($pdetaildata) ? mysqli_fetch_array($pdetaildata) : null;
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php if(empty($pdetailrec['C_title'])){ ?><?= $pdetailrec['C_name']; ?> <?php } else { ?><?= $pdetailrec['C_title']; ?><?php } ?></title>
<meta name="description" content="<?= $pdetailrec['C_keyword']; ?>" />
<meta name="keywords" content="<?= $pdetailrec['C_metadesc']; ?>" />
    <?php include "inc/head.php"; ?>
</head>
<body>


    <?php include "inc/header.php"; ?>


<section class="bread">
<img src="<?php echo SITE_URL;?>uploads/category/<?= $pdetailrec['C_image']; ?>" alt="<?= $pdetailrec['C_name']; ?>" title="<?= $pdetailrec['C_name']; ?>"/>
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
      <!----flip----->
<div><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
  <div class="row">
  
 
        <div id="content">
         <div class="content_listing content">
              <h1><?= $pdetailrec['C_name']; ?></h1>
                 <?= $pdetailrec['C_desc']; ?>
         </div>
        </div>
		
		<!--<aside id="sidebar" class="hidden-xs">
        <div class="sidebars">
          <div class="page_title">Registrations</div>
          <div class="menu_lisitng">
            <ul>
                           <li><a href="admission-criteria.php">Admission Criteria</a></li>
                          <li><a href="document-to-be-attached.php">Document to be Attached</a></li>
                          <li><a href="schedule-for-admissions.php">Schedule for Admissions</a></li>
                          <li><a href="fee-structure.php" class="active">Fee Structure</a></li>
              
            </ul>
          </div>
        </div>
       </aside> -->
		
		
  </div>
    
  </div>
    <img src="<?php echo SITE_URL;?>img/f2.png" >
</section>

<?php include "inc/footer.php"; ?>
 <?php include "inc/footer-data.php"; ?>

        
</body></html>
