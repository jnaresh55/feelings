<?php
$con = mysqli_connect("localhost","root","","creative_db");


function getSlider(){
	
	global $con;
	
	if(!isset($_GET['slider'])){
	
	$get_slider = "select * from slider";
	
	$run_slider = mysqli_query($con, $get_slider);
	
	while ($row_slider=mysqli_fetch_array($run_slider)){
		
		$slider_id = $row_slider['slider_id'];
		$slider_title = $row_slider['slider_name'];
		$slider_image = $row_slider['slider_image'];
		
		echo "<div class='political-banner-layer'> <span class='political-banner-transparent'></span> <img src='admin_area/slider_images/$slider_image'>
      <div class='political-banner-caption'>
        <div class='container'>
          <div class='row'>
            <div class='col-md-6 right'> 
               
            </div>
          </div>
        </div>
      </div>
    </div>";
	}
	}
}

function gethomeimage(){
	
	global $con;
	
	if(!isset($_GET['homeimage'])){
	
	$get_slider = "select * from homeimage";
	
	$run_slider = mysqli_query($con, $get_slider);
	
	while ($row_slider=mysqli_fetch_array($run_slider)){
		
		$home_id = $row_slider['homeimage_id'];
		$home_title = $row_slider['homeimage_title'];
		$home_subtitle = $row_slider['homeimage_subtitle'];
		$home_desc = $row_slider['homeimage_desc'];
		$home_fimage = $row_slider['homeimage_fimage'];
		
		
		echo "<div class='political-team-list-wrap'>
										<figure><a href='#'><img src='admin_area/homeimage_images/$home_fimage'></figure>
										<div class='political-team-list-text'>
											<h1><a href='projects.php' class='pink-color font-weight-bold'><b>$home_title</b></a></h1>
											<span class='text-dark'><b>$home_subtitle</b></span>
											<p>$home_desc</p>
											<ul class='political-team-info'>
												<li><i class='icon church-arrows6'></i>Website: <a href='http://creativeelectronics.in/'>www.creativeelectronics.in</a></li>
												<li><i class='icon church-school'></i>E-mail: <a href='mailto:info@creativeelectronics.in'>info@creativeelectronics.in</a></li>
												<li><i class='icon church-technology5'></i>Phone: <span>(+91) 70-305-030-89</span></li>														
												<li>
													<ul class='political-team-social'>
														<li><a href='https://www.facebook.com/' class='fa fa-facebook-square'></a></li>
														<li><a href='https://twitter.com/login?lang=en' class='fa fa-twitter-square'></a></li>
														<li><a href='https://www.rss.com/login' class='fa fa-rss-square'></a></li>
														<li><a href='https://vimeo.com/log_in' class='fa fa-vimeo-square'></a></li>
														<li><a href='https://www.linkedin.com/uas/login' class='fa fa-linkedin-square'></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>";
	}
	}
}


function getProjectSlider(){
	
	global $con;
	
	$get_project = "select * from project order by rand()";
	
	$run_project = mysqli_query($con, $get_project);
	
	while ($row_project=mysqli_fetch_array($run_project)){
		
		$project_id = $row_project['projects_id'];
		$project_title = $row_project['projects_title'];
		$project_desc = $row_project['projects_desc'];
		$project_price = $row_project['projects_price'];
		$project_image = $row_project['projects_image'];
		
		echo " <div class='political-cause-grid-layer col-md-4'>
                  <figure><a href='projects.php'><img src='admin_area/projects_images/$project_image'><span><i class='fa fa-hand-o-right'></i>Click to more Info</span></a> </figure>
                  <div class='political-cause-grid-text'>
                    <h2><a href='projects.php'>$project_title</a></h2>
                    <p>$project_desc</p>
                    <a href='projects.php' class='political-simple-btn'>More Info</a> </div>
              </div>";
	}
}

