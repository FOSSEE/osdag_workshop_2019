<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/bootstrap.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/main.css" rel="stylesheet">
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/style.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/plugins/timeline.css" rel="stylesheet">
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/fudge.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/sb-admin-2.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- jQuery Version 1.11.0 -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/jquery.min.js"></script>
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/jquery-1.11.0.js"></script>
   <script type="text/javascript" src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/feedback-bar.js"></script> 
       <link rel="stylesheet" type="text/css" href="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/css/feedback_popup.css" /> 

    <!-- Bootstrap Core JavaScript -->

   <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/bootstrap.min.js"></script>
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/smoothscroll.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/plugins/metisMenu/metisMenu.min.js"></script> 
    <!-- Custom Theme JavaScript -->
    <script src="<?php print $GLOBALS['base_url']; ?>/sites/all/themes/touch/js/sb-admin-2.js"></script>
    

    <script type="text/javascript" src="https://addthisevent.com/libs/1.5.8/ate.min.js"></script>
    <script type="text/jQuery">
        $("#owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
        });      
    </script>   

</head>

<body>
        <!-- <div id="wrapper">
		  <div id="cookie_box" style="float:left">
             <div class="popup_box">
                <div class="header">Important Message
                        <div class="closee_btn">&nbsp;
                        </div>
                         <span class="min_max min_btn">&nbsp;</span>
                </div>
                <div class="toggle_box">
                    <div class="message_box">
                       1 Day left for Registration  !!!
                    </div>
                </div>
            </div>
         </div>-->
        <!-- Navigation -->
        <nav  role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
             <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="overflow:auto;height:80%;margin-top: 0px ">
                <div class="sidebar-nav navbar-collapse">
                       <ul class="nav" id="side-menu" >
                        <li class="sidebar-search">
                            <div>
                           <a href="http://osdag.fossee.in/" target="_blank"> <center><img src="sites/all/themes/touch/images/Osdag_logo.png" > </a></center>
                            </div>
                        </li>
                        <li>
                            <a class="active" href="#page-wrapper"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="#about"><i class="fa  fa-user"></i> About</a>
                        </li>
                        <li>
                            <a href="#register"><i class="fa fa-book"></i> Register</a>
                        </li>
                        <li>
                            <a href="#schedule"><i class="fa fa-calendar"></i> Schedule</a>
                        </li> 
			     <li>
                            <a href="#photos"><i class="fa fa-picture-o"></i> Gallery</a>
                        </li>

                        <li>
                            <a href="#explore"><i class="fa fa-location-arrow"></i> Venue</a>
                        </li>
                        <li>
                            <a href="#organizer"><i class="fa fa-cubes"></i> Organizer</a>
                        </li>
                        <li>
                            <a href="#sponsors"><i class="fa fa-puzzle-piece"></i> Sponsors</a>
                        </li>
			<li>
                            <a href="http://fossee.in/workshop/osdag2016/sites/all/themes/touch/data/Final_poster_2016.pdf" target="_blank"><i class="fa fa-film"></i> Poster</a>
                        </li>

                        <li>
                            <a href="#contact"><i class="fa fa-envelope"></i> Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div id="main-top">
                                
                </br>
                </br>
                 </br>
                </br>
                 </br>
                </br>
<br/></br/>
                       </div>
            </div>
                  

</br>

            <div class="row" style="background-color:#f8f8f8" >
                <br/><br/>
                <center>
                    <a href="#register" class="btn btn-primary btn-lg">Register Now</a>
</center>
 <br/><br/>
                <div class="col-lg-3 col-md-6">
                    <div>
                        <div class="panel-heading">
                            <div class="row">                             
                            </div>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">When</div></br>
                                    <div style="font-size:17px">4 - 5 June 2016</div>
                                </div>
                            </div>
                        </div>                       
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <a href="#explore">
                                <div class="col-xs-3">
                                    <i class="fa fa-map-marker fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">Where</div></br>
                                    <div style="font-size:17px">IIT Bombay</div>
                                </div>
                                 </a>
                            </div>
                        </div>
                       
                    </div>
                     <br/>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div >
                        <div class="panel-heading">
                            <div class="row">                              
                            </div>
                        </div>                        
                    </div>
                </div>

            </div>
           
            <!-- /.row -->
           <section id="about" class="main-bkg-color">                       
                            <header>
                                <h2 style="color: #fff">About</h2>
                            </header>          
                            <section class="text-content">                          
                                 <p>The FOSSEE project based at IIT Bombay invites professors/professionals of your institution/organization, who engage in the (teaching of) design of steel structures, to the Osdag Pre-Launch Workshop on June 04-05, 2016.

