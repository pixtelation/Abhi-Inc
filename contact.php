<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZ8C65K');</script>
<!-- End Google Tag Manager -->


<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',40,
{'GTM-NNRT6P2':true});</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83128830-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-83128830-1');
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-83128830-1', 'auto');
  ga('require', 'GTM-NNRT6P2');
  ga('send', 'pageview');
</script>

<title>Abhi Inc.</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Abhi Inc." />
<meta property="og:description" content="Get Pixelated on Web & go Online" />
<meta property="og:image" content="https://thumb.ibb.co/c79bJm/AF1_Qip_Pu7m_MOb_OKm_J3xqaa_V6_Sw_Gkg6_G4_ET7x_Q2qt_IQY_s707_no.jpg" />
<meta property=”og:http://abhiinc.co.nf/ content=”http://abhiinc.co.nf/” />
  
<meta name="keywords" content="Get Pixelated with Abhi Inc. Bring your Business Online,Web Developer,Online Ecommerce," /><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" href="images/abhiinc.png" type="image/png" sizes="32x32">
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link rel="stylesheet" href="css/jquery-ui.css" /> <!-- Calendar-CSS -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head> 
	<!-- banner --> 
	<div class="jarallax about-w3banner">    
		<!-- header --> 
		<div class="w3header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"> Abhi Inc. </a></h1> 
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php">Home</a></li>
			                                <li><a href="contact.php" class="active">Contact Us</a></li>
                                                        <?php
                                                        
                                                        if(!isset($_SESSION['username']) || empty($_SESSION['username']))
                                                        {
                                                         echo'<li><a href="#" class="dropdown-toggle,active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member Area <span class="caret"></span></a>';
							 echo'<ul class="dropdown-menu">';
							 echo' <li><a href="SignIn.php">Sign In</a></li>';
                                                         echo'<li><a href="SignUp.php">Sign Up</a></li>';
					                 echo'</ul>';
							 echo'</li>';
                                                        }
                                                        else
                                                         {
                                                            echo'<li><a href="#" class="dropdown-toggle,active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'] .'<span class="caret"></span></a>';
							    echo'<ul class="dropdown-menu">';
                                                            echo'<li><a href="welcome.php">Place Requirement</a></li>';
                                                            echo'<li><a href="signout.php">Sign Out</a></li>';
                                                            echo'</ul>';
							    echo'</li>';
                                                          }
                                                         ?>
						</ul> 
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div>  
		</div>
		<!-- //header -->   
	</div>	 
	<!-- //banner --> 
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h2 class="agileits-title">Contact Us</h2>
			<div class="col-md-8 w3_agile_mail_left">
				<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
                                    <form action="contactform.php" method="post">
						
                                                <span>
							<i>Name</i>
							<input type="text" name="name" placeholder=" " required="">
						</span>
						<span>
							<i>Email</i>
							<input type="email" name="email" placeholder=" " required="">
						</span>
						<span>
							<i>Subject</i>
							<input type="text" name="subject" placeholder=" " required="">
						</span>
						<span>
							<i>Message</i>
							<textarea name="message" placeholder=" " required=""></textarea>
						</span>
						<div class="w3_submit">
							<input type="submit" name='submit' value="Submit Now">
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4 w3_agile_mail_right">
				<div class="w3_agileits_mail_right_grid">
					<h4>Abhishek Mehta </h4>
					<p>Hello...Contact Me personally for any queries</p>
					<h5>Follow Me On</h5>
					<div class="social-wthree-icons">
						<ul>
							<li><a href="https://www.facebook.com/brohacker/" class="fa fa-facebook icon icon-border facebook"> </a></li>
							<li><a href="https://twitter.com/dheubShe" class="fa fa-twitter icon icon-border twitter"> </a></li>
							<li><a href="https://plus.google.com/109802177128991452385" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
                                                        <li><a href="whatsapp://send?text=http://abhiinc.co.nf/" class="fa fa-whatsapp" style=""> </a></li> 
						</ul>
						<div class="clearfix"> </div>
					</div> 
					<div class="w3_agileits_mail_right_grid_pos">
						<img src="images/t3.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="w3_agileits_mail_right_grid_main">
					<div class="w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Mail Me</h3>
							<a>abhishekmehta50@gmail.com</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Address</h3>
                                                        <p>2,Saha Lane Mukta Ram Babu Street</p>
                                                        <p>Kolkata, India</p><br>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3layouts_mail_grid_left">
						<div class="w3layouts_mail_grid_left1 hvr-radial-out">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						</div>
						<div class="w3layouts_mail_grid_left2">
							<h3>Phone</h3>
							<p>9681565562</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
        
        <div class="footer-copy">
		<div class="container">
                    <p>Get <mark>Pixelated</mark> on web</p><br>
                    
		</div>
	</div>
	<!--<div class="map-grid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424143.0428986048!2d150.65177630482995!3d-33.847973034849154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1488261232220" class="map" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- contact --> 
	<!-- reservation -->
	<!--<div class="reservation-info jarallax"> 
		<div class="reservation">
			<div class="container">			
				<h3 class="agileits-title w3title2">Make a Reservation</h3>  
				<div class="book-reservation">
					<form action="#" method="post">  
						<div class="col-md-4 form-left">
							<label><i class="glyphicon glyphicon-calendar"></i> Date :</label>
							<input type="text" class="date" id="datepicker" name="date" placeholder="Date" required="">
						</div>
						<div class="col-md-4 form-left">
							<label><i class="glyphicon glyphicon-user"></i> No.of People :</label>
							<select class="form-control">
								<option>1 Person</option>
								<option>2 People</option>
								<option>3 People</option>
								<option>4 People</option>
								<option>5 People</option>
								<option>More</option>
							</select>
						</div>
						<div class="col-md-4 form-right">
							<label><i class="glyphicon glyphicon-time"></i> Time :</label>
							<input type="text" name="Time" class="timepicker" placeholder="Time" required="">
						</div>
						<div class="clearfix"> </div>
						<div class="make">
							<input type="submit" value="Make a Reservation">
						</div>
					</form> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!-- //reservation -->
	<!-- Time select -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({twentyFour: false});
	</script>
	<!-- //Time select --> 
	<!-- Calendar --> 
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
	</script> 
	<!-- //Calendar --> 
	<!-- footer 
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grids">
				<h3>Review</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sheets containing lorem lpsum passages sed do consectetur adipisicing elit.</p>
			</div> 
			<div class="col-md-3 footer-grids"> 
				<h3>Contact Me</h3>
				<p>123 NewYork City USA.<br>
					<span>Office: 908-0000</span>
					<span>Support to: <a href="mailto:info@example.com">mail@example.com</a></span>
				</p>
			</div>
			<div class="col-md-5 footer-grids">
				<h3>Subscribe</h3>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Enter your email" required="">
					<input type="submit" value="">
				</form> 
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>© 2017 Fit&Spa. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- jarallax effect -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>   
	<!-- //jarallax effect -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>