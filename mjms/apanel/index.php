<?php 
require('checksession.php'); 
require('includes/function.php');
?>
<?php
$bn= mysqli_query($conn,"SELECT COUNT(bnr_id) FROM tbl_banner");
$bnr=mysqli_fetch_assoc($bn);
$tol= mysqli_query($conn,"SELECT COUNT(s_id) FROM tbl_syllabus");
$asu=mysqli_fetch_assoc($tol);
$tsl= mysqli_query($conn,"SELECT COUNT(b_id) FROM tbl_result");
$test=mysqli_fetch_assoc($tsl);
//$sql= mysqli_query($conn,"SELECT COUNT(id) FROM tbl_orderhistory");
//$row=mysqli_fetch_assoc($sql);
?> 

<!DOCTYPE html>
<html lang="en">
<?php require("includes/head.php"); ?>


<body>
	<!-- begin #page-loader -->
	  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->	
	<!-- begin #page-container -->	
	<!-- begin #header -->
    <?php require("includes/header.php"); ?>
	<!-- end #header -->	
	<!-- begin #sidebar -->
	<?php require("includes/left.php"); ?>
	<!-- end #sidebar -->
	<!-- begin #content -->
	    <div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Index</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashbaord<small></small></h1>
			<!-- end page-header -->
    
            
            <!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-image fa-2x fa-spin"></i></div>
						<div class="stats-info">
							<h4>TOTAL BANNER</h4>
							<p class="counter-count"><?= $bnr['COUNT(bnr_id)']; ?></p>	
						</div>
						<div class="stats-link">
							<a href="banner.php">View Detail <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-comments-o fa-2x fa-spin"></i></div>
						<div class="stats-info">
							<h4>TOTAL SYLLABUS</h4>
							<p><strong><?= $asu['COUNT(s_id)']; ?></strong></p>	
						</div>
						<div class="stats-link">
							<a href="view-syllabus.php">View Detail <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-grey-darker">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>RESULTS</h4>
							<p class="counter-count"><?= $test['COUNT(b_id)']; ?></p>	
						</div>
						<div class="stats-link">
							<a href="view-result.php">View Result <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-3 col-md-6">
					<div class="widget widget-stats bg-black-lighter">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>WEBSITE</h4>
							<p>MANAGEMENT</p>
						</div>
						<div class="stats-link">
							<a href="general-details.php">View Detail <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
			</div>
			<!-- end row -->
			<!-- begin panel -->
        <div class="row">
        
           <div class="col-lg-12"> 
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Admission Show/hide</h4>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
			  <?php
              $abts=mysqli_query($conn,"SELECT * FROM `tbl_admission`");
              $deta=mysqli_fetch_array($abts)
              ?>       
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th><h3>Admission</h3></th>
                    <th><h4><?php if( $deta['admission_status']=='1'){ ?> <span style="color:#257725;"> Admission Form Show On Homepage </span> <?php }else {  ?> <span style="color:#F00;"> Admission Form Not Showing On Homepage </span><?php } ?></h4></th>
                    <th>
                        <div class="switcher">
                          <input type="checkbox" onClick="updateId('<?php echo $deta['admission_id']; ?>')" name="switcher_checkbox_1" id="switcher_checkbox_<?php echo $deta['admission_id']; ?>" <?php if( $deta['admission_status']=='1'){ echo "checked"; }else {} ?> value="1">
                          <label for="switcher_checkbox_<?php echo $deta['admission_id']; ?>"></label>
                        </div>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
   
                  
                          
                 </tbody>
                </table>
              </div>
			 </div>
			</div>
           </div>
            
  
          
           
          <!-- begin panel -->
           <div class="col-lg-6"> 
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Send Mail</h4>
				</div>
				<div class="panel-body">
					<div class="box-body">
                      <form action="sendemail.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"></textarea>
             
           
            <div class="box-footer clearfix">
              <button type="submit" name="submit" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div> </form>
                    </div>
				</div>
			</div>
          </div> 
			<!-- end panel -->
		 </div>
       </div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<?php require("includes/footer-data.php"); ?>
	
	<script>
		$(document).ready(function() {
			App.init();
			FormWysihtml5.init();
		});
	</script>
    
    <script>
    $('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    </script>
    <!------------------------------>    
 <script>
function updateId(id)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            location.reload();
        }
    };
    xmlhttp.open("GET", "status/admission.php?id=" +id, true);
    xmlhttp.send();
}
</script>
 <!---------------------------------------> 


</body>
</html>
