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
                      <li><a href="product.php">Product</a> </li>
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
                  <li class="active"><a href="contact-us.php">Contact</a></li>
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
	            		<h1>Contact Us</h1>
	            		<ul class="political-breadcrumb">
	     		            <li><a href="index.php">Homepage</a></li>
				            <li class="active">Contact Us</li>
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

					<div class="col-md-12">
						<div class="political-contact-info">
							<ul class="row">
                            	<li class="col-md-2"></li>
								<li class="col-md-3">
									<div class="political-contact-text">
										<i class="icon church-location-pin"></i>
										<h6>Meet Us At</h6>
										<p>Vaibhav Colony, Rajiv Nagar, Nashik, Maharashtra 422501</p>
									</div>
								</li>
								<li class="col-md-3">
									<div class="political-contact-text">
										<i class="icon church-phone-call"></i>
										<h6>Call Us At</h6>
										<p>(+91) 703 050 3089<br> (+91) 983 441 8818</p>
									</div>
								</li>
								<li class="col-md-3">
									<div class="political-contact-text">
										<i class="icon church-envelope"></i>
										<h6>Mail Us At</h6>
										<a href="mailto:info@creativeelectronics.in">info@creativeelectronics.in</a>
										<a href="mailto:creativeelectronicsnsk@gmail.com.com">creativeelectronicsnsk@gmail.com</a>
									</div>
								</li>
                                <li class="col-md-1"></li>	
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--// Main Section \\-->

		<!--// Main Section \\-->
		<div class="political-main-section">
			<div class="political-fancy-title">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Contact Us Now</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="political-contact-form">
							<h2 class="political-section-heading">Message Us Now</h2>
							<p>Customer feedback is the lifeblood of our business. Tell us what’s on your mind, good or bad.</p>
							<form method="POST" action="contact-script-working.php">
								<ul>
									<li><input type="text" name="name" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>
									<li><input type="email" name="email" value="Your Email" onblur="if(this.value == '') { this.value ='Your Email'; }" onfocus="if(this.value =='Your Email') { this.value = ''; }"></li>
									<li class="political-full-form"><textarea placeholder="Message" name="message"></textarea></li>
									<li><input type="submit" value="Submit Now" class="" name="Send"></li>
								</ul>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14999.780136953952!2d73.7718499!3d19.9688137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38f0d4ee2d5f0d69!2sCreative+Electronics+Nashik!5e0!3m2!1sen!2sin!4v1531278960175" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!--// Main Section \\-->

	</div>
	<!--// Main Content \\-->

	<!--// Footer \\-->
	<?php include("footer.php"); ?>