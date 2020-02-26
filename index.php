<?php 
include("header.php");
include("functions/functions.php"); 
?>

  <!--// Header \\--> 
  
  <!--// Main Banner \\-->
  <div class="political-banner"> 
    
    <!--// Slider \\-->
    <?php getSlider(); ?>
    <!--// Slider \\--> 
    
  </div>
  <!--// Main Banner \\--> 
  
  <!--// Main Content \\-->
  <div class="political-main-content"> 
    
    <!--// Main Section \\-->
    <div class="political-main-section political-service-listfull" style="background-image:url(images/gif.gif);">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> 
            <!--<div class="political-service-list">
							<ul>
								<li>
									<i class="icon church-eye"></i>
									<h3>Mission</h3>
									<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
								</li>
								<li>
									<i class="icon church-interface"></i>
									<h3>Vision</h3>
									<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
								</li>
								<li>
									<i class="icon church-arrow2"></i>
									<h3>Issues</h3>
									<p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
								</li>
							</ul>
						</div>-->
                        
            <h2 class="text-success"><b>Our Workshop Schedule</b></h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="text-danger"><b>LEVEL 1</b></span> </a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                  	<ul class="text-dark-b">
                    	<li>Introduction of Components</li>
                        <li>Practically making circuits</li>
                        <li>Types of Sensors</li>
                        <li>Sensor Based Real application based Projects</li>
                    </ul>
                    <h6 class="text-success" style="padding-left:10px; padding-top:10px;"><b>Fees: 1000/-</b></h6>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span class="text-danger"><b>LEVEL 2</b></span> </a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                  	<ul class="text-dark-b">
                    	<li>Introduction of Microcontroller (8051 and Arduino)</li>
                        <li>Interfacing of microcontroller</li>
                        <li>Introduction of Robotics</li>
                        <li>Robot Making</li>
                    </ul>
                    <h6 class="text-success" style="padding-left:10px; padding-top:10px;"><b>Fees: 2000/-</b></h6>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="text-danger"><b>LEVEL 3</b></span> </a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                  	<ul class="text-dark-b">
                    	<li>Advance Microcontroller</li>
                        <li>Bluetooth, WI-FI, IOT Based Projects</li>
                        <li>Advance Robotics</li>
                        <li>Competition</li>
                    </ul>
                    <h6 class="text-success" style="padding-left:10px; padding-top:10px;"><b>Fees: 3000/-</b></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <figure class="political-service-add"> <img src="images/mini-banner.jpg" alt="">
              <figcaption> 
                <!--<h2>Absolutely <span>New Approach</span> To Politics</h2>
								<a href="contact-us.php.php" class="political-add-btn">Contact Us</a>-->
                <p>Contact Us: <span>(+91)</span> 7030503089</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
    <!--// Main Section \\--> 
    
    <div class="political-main-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="political-team political-team-list">
							<ul class="row">
								<li class="col-md-12">
									
									
									
									<?php gethomeimage(); ?>
									
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    
    
    
    <!--// Main Section \\-->
    <div class="political-main-section political-cause-gridfull">
      <div class="political-fancy-title">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Latest Projects</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
		<div class="col-md-12">
            <div class="political-cause political-cause-grid">
			<div class="row political-cause-grid-slider">
               
          
		  <?php getProjectSlider(); ?>
		   
          </div>
              </div>
            </div>
		</div>
      </div>
    </div>
    <!--// Main Section \\--> 
    
    <!--// Main Section \\-->
    <div class="political-main-section political-counterfull"> <span class="political-counter-transparent"></span>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="political-counter">
              <ul>
                <li> <i class="fa fa-hand-peace-o"></i>
                  <div class="numscroller" id="numscroller1">1278</div>
                  <h2>Project Completed</h2>
                </li>
                <li> <i class="fa fa-smile-o"></i>
                  <div class="numscroller" id="numscroller2">4897</div>
                  <h2>Happy User</h2>
                </li>
                <li> <i class="fa fa-hourglass-2"></i>
                  <div class="numscroller" id="numscroller3">30</div>
                  <h2>Working Projects</h2>
                </li>
                <li> <i class="fa fa-handshake-o"></i>
                  <div class="numscroller" id="numscroller4">1100</div>
                  <h2>Successfully Working</h2>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--// Main Section \\--> 
    
    <!--// Main Section \\-->
    <div class="political-main-section political-campaign-tabfull">
      <div class="political-fancy-title">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Latest Project</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="political-campaign-tabs"> 
              <!-- Nav tabs --> 
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="political-campaign-widget">
                        <ul class="nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home-two" aria-controls="home-two" role="tab" data-toggle="tab">4x4x4 LED Cube <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget-one" aria-controls="widget-one" role="tab" data-toggle="tab">River Cleaning Robot <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget-two" aria-controls="widget-two" role="tab" data-toggle="tab">Automatic Bottle Filling System <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget-three" aria-controls="widget-three" role="tab" data-toggle="tab">8051 Based Door System <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget-four" aria-controls="widget-four" role="tab" data-toggle="tab">LED Scrolling Display <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget-five" aria-controls="widget-five" role="tab" data-toggle="tab">Sun Tracking Solar Plate <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget-six" aria-controls="widget-six" role="tab" data-toggle="tab">Remote Control Home System <i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home-two">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/T2EPa7DDxqc"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>Home Based LED 4x4x4 Cube</h2>
                                <p> in this video i will show you how to make a <strong>simple 4X4X4 LED cube</strong> at your Home.</p>
                                <a href="contact-us.php.php" class="political-simple-btn">More Info</a> </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget-one">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/v88oP8rte6Y"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>Create River Cleaning Robot</h2>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
                                <a href="projects.php" class="political-simple-btn">More Info</a> </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget-two">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/j_y6V6PYxPI"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>Automatic Bottle Filling System using 8051</h2>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
                                <a href="projects.php" class="political-simple-btn">Join Us There</a> </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget-three">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/r1XLYZVLcTs"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>8051 Based Door System</h2>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
                                <a href="projects.php" class="political-simple-btn">More Info</a> </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget-four">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/oy0nZhC3prM"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>LED Scrolling Display (Dot Matrix)</h2>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
                                <a href="projects.php" class="political-simple-btn">More Info</a> </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget-five">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/5aXVGl4VEBo"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>Sun Traking Solar Plate</h2>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
                                <a href="projects.php" class="political-simple-btn">More Info</a> </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget-six">
                          <div class="row">
                            <div class="col-md-7">
                              <iframe width="420" height="370" src="https://www.youtube.com/embed/i54gGdq6ds4"></iframe>
                            </div>
                            <div class="col-md-5">
                              <div class="political-campaign-trail-text">
                                <h2>IR Remote Control Switch System For 4 Lights & 1 Fan With Speed Regulation</h2>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Ut tinci dunt risus sit amet arcu sollicitudin</p>
                                <a href="projects.php" class="political-simple-btn">More Info</a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!--// Main Content \\--> 
  
  <!--// Footer \\-->
  <?php include("footer.php"); ?>