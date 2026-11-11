<?php

require('inc/function.php');

if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = RECAPTCHA_SECRET_KEY;
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
            $sname = !empty($_POST['sname'])?$_POST['sname']:'';
			$fname = !empty($_POST['fname'])?$_POST['fname']:'';
            $class = !empty($_POST['class'])?$_POST['class']:'';
           	$mob = !empty($_POST['mobile'])?$_POST['mobile']:'';
			$email = !empty($_POST['email'])?$_POST['email']:'';
			$enquiry = !empty($_POST['enquiry'])?$_POST['enquiry']:'';
            
           $to = 'mjms.mjms@gmail.com';
            $subject = 'Home Page Admission Form';
            $htmlContent = "
                <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
    <table style='width: 100%;'>
      <tr>
        <td></td>
        <td bgcolor='#FFFFFF '>
          <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid lightseagreen;'>
            <table style='width: 100%;background: #fff ;'>
              <tr>
                <td></td> 
                <td>
                  <div>
                    <table width='100%'>
                      <tr>
                        <td rowspan='2' style='text-align:center;padding:10px;'>
							<img style='float:left; ' width='200'  src='http://msmsdelhi.in/mjms/img/logo.png' /> 
							
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
                    <p><b>Name :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$sname." </p>
                    
                    <p><b>Father Name :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$fname." </p>
                    
                    <p><b>Calss :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$class." </p>
                    
                    <p><b>Contact No. :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$mob." </p>
					<p><b>Email :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$email." </p>
					<p><b>Message :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$enquiry." </p>
                    
                 </td>
              </tr>
			  
            </table>
          </div>
            ";
            // Always set content-type when sending HTML email
            $safeName = preg_replace("/[\r\n]+/", " ", $sname);
            $safeEmail = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'noreply@msmsdelhi.in';
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8\r\n";
            $headers .= 'From: ' . $safeName . ' <' . $safeEmail . ">\r\n";
            $headers .= 'Reply-To: ' . $safeEmail . "\r\n";
            //send email
            @mail($to,$subject,$htmlContent,$headers);
            
            echo "<script>alert('thanks for submitting enquiry.');</script>";
			echo "<script>window.location.href='index.php'</script>"; 
// 			echo "<script>window.history.back();</script>"; 
        else:
			echo "<script>alert('Robot verification failed, please try again.');</script>";
		     echo "<script>window.location.href='index.php'</script>"; 
// 			echo "<script>window.history.back();</script>"; 
        endif;
    else:
	        echo "<script>alert('Please click on the reCAPTCHA box.');</script>";
            echo "<script>window.location.href='index.php'</script>"; 
// 			echo "<script>window.history.back();</script>";

    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;
?> 