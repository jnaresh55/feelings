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
                      <li class="active"><a href="project-list.php">Project List</a> </li>
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
            <h1>List of Projects</h1>
            <div class="widget widget_search">
              <form>
                <input type="text" placeholder="Search the Project Title">
                <label>
                  <input type="submit" value="">
                </label>
              </form>
            </div>
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
      <div class="political-fancy-title">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>List of Projects</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="political-campaign-tabs"> 
              <!-- Nav tabs -->
              <ul class="nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab">Security</a></li>
                <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Switeches</a></li>
                <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab">Control</a></li>
                <li role="presentation"><a href="#four" aria-controls="four" role="tab" data-toggle="tab">Indicators</a></li>
                <li role="presentation"><a href="#five" aria-controls="five" role="tab" data-toggle="tab">Robotics </a></li>
                <li role="presentation"><a href="#six" aria-controls="six" role="tab" data-toggle="tab">Microcontroller</a></li>
                <li role="presentation"><a href="#seven" aria-controls="seven" role="tab" data-toggle="tab">MATLAB</a></li>
                <!--<li role="presentation"><a href="#eight" aria-controls="eight" role="tab" data-toggle="tab">San Diego</a></li>-->
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="one">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="table-responsive">
                        <table class="table table-bordered text-left">
                          <thead>
                          <th>SR NO</th>
                            <th>Project Name</th>
                            <th>IC</th>
                              </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Anti Bag Snatching Alarm</td>
                              <td>CA 3140</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Child Missing Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Door Handle touch Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Vehicle Touch Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Fire Alarm with pump on system</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Fire Alarm with Wireless Indication</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Intruder Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Intruder Alarm with Wireless Indication</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>Motion Detector</td>
                              <td>CA 3140</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>PIR Based Security Alarm System</td>
                              <td>UM66</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>Water/Rain Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>RF Based Intruder Alarm</td>
                              <td>HT12E</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>Sensitive Optical Burglar Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>Sensitive Optical Burglar Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Optical Smoke Alarm</td>
                              <td>OptoCoupler</td>
                            </tr>
                            <tr>
                              <td>16</td>
                              <td>Water Level Alarm</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>17</td>
                              <td>Multi-Level Water Level Alarm</td>
                              <td>74147</td>
                            </tr>
                            <tr>
                              <td>18</td>
                              <td>Wireless PIR Based Security System</td>
                              <td>PIR Sensor</td>
                            </tr>
                            <tr>
                              <td>19</td>
                              <td>Wireless Fire Alarm with pump system</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>20</td>
                              <td>Electronic Code Locking System</td>
                              <td>CD4017</td>
                            </tr>
                            <tr>
                              <td>21</td>
                              <td>Electronic Code Locking Circuit Breaker</td>
                              <td>CD4017</td>
                            </tr>
                            <tr>
                              <td>22</td>
                              <td>Bidirectional Intercom</td>
                              <td>LM386</td>
                            </tr>
                            <tr>
                              <td>23</td>
                              <td>Cell Phone Based Door Locking System</td>
                              <td>MT8870</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="two">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                          <th>SR NO</th>
                            <th>Project Name</th>
                            <th>IC</th>
                              </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Automatic Room light Control</td>
                              <td>74192</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Automatic Fan ON-OFF System</td>
                              <td>74192</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>DTMF Controlled Home Automation</td>
                              <td>MT8870</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Infrared Remote Control Switch</td>
                              <td>CD4017</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Liquid Level Switch</td>
                              <td>BC107</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Mobile Controlled Home Appliances</td>
                              <td>MT8870</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>RF Remote Control Home Application</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Miss Call Operated Switch</td>
                              <td>LM386</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>Light Sensitive switch</td>
                              <td>LM741</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>Light Sensitive Street Light</td>
                              <td>LM741</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>Automatic Washroom Light Switch</td>
                              <td>Reed Switch</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>Wireless Switch Circuit</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>Automatic Street Light</td>
                              <td>PIR Sensor</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>PIR Based Bathroom Light</td>
                              <td>PIR Sensor</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Miss call Operated Water Pump</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>16</td>
                              <td>Automatic Switching Of Home Light</td>
                              <td>CD4017</td>
                            </tr>
                            <tr>
                              <td>17</td>
                              <td>IR Based Light Bulb</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>18</td>
                              <td>Variable Timer Power Supply</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>19</td>
                              <td>Password Based Circuit Breaker</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>20</td>
                              <td>Wireless Password Based Circuit Breaker</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>21</td>
                              <td>Automatic Railway gate</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>22</td>
                              <td>Automatic Railway Tunnel Light</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>23</td>
                              <td>Smart Key Based Door Lock</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>24</td>
                              <td>Smart Key Based Circuit Breaker</td>
                              <td>RF Module</td>
                            </tr>
                            <tr>
                              <td>25</td>
                              <td>Rain Sensing Automatic Car Wiper</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>26</td>
                              <td>RF Based Secure Door Opener System</td>
                              <td>RF Module</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="three">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <table class="table table-bordered">
                        <thead>
                        <th>SR NO</th>
                          <th>Project Name</th>
                          <th>IC</th>
                            </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Lamp Dimmer</td>
                            <td>BT136</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Duty Cycle Selector</td>
                            <td>CD4017</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Fan Regulator</td>
                            <td>BT136</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Low/High Voltage Cut Circuit</td>
                            <td>BC148</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Over Voltage Protector</td>
                            <td>741</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Plant Tender</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>PWM Motor Speed Control</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>Alcohol Detection Based Engine Lock</td>
                            <td>MQ3</td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Sound Operated Light</td>
                            <td>CD4027</td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Sound Operated Music Bell</td>
                            <td>UM3561</td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>Sound Operated Timer</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Temperature Controlled Fan Regulator</td>
                            <td>BT136</td>
                          </tr>
                          <tr>
                            <td>13</td>
                            <td>Traffic Light Controller</td>
                            <td>CD4017</td>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>DC Motor Speed Control</td>
                            <td>74192</td>
                          </tr>
                          <tr>
                            <td>15</td>
                            <td>Automatic Switching System</td>
                            <td>CD4017</td>
                          </tr>
                          <tr>
                            <td>16</td>
                            <td>Automatic Emergency Light</td>
                            <td>IRF540</td>
                          </tr>
                          <tr>
                            <td>17</td>
                            <td>Fridge Alert System</td>
                            <td>741</td>
                          </tr>
                          <tr>
                            <td>18</td>
                            <td>Power Supply Resumption Alarm</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>19</td>
                            <td>Fridge Door Alarm</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>20</td>
                            <td>Function Generator</td>
                            <td>L8038</td>
                          </tr>
                          <tr>
                            <td>21</td>
                            <td>Auto Intensity Control of Street Lights</td>
                            <td>741</td>
                          </tr>
                          <tr>
                            <td>22</td>
                            <td>Automatic Door Bell</td>
                            <td>IR Sensor</td>
                          </tr>
                          <tr>
                            <td>23</td>
                            <td>Miss call Operated Light Switch System</td>
                            <td>CD4017</td>
                          </tr>
                          <tr>
                            <td>24</td>
                            <td>Automatic Calendar</td>
                            <td>CD4033</td>
                          </tr>
                          <tr>
                            <td>25</td>
                            <td>Wireless DC Motor Speed Control</td>
                            <td>RD Module</td>
                          </tr>
                          <tr>
                            <td>26</td>
                            <td>Light Operated Doorbell</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>27</td>
                            <td>Logic Gate Tester</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>28</td>
                            <td>Medicine Time Reminder</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>29</td>
                            <td>Attendance Calling System</td>
                            <td>CD4033</td>
                          </tr>
                          <tr>
                            <td>30</td>
                            <td>Automatic Water Distribution</td>
                            <td>L293D</td>
                          </tr>
                          <tr>
                            <td>31</td>
                            <td>Automatic Car Parking System</td>
                            <td>IR Sensor</td>
                          </tr>
                          <tr>
                            <td>32</td>
                            <td>Automatic College Bell</td>
                            <td>CD4017</td>
                          </tr>
                          <tr>
                            <td>33</td>
                            <td>Water ATM</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>34</td>
                            <td>Advance Stock Management</td>
                            <td>Voice Module</td>
                          </tr>
                          <tr>
                            <td>35</td>
                            <td>Solar Power Mobile Charger</td>
                            <td>7805</td>
                          </tr>
                          <tr>
                            <td>36</td>
                            <td>Solar Powered Auto-Irrigation System</td>
                            <td>NE555</td>
                          </tr>
                          <tr>
                            <td>37</td>
                            <td>Solar Powered LED Street Light</td>
                            <td>741</td>
                          </tr>
                          <tr>
                            <td>38</td>
                            <td>Function Generator with Frequency Counter</td>
                            <td>L8038</td>
                          </tr>
                          <tr>
                            <td>39</td>
                            <td>DTMF Controlled Garage Door Opening System</td>
                            <td>MT8870</td>
                          </tr>
                          <tr>
                            <td>40</td>
                            <td>Dam Operation Based On Water Level</td>
                            <td>LM324</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="four">
                  <div class="row">
                    <div class="col-md-2"> </div>
                    <div class="col-md-9">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                          <th>SR NO</th>
                            <th>Project Name</th>
                            <th>IC</th>
                              </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Reverse Parking Sensor</td>
                              <td>LM324</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Battery Voltage Monitor</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Electronics Counter</td>
                              <td>7490</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Frequency Meter/RPM Meter</td>
                              <td>4033</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Sound Level Meter</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Transistor and Diode Tester</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Numeric Water Level Indicator</td>
                              <td>74147</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Wireless Mains Voltage Tester</td>
                              <td>CD4069</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>IR Based Speed Measurement</td>
                              <td>CD4033</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>Volt Meter</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>Distance Measurement Using IR</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>Room Temperature Meter</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>Light Intensity Level Meter</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>AC Mains Voltage Indicator</td>
                              <td>BC547</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Mobile Incoming Call Indicator</td>
                              <td>NE555</td>
                            </tr>
                            <tr>
                              <td>16</td>
                              <td>Wireless Water Level Indicator</td>
                              <td>74147</td>
                            </tr>
                            <tr>
                              <td>17</td>
                              <td>Over Speed Indicator</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>18</td>
                              <td>Tachometer</td>
                              <td>CD4033</td>
                            </tr>
                            <tr>
                              <td>19</td>
                              <td>Noise Meter</td>
                              <td>LM3914</td>
                            </tr>
                            <tr>
                              <td>20</td>
                              <td>Voting Machine</td>
                              <td>CD4033</td>
                            </tr>
                            <tr>
                              <td>21</td>
                              <td>Oscillation Counter</td>
                              <td>CD4033</td>
                            </tr>
                            <tr>
                              <td>22</td>
                              <td>Response Time Calculator</td>
                              <td>CD4033</td>
                            </tr>
                            <tr>
                              <td>23</td>
                              <td>Fiber Optic Communication</td>
                              <td>LM386</td>
                            </tr>
                            <tr>
                              <td>24</td>
                              <td>Hand Gesture to Speech</td>
                              <td>Voice Module</td>
                            </tr>
                            <tr>
                              <td>25</td>
                              <td>Energy Generating ball</td>
                              <td>DC Motor</td>
                            </tr>
                            <tr>
                              <td>26</td>
                              <td>Wireless Power Transfer</td>
                              <td>BD140</td>
                            </tr>
                            <tr>
                              <td>27</td>
                              <td>Underground Cable Fault Distance Locator</td>
                              <td>CD4069</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="five">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="political-campaign-widget">
                        <ul class="nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home-four" aria-controls="home-four" role="tab" data-toggle="tab">Non Controller Based <i class="fa fa-arrow-right"></i></a></li>
                          <li role="presentation"><a href="#widget3-one" aria-controls="widget3-one" role="tab" data-toggle="tab">Controller Based <i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home-four">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                  <th>SR NO</th>
                                    <th>Projet Name</th>
                                    <th>IC</th>
                                      </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Line Following Robot</td>
                                      <td>ULN2003</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>DTMF Control Communicating Robot</td>
                                      <td>MT8870</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Mobile Controlled Robot</td>
                                      <td>MT8870</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Obstacle Avoiding Robot</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Sun Tracking Solar Plate</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>6</td>
                                      <td>RF Controlled Robot</td>
                                      <td>RF Module</td>
                                    </tr>
                                    <tr>
                                      <td>7</td>
                                      <td>Robot Car with Wireless Staring</td>
                                      <td>RF Module</td>
                                    </tr>
                                    <tr>
                                      <td>8</td>
                                      <td>Robot Car with Staring</td>
                                      <td>Accelerometer</td>
                                    </tr>
                                    <tr>
                                      <td>9</td>
                                      <td>Underground Broken Wire Detection Robot</td>
                                      <td>CD4069</td>
                                    </tr>
                                    <tr>
                                      <td>10</td>
                                      <td>SOLERO: Solar Powered Exploration Rover</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>11</td>
                                      <td>Metal Detecting Robots For Scanning the Area</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>12</td>
                                      <td>Underground Cable Fault Distance Locator Robot</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>13</td>
                                      <td>Pick-N-Place Robotic Arm</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>14</td>
                                      <td>Pick-N-Place Robotic Arm Wirelessly</td>
                                      <td>RF Module</td>
                                    </tr>
                                    <tr>
                                      <td>15</td>
                                      <td>Line Follower Robot with Obstacle Detection</td>
                                      <td>IR Sensor</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="widget3-one">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                  <th>SR NO</th>
                                    <th>Project Name</th>
                                    <th>IC</th>
                                      </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Line Following Robot</td>
                                      <td>ULN2003</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>DTMF Control Communicating Robot</td>
                                      <td>MT8870</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Mobile Controlled Robot</td>
                                      <td>MT8870</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Hand Gesture Controlled Robot</td>
                                      <td>ADXL335</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Obstacle Avoiding Robot</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>6</td>
                                      <td>Sun Tracking Solar Plate</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>7</td>
                                      <td>Robot Car with Wireless Staring</td>
                                      <td>ADXL335</td>
                                    </tr>
                                    <tr>
                                      <td>8</td>
                                      <td>Robot Car with Staring</td>
                                      <td>ADXL335</td>
                                    </tr>
                                    <tr>
                                      <td>9</td>
                                      <td>Hand Gesture Controlled Wheel Chair</td>
                                      <td>ADXL335</td>
                                    </tr>
                                    <tr>
                                      <td>10</td>
                                      <td>Android Mobile Control Robot</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>11</td>
                                      <td>Android Mobile Control Wheel Chair</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>12</td>
                                      <td>Automatic Public Transport System</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>13</td>
                                      <td>RF Controlled Robot</td>
                                      <td>RF Module</td>
                                    </tr>
                                    <tr>
                                      <td>14</td>
                                      <td>Underground Broken Wire Detection Robot</td>
                                      <td>cd4069</td>
                                    </tr>
                                    <tr>
                                      <td>15</td>
                                      <td>Android Controlled Wheel Chair for Handicapped</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>16</td>
                                      <td>Bluetooth Controlled Robot</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>17</td>
                                      <td>Voice command Controlled Robot</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>18</td>
                                      <td>Voices Controlled Wheel Chair</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>19</td>
                                      <td>Fire Fighting Robot</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>20</td>
                                      <td>Real-Time Remote Transmission of Environmental Properties using Robot System</td>
                                      <td>CC2500</td>
                                    </tr>
                                    <tr>
                                      <td>21</td>
                                      <td>SOLERO: Solar Powered Exploration Rover</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>22</td>
                                      <td>Metal Detecting Robots For Scanning the Area</td>
                                      <td>RF Module</td>
                                    </tr>
                                    <tr>
                                      <td>23</td>
                                      <td>Pick-N-Place Robotic Arm and Movement Controlled by Android Wirelessly</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>24</td>
                                      <td>Pick-N-Place Robotic Arm and Movement Controlled by RF Wirelessly</td>
                                      <td>RF Module</td>
                                    </tr>
                                    <tr>
                                      <td>25</td>
                                      <td>IR Controlled Robot</td>
                                      <td>TSOP1738</td>
                                    </tr>
                                    <tr>
                                      <td>26</td>
                                      <td>Line Follower Robot with Obstacle Detection</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>27</td>
                                      <td>Bluetooth Control Wall Painting Robot</td>
                                      <td>HC05</td>
                                    </tr>
                                    <tr>
                                      <td>28</td>
                                      <td>Dish Position Control By IR Remote</td>
                                      <td>TSOP1738</td>
                                    </tr>
                                    <tr>
                                      <td>29</td>
                                      <td>Head Motion Controlled Power Wheel Chair</td>
                                      <td>Accelerometer</td>
                                    </tr>
                                    <tr>
                                      <td>30</td>
                                      <td>Fully Automated Solar Grass Cutter</td>
                                      <td>L293D</td>
                                    </tr>
                                    <tr>
                                      <td>31</td>
                                      <td>TV Remote Controlled Robotic Vehicle Project</td>
                                      <td>TSOP1738</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="six">
                  <div class="row">
                    <div class="col-md-2"> </div>
                    <div class="col-md-9">
                      <h3 class="text-danger text-center">All this Projects are based on 8051, AVR, Arduino and PIC Microcontrollers</h3>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                          <th>SR NO</th>
                            <th>Project Name</th>
                              </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Bidirectional Visitor Counter</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Celsius Scale Thermometer</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Distance Measurement Using IR</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Advance Parking System</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Voting Machine</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Password Based Door Lock</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Traffic Light Controller</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Ultrasonic Distance Measurement</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>Up Down Counter</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>Water Level Controller</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>Frequency Meter</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>Rpm Meter</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>Density Based Traffic Signal System</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>IR Based Speed Measurement</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Door Handle Touch Alert System</td>
                            </tr>
                            <tr>
                              <td>16</td>
                              <td>Intruder Protection System</td>
                            </tr>
                            <tr>
                              <td>17</td>
                              <td>PIR Based Security System</td>
                            </tr>
                            <tr>
                              <td>18</td>
                              <td>Wireless Intruder Protection System</td>
                            </tr>
                            <tr>
                              <td>19</td>
                              <td>Wireless PIR Based Security System</td>
                            </tr>
                            <tr>
                              <td>20</td>
                              <td>Automatic Room Light Control</td>
                            </tr>
                            <tr>
                              <td>21</td>
                              <td>Miss Call Operated Switch</td>
                            </tr>
                            <tr>
                              <td>22</td>
                              <td>Automatic Switching of Home Light</td>
                            </tr>
                            <tr>
                              <td>23</td>
                              <td>RTC based Calendar</td>
                            </tr>
                            <tr>
                              <td>24</td>
                              <td>Electronics Counter</td>
                            </tr>
                            <tr>
                              <td>25</td>
                              <td>Sound Level Meter</td>
                            </tr>
                            <tr>
                              <td>26</td>
                              <td>Water Level Indicator</td>
                            </tr>
                            <tr>
                              <td>27</td>
                              <td>Wireless Water Level Indicator</td>
                            </tr>
                            <tr>
                              <td>28</td>
                              <td>Volt Meter</td>
                            </tr>
                            <tr>
                              <td>29</td>
                              <td>Room Temperature Meter</td>
                            </tr>
                            <tr>
                              <td>30</td>
                              <td>Light Intensity Level Meter</td>
                            </tr>
                            <tr>
                              <td>31</td>
                              <td>Mobile Incoming Call Indicator</td>
                            </tr>
                            <tr>
                              <td>32</td>
                              <td>Environment Monitoring System</td>
                            </tr>
                            <tr>
                              <td>33</td>
                              <td>Soil Moisture Indicator</td>
                            </tr>
                            <tr>
                              <td>34</td>
                              <td>Resistor Calculator</td>
                            </tr>
                            <tr>
                              <td>35</td>
                              <td>Automatic Water Distribution System</td>
                            </tr>
                            <tr>
                              <td>36</td>
                              <td>Bluetooth Control Home Appliance</td>
                            </tr>
                            <tr>
                              <td>37</td>
                              <td>Smart Card Based Security System Using EEPROM</td>
                            </tr>
                            <tr>
                              <td>38</td>
                              <td>Smart Card for Toll Gate</td>
                            </tr>
                            <tr>
                              <td>39</td>
                              <td>Talking Thermometer</td>
                            </tr>
                            <tr>
                              <td>40</td>
                              <td>Appliances Control Through SMS</td>
                            </tr>
                            <tr>
                              <td>41</td>
                              <td>Electronic Ticket</td>
                            </tr>
                            <tr>
                              <td>42</td>
                              <td>PC Control Home Appliance</td>
                            </tr>
                            <tr>
                              <td>43</td>
                              <td>Attendance Calling System</td>
                            </tr>
                            <tr>
                              <td>44</td>
                              <td>DC Motor Speed Control</td>
                            </tr>
                            <tr>
                              <td>45</td>
                              <td>Wireless DC Motor Speed Control</td>
                            </tr>
                            <tr>
                              <td>46</td>
                              <td>Heart Beat Monitoring</td>
                            </tr>
                            <tr>
                              <td>47</td>
                              <td>Water ATM</td>
                            </tr>
                            <tr>
                              <td>48</td>
                              <td>Hand Gesture to Speech</td>
                            </tr>
                            <tr>
                              <td>49</td>
                              <td>Advance Stock Management</td>
                            </tr>
                            <tr>
                              <td>50</td>
                              <td>Advance Security system Using RFID &amp; keypad</td>
                            </tr>
                            <tr>
                              <td>51</td>
                              <td>Scrolling Display</td>
                            </tr>
                            <tr>
                              <td>52</td>
                              <td>Smart Card System</td>
                            </tr>
                            <tr>
                              <td>53</td>
                              <td>IR Remote Token System</td>
                            </tr>
                            <tr>
                              <td>54</td>
                              <td>Smart Key based Door Lock</td>
                            </tr>
                            <tr>
                              <td>55</td>
                              <td>3D Notice Board Using LED Cube</td>
                            </tr>
                            <tr>
                              <td>56</td>
                              <td>Accident Detection And Avoidance System Using Doppler Radar</td>
                            </tr>
                            <tr>
                              <td>57</td>
                              <td>Frequency Counter Using Smartphone</td>
                            </tr>
                            <tr>
                              <td>58</td>
                              <td>PC Based Wireless Appliance Control</td>
                            </tr>
                            <tr>
                              <td>59</td>
                              <td>Pocket CRO Using Android</td>
                            </tr>
                            <tr>
                              <td>60</td>
                              <td>RFID Based Door Access Control</td>
                            </tr>
                            <tr>
                              <td>61</td>
                              <td>Short Ranges Ultrasonic Radar With Distance Measuring Capabilities</td>
                            </tr>
                            <tr>
                              <td>62</td>
                              <td>Solar Mobile Phone Charger Circuit</td>
                            </tr>
                            <tr>
                              <td>63</td>
                              <td>Staircase Light That Turns ON And OFF Automatically When Required</td>
                            </tr>
                            <tr>
                              <td>64</td>
                              <td>Timed Switches With User Defined ON And OFF Intervals</td>
                            </tr>
                            <tr>
                              <td>65</td>
                              <td>Home Security System Based On Wireless Sensor Network And GSM</td>
                            </tr>
                            <tr>
                              <td>66</td>
                              <td>GSM Based ECG Tele Alert System</td>
                            </tr>
                            <tr>
                              <td>67</td>
                              <td>Embedded System And RFID Solution For Transport Related Issues</td>
                            </tr>
                            <tr>
                              <td>68</td>
                              <td>Joint-Angle Measurement Using Accelerometers</td>
                            </tr>
                            <tr>
                              <td>69</td>
                              <td>Wireless Measurement And Control System For Environmental Parameters In Greenhouse</td>
                            </tr>
                            <tr>
                              <td>70</td>
                              <td>Smart Zig-bee Based Wireless Sensor Meter System</td>
                            </tr>
                            <tr>
                              <td>71</td>
                              <td>Zig-bee Based Home Automation System</td>
                            </tr>
                            <tr>
                              <td>72</td>
                              <td>Microcontroller Controlled ECG Simulator</td>
                            </tr>
                            <tr>
                              <td>73</td>
                              <td>Zig-bee Based Intelligent Helmet For Coal Miners</td>
                            </tr>
                            <tr>
                              <td>74</td>
                              <td>Tour Guide Using RFIDs</td>
                            </tr>
                            <tr>
                              <td>75</td>
                              <td>Bus Detection Device For The Blind Using RFID</td>
                            </tr>
                            <tr>
                              <td>76</td>
                              <td>Boarding School Students Monitoring Systems (E-Id) Using RFID</td>
                            </tr>
                            <tr>
                              <td>77</td>
                              <td>Human Recognition Using RFID Technology</td>
                            </tr>
                            <tr>
                              <td>78</td>
                              <td>SMS Based Wireless Home Appliance Control System</td>
                            </tr>
                            <tr>
                              <td>79</td>
                              <td>RFID Tag Bearing Estimation For Mobile Robot Localization</td>
                            </tr>
                            <tr>
                              <td>80</td>
                              <td>GPS-GSM Based Object Tracking System</td>
                            </tr>
                            <tr>
                              <td>81</td>
                              <td>Automatic Control Of Students Attendance In Classrooms Using RFID</td>
                            </tr>
                            <tr>
                              <td>82</td>
                              <td>Password Based Circuit Beaker</td>
                            </tr>
                            <tr>
                              <td>83</td>
                              <td>Solar Powered Auto-Irrigation System</td>
                            </tr>
                            <tr>
                              <td>84</td>
                              <td>Function Generator with Frequency Counter</td>
                            </tr>
                            <tr>
                              <td>85</td>
                              <td>Vehicle Tracking by GPS-GSM</td>
                            </tr>
                            <tr>
                              <td>86</td>
                              <td>Forest Fire Monitoring System Based on GSM or Zig-bee</td>
                            </tr>
                            <tr>
                              <td>87</td>
                              <td>Temperature Controlled Fan</td>
                            </tr>
                            <tr>
                              <td>88</td>
                              <td>Token Number display with Voice</td>
                            </tr>
                            <tr>
                              <td>89</td>
                              <td>Heart Rate Monitor</td>
                            </tr>
                            <tr>
                              <td>90</td>
                              <td><strong>Pollution Meter</strong></td>
                            </tr>
                            <tr>
                              <td>91</td>
                              <td>Sleep Sensing and Alerting System for Drivers</td>
                            </tr>
                            <tr>
                              <td>92</td>
                              <td>Fingerprint Based Identity Authentication for Online Examination System</td>
                            </tr>
                            <tr>
                              <td>93</td>
                              <td>Wireless Fingerprint Attendance System based on Zigbee Technology</td>
                            </tr>
                            <tr>
                              <td>94</td>
                              <td><strong>Fridge Food Management System</strong></td>
                            </tr>
                            <tr>
                              <td>95</td>
                              <td>User Time Define Industrial Motor Control</td>
                            </tr>
                            <tr>
                              <td>96</td>
                              <td>Fingerprint Based Biometric ATM Authentication System</td>
                            </tr>
                            <tr>
                              <td>97</td>
                              <td><strong>Fingerprint Based Ignition System</strong></td>
                            </tr>
                            <tr>
                              <td>98</td>
                              <td>Soldier Health &amp; Position Tracking System</td>
                            </tr>
                            <tr>
                              <td>99</td>
                              <td>Alcohol Sensing Alert with Engine Locking Project</td>
                            </tr>
                            <tr>
                              <td>100</td>
                              <td>Android Antenna Positioning System</td>
                            </tr>
                            <tr>
                              <td>101</td>
                              <td>DC Motor Speed Control By Android</td>
                            </tr>
                            <tr>
                              <td>102</td>
                              <td>Home Automation Using Android</td>
                            </tr>
                            <tr>
                              <td>103</td>
                              <td>Automated Visitor Counter With 7 Segment Display</td>
                            </tr>
                            <tr>
                              <td>104</td>
                              <td><strong>Voice Based Notice Board Using Android</strong></td>
                            </tr>
                            <tr>
                              <td>105</td>
                              <td><strong>Dam Operation Based On Water Level</strong></td>
                            </tr>
                            <tr>
                              <td>106</td>
                              <td>RF Based Secure Door Opener System</td>
                            </tr>
                            <tr>
                              <td>107</td>
                              <td>Billing System Based On RFID</td>
                            </tr>
                            <tr>
                              <td>108</td>
                              <td>Fire Plus Hazardous Gas Detection And Instant SMS Alerting System</td>
                            </tr>
                            <tr>
                              <td>109</td>
                              <td>GSM Based Door Un-locker system</td>
                            </tr>
                            <tr>
                              <td>110</td>
                              <td>Prepaid Electricity Billing Meter</td>
                            </tr>
                            <tr>
                              <td>111</td>
                              <td>Solar Street Lights With Auto Intensity Controller</td>
                            </tr>
                            <tr>
                              <td>112</td>
                              <td>Android Password Based Remote Door Opener System Project</td>
                            </tr>
                            <tr>
                              <td>113</td>
                              <td>Circuit Breaker Based On Password</td>
                            </tr>
                            <tr>
                              <td>114</td>
                              <td>Monthly Electricity Billing Display With Bill SMS Feature</td>
                            </tr>
                            <tr>
                              <td>115</td>
                              <td><strong>Displaying Moving Message On Notice Board Using PC</strong></td>
                            </tr>
                            <tr>
                              <td>116</td>
                              <td><strong>Solar UPS Project</strong></td>
                            </tr>
                            <tr>
                              <td>117</td>
                              <td>GPS Vehicle Tracking &amp; Theft Detection</td>
                            </tr>
                            <tr>
                              <td>118</td>
                              <td>Automatic College Bell</td>
                            </tr>
                            <tr>
                              <td>119</td>
                              <td><strong>Mini CNC Plotter</strong></td>
                            </tr>
                            <tr>
                              <td>120</td>
                              <td><strong>Advance Traffic Light System With Gate Control Automation</strong></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="seven">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <table class="table table-bordered">
                        <thead>
                        <th>SR NO</th>
                          <th>Project Name</th>
                            </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Gesture Control Robot Using Image Processing With MATLAB</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Speech Recognition Based Access Control Using MATLAB</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Motion Detection in MATLAB</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Color Detection in Images using MATLAB</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Color Detection Using Webcam in MATLAB</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--// Main Section \\--> 
    
  </div>
  <!--// Main Content \\--> 
  
  <!--// Footer \\-->
  <?php include("footer.php"); ?>