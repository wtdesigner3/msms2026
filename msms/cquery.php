<?php
if(isset($_POST['crsubmit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LdXlcYUAAAAAMQ7z0QEpKcZVgD5PNGnEsTf6biP';
		
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
            
            $jobtype = !empty($_POST['jobtype'])?$_POST['jobtype']:'';
            $category = !empty($_POST['category'])?$_POST['category']:'';
            $subject = !empty($_POST['subject'])?$_POST['subject']:'';
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $dob = !empty($_POST['dob'])?$_POST['dob']:'';
            $residence = !empty($_POST['residence'])?$_POST['residence']:'';
            $mobile = !empty($_POST['mobile'])?$_POST['mobile']:'';
			$email = !empty($_POST['email'])?$_POST['email']:'';
			$qualification = !empty($_POST['qualification'])?$_POST['qualification']:'';
			$experience = !empty($_POST['experience'])?$_POST['experience']:'';
			$texperience = !empty($_POST['texperience'])?$_POST['texperience']:'';
			$salary = !empty($_POST['salary'])?$_POST['salary']:'';
			$exstudent = !empty($_POST['exstudent'])?$_POST['exstudent']:'';
			$father = !empty($_POST['father'])?$_POST['father']:'';
			$mother = !empty($_POST['mother'])?$_POST['mother']:'';
			$mstatus = !empty($_POST['mstatus'])?$_POST['mstatus']:'';
    
            
           $to = 'msmsdelhi83@gmail.com';
            $subject = 'Career Enquiry From MSMS';
            $htmlContent = "
                <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
    <table style='width: 100%;'>
      <tr>
        <td></td>
        <td bgcolor='#FFFFFF '>
          <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid lightseagreen;'>
            <table style='width: 100%;background: #8bc34a ;'>
              <tr>
                <td></td> 
                <td>
                  <div>
                    <table width='100%'>
                      <tr>
                        <td rowspan='2' style='text-align:center;padding:10px;'>
							<img style='float:left; ' width='200'  src='http://msmsdelhi.in/msms/img/logo.png' /> 
							
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
                    <p><b>Job Type :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$jobtype." </p>
                    
                    <p><b>Category :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$category." </p>
                    
                    <p><b>Subject Specialisation :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$subject." </p>
                    
                    <p><b>Name :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$name." </p>
                    
                    <p><b>Date of Birth :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$dob." </p>
                    
                    <p><b>Residence Address :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$residence." </p>
                    
                    <p><b>Mobile Number :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$mobile." </p>
                    
                    <p><b>Email Address :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$email." </p>
                    
                    <p><b>Academic qualification :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$qualification." </p>
                    
                    <p><b>Experience Details :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$experience." </p>
                    
                    <p><b>Total Experience in Years :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$texperience." </p>
                    
                    <p><b>Salary Expected :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$salary." </p>
                    
                    <p><b>Ex-Student of MSMS :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$exstudent." </p>
                    
                    <p><b>Father Name :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$father." </p>
                    
                    <p><b>Mother Name :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$mother." </p>
                    
                    <p><b>Marital Status :-</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$mstatus." </p>

                    
                 </td>
              </tr>
			  <tr> 
			  <td>
				 <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                    © 2019 <a href='http://msmsdelhi.in/msms/' target='_blank' style='color:#333; text-decoration: none;'>[ MSMSM ]</a>
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
else:
    $errMsg = '';
    $succMsg = '';
endif;
?> 