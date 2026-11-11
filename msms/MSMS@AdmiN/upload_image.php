<?php include_once 'checksession.php'; ?>
<head>
	<meta charset="utf-8" />
	
	
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
</head>
<body style="background: #ffffff;">
<?php include 'get_imagelink.php'; ?>

                          <form method="post" name="form" enctype="multipart/form-data" >

                                  <div class="form-group">
                                      <div class="form-group">   
                               				 <label>Get Image Link</label>
                                       		    <input name="img" type="file" class="form-control" id="img"/>
                                              <p class="help-block">*Image dimension should be in jpg or Pdf format.</p>
                                       </div>    
                                       <div class="form-group"> 
                                              <div id="image_link"><?php if(isset($msg)!=''){ ?><h6>Copy this link:</h6><?php } ?><p class="help-block" style="color:#B90210; font-weight:800; font-size:16px;"><?php if(isset($msg)!=''){ echo "<input type='text' value='".$msg."' class='form-control' />";} if(isset($erromsg)!=''){ echo $erromsg;} ?></p></div>
                                        </div>     
                                              <button type="submit" class="btn btn-primary" name="getlink" >Get Link</button>
                  		          		</div>

                            </form>
</body>

