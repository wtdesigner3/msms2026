<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['admin_ses']) && $_SESSION['admin_ses'] === 'mahavirschool@#p9w84r' . session_id())
{
    header("Location: ../index.php");
    exit();
}
require('../includes/function.php');
if(isset($_POST['login']))
{
  $msg="";
  $email = mysqli_real_escape_string($conn, trim($_POST['username'])); 
  $pass = mysqli_real_escape_string($conn, trim($_POST['password'])); 
  $pass = md5($pass);
  $data=mysqli_query($conn,"SELECT * FROM `tbl_admin` WHERE `username`='$email' AND `password`='$pass'");
  $rec=mysqli_num_rows($data);
  if($rec > 0)
  {
    session_regenerate_id(true);
    $_SESSION['admin_ses']="mahavirschool@#p9w84r".session_id();
    $_SESSION['admin_email']=$email;
    $_SESSION['info']="You Are Successfully logged in";
    header('Location: ../index.php');
    exit();
  }
  else
  {
    header("Location: login.php?log=0");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Adminpanel | Mahavir Senior Model School</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<script src="../assets/plugins/pace/pace.min.js"></script>
    <link rel="shortcut icon" href="../assets/img/logo/fev.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login bg-black animated fadeInDown">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
                    <img src="../assets/img/logo/flogo.png" style="width: 100px;" />
					<!--<span class="logo"></span> <b>Color</b> Admin
					<small>responsive bootstrap 4 admin template</small>-->
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- end brand -->
                   
			 <!-- begin login-content -->
			  <div class="login-content" style="background-color: white;">
                    <?php
                    if(isset($_GET['log']))
                    {
                    ?>
                    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong> Oh snap! </strong> Invalid Username or Password.. try submitting again. </div>
                    <?php
                    } 
					?>
				<form action="" method="post" class="margin-bottom-0">
					<div class="form-group m-b-20">
						<input type="text" class="form-control form-control-lg inverse-mode" name="username" placeholder="Username" required />
					</div>
					<div class="form-group m-b-20">
						<input type="password" class="form-control form-control-lg inverse-mode" name="password" placeholder="Password" required />
					</div>
					
					<div class="login-buttons">
						<button type="submit" name="login" class="btn btn-success btn-block btn-lg">Sign me in</button>
					</div>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
   
</body>
</html>
