<?php include "inc/function.php"; ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>Best school in north Delhi, Schools for nursery admission in Delhi</title>
    <meta name="keywords" content="Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School" />
    <meta name="description" content="Best school in north Delhi. We gives your kids a bright future with our schools best facilities.  So mahavir junior model school is a best Nursery school in north Delhi for your kids." />
    
    
    
    <?php include "inc/head.php"; ?>
</head>
<body>
<header>
<?php include "inc/header.php"; ?>
</header>

<section class="bread">
<img src="img/about-us.jpg" alt="Holiday List" title="Holiday List"/>
</section>
    
    
    
<section class="bredcrumps">
<div class="container">
	<ul>
		<li><a href="index.php"><i class="fa fa-home"></i>&nbsp; Home</a></li>
		<li><a>Student</a></li>
		<li><a>Birthday List</a></li>
	</ul>
</div>
</section>
    


    <section class="pages birth ">
   <div class="container">
     <h1>Upcoming Birthday List</h1>
     
     <!----flip----->
<div class="container"><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
     
         <?php
            
            $query="SELECT * FROM `tbl_birthday` where DATE_FORMAT(b_date, '%m-%d') >= DATE_FORMAT(NOW(), '%m-%d') and DATE_FORMAT(b_date, '%m-%d') <= DATE_FORMAT((NOW() + INTERVAL +30 DAY), '%m-%d') ORDER BY DATE_FORMAT(b_date, '%m-%d')";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result)){
            ?>  
            
<div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-color1 pad30 marB30">
                        	<div class="col-sm-12 text-center">
                            	<div class="service-icon1">
                               <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                            </div>
                            </div>
                            
                            
                            <div class="service-text1">
                                <h4 class="title"><?= $row['b_name']; ?></h4>
                                <p>
                                   
                                  <?php $beckk = $row['b_date']; echo date('d F', strtotime($beckk)); ?>
                                </p>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <?php  } ?>  

                    
                                                           
     
<div class="clerfix"></div>
  
  </div>
        
        <img src="img/f2.png" >
</section>


<?php include "inc/footer.php"; ?>

<?php include "inc/footer-data.php"; ?>
</body>

</html>