function getProjectDetails(){
	
	global $con;
	
	$get_project = "select * from project LIMIT 0,5";
	
	$run_project = mysqli_query($con, $get_project);
	
	while ($row_project=mysqli_fetch_array($run_project)){
		
		$project_id = $row_project['projects_id'];
		$project_title = $row_project['projects_title'];
		$project_desc = $row_project['projects_desc'];
		$project_price = $row_project['projects_price'];
		$project_image = $row_project['projects_image'];
		$project_desc1 = $row_project['projects_desc1'];
		$project_comp1 = $row_project['projects_comp1'];
		$project_comp2 = $row_project['projects_comp2'];
		$project_comp3 = $row_project['projects_comp3'];
		$project_comp4 = $row_project['projects_comp4'];
		$project_comp5 = $row_project['projects_comp5'];
		
		
		echo "	
                        		<li class='col-md-12'>
                        			<figure><img src='admin_area/projects_images/$project_image'></figure>
                        			<div class='political-blog-list-text'>
                        				<h2>$project_title<span class='pull-right text-danger'>Rs $project_price/-</span></h2>
                        				<p>$project_desc<p><button type='button' data-toggle='modal' data-target='#$project_id' class='text-info'><b>More Details</b></p></p></button>
                                        <a class='btn btn-success' data-toggle='modal' data-target='#exampleModalCenter'>Buy Now</a>
										
                        			</div>
                        		</li> 
					<div class='modal fade' id='$project_id' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>$project_title;</h4>
        </div>
        <div class='modal-body'>
	      <h4>Projet Description</h4>
          <p>$project_desc1</p>
          <h4>Projet Component</h4>
          	<ul>
            	<li>$project_comp1</li>
				<li>$project_comp2</li>
				<li>$project_comp3</li>
				<li>$project_comp4</li>
				<li>$project_comp5</li>
                
            </ul>
            <h4 class='text-danger'>Price:- Rs.$project_price/-</h4>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
      
    </div>
  </div>

								
";
	}
}


function getComponent(){
	
	global $con;
	
	$get_component = "select * from component LIMIT 0,8";
	
	$run_component = mysqli_query($con,$get_component);
	
	while ($row_component=mysqli_fetch_array($run_component)){
	
		$component_id = $row_component['component_id'];
		$component_title = $row_component['component_title'];
		$component_desc = $row_component['component_desc'];
		$component_price = $row_component['component_price'];
		$component_image = $row_component['component_image'];
				
		echo "<li class='col-md-3'>
									<figure>
										<a href='#'>
											<img src='admin_area/component_images/$component_image'>
											<i class='icon church-chain'></i>
										</a>
									</figure>
									<div class='political-gridv2-text'>
										<div class='political-blog-heading'>
											<span>Price<a href='#'>$component_price/-</a></span>
										</div>
										<h3><a href='#' class='text-dark-b'>$component_title</a></h3>
										<p>$component_desc</p>
										<a href='#' class='political-blog-btn' data-toggle='modal' data-target='#exampleModalCenter'>Read More <i class='icon church-right-arrow'></i>	</a>
									</div>
								</li>
								
							";
	}
}

function getSynopsis(){
	
	global $con;
	
	if(!isset($_GET['synopsis'])){
	
	$get_synopsis = "select * from synopsis LIMIT 0,25";
	
	$run_synopsis = mysqli_query($con, $get_synopsis);
	
	while ($row_synopsis=mysqli_fetch_array($run_synopsis)){
		
		$synopsis_id = $row_synopsis['synopsis_id'];
		$synopsis_title = $row_synopsis['synopsis_title'];
		$synopsis_file = $row_synopsis['synopsis_file'];
		
		echo "
                        		<li class='col-sm-6 col-sm-6'><a target='_blank'  href='admin_area/synopsis_files/$synopsis_file'>$synopsis_title</a></li>

                        	</li>";
	}
	}
}