</p>           
<p><a href="http://osdag.fossee.in/">Osdag</a> is a GUI-based cross-platform free and open-source software for the design (and detailing) of steel structures, following the Indian Standard IS 800:2007. Osdag is currently under development. An alpha verion of Osdag containing a few connection design modules is expected to be released in September 2016.
  </p>
  <p>The primary objective of this “pre-launch” workshop is to expose domain experts and prospective Osdag users to the current version of this software, and to obtain their feedback. This feedback will enable the developers to come out with a more user-friendly and useful version of Osdag at its projected launch.
</p>
<p>In addition to hands-on trials of Osdag by the participants, the workshop will feature talks from the experts who are members of the BIS code committees pertaining to IS 800.
</p>
                          </section>          
            </section> 

                    
    <section id="register" >           
        <header>
            <h2 style="color: #7f9233">Registration</h2>
        </header>
        <br/><br/>
        <section>
	 <div class="row" style="background-color:#f8f8f8" ><br>
<center>              <b style="color:#74862f" >This event is only for faculty and people from industry. Student registrations will not be accepted.</b></center> 
 <br/><br/>
              
                <div class="col-lg-6 col-md-3">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                               
                                <div class="col-xs-10">
                                <center>
             <h3> Registration</h3>
            <h2 class="price">500 INR</h2>
           <p style="text-align: justify;"><ol><li>Lunch and Tea will be provided at the venue.</li>
<li>Does not include accommodation, dinner, Internet or any other facilities.</li>
<li>All participants will be required to present their ID cards at the venue.</li>
<li>This ticket is NOT refundable.</li></ol></p>
           <a href="http://osdagworkshop.doattend.com/" target="_blank" class="btn btn-primary btn-md">Register Now</a>
            </center>
                                </div>
                            </div>
                        </div>                       
                    </div>

                </div>
               <div class="col-lg-6 col-md-3">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                               
                                <div class="col-xs-10">
                                <center>
          <h3>Accommodation (Add-On) </h3>
         <h2 class="price">500 INR</h2>
           <p style="text-align: justify;"><ol>
           
          <li> Accommodation is provided on a shared basis (twin sharing) in IIT-B campus itself.</li>
<li>Accommodation will be provided for 2 days, i.e, 4-5, 5-6 June 2016.</li>
<li>Accommodation does not include other amenities like dinner, etc.</li>
<li>Extension of period of stay is not available.</li>
<li>This is not included in registrations, has to be paid separately and is NOT refundable.</li>
</ol> </p>
           <a href="http://osdagworkshop.doattend.com/" target="_blank" class="btn btn-primary btn-md">Register Now</a>
            </center>
                                </div>


                            </div>
                        </div>  

                    </div>

                </div>
        <b style="color:red">Note:</b> Add-ons can be purchased during the time of registration. However, if you have already booked your tickets and want to buy an add-on, please  <a href="http://osdagworkshop.doattend.com/" target="_blank" class="btn btn-primary btn-md">Click Here</a>         

            </div>
        </section>                
    </section>	    
<section id="schedule" class="main-bkg-color">
                      <header>
  <h2 style="color: #fff">Schedule</h2>
