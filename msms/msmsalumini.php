<?php
// if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LdXlcYUAAAAAMQ7z0QEpKcZVgD5PNGnEsTf6biP';
		
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
            
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $class = !empty($_POST['class'])?$_POST['class']:'';
            $section = !empty($_POST['section'])?$_POST['section']:'';
            $year = !empty($_POST['year'])?$_POST['year']:'';
            $mobile = !empty($_POST['mobile'])?$_POST['mobile']:'';
			$email = !empty($_POST['email'])?$_POST['email']:'';
			$location = !empty($_POST['location'])?$_POST['location']:'';
			$organisation = !empty($_POST['organisation'])?$_POST['organisation']:'';
			$designation = !empty($_POST['designation'])?$_POST['designation']:'';
			$specialization = !empty($_POST['specialization'])?$_POST['specialization']:'';
			$about = !empty($_POST['about'])?$_POST['about']:'';
            $to = 'msmsdelhi83@gmail.com'; 
            $subject = 'Career Enquiry From MSMS';
            $htmlContent = "
                <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
    <table style='width: 100%;'>
      <tr>
        <td></td>
        <td bgcolor='#FFFFFF '>
          <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid lightseagreen;'>
            <table style='width: 100%;background: #fff;'>
              <tr>
                <td></td> 
                <td>
                  <div>
                    <table width='100%'>
                      <tr>
                        <td rowspan='2' style='text-align:center;padding:10px;'>
							<img style='float:left; ' width='250'  src='http://msmsdelhi.in/msms/img/logo.png' /> 
							
							<span style='color:white;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
							<b><span>Contact Enquiry</span></b><span></span></span></td>
                      </tr>
                    </table>
                  </div>
                </td>
                <td></td>
              </tr>
            </table>
            <table style='padding: 10px;font-size:14px; width:100%;'>
              <tr>
                <td style='padding:10px;font-size:14px; width:100%;'>
                    <p><b>Name :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$name." </p>
                    
                    <p><b>Class :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$class." </p>
                    
                    <p><b>Section :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$section." </p>
                    
                    <p><b>year :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$year." </p>
                    
                    
                    <p><b>Mobile :-</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$mobile." </p>
                    
                    <p><b>Email :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email." </p>
                    
                    <p><b>Location :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$location." </p>
                    
                    <p><b>Organisation :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$organisation." </p>
                    
                    <p><b>Designation :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$designation." </p>
                    
                    <p><b>Specialization :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$specialization." </p>
                    
                    <p><b>About :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$about." </p>
                    
                 </td>
              </tr>
			  <tr> 
			  <td>
				 <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#172377;'>
                    © 2020 <a href='http://msmsdelhi.in/msms/' target='_blank' style='color:#fff; text-decoration: none;'>[ MSMS ]</a>
                  </div>
                </td>
			  </tr>
            </table>
          </div>
            ";
            // Always set content-type when sending HTML email
            $safeName = preg_replace("/[\r\n]+/", " ", $name);
            $safeEmail = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'noreply@msmsdelhi.in';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8\r\n";
            $headers .= 'From: ' . $safeName . ' <' . $safeEmail . ">\r\n";
            $headers .= 'Reply-To: ' . $safeEmail . "\r\n";
            //send email
            @mail($to,$subject,$htmlContent,$headers);
            
            echo "<script>alert('Thankyou for contact us.');</script>";
			echo "<script>window.location.href='http://msmsdelhi.in/msms/'</script>"; 
        else:
			echo "<script>alert('Robot verification failed, please try again.');</script>";
			echo "<script>window.location.href='http://msmsdelhi.in/msms/'</script>"; 
        endif;
    else:
	        echo "<script>alert('Please click on the reCAPTCHA box.');</script>";
			echo "<script>window.location.href='http://msmsdelhi.in/msms/'</script>"; 
    endif;
// else:
//     $errMsg = '';
//     $succMsg = '';
// endif;
?> 