function getProduct(){
	
	global $con;
	
	$get_product = "select * from product";
	
	$run_product = mysqli_query($con,$get_product);
	
	while ($row_product=mysqli_fetch_array($run_product)){
	
		$product_id = $row_product['product_id'];
		$product_title = $row_product['product_title'];
		$product_desc = $row_product['product_desc'];
		$product_price = $row_product['product_price'];
		$product_image = $row_product['product_image'];
		$product_details1 = $row_product['product_details1'];
	$product_details2 = $row_product['product_details2'];
	$product_details3 = $row_product['product_details3'];
	$product_details4 = $row_product['product_details4'];
	$product_details5 = $row_product['product_details5'];
	$product_details6 = $row_product['product_details6'];
	$product_details_image = $row_product['product_details_image'];
	$product_package1 = $row_product['product_package1'];
	$product_package2 = $row_product['product_package2'];
	$product_package3 = $row_product['product_package3'];
	$product_package4 = $row_product['product_package4'];
	$product_package5 = $row_product['product_package5'];
	$product_package6 = $row_product['product_package6'];
	$product_advantage1 = $row_product['product_advantage1'];
	$product_advantage2 = $row_product['product_advantage2'];
	$product_advantage3 = $row_product['product_advantage3'];
	$product_advantage4 = $row_product['product_advantage4'];
	$product_advantage5 = $row_product['product_advantage5'];
	$product_advantage6 = $row_product['product_advantage6'];
	$product_standard1 = $row_product['product_standard1'];
	$product_standard2 = $row_product['product_standard2'];
	$product_standard3 = $row_product['product_standard3'];
	$product_standard4 = $row_product['product_standard4'];
	$product_standard5 = $row_product['product_standard5'];
	$product_standard6 = $row_product['product_standard6'];
				
		echo "		
					<div class='col-md-12'>
						<figure class='political-campaign-detail-thumb'><img src='admin_area/product_images/$product_image'></figure>
						<div class='political-campaign-cause'>
							<div class='political-circle-text'>
								<h2 class='text-success'><b>$product_title</b></h2>
							</div>
							<h4 class='text-danger'>Buy at Only $product_price/-</h4>
                            <h4>Save up to 43%</h4>
							<a href='#' class='political-simple-btn' tabindex='-1' data-toggle='modal' data-target='#exampleModalCenter'>Buy Now</a>
						</div>
					</div>
					<div class='col-md-12'>
						<div class='political-rich-editor'>
                        <h5 style='font-size:22px;' id='des'>Product Description</h5>
							<p><span class='text-success text-justify'>#<b>$product_title</b></span>
                                       <P>$product_desc
 <a href='#des' data-toggle='collapse' data-target='#demo' class='text-primary'>READ MORE</a></p></p>

						<div id='demo' class='collapse'>
                        	<div class='col-sm-12'>
                            	<div class='row'>
                                	<div class='col-sm-6'>
                                    	<h5 style='font-size:22px;'>Product Details</h5>
										<ul class='political-liststyle-one'>
											<li><p>$product_details1</p></li>
											<li><p>$product_details2</p></li>
											<li><p>$product_details3</p></li>
                                            <li><p>$product_details4</p></li>
                                            <li><p>$product_details5</p></li>
                                            <li><p>$product_details6</p></li>
										</ul>
                                    </div>
                                    <div class='col-sm-6'>
                                    	<div class='political-campaign-points-thumb'>
                                        	<img src='admin_area/product_images/$product_details_image'>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                    	<h5 style='font-size:22px;'>Package Includes</h5>
										<ul class='political-liststyle-one'>
											<li><p>$product_package1</p></li>
											<li><p>$product_package2</p></li>
											<li><p>$product_package3</p></li>
                                            <li><p>$product_package4</p></li>
                                            <li><p>$product_package5</p></li>
											<li><p>$product_package6</p></li>
										</ul>
                                    </div>
                                    <div class='col-md-4'>
                                    <h5 style='font-size:22px;'>Advantages</h5>
										<ul class='political-liststyle-one'>
											<li><p>$product_advantage1</p></li>
											<li><p>$product_advantage2</p></li>
											<li><p>$product_advantage3</p></li>
											<li><p>$product_advantage4</p></li>
											<li><p>$product_advantage5</p></li>
											<li><p>$product_advantage6</p></li>
										</ul>
									</div>
                                    <div class='col-md-4'>
                                    <h5 style='font-size:22px;'>Quality Control Standards</h5>
										<ul class='political-liststyle-one'>
											<li><p>$product_standard1</p></li>
											<li><p>$product_standard2</p></li>
											<li><p>$product_standard3</p></li>
											<li><p>$product_standard4</p></li>
											<li><p>$product_standard5</p></li>
											<li><p>$product_standard6</p></li>
										</ul>
									</div>
                                </div>
                            </div>
                        </div>
			</div>
		
		<!--// Main Section \\-->
</div>";
	}
}

function getProjectList(){
	
	global $con;
	
	if(isset($_GET['list'])){
	
	$cat_id = $_GET['list'];
	
	$get_cat_prolist = "select * from project_main_list where prolist_id='$prolist_id'";
	
	$run_cat_prolist = mysqli_query($con, $get_cat_prolist);
	
	$count = mysqli_num_rows($run_cat_prolist);
	
	if($count==0){
		
		echo "<h2>No Project Found This Categories!</h2>";
	}
	
	while ($row_cat_prolist=mysqli_fetch_array($run_cat_prolist)){
		
		$mainlist_id = $row_cat_prolist['mainlist_id'];
		$prolist_id = $row_cat_prolist['prolist_id'];
		$mainlist_title = $row_cat_prolist['mainlist_title'];
		
		echo "";
	}
}
}


function getGallery(){
	
	global $con;
	
	if(!isset($_GET['gallery'])){
	
	$get_slider = "select * from gallery";
	
	$run_slider = mysqli_query($con, $get_slider);
	
	while ($row_slider=mysqli_fetch_array($run_slider)){
		
		
		$gallery_id = $row_slider['gallery_id'];
		$gallery_title = $row_slider['gallery_title'];
		$gallery_image = $row_slider['gallery_image'];
		$gallery_zoom_image = $row_slider['gallery_zoom_image'];
		
		echo "<div class='col-md-3'>
                	<figure>
                    <a data-fancybox-group='group' href='admin_area/gallery_images/$gallery_zoom_image' class='fancybox'>
                    	<img src='admin_area/gallery_images/$gallery_image' alt=''> 	
                    </a>
                    </figure>
                    <h4>$gallery_title</h4>
                </div>
                ";
	}
	}
}


?>