</header>
<div class="container"> 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#day1">Day 1</a></li>
    <li><a data-toggle="tab" href="#day2">Day 2</a></li>
   <li><a  href="http://fossee.in/workshop/osdag2016/data/OsdagInstructionsheet.pdf" target="_blank" >General Instructions</a></li>
  </ul>
  <div class="tab-content">
    <div id="day1" class="tab-pane fade in active">
    <div class="container">
      <div class="col-lg-11">
        <p><h4 style="color: white"><center>DAY 1 - Saturday, 4 June 2016</center></h4></p>
        <div class="table-responsive">          
          <table class="table">  
            <tbody>
              <tr>
                 <td>09:00 AM - 10:00 AM</td>
                 <td><b>Registration</b></td>
                 <td></td>
              </tr>
              <tr>
                  <td>10:00 AM - 11:00 AM</td>
                  <td>Introduction</td>
                  <td> Prof. Siddhartha Ghosh, IIT Bombay</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Opening remarks </td>
                  <td>Prof. K.V. Krishna Rao, IIT Bombay</br>
                    Prof. S.R. Satish Kumar, IIT Madras</br>
                    Manas M. Ghosh, INSDAG Kolkata
                  </td>
              </tr>
              <tr>
                  <td > 11:00 AM- 13:00 PM</td>
                  <td>Introduction to Osdag</td>
                  <td>  Osdag team</td>
              </tr>
              <tr>
                  <td></td>
                  <td> Purpose of the workshop</td>
                  <td >  Osdag team</td>
              </tr>
              <tr>
                  <td></td>
                  <td>Demonstration of video tutorials</td>
                  <td ></td>
              </tr>
              <tr>
                  <td>13:00 PM - 14:30 PM</td>
                  <td><b>Lunch</b></td>
                  <td></td>
              </tr>
              <tr>
                  <td>14:30 PM - 16:00 PM</td>
                  <td> Problem solving using Osdag -- I </td>
                  <td> </td>
              </tr>
              <tr>
                  <td>16:00 PM - 16:30 PM</td>
                  <td><b>Tea Break</b></td>
                  <td></td>
              </tr>
              <tr>
                  <td>16:30 PM - 18:00 PM</td>
                  <td>Discussion </td>
                  <td> </td>
              </tr>
            </tbody>
          </table>
        </div> <!-- responsive -->
    </div> <!-- col-11 -->
    </div> <!-- container -->
    </div> <!-- tab -->
   
    <div id="day2" class="tab-pane fade">
    <div class="container">
      <div class="col-lg-11">
        <p><h4 style="color: white"><center>DAY 2 - Sunday, 5 June 2016</center></h4></p>
        <div class="table-responsive">          
          <table class="table">  
            <tbody>
              <tr>
                  <td>10:00 AM - 11:00 AM</td>
                  <td>Problem solving using Osdag -- II</td>
                  <td></td>
              </tr>                              
              <tr>
                  <td> 11:30 AM - 12:30 PM </td>
                  <td>Feedback session</td>
                  <td > </td>
              </tr>                               
              <tr >
                  <td>12:30 PM- 14:00 PM</td>
                  <td><b>Lunch</b></td>
                  <td></td>
              </tr>
              <tr >
                  <td>14:00 PM - 14:45 PM</td>
                  <td>  Future plans for Osdag </td>
                  <td> Prof. Siddhartha Ghosh, IIT Bombay</td>         
              </tr>
              <tr>
                  <td></td>
                  <td>Experts’ opinions</td>
                  <td>Manas M. Ghosh, INSDAG Kolkata</br>
              Prof. S.R. Satish Kumar, IIT Madras</td>
              </tr>
              <tr>
                  <td> 14:45 PM- 15:30 PM  </td>
                  <td>Talk on FOSSEE</td>
                  <td>  Prof. Shivasubramanian Gopalakrishnan, IIT Bombay</td>
              </tr>
              <tr>
                  <td>16:00 PM - 16:30 PM</td>
                  <td><b>Tea Break</b></td>
                  <td></td>
              </tr>
            </tbody>
          </table>
        </div> <!-- responsive -->
    </div> <!-- col-11 -->
      </div> <!-- container -->
    </div> <!-- tab -->
    </div>
    </div>  

</section> 
<section>
 	<div id="photos" name="photos">
  <div class="container">
    <div class="row centered">
<div class="col-lg-9 col-lg-offset-2">

      <h2 class="centered">Image Gallery</h2>
      <hr>
	<iframe src="https://www.flickr.com/photos/138717104@N02/sets/72157667299795933/player/"  width="100%" height="450" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>     
    </div>
</div>
  </div>
  <!-- row -->
</div>
 </section>
                    <section id="explore" >
                        <div class="container" >

                        <h2>Venue</h2>
                         </br>
                         <article >

<h3 style="text-align:center"> Computational Lab, Ground Floor, Department of Civil Engineering, IIT Bombay.
</h3>
<p style="text-align:center">
<em > Links: </em>
<a href="http://www.iitb.ac.in" target="_blank"><span class="label label-primary ">IITB Website</span></a>&nbsp;&nbsp;&nbsp;
<a href="<?php print drupal_get_path('theme', 'touch')?>/data/iitb_map.pdf" target="_blank"><span class="label label-success">IITB Map</span></a>
</p>
<hr/>
                            <div>
                            <h3 style="font-size:18px;float:left;text-align:justify;font-weight:bold">A quick guide: </h3><br/><br/><br/>
