<?php 
$postData = $statusMsg = ''; 
$status = 'error'; 
 
// If the form is submitted 
if(isset($_POST['submit1'])){ 
    $postData = $_POST; 
     
    // If reCAPTCHA response is valid 
            
                // Posted form data 
                $name = !empty($_POST['names'])?$_POST['names']:''; 
                $email = !empty($_POST['emails'])?$_POST['emails']:''; 
                $phone = !empty($_POST['phones'])?$_POST['phones']:''; 
                $message = !empty($_POST['mesg'])?$_POST['mesg']:''; 
                 
                // Send email notification to the site admin 
                $to = 'mjms.mjms@gmail.com'; 
                $subject = 'Footer Form'; 
                $htmlContent = " 
                    <h1>Contact request details</h1> 
                    <p><b>Name: </b>".$name."</p>
                   
                    <p><b>Email: </b>".$email."</p> 
                    <p><b>Phone: </b>".$phone."</p> 
                    <p><b>Message: </b>".$message."</p> 
                "; 
                 
                // Always set content-type when sending HTML email 
                $safeName = preg_replace("/[\r\n]+/", " ", $name);
                $safeEmail = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'noreply@msmsdelhi.in';
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                $headers .= 'From: ' . $safeName . ' <' . $safeEmail . ">\r\n";
                $headers .= 'Reply-To: ' . $safeEmail . "\r\n";
                 
                // Send email 
                @mail($to,$subject,$htmlContent,$headers); 
                 
                $status = 'success'; 
                
                echo "<script>alert('thanks for submitting enquiry');</script>";
			    echo "<script>window.location.href='index.php'</script>"; 
                //$statusMsg = 'Your contact request has submitted successfully.'; 
                
                $postData = '';
           
            
        
    
} 
?>