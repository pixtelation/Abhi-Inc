<?php 
session_start();

if(isset($_SESSION['nousername']) || !empty($_SESSION['nousername']))
{
header("Location: welcome.php");
}
unset($_SESSION["nousername"]);
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
<meta name="keywords" content="Get Pixelated with Abhi Inc. Bring your Business Online,Web Developer,Online Ecommerce," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" href="images/abhiinc.png" type="image/png">
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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ8C65K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
    <!-- banner --> 
	<div class="video jarallax" data-vide-bg="video/spa">    
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
                                                    <li><a href="index.php" class="active">Home</a></li>
						    <li><a href="contact.php">Contact Us</a></li>
                                                    
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
		<!-- banner-text -->
		<div class="banner-w3ltext page-header__content w3layouts">  
			<div class="text-bg">  
				<svg>
					<defs>
						<mask id="mask" x="0" y="0" width="100%" height="100%">
							<rect id="alpha" x="0" y="0" width="100%" height="100%"/>
							<text id="title1" x="50%" y="30%" dy="1em" letter-spacing="0.02em">Abhi Inc. </text>
						</mask>  
					</defs>
					<rect id="base" x="0" y="0" width="100%" height="100%" mask="url(#mask)"/> 
				</svg>     
			</div>   
			<p class="bnrw3-agiletext"> Get Pixelated on Web </p>
		</div>     
		<!-- //banner-text -->  	
	</div>	 
	<!-- //banner --> 
	<!-- about -->
	<div class="about wthree-about">
		<div class="container"> 
			<div class="social-wthree-icons bnragile-icons">
				<ul>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://abhiinc.co.nf/" target="_blank" class="fa fa-facebook icon icon-border facebook"> </a></li>
							<li><a href="https://twitter.com/share?text=http://abhiinc.co.nf/" target="_blank" class="fa fa-twitter icon icon-border twitter"> </a></li>
							<li><a href="https://plus.google.com/share?url=http://abhiinc.co.nf/"  class="fa fa-google-plus icon icon-border googleplus"> </a></li>
                                                        <li><a href="whatsapp://send?text=http://abhiinc.co.nf/" target="_blank" class="fa fa-whatsapp icon icon-border whatsapp" style=""> </a></li> 
						</ul>
				<div class="clearfix"> </div>
			</div>  
			<!-- about-section -->
			<div class="about-section">
				<div class="col-md-7 ab-left w3-agileits">
					<div class="grid">
						<div class="col-xs-6 abt-w3limg">
							<figure class="effect-jazz">
								<img src="images/img1.jpg" alt="" height="auto"/>
								<figcaption>
									<h4>Static<span><br>Website</span>
                                                                        </h4> 
								</figcaption>			
							</figure> 
						</div>
						<div class="col-xs-6 abt-w3limg">
							<figure class="effect-jazz">
								<img src="images/img2.jpg" alt="" height="240px"/>
								<figcaption>
									<h4>Dynamic<span><br>Website</span></h4>
									 
								</figcaption>			
							</figure> 
						</div>
						<div class="clearfix"> </div>
					</div>
			   </div>
			   <div class="col-md-5 ab-text w3-agileits">
			        <h3 class="agileits-title">Welcome</h3> 
					<h6>Oh...Hi there</h6>
                                        <p class="wow slideInUp">Get your business <mark>Pixelated</mark> on web better than being offline. </p>
					<div class="start wow flipInX">
						<!-- <a href="single.html" class="hvr-bounce-to-bottom">Get Started</a>-->
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //about-section -->
			<!-- about-section2 -->
			<div class="about-section abt-w3sec2">
				<div class="col-md-5 ab-text two w3-agileits">
					<h3 class="agileits-title">About</h3> 
					<h6>An effective combination of creativity, design concepts and practicality is what makes our websites functional.</h6>
					<p>Your projects are personally taken care of from the storyboard stage, to its implementation, support and beyond.</p>
					<div class="start">
						<!--<a href="single.html" class="hvr-bounce-to-bottom">Read more</a>-->
					</div> 
				</div>
				<div class="col-md-7 ab-left w3-agileits">
					<div class="grid">
						<div class="col-xs-6 abt-w3limg">
							<figure class="effect-jazz">
                                                            <img src="images/layout.png" alt="" height="350px" />
								<figcaption>
									<h4>Creative<span><br>Design</span></h4>  
								</figcaption>			
							</figure> 
						</div>
						<div class="col-xs-6 abt-w3limg">
							<figure class="effect-jazz">
                                                            <img src="images/team.jpg" alt="" height="350px"/>
								<figcaption>
									<h4>Working<span><br>Team</span></h4> 
								</figcaption>			
							</figure> 
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //about-section2 -->
		</div>
	</div>
	<!-- //about --> 
	<!-- services -->
	<div class="services jarallax">
		<div class="container">
			<h3 class="agileits-title w3title2">Services</h3>
                        <h4 style="color: #00e1f7"><center>( Click to choose any of them )</center></h4>
			<div class="services-w3lsrow agileits-w3layouts">
				
                            <div class="col-md-3 col-sm-3 col-xs-6 services-grids">  
                                <a href="welcome.php"><i class="fa fa-gears" aria-hidden="true"></i> 
                                        <h4>Mini Site</a></h4>
				</a>	
				</div>
			     	
                            <div class="col-md-3 col-sm-3 col-xs-6 services-grids">
					<div class="w3agile-servs-img">
                                            <a href="welcome.php"><i class="fa fa-group" aria-hidden="true"></i> 
                                                <h4>Landing Page Site</h4>
					</a>	
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grids">
					<div class="w3agile-servs-img">
					<a href="welcome.php">	<i class="fa fa-briefcase" aria-hidden="true"></i>
                                                <h4>Personal Site</h4>
					</a>	
					</div>
				</div> 	
				<div class="col-md-3 col-sm-3 col-xs-6 services-grids">
					<div class="w3agile-servs-img">
					<a href="welcome.php">	<i class="fa fa-list-alt" aria-hidden="true"></i>
                                                <h4>E-Commerce Site</h4>
					</a>	
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>	 
		</div>
	</div>	
	<!-- //services --> 
	<!-- testimonial -->
	<!--<div class="testimonial agileits-w3layouts">
		<div class="container"> 
			<h3 class="agileits-title">Testimonials</h3> 
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">  
					<ul class="resp-tabs-list">
						<li class="resp-tab-item"><img src="images/t1.jpg" alt=""/></li>
						<li class="resp-tab-item"><img src="images/t2.jpg" alt=""/></li>
						<li class="resp-tab-item"><img src="images/t3.jpg" alt=""/></li>
						<li class="resp-tab-item"><img src="images/t4.jpg" alt=""/></li>
						<li class="resp-tab-item"><img src="images/t5.jpg" alt=""/></li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">				
							<div class="view view-first"> 
								<p>Donec libero dui, scelerisque ac augue id, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
								<h5>Filan Isteku</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first"> 
								<p>Scelerisque ac augue id Donec libero dui, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
								<h5>Ullam Firose </h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first"> 
								<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec libero dui, scelerisque ac augue id,  ullamcorper elit,diam ac nibh convallis.</p>
								<h5>Sque Augue</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first"> 
								<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec libero dui, scelerisque ac augue id,  ullamcorper elit,diam ac nibh convallis.</p>
								<h5>Metus Ipsum</h5>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="view view-first"> 
								<p>Scelerisque ac augue id Donec libero dui, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
								<h5>Ullam Firose </h5>
							</div>
						</div> 
					</div> 
					<div class="clearfix"></div>
				</div>	 
			</div>	 
		</div>
	</div>	-->				
	<!-- //testimonial --> 
	<!-- reservation -->
		
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
	<!-- footer -->
	<div class="footer">
		<div class="container">
			
                    <center>
			
                            <h3>Contact Me</h3>
				<p>2,Saha Lane Mukta Ram Babu Street<br>
                                    <span>Kolkata, India</span><br>
                                    <span>Mobile no: 9681565562</span><br>
                                    <span>For Queries <a style="color: #286090" href="contact.php">Click Here</a></span>
				</p>
			
		    </center>	
			<div class="clearfix"> </div> 
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>Get <mark>Pixelated</mark> on web</p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- ResponsiveTabs -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs --> 
	<!-- video pg plugin --> 
	<script src="js/jquery.vide.min.js"></script>
	<!-- //video pg plugin --> 
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