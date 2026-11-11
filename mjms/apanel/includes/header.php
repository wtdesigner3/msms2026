<?php 
    $email = $_SESSION['admin_email'];
    $query = mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE `username` = '$email'");
    $adminrec = mysqli_fetch_array($query);
?>
<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><img src="assets/img/logo/flogo.png" /></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				
				<!--<li class="dropdown">-->
				<!--	<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">-->
				<!--		<i class="fa fa-bell"></i>-->
				<!--		<span class="label">5</span>-->
				<!--	</a>-->
				<!--	<ul class="dropdown-menu media-list dropdown-menu-right">-->
				<!--		<li class="dropdown-header">NOTIFICATIONS (5)</li>-->
				<!--		<li class="media">-->
				<!--			<a href="javascript:;">-->
				<!--				<div class="media-left">-->
				<!--					<i class="fa fa-bug media-object bg-silver-darker"></i>-->
				<!--				</div>-->
				<!--				<div class="media-body">-->
				<!--					<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>-->
				<!--					<div class="text-muted f-s-11">3 minutes ago</div>-->
				<!--				</div>-->
				<!--			</a>-->
				<!--		</li>-->
						
				<!--		<li class="dropdown-footer text-center">-->
				<!--			<a href="javascript:;">View more</a>-->
				<!--		</li>-->
				<!--	</ul>-->
				<!--</li>-->
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../uploads/admin/<?= $adminrec['image']; ?>" alt="" /> 
						<span class="d-none d-md-inline"><?= $adminrec['name'];?></span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="profile.php" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile</a>
                        <div class="dropdown-divider"></div>
						<a href="general-details.php" class="dropdown-item"><i class="fa fa-meetup" aria-hidden="true"></i> General Detail</a>
						<div class="dropdown-divider"></div>
						<a href="login/logout.php" onClick="if(confirm('Are you sure you want to log out?')){ return true;} else { return false; }"  class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>