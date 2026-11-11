<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require("inc/function.php"); 
$pageNumber = isset($_GET['pageNumber']) ? max(1, intval($_GET['pageNumber'])) : 1;
$yr = isset($_GET["yr"]) ? mysqli_real_escape_string($conn, trim($_GET["yr"])) : '';

$perPageCount = 30;
$rowCount = 0;

$sql = "SELECT * FROM tbl_photoalbum WHERE `pa_status`='1' AND `year`='$yr'";

if ($result = mysqli_query($conn, $sql)) {
    $rowCount = mysqli_num_rows($result);
    mysqli_free_result($result);
}

$pagesCount = ceil($rowCount / $perPageCount);
$lowerLimit = max(0, ($pageNumber - 1) * $perPageCount);

$sqlQuery = "SELECT * FROM `tbl_photoalbum` WHERE `pa_status`='1' AND `year`='$yr' ORDER BY pa_id DESC LIMIT " . $lowerLimit . ", " . $perPageCount;
$i = 1;
$results = mysqli_query($conn, $sqlQuery);
if ($results && $results->num_rows > 0) { 
?>

  <section class="pages">
   <div class="container">
     <h1>Photo Gallery</h1>	
       <div class="masnorygallery photo_lisitng isotope three-collumn clearfix portfolio-holder" data-isotope-options='{"itemSelector" : ".item","layoutMode" : "masonry","transitionDuration":"0.7s","masonry" : {"columnWidth":".item"}}'>
    
              <?php foreach ($results as $data) {
				 $i++;
				 $abrc=mysqli_query($conn,"SELECT `p_id`,`p_name`,`p_images` FROM `tbl_photo` WHERE `photoalbum`='".$data['pa_id']."' AND `p_status`='1'");
				 $bbrc=mysqli_fetch_array($abrc);
			  ?>
           

                <div class="item">
                    <div class="item_listing">
                     <?php foreach (explode(',', $bbrc['p_images']) as $key1 => $value1) {	?>
                      <a href="<?php echo SITE_URL;?>uploads/photo/<?= $value1; ?>" rel="prettyPhoto[<?= $i; ?>]">
                     <?php } ?>
                        <div class="catpic"><img src="<?php echo SITE_URL;?>uploads/photo/<?= $data['pa_image']; ?>" alt="<?= $data['pa_name']; ?>" title="<?= $data['pa_name']; ?>" />
                     
                          <div class="total-pics">Total Photos : <strong> <?php $pimages=$bbrc['p_images']; $image=explode(",",$pimages); echo count($image); ?> </strong></div>
                   
                        </div>
                        <div class="catname"><?= $data['pa_name']; ?></div>
                      </a> 
                    </div>
                 </div>
                         
               <?php } ?>
                      </div>

  <div class="pagination">
    <?php
	  for ($i = 1; $i <= $pagesCount; $i ++) {
      if ($i == $pageNumber) {
    ?>
        <a href="#" style="text-decoration:none;" class="btn btn-default active"><?php echo $i ?></a>
    <?php } else { ?>
        <a href="javascript:void(0);" style="text-decoration:none;" class="btn btn-default" onclick="showRecords('<?php echo $perPageCount;  ?>', '<?php echo $i; ?>');">
    <?php echo $i ?>
        </a>
	<?php
    } // endIf
    } // endFor
    ?>
    </div>
  </div>
</section>
 <?php } else { ?><img src="<?php echo SITE_URL;?>img/no-items-found.png" style="margin-top: 120px; ">
<?php } ?>

<script type="text/javascript">
$(".photo_lisitng a[rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'pp_default',
		slideshow: 3000,
		deeplinking: false,
		autoplay_slideshow: true
	});
</script>