<ul style="font-size:16px;float:center;text-align:justify;">
<li>Powai is an eastern suburb in North-Eastern part of Mumbai. </li>
<li>Directions</li>
</ul>
</div>
<br/>
                        <div id="venue">
                        <div id='cssmenu'>
                        <ul>
                           <li class='active'><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.397170940355!2d72.91566989199781!3d19.132171504466672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f677ec1407%3A0xfecc22d152030022!2sDept+of+Civil+Engineering%2C+Academic+Section%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra+400076%2C+India!5e0!3m2!1sen!2s!4v1462266621218#frc" target="map" id="airport">Event Venue </a></li>
                            <li><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d60317.08385719556!2d72.84749036445493!3d19.115649971789658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7c85099bd2947%3A0x1ecc1a60c474a8ae!2sChhatrapati+Shivaji+International+Airport%2C+Mumbai%2C+Maharashtra+400099!3m2!1d19.090177!2d72.86873899999999!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785408044#frc" target="map" id="airport">From Airport</a></li>
                           <li><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d241399.4487405205!2d73.01275866424207!3d19.025608463914345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7cedcbfb4871d%3A0x2326e3e6409936d9!2sDadar%2C+Dadar+West%2C+Dadar%2C+Mumbai%2C+Maharashtra+400028!3m2!1d19.016339!2d72.840289!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785236748#frc" target="map" id="dadar">From Dadar Station</a></li>
                           <li><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d60299.156950328965!2d72.91689031522807!3d19.164722586394745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7b8df51719ccf%3A0x3b3afba7961341f8!2sThane+Junction%2C+Station+Rd%2C+Shivaji+Nagar%2C+Thane+West%2C+Thane%2C+Maharashtra+400601!3m2!1d19.186065!2d72.97595199999999!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785553786#frc" target="map" id="thane">From Thane Station</a></li>
                           <li><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d60323.470700406935!2d72.84118451437205!3d19.0981374832322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7c919c72bb2b7%3A0x751375af3cbd1a7d!2sBandra+Terminus%2C+Naupada%2C+Bandra+East%2C+Mumbai%2C+Maharashtra+400051!3m2!1d19.062369999999998!2d72.84102399999999!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785651936#frc" target="map" id="bandra">From Bandra Terminus</a></li>
                           <li><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d60323.92457625284!2d72.87668816436619!3d19.09689238404547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7c89be8e89fdb%3A0x66694e36862ff3a1!2sLokmanya+Tilak+Terminus%2C+Pipeline+Rd%2C+Kurla+West%2C+Mumbai%2C+Maharashtra+400089!3m2!1d19.069699!2d72.89160799999999!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785819499#frc" target="map" id="tilak">From Lokmanya Tilak Terminus</a></li>
                           <li> <a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d120686.36851963839!2d72.80471859141556!3d19.043985857528995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7ce6e85a4d6c1%3A0x100690de66141545!2sMumbai+Central%2C+Arya+Nagar%2C+Tulsiwadi%2C+Mumbai%2C+Maharashtra!3m2!1d18.970715!2d72.81942099999999!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785921908#frc" target="map" id="central">From Mumbai Central</a></li>
                           <li class='last'><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d120693.24362908115!2d72.81121499123424!3d19.034527972952493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7d1d8c547f833%3A0x766844a933a779b1!2sCST%2C+Dadabhai+Naoroji+Rd%2C+Dhobi+Talao%2C+Chhatrapati+Shivaji+Terminus+Area%2C+Fort%2C+Mumbai%2C+Maharashtra+400001!3m2!1d18.940970999999998!2d72.834654!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!5e0!3m2!1sen!2sin!4v1413785988064#frc" target="map" id="shivaji">From Chhatrapati Shivaji Terminus</a></li>
                           <li class='last'><a href="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d7538.997595867773!2d72.91382817938636!3d19.12963136516508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x3be7c7f2279eca5d%3A0x802e14519ecbcb59!2sIIT+Main+Gate%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra!3m2!1d19.125273999999997!2d72.916602!4m5!1s0x3be7c7f420dd7941%3A0x34f8dc9cc70dea5!2sLecture+Hall+Complex%2C+Infinite+Corridor%2C+Academic+Section%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra+400076!3m2!1d19.1307656!2d72.9166668!5e0!3m2!1sen!2sin!4v1414573143073#frc" target="map" id="lch">From IIT Main Gate</a></li>
                      
                        </ul>
                        </div>

                  

                            
                        </div>
                        <div class="content">
                           <iframe  width="550" height="450" frameborder="0" style="border:0;margin-left:307px;margin-top:-25px;" name="map" id="frc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.397170940355!2d72.91566989199781!3d19.132171504466672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7f677ec1407%3A0xfecc22d152030022!2sDept+of+Civil+Engineering%2C+Academic+Section%2C+IIT+Area%2C+Powai%2C+Mumbai%2C+Maharashtra+400076%2C+India!5e0!3m2!1sen!2s!4v1462266621218" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                    
                            </article>
                        </div>
                    </section>
                     <section id="organizer" class="main-bkg-color">                       
     <header>
         <h2 style="color: #fff">Organizer</h2>
                            </header>          
                            <section class="text-content">                                    
                                <p>
                                <div style="text-align: center">
				  
                                <a href='http://fossee.in/' target="_blank"  ><img class="img" src="<?php print drupal_get_path('theme', 'touch')?>/images/fossee.png" style="background-color: #fff" height="60px" width="150px" align="middle"  /></a>
                                </div>
                                 <br/>
                                Osdag pre-launch workshop 2016 is organized by <a href="http://fossee.in" target="_blank" style="color:#0625AB">FOSSEE</a>.
                                This project is part of the National 
                                Mission on Education through ICT with the thrust area being "Adaptation and deployment of open source simulation 
                                packages equivalent to proprietary software", funded by MHRD, based at  <a href="http://www.iitb.ac.in" target="_blank" style="color:#0625AB">
                                Indian Institute of Technology Bombay</a>.</p>
                           </section>                                                        
            </section> 
   

    <section id="sponsors" >                      
     <header>
         <h2>Sponsors</h2>
                            </header>          
                            <section class="text-content">                                    
                                <p>
                                <div style="text-align: center">
                <a href='http://nmeict.ac.in/' target="_blank" ><img width="170" height="70" src="<?php print drupal_get_path('theme', 'touch')?>/images/NMEICT.png" alt=""  /></a>
            </div>
            </br>  </br>
            <div class="div-content-black">                       
                The FOSSEE project undertaken by IIT Bombay is funded 
                by <a href="http://mhrd.gov.in"  target="_blank" >Ministry of Human Resource Development</a>, Govt. of India, under National Mission on Education through ICT. 
                The aim of Human Resource Development is education and skill development, which plays a significant 
                role in our country.  </p>                                                   
               </section>  
    </section>

           
              
                <!-- Contact -->
		<section id="contact" class="main-bkg-color">                   
                            <header>
                                <h2>Questions or Comments?</h2>
                            </header>          
                            <section >                          
                                <br/>
		       <p style="text-align:center">For queries mail us at : </strong><a href="mailto:contact-osdag@fossee.in" target="_blank" style="color:#0625AB"><b>contact-osdag(at)fossee(dot)in</b> </a></p>
                        <br/><br/>
                           </section>          
            </section> 
                                  
                <div id="footer">
                <a href='http://fossee.in/' target="_blank" ><img class="img" src="<?php print drupal_get_path('theme', 'touch')?>/images/fossee.png"  class="icons" height="60px" width="150px" /></a>
                    
                <!-- Copyright -->
                    <ul class="copyright">
                        
                        <li>2016</li><li>Developed by <a href="http://fossee.in">FOSSEE</a></li>
                    
                    </ul>
            <div style="margin-top:-80px;margin-left:780px">
                <a href='http://www.iitb.ac.in/' target="_blank" ><img class="img" src="<?php print drupal_get_path('theme', 'touch')?>/images/iitb_logo.png"  class="icons" width="60px"/></a>
                <h6>IIT Bombay</h6>
            </div>
            </div>
            </div>

   
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://analytics.spoken-tutorial.org/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 16]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://analytics.spoken-tutorial.org/piwik.php?idsite=16" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77364815-1', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>
