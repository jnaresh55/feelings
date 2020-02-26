<?php
session_start();

if(!isset($_SESSION['admin_email']))
{
	echo "<script>window.open('login.php','_self')</script>";
}
else {
	

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Admin Panel</title>
<link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
<link href="maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.html"
  rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/vendors.min.css">
<!-- END VENDOR CSS-->  
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/app.min.css">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/cryptocoins/cryptocoins.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/assets/css/style.css">
<!-- END Custom CSS-->
<link rel="stylesheet" href="app-assets/line-awesome/css/line-awesome.css">
<link href="app-assets/line-awesome/css/line-awesome-font-awesome.min.css" rel="stylesheet">
<!--End Links-->

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- fixed-top--> 

<!--Top Bar Copy <Start>-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item mr-auto"> <a class="navbar-brand" href="index.php"> <img class="brand-logo img-rounded" alt="modern admin logo" src="app-assets/logo.png">
          <h3 class="brand-text">Creative Electronics</h3>
          </a> </li>
        <li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a> </li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
            <div class="search-input">
              <input class="input" type="text" placeholder="Explore Modern...">
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-user nav-item"> <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="mr-1">Hello, <span class="user-name text-bold-700">Creative Admin</span> </span> <span class="avatar avatar-online"> <img src="app-assets/crelogo.png" alt="avatar"><i></i></span> </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!--Top Bar Copy <End>--> 

<!-- ////////////////////////////////////////////////////////////////////////////--> 

<!--Side Bar Copy <Start>-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      
	  <li class=" nav-item"><a href="index.php?insert_slider"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.templates.main">Home Slider</span></a></li>
      <li class=" nav-item"><a href="index.php?view_projects"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.page_layouts.main">View Projects</span></a></li>
	  <li class=" nav-item"><a href="index.php?insert_projects"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Insert New Projects</span></a></li>
      <li class=" nav-item"><a href="index.php?view_components"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.navbars.main">View Components</span></a></li>
	  <li class=" nav-item"><a href="index.php?insert_components"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Insert Components</span></a></li>
      <li class=" nav-item"><a href="index.php?view_products"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">View Products</span></a></li>
	  <li class=" nav-item"><a href="index.php?insert_products"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Insert Products</span></a></li>
	  <li class=" nav-item"><a href="index.php?insert_synopsis"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Synopsis</span></a></li>
	  <li class=" nav-item"><a href="index.php?insert_gallery"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Gallery</span></a></li>
	  <li class=" nav-item"><a href="index.php?insert_homeimage"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">Home Project</span></a></li>
	  <li class=" nav-item"><a href="logout.php"><i class="la la-arrow-circle-o-right"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">LOGOUT</span></a></li>
        
      </li>
    </ul>
  </div>
</div>

<!--Side Bar Copy <End>--> 

<!--Main Content Copy <Start>-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row"> </div>
    <div class="content-body">
    <div class="col-sm-2"></div>
      <div class="col-md-12">
        
		<?php
		
		include("includes/db.php");
		
		
		if(isset($_GET['insert_slider'])){
			
			include("insert_slider.php");
		}	
		if(isset($_GET['insert_homeimage'])){
			
			include("insert_homeimage.php");
		}
		
		if(isset($_GET['insert_projects'])){
			
			include("insert_projects.php");
		}
		if(isset($_GET['view_projects'])){
			
			include("view_projects.php");
		}
		if(isset($_GET['insert_components'])){
			
			include("insert_components.php");
		}
		if(isset($_GET['view_components'])){
			
			include("view_components.php");
		}
		if(isset($_GET['insert_products'])){
			
			include("insert_products.php");
		}
		if(isset($_GET['view_products'])){
			
			include("view_products.php");
		}
		if(isset($_GET['insert_synopsis'])){
			
			include("insert_synopsis.php");
		}
		if(isset($_GET['insert_gallery'])){
			
			include("insert_gallery.php");
		}
		
		if(isset($_GET['edit_slider'])){
			
			include("edit_slider.php");
		}
		if(isset($_GET['edit_projects'])){
			
			include("edit_projects.php");
		}
		if(isset($_GET['edit_products'])){
			
			include("edit_products.php");
		}
		if(isset($_GET['edit_components'])){
			
			include("edit_components.php");
		}
		if(isset($_GET['edit_synopsis'])){
			
			include("edit_synopsis.php");
		}
	
		
		?>
		
      </div>
    </div>
  </div>
</div>

<!--Main Content Copy <End>--> 

<!-- ////////////////////////////////////////////////////////////////////////////-->

<footer class="footer footer-static footer-light navbar-border navbar-shadow">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"> <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://www.creativeelectronics.in"
        target="_blank">Creative Electronics </a>, All rights reserved. </span> </p>
</footer>
<!-- BEGIN VENDOR JS--> 
<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script> 
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN PAGE VENDOR JS--> 
<script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script> 
<script src="app-assets/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script> 
<!-- END PAGE VENDOR JS-->

<!-- BEGIN MODERN JS--> 
<script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script> 
<script src="app-assets/js/core/app.min.js" type="text/javascript"></script> 
<script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script> 
<!-- END MODERN JS--> 
<!-- BEGIN PAGE LEVEL JS--> 
<script src="app-assets/js/scripts/pages/dashboard-crypto.min.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL JS-->
</body>
</html>

<?php } ?>
