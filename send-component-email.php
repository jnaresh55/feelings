<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
	$cname = $_POST['cname'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($phone) && !empty($cname)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'jnaresh55@gmail.com';
            $emailSubject = 'Component Request Submitted by '.$name;
            $htmlContent = '<h2>Your Request Submitted</h2>
                <h4>Component</h4><p>'.$component_title.'</p>
				<h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
				<h4>Collage Name</h4><p>'.$cname.'</p>
				<h4>Contact Number</h4><p>'.$phone.'</p>
                <h4>Message</h4><p>'.$subject.'</p>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your Component request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your Component request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
<script>
alert("Your Mail Has Been Send Successfully.....!!!");
window.location="shop.php";
</script>
