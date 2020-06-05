<?php
include("contact.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
	    <meta name="description " content = "IEEE Dayananda Sagar University, Student branch">
	    <meta name = "keywords" content="IEEE Society,Dayananda Sagar University, DSU, Kudlu Gate, Bangalore,IEEE, Student Chapter,IEEE Student Chapter">
		<title>IEEE DSU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
    <link rel="stylesheet" href="style2/css/navbar-style.css">

    <link rel="stylesheet" href="style2/css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="style2/css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="style2/css/font-awesome.min.css">
		<!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="style2/css/main-home.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 
		<style>
			.navbar-default {
			background-color: transparent;
			border-color: transparent;
		}
		
		.navbar-default .navbar-collapse, .navbar-default .navbar-form {
			border-color: transparent;
		}
		
		.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
			/* color: #ffffff; */
			font-weight: bolder;
			border-bottom: white;
			background-color: transparent;
		}

		.navbar-header
		{
			height: auto;
        }
        
        .join-btn
        {
            padding: 18px;
            /* background-color:  rgb(3, 26, 37); */
            background-color:  rgb(8, 69, 97);
            color: white;
            font-weight: bold;
            border: none;
            transition: 0.3s ease;
        }

        .join-btn:hover
        {
            background-color:  rgb(25, 100, 134);
        }

        #banner h1
        {
            font-weight: 400;
            color: rgba(255, 255, 255, 0.651);
        }

		@media (min-width: 1405px) {
            .container{
                width: 1300px;
            }
        }
        
        .hr-main /*Gradient*/
        { 
            border : 0;
            height: 1px; 
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0)); 
        }  

        /*Double line*/
        /* .hr-main  
        {
            border: 0;
            border-top: 3px double #8c8c8c;
        } */

        .link-4
        {
            transition: 0.3s ease;
            text-decoration: none;
            transition: all .3s;
            color: #111;
        }

        .link-4:hover
        {
        text-decoration: none;
        font-weight: 640;
        color: #000;
        }

        .items1
        {
            font-size: large;
        }

        .image
{
  display: block;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-80%, -80%);
  text-align: center;
  width: 80%;
  /*width: 300px;*/
  height: auto;
}


.article-register:hover .image {
  opacity: 0.3;
}

.article-register:hover .middle {
  opacity: 1;
}

.text {
  background-color: #006669;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  text-decoration: none;
  transition: ease 1s;
}

.text a
{
  color: white;
  text-decoration: none;
  padding-left: 0px; 
  transition: ease 1s;
}

.link-5 {
  transition: 0.3s ease;
  background: #006669;
  color: #fff;
  text-decoration: none;
  padding-top: 10px;
  margin: 0 20px;
  transition: all 1s;
  /* transition: ease 3s; */
}
.text :hover {
  text-decoration: none;
  /* padding: 6px 0;  */
  padding-left: 40px;
  transition: all 1s; 
  color: white; 
  background: #006669;
  /* padding-left: 80px; */
}

.nav-link
{
  font-size: medium;
  /* font-weight: 500; */
  /* margin-left: 10px;
  margin-right: 10px; */
  color: black;
}

.active-menu a
{
  
  font-weight: 600;
  border-bottom: 1px solid black;
}

footer {
  background-image: linear-gradient(127deg, #194597 0%, #ded8f2 91%);
  padding-top: 30px;
}

footer .social {
  overflow: hidden;
  margin-top: 10px;
  text-align: center;
}

footer .social li {
  margin: 0px 10px;
  display: inline-block;
}

footer .social li a {
  color: #201079;
   text-align: center;
  background-color: #fff;
  width: 38px;
  height: 38px;
  line-height: 36px;
  border-radius: 50%;
  display: inline-block;
  font-size: 16px;
  -webkit-transition: all 0.2s ease 0s;
  -moz-transition: all 0.2s ease 0s;
  -o-transition: all 0.2s ease 0s;
  transition: all 0.2s ease 0s;
}

footer .social li a:hover {
  background-color: #0b2831;
  color: #fff;
}

footer .copyright {
  text-align: center;
  border-top: 1px solid rgba(250,250,250,0.2);
  margin-top: 20px;
  padding-top: 30px;
  padding-bottom: 40px;
  font-weight: 400;
  font-size: 12px;
  color: #fff;
  letter-spacing: 0.88px;
  text-transform: uppercase;
}

.home-h2 {
  font-size: 2.0rem;
  line-height: 1.3; }

@media (max-width: 991px) {
  footer .text {
    margin-bottom: 30px;
  }
  footer h5 {
    margin-bottom: 15px;
  }
  footer .footer-nav {
    margin-bottom: 30px;
  }
  .home-h2 {
    font-size: 1.5rem;
    line-height: 1.6; }
}


#contact-us {
  padding: 50px 0px;
  background-color: rgba(201, 197, 255, 0.432);
}

