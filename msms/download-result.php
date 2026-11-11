<?php include('inc/function.php'); ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Download Result | Mahavir Senior Model School (MSMS)</title>
<?php 
include 'inc/head.php';
?>
</head>
<?php
include 'inc/header.php';
?>

<section class="bread">
<img src="img/about-us.jpg" alt="" title=""/>
</section>
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="<?php echo SITE_URL;?>"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Result</a></li>
	</ul>
</div>
</section>
<style>
.dwnlodtable td {
	padding:12px 5px;
}
.dwnlodhead {
    background: #405FBB;
    color: #fff;
    text-transform: uppercase;
	font-weight:normal;
}
table.dwnlodtable tr {
	border-bottom:1px solid #ddd;
	border-bottom-style:dashed;
}
table.dwnlodtable tr:nth-child(odd) {
    background: #f9f9f9;
}
</style>
<section class="pages">
<div class="container">
<h3>CBSE Results</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="dwnlodtable">
  <tbody>
    <tr>
      <td width="10%" class="dwnlodhead"><div align="center">S. No.</div></td>
      <td width="75%" class="dwnlodhead">Class</td>
      <td width="15%" class="dwnlodhead"><div align="center">Downloads</div></td>
    </tr>
 <?php     
  $qutts=mysqli_query($conn,"SELECT * FROM `tbl_result` WHERE `b_status`='1' ORDER BY `b_date` DESC");
  $i=0;
  while($quantts=mysqli_fetch_array($qutts))
  {
	$i++;  
 ?>	
    <tr>
      <td><div align="center"><?= $i; ?></div></td>
      <td><?= $quantts['b_name']; ?></td>
      <td><div align="center"><a href="<?= $quantts['b_image']; ?>" target="_blank"><img src="img/pdf.png" width="19" height="22"></a></div></td>
    </tr>
<?php } ?>	
	
    
  </tbody>
</table>


</div>
<!----flip----->
</br></br>
<div class="container" ><h1 class="demo1" align="left">
<span class="rotate" style="color:#000033;">Best school in north Delhi, School in north Delhi, North delhi top schools, Best school in north west delhi, Schools for nursery admission near me, Schools for nursery admission in delhi, Top 10 schools in north delhi, Top 5 schools in north delhi, Top schools near me, Best school near me, Top 10 schools in delhi for nursery admissions, List of schools in north delhi, Top schools in north delhi, Mahavir Senior Model School
</span>
</h1> </div>
<!----flip----->

</section>




<?php include 'inc/footer.php';?>
<?php include 'inc/footer-data.php';?>
</body></html>