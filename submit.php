<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>need Non Profit</title>

<link type="text/css" href="libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
<link type="text/css" href="libraries/fonts/elegant/elegant-icon.css" rel="stylesheet"/>
<link type="text/css" href="libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
<!-- Style CSS -->
<link href="style.css" type="text/css" rel="stylesheet"/>
<!-- Color CSS -->
<link href="css/color.css" type="text/css" rel="stylesheet"/>
<!-- ANIMATE CSS -->
<link href="libraries/animate/animate.min.css" type="text/css" rel="stylesheet"/>
<!-- Typography CSS -->
<link href="css/typography.css" type="text/css" rel="stylesheet"/>
<!-- Owl Carousel CSS -->
<link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
<!-- Jquery -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</head>
<body>
<div id="wrapper"> 
  
  <!--Content Wrap Start-->
  
  <div class="ct_content_wrap"> 
    
    <!-- Header wrap start -->
    
    <div class="full main_header home_header">
      <div class="top_logo col-xs-2"> <a href="index.html"><img src="images/top-logo.png" alt="" /></a> </div>
      <div class="col-xs-10 main_nav">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="index.html">Home <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="index.html">Home</a></li>
                    <li><a href="index-2.html">Home2</a></li>
                  </ul>
                  </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Causes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="causes.html">Causes</a></li>
                  <li><a href="causes-2.html">Causes 2</a></li>
                  <li><a href="causes-detail.html">Causes Detail</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="our-events.html">Events <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="our-events.html">Events</a></li>
                  <li><a href="events-detail.html">Events Detail</a></li>
                </ul>
              </li>
              <li><a href="#">Volunteers </a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="projects.html">Projects</a></li>
                  <li><a href="projects-2.html">Project 2</a></li>
                  <li><a href="project-detail.html">Projects Detail</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-detail.html">Blog Detail</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="shop.html">Shop <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="shop.html">Shops</a></li>
                  <li><a href="shop-detail.html">shop Detail</a></li>
                </ul>
              </li>
              <li><a class="nav_active" href="contact.html">Contact</a></li>
              <li class="border_icone serch_icone"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                  <form class="navbar-form" role="search" >
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button type="reset" class="btn btn-default">
								<span class="glyphicon glyphicon-remove">
									<span class="sr-only">Close</span>
								</span>
							</button>
							<button type="submit" class="btn btn-default">
								<span class="glyphicon glyphicon-search">
									<span class="sr-only">Search</span>
								</span>
							</button>
						</span>
					</div>
				</form></li>
              <li class="border_icone"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
              <li class="border_icone"><a href="#"><i class="fa fa-align-right" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          
          <!--/.nav-collapse --> 
          
        </nav>
      </div>
    </div>
    
    <!-- Header Wrap End --> 
    
    <!-- Page top banner Start -->
    
    <section class="full page_banner">
      <div class="container">
        <div class="col-xs-6 page_title">
          <h1>Contact Us</h1>
        </div>
        <div class="col-xs-6 bread_curmbs">
          <ul>
            <li><a href="#">Home</a></li>
            <li>/  Contact Us</li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- Page top banner End --> 
    
    <!-- Contact Wrap Start -->
    
    <section class="full contact_page">
      <div class="container">
<?php
 
 $to = "arslan.b4u@gmail.com";

 $email_from = "info@nonprofit.com";
 
 $subject = "Contact Us";

 $name = $_REQUEST['name'];
 
 $email = $_REQUEST['email'];
 
 $message = "<b>Name:</b> ". $name ."<br>";
 $message .= "<b>Email:</b> ". $email."<br>";
 $message .= "<b>Message:</b>". $_REQUEST['message'];

 
 $headers = "From: nonProfit $email \r\n";
 
 $headers = "Cc:info@nonprofit.com \r\n";
 
 $headers .= "MIME-Version: 1.0\r\n";
 
 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
 
 $sent = mail($to, $subject, $message, $headers);
 
 if($sent)
 
 {echo "email successfully sent"; }
 
 else
 
 {echo "email is not sent, there is some error!"; }
 
 ?>
      </div>
    </section>
    <div class="full contact_map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.866252695!2d-74.25818687528056!3d40.70531105753585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1477507845563" allowfullscreen></iframe>
    </div>
    
    <!-- Contact Wrap End -->
    <div id="bottom" class="full site-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12 col-xs-12">
            <aside class="widget widget_text">
              <div class="textwidget">
                <div class="full footer_logo"> <img src="images/footer-logo.png" alt="" /> </div>
                <p>Need nonprofit ipsum dolor sit amet, con sectetur adipisicing elit, sed doing eiusm od tempor incididunt ut labore etics, dolore. magna aliqua.</p>
              </div>
              <div class="copyright_social_icon">
                <h3 class="widget-title">Follow Us</h3>
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Recent Post</h3>
              <div class="full">
                <div class="col-xs-3 post_img no-padding"> <img src="images/recent_01.jpg" alt="" /> </div>
                <div class="col-xs-9 footer_post"> <span><a href="#">People Need Help of Us</a></span> <span><a href="#">Dec 12, 2018</a></span> </div>
              </div>
              <div class="full">
                <div class="col-xs-3 post_img no-padding"> <img src="images/recent_02.jpg" alt="" /> </div>
                <div class="col-xs-9 footer_post"> <span><a href="#">Childs Like a Flower here</a></span> <span><a href="#">Dec 12, 2018</a></span> </div>
              </div>
              <div class="full">
                <div class="col-xs-3 post_img no-padding"> <img src="images/recent_03.jpg" alt="" /> </div>
                <div class="col-xs-9 footer_post"> <span><a href="#">Super Story of  Volunteers</a></span> <span><a href="#">Dec 12, 2018</a></span> </div>
              </div>
            </aside>
          </div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <aside class="widget twitter_widget">
              <h3 class="widget-title">FIND US AT</h3>
              <div class="full footer_address">
                <div class="full address_info">
                  <p>Main Office:</p>
                  <p>1234 Fleming Road Manhatten  Newyork US</p>
                </div>
                <div class="full address_info"> <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0044 -123 4567 789</a> <a href="mailto:info@needcharity.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@needcharity.com</a> </div>
                <div class="full address_info"> <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0044 -123 4567 789</a> <a href="mailto:info@needcharity.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@needcharity.com</a> </div>
                <div class="full address_info">
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> Monday - Saturday: 8:00 Am - 18:00 Pm
                    
                    Sunday: Closed</p>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-md-3 col-sm-12 col-xs-12">
            <aside class="widget newsletter_widget">
              <h3 class="widget-title">Newsletter</h3>
              <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium quas molestias except. </p>
                <form>
                    <input type="email" value="" name="EMAIL" placeholder="Email Address" required>
                    <input type="submit" value="" name="subscribe" class="button">
                </form>
            </aside>
          </div>
        </div>
      </div>
      
      <!-- .container --> 
      
    </div>
    
    <!-- .site-bottom -->
    
    <footer id="footer" class="full site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-12">
            <div class="copyright">Copyright © 2016 <span class="grn">Need.</span> All rights reserved</div>
          </div>
          <div class="col-sm-4 col-sm-12 footer_copy_section">
            <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Make Donation</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- .container --> 
      
    </footer>
    
    <!-- site-footer --> 
    
  </div>
</div>

<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="js/pageloader.js" type="text/javascript"></script>
<!-- Custom-javascript -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