#contact-us h5 {
  font-weight: 500;
  font-size: 18px;
  color: #1e1e1e;
  letter-spacing: 0.25px;
  line-height: 26px;
}

.contact-text {
  font-weight: 400;
  font-size: 14px;
  color: #6F8BA4;
  letter-spacing: 0.6px;
  line-height: 26px;
}

.contact-text p {
  margin-bottom: 28px;
}

.contact-form input,
.contact-form textarea {
  color: #777;
  font-size: 14px;
  border: 1px solid #eee;
  width: 100%;
  height: 50px;
  outline: none;
  padding-left: 20px;
  padding-right: 20px;
  border-radius: 25px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin-bottom: 30px;
}

.contact-form textarea {
  height: 150px;
  resize: none;
  padding: 20px;
}

.send-btn
{
 
  outline: none;
  border: none;
  cursor: pointer;
  font-size: 13px;
  border-radius: 20px;
  padding: 12px 20px;
  background-color: #bdb0e7;
  text-transform: uppercase;
  color: #fff;
  letter-spacing: 0.25px;
  transition: all 0.3s ease 0s;
  float: right; 

}

.send-btn:hover {
  background-color: #194597;
}

.valign {
  font-size: 0;
}

.valign > [class*="col"] {
  display: inline-block;
  float: none;
  font-size: 14px;
  font-size: 1rem;
  vertical-align: middle;
}

.link-6
{
  font-weight: bold;
  transition: 0.3s ease;
  text-decoration: none;
  transition: all .3s;
  color: rgb(82, 81, 81);
}

.link-6:hover
{
  /* border-bottom: 1px solid #1e1e1e; */
  /* padding-left: 10px; */
  text-decoration: none;
  font-weight: bolder;
  color: black;

  /* border-bottom: 1px solid gray; */
}

.align-middle {
  margin-top: 5%;
  margin-bottom: 5%;
}
@media screen and (max-width:767px) {
  .navigation {
  /* margin-left: auto;
  margin-right: auto; */
    position: fixed;
    /* width: 100%; */
    height: 150px;
    background: black;
    top: -100%;
    left: 0;
    padding: 0.5px 0px;
  }
  .navigation li a i {
    width: 100%;
    font-size: 20px;
    margin-bottom: 0px;
  }

  .contact-nav
  {
    margin-top: 0px;
    padding: 0px 0px;
  }
}

		  </style>
	</head>
	<body class="is-preload">
    <header>
      <div class="brand-logo">
          <a href="index.php"><img src="IEEE.png" alt="Brand Logo"></a>
      </div>

      <input type="checkbox" id="toggle-btn">
      <label for="toggle-btn" class="show-menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></label>

      <nav>
          <ul class="navigation">
              <li><a href="index.php" class="active-menu">Home</a></li>
              <li><a href="Events.html">Events</a></li>
              <li><a href="Gallery.html">Gallery</a></li>
              <li><a href="execom-1.html">Execom</a></li>
              <li><a href="ContactPage.php">Contact Us</a></li>
              <label for="toggle-btn" class="hide-menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></label>
          </ul>
      </nav>
  </header> 

			<section id="banner">
			
				<div class="inner">
					<h1>IEEE-DSU</h1>
                    <p>Dayananda Sagar University, Bangalore</p>
                    <h2 class="home-h2">Join our community of innovators!</h2><a class="link-5" target = "_blank" href="https://www.ieee.org/membership/join/index.php">
				<br>	<button class="join-btn">BECOME AN IEEE MEMBER</button></a>
				</div>
				<video autoplay loop muted playsinline src="imgs/banner2.mp4"></video>
            </section>
            <br><br>
            
            <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8">
                           
                          <h2 style="font-weight: bold;">ABOUT US  &emsp; <img src="imgs\home\about.png" style="width: 60px;"></h2>
                            <div class = "row">
                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <p style="text-align: justify;">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
&emsp;Dayananda Sagar University inaugurated IEEE student branch by Department of Electronics and Communication Engineering (ECE) on 25th August 2018 at Kudlu Gate Campus of DSU. 
                                    <br><br>
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
&emsp;IEEE student branch provides a platform for the students to meet and learn from fellow students, faculty members and professionals in the field. 
                                    <br><br>
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
&emsp;The student branch activities offer numerous educational, technical, and professional advantages of IEEE membership through special projects, activities, meetings, tours and field trips.   
                                </p><br>
                                <p style="text-align: right; font-weight: bold;"><a target = "_blank" href="timeline.html" class="link-6">
                                    View a brief timeline of IEEE >>>
                                </p></a>
                               
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 align-middle">
                                    <img src="IEEE.png"  class="img-responsive1" alt="about-us">
                                </div>
                                
                            <!-- </div> -->
                        </div>
                            <hr class="hr-main"><br>
                            
                            <div class = "row" style = "padding-right: 70px; padding-top: 20px;">
                              <h2 style="text-align: right; font-weight: bold;"><img src="imgs\home\value.png" style="width: 60px;">&emsp;OUR VALUES</h2>
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <img src="values-img.png" style = "margin-top: 10px; "
                                    class="img-responsive" alt="value">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9">
                                    

                                <p style="text-align: justify;">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    IEEE Foundation serves as a steward of donations that improve the human condition, empower the next generation of engineers and scientists, educate and raise awareness, energize and recognize innovation, and preserve the history of technology. <br><br>
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    With donor support, the IEEE Foundation strives to be a leader in transforming lives through the power of technology and education.</p>
                                
                                <!-- </div> -->
                               
                                
                            </div>
                        </div>

                        <br><br><hr class="hr-main"><br>
                        <div class="article-register">
                        <p style="text-align: center; color: #111; font-size: 20px; font-weight: 600;">BECOME A PART OF OUR COMMUNITY!<br>Click here to register.</p>
            <img src="imgs/our_qualities/joinus.png" alt="Avatar" class="image">
            <div class="middle">
              <div class="text"><a class="link-5"  target = "_blank"href="https://www.ieee.org/membership/join/index.php">BECOME AN IEEE MEMBER &#10093;&#10093;&#10093;</div></a>
            </div>
            </div>
            
                           
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-4">
                          <h3 style="text-align: center; font-weight: bold;"><img src="imgs\home\projects.png" alt="" style="vertical-align:middle; width: 50px;">&emsp;  PROJECTS</h3>
                            <hr class="hr-main">
                                <p class="pro-para" style="text-align: justify; line-height: 2rem;">

                                    <i class="fa fa-cogs"   aria-hidden="true"></i><a class="link-4" target = "_blank" href="https://github.com/code-Assasin/Realtime-Alerting-System-for-Autonomous-Vehicles">&emsp;Realtime Alerting System for Autonomous Vehicle <!-- &#10095;&#10095;&#10095; --></a><br>
                    
                                    <i class="fa fa-cogs" aria-hidden="true"></i><a class="link-4" target = "_blank" href="https://github.com/jinwookjungs/datc_robust_design_flow">&emsp;DATC Robust Design Flow</a><br>
                    
                                    <i class="fa fa-cogs" aria-hidden="true"></i><a class="link-4" target = "_blank" href="https://github.com/0x48piraj/MusFi">&emsp;MusFi — Transmitting Music over the Visible Light Spectrum</a><br>
                    
                                    <i class="fa fa-cogs" aria-hidden="true"></i><a class="link-4" target = "_blank" href="https://github.com/tarek-ullah/AD-Detection-From-3D-Brain-MRI-Data-Using-Deep-Deterministic-Convolutional-Neural-Networks">&emsp;ALzheimer's Disease & Dementia Detection From 3D Brain MRI Data Using Deep CNN.</a><br>
                    
                                    <i class="fa fa-cogs" aria-hidden="true"></i><a class="link-4" target = "_blank" href="https://github.com/akshitvjain/deeplearning-network-traffic">&emsp;Network Traffic Identification with Convolutional Neural Networks.</a><br>
                    
                                   <p style="text-align: right; font-weight: 800;"><a class="link-4" target = "_blank" href="https://github.com/topics/ieee">MORE ...</a></p> 
                                </p>

                                <br>
                                <h3 style="text-align: center; font-weight: bold;"><img src="imgs\home\achievements.png" alt="" style="vertical-align:middle; width: 50px;" aria-hidden="true">&emsp;           ACHIEVEMENTS</h3>
                                <hr class="hr-main">
                                <p style="text-align: justify;line-height: 2rem;">
                                    <i class="fa fa-flag" aria-hidden="true"></i>&emsp;Received a rebate of Rs. 50,000/- from IEEE Bangalore section for the year 2018.<br>
                                    
                                    <i class="fa fa-flag" aria-hidden="true"></i>&emsp;Received a rebate of Rs. 50,000/- from IEEE Bangalore section for the year 2019.<br>
                                    
                                    <i class="fa fa-flag" aria-hidden="true"></i>&emsp;The Impact Report for an International Conference was compiled by a member from our Student branch.<br>
                                    
                                    <i class="fa fa-flag" aria-hidden="true"></i>&emsp;2 teams from our Student branch got selected for SIGHT funding for the year 2020. <br>
                                    
                                    <i class="fa fa-flag" aria-hidden="true"></i>&emsp;A member from our Student branch is a part of IEEE India Council team for this year. <br>
                                </p>
                  <br>
                               <hr>
                   
                   <h3 style="text-align: center; font-weight: bold;"><img src="imgs\home\committee.png" alt="" style="vertical-align:middle; width: 40px;">&emsp;  STUDENT COMMITTEES - IEEE DSU</h3>
                                <hr class="hr-main">
                                <p class="pro-para" style="text-align: justify;">
    
    <i class="fa fa-group" aria-hidden="true"></i><a class="link-4" href="comm-2.html" style="color:#000000;">&emsp;Content Writing Team </a><br>

    <i class="fa fa-group" aria-hidden="true"></i><a class="link-4" href="comm-2.html" style="color:#000000;">&emsp;Social Media Team</a><br>

    <i class="fa fa-group" aria-hidden="true"></i><a class="link-4" href="comm-2.html" style="color:#000000;">&emsp;Content Development and Design Team</a><br>

    <i class="fa fa-group" aria-hidden="true"></i><a class="link-4" href="comm-2.html" style="color:#000000;">&emsp;Membership Development Team</a><br>

    <i class="fa fa-group" aria-hidden="true"></i><a class="link-4" href="comm-2.html" style="color:#000000;">&emsp;Webinar Management Team</a><br>

   <p style="text-align: right; font-weight: 800;"><a class="link-4" href="comm-2.html" style="color:#000000;">VIEW...</a></p> 
<br>
</p>
    
                
                  
                                </div>
                            
                        </div>
                    </div>
                    
                  
                   
                        </div>
                  </div>
    
    </div>
    </div>
    
    
             
<section class="section colored" id="contact-us">
  <div class="container">
    

      <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
              <h5 class="margin-bottom-30">IEEE DSU</h5>
              <div class="contact-text">
                  <p style="text-align: justify;">IEEE student branch provides a platform for the students to meet and learn
                    fellow students, faculty members and professionals in the field. The
                    student branch activities offer numerous educational, technical, and professional advantages of IEEE membership through special projects, 
                    activities, meetings, tours and field trips.   </p>
                    <i class="fa fa-phone" aria-hidden="true"></i>&emsp; 080-26967690<br>
              <i class="fa fa-envelope" aria-hidden="true"></i>&emsp; 
              contactus@ieee-dsu.edu.in<br>
              <i class="fa fa-map-marker" aria-hidden="true"></i> &emsp;Dayananda Sagar University, Kudlu Gate,<br>&emsp;
              Hosur Rd, Bengaluru, Karnataka - 560068


                  </div>
          </div>
<!-- contact us php and js !-->


          <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 contact-class">
            <h5>CONTACT US</h5><br>
			<div id="error"><? echo $error.$successMessage; ?></div>
              <div class="contact-form">
                  <form id="contact" action="" method="POST">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                          <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <fieldset>
                          <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="send-btn">Send Message</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
              </div>
			  <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
    <script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#name").val() == "") {
                  
                  error += "This field is required.<br>"
                  
              }
              
              if ($("#message").val() == "") {
                  
                  error += "This field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
    </script>
          </div>
      </div>
  </div>
</section>

<footer>
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <ul class="social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a target = "_blank" href="https://www.instagram.com/ieee.dsu/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <p class="copyright">Copyright &copy; 2020 IEEE - Dayananda Sagar University</p>
          </div>
      </div>
  </div>
</footer>
 

		<!-- Scripts !-->
			<script src="style2/js/jquery.min.js"></script>
			<script src="style2/js/browser.min.js"></script>
			<script src="style2/js/breakpoints.min.js"></script>
			<script src="style2/js/util.js"></script>
            <script src="style2/js/main.js"></script> 
            <script src="style2/js/wow.min.js"></script>
		<script src="style2/js/jquery.singlePageNav.min.js"></script>
        <script src="style2/js/custom.js"></script>
        <script src="style2/js/jquery.js"></script>
        <script src="style2/js/bootstrap.min.js"></script>
        <script src="style4/js/index.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                  content.style.maxHeight = null;
                } else {
                  content.style.maxHeight = content.scrollHeight + "px";
                } 
              });
            }
            </script>
	</body>
</html>