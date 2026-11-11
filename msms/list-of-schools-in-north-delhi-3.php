<?php include("inc/function.php"); 
$yr=$_GET["year"];
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>List of schools in north Delhi, Schools for nursery admission in Delhi</title>
<meta name="keywords" content="Best school in north Delhi, school in north Delhi, north delhi top schools, best school in north west delhi, schools for nursery admission near me, schools for nursery admission in delhi, top 10 schools in north delhi, top 5 schools in north delhi, top schools near me, best school near me, top 10 schools in delhi for nursery admissions, list of schools in north delhi, top schools in north delhi" />
<meta name="description" content="Mahavir Senior Model School is one of the best school in north Delhi. See our photo gallery." />
<?php include 'inc/head.php'; ?>
</head>
<body>
<?php include 'inc/header.php'; ?>
<section class="bread">
<img src="<?php echo SITE_URL;?>img/about-us.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Gallery</a></li>
		<li><a>Photo Gallery</a></li>
	</ul>
	
</div>

</section>               

<div id="results"></div>

<div id="loader"></div>
<!----flip----->
<div><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->
<?php 
include 'inc/footer.php';
include 'inc/footer-data.php';
?>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/jquery.queryloader2.min.js"></script>
<script type="text/javascript">
                function showRecords(perPageCount, pageNumber) {
                    $.ajax({
                        type: "GET",
                        url: "<?php echo SITE_URL;?>getphotoData.php?yr=<?php echo $yr; ?>",
                        data: "pageNumber=" + pageNumber,
                        cache: false,
                        beforeSend: function() {
                            $('#loader').html('<img src="<?php echo SITE_URL;?>loader.gif" alt="reload" width="20" height="20" style="margin-top:10px;">');
                        },
                        success: function(html) {
                            $("#results").html(html);
                            $('#loader').html('');
                        }
                    });
                }
                $(document).ready(function() {
                    showRecords(10, 1);
                });
            </script>
</body></html>