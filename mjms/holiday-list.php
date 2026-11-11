 <?php include "inc/function.php"; ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
		<li><a>Gallery</a></li>
		
		<li><a>Holiday List</a></li>
	</ul>
</div>
</section>
    


    <section class="pages ">
   <div class="container">
       
       <!----flip----->
<div class="container"><h1 class="demo1" align="right">
<span class="rotate" style="color:#000033;">Play school in north Delhi, Nursery school in north Delhi, North Delhi top nursery schools, Top nursery schools in north Delhi, Schools for nursery admission near me, Schools for nursery admission in Delhi, Best school in north Delhi, Top 10 schools in north Delhi, Top 5 schools in north Delhi, Top schools near me, Best school near me, Top 10 schools in Delhi for nursery admissions, List of schools in north Delhi, Top schools in north Delhi, Mahavir Junior Model School
</span>
</h1> </div>
<!----flip----->
     <h1>Holiday List</h1>	
                <?php
            $query="SELECT * FROM tbl_holiday where `h_status`='1'";
            $result=mysqli_query($conn,$query);
            $rowcount=mysqli_num_rows($result);
            ?>

            <?php
            for($i=1;$i<=$rowcount;$i++)
            {
            $row=mysqli_fetch_array($result);
            ?>  
               
            <?php 
        
      if($row['h_id'] % 2 == 0) 
            {
             ?> 
     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-color green pad30 marB30">
                            <div class="service-icon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <div class="service-text">
                                <h4 class="title"><?= $row['h_name']; ?></h4>
                                <p>
                                  <?php $beckk = $row['h_date']; echo date('d F Y', strtotime($beckk)); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    
                           <?php 
             } else { ?>  
                    
<div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-color red pad30 marB30">
                            <div class="service-icon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <div class="service-text">
                                <h4 class="title"><?= $row['h_name']; ?></h4>
                                <p>
                                <?php $beckk = $row['h_date']; echo date('d F Y', strtotime($beckk)); ?>
                                </p>
                            </div>
                        </div>
</div>

 <?php } } ?> 



     
<div class="clerfix"></div>
  
  </div>
        
        <img src="img/f2.png" >
</section>


<?php include "inc/footer.php"; ?>

<?php include "inc/footer-data.php"; ?>
</body>

</html>