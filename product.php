<?php 
include("functions/functions.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to Creative Electronics</title>

<!-- Css Files -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/slick-slider.css" rel="stylesheet">
<link href="css/fancybox.css" rel="stylesheet">
<link href="build/mediaelementplayer.css" rel="stylesheet">
<link href="css/jplayer.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="css/color.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
</head>
<body>

<!--// Main Wrapper \\-->
<div class="political-main-wrapper"> 
  
  <!--// Header \\-->
  <header id="political-header" class="political-header-one bg">
    <div class="political-main-header bg">
      <div class="container">
        <div class="row">
          <aside class="col-md-3"> <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a> </aside>
          <aside class="col-md-9">
            <div class="political-navigation"> 
              <!--// Navigation \\--> 
              <a href="#menu" class="menu-link active"><span></span></a>
              <nav id="menu" class="menu navbar navbar-default">
                <ul class="level-1 navbar-nav">
                  <li><a href="index.php">Home</a></li>
                  
                   <li><a href="shop.php">Shop</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
                    <ul class="sub-menu level-2">
                      <li><a href="shop.php">Shop </a> </li>
                      <li class="active"><a href="product.php">Product</a> </li>
                    </ul>
                  </li>
                  
                  <li><a href="projects.php">Projects</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
                    <ul class="sub-menu level-2">
                      <li><a href="projects.php">Projects </a> </li>
                      <li><a href="project-list.php">Project List</a> </li>
                    </ul>
                  </li>
                  
                  <li><a href="synopsis.php">Synopsis</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="contact-us.php">Contact</a></li>
                </ul>
              </nav>
              <!--// Navigation \\-->
              <ul class="political-user-list">
                <li><a href="#" class="fa fa-search" data-toggle="modal" data-target="#searchmodal"></a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </header>
	<!--// Header \\-->

	<!--// SubHeader \\-->
	<div class="political-subheader">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
            		<div class="political-subheader-wrap">
	            		<h1>Product Detail</h1>
	            		<ul class="political-breadcrumb">
	     		            <li><a href="index.php">Homepage</a></li>
				            <li class="active">Product Detail</li>
				        </ul>
			        </div>
            	</div>
            </div>
        </div>
    </div>
    <!--// SubHeader \\-->

	<!--// Main Content \\-->
	<div class="political-main-content">

		<!--// Main Section \\-->
		<div class="political-main-section">
			<div class="container">
			<div class="row">
		
		<?php getProduct(); ?>
	</div>	
</div>
	</div>
    </div>
    

	<!--// Main Content \\-->
	<!--By now popup-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLongTitle">Contact For Buy the Product</h5>
        
      </div>
      <div class="modal-body">
       	<div class="row">
		<?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
        	<form method="POST" action="">
        	<div class="col-sm-6">
            	<div class="form-group">
                	<label><b>Name</b></label>
                    <input type="text" name="name" placeholder="Full Name" class="form-control" required />
                </div>
				<div class="form-group">
                	<label><b>E-mail</b></label>
                    <input type="text" name="email" placeholder="E-mail ID" class="form-control" required />
                </div>
                <div class="form-group">
                	<label><b>Product Name</b></label>
                    <input type="text" name="cname" placeholder="College name" class="form-control" required />
                </div>
                <div class="form-group">
                	<label><b>Contact Number</b></label>
                    <input type="text" name="phone" placeholder="Contact Number" class="form-control" required />
                </div>
                <div class="form-group">
                	<label><b>Message</b></label>
					<textarea class="form-control" name="subject" required></textarea>
                </div>
            </div>
            <div class="col-sm-6">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14999.780136953952!2d73.7718499!3d19.9688137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38f0d4ee2d5f0d69!2sCreative+Electronics+Nashik!5e0!3m2!1sen!2sin!4v1531239351018" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary pull-left" name="submit" value="Send">
      </div>
    </div>
    </form>
  </div>
</div>
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
            $emailSubject = 'Product Request Submitted by '.$name;
            $htmlContent = '<h2>Product Request Submitted</h2>
                <h4>Project</h4><p>'.$project_title.'</p>
				<h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
				<h4>Product Name</h4><p>'.$cname.'</p>
				<h4>Contact Number</h4><p>'.$phone.'</p>
                <h4>Message</h4><p>'.$subject.'</p>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your Product request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your Product request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>

	<!--// Footer \\-->
	<?php include("footer.php"); ?>