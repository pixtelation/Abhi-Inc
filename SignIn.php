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
<body>
    <?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['username']) || empty($_POST['password']))
 {
 $error = "Username or Password is Empty";
 } 
 else
 {
 //Define $user and $pass
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect('fdb12.biz.nf','2281266_abhiinc','9681@abhi');
 
 //Selecting Database
 $db = mysqli_select_db($conn, "2281266_abhiinc");
 
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM signup WHERE username='$username' AND password='$password'");
 $rows = mysqli_num_rows($query);
 
 if($rows == 1)
 {  
 $_SESSION['username']=$username;  // Initializing Session
 }
 else
 {
 $error = "*Username OR Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 ?>
  
 
    
        
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
			                                <li><a href="contact.php" >Contact Us</a></li>
                                                        <?php
                                                        
                                                        if(!isset($_SESSION['username']) || empty($_SESSION['username']))
                                                        {
                                                         echo'<li><a href="#" class="active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member Area <span class="caret"></span></a>';
							 echo'<ul class="dropdown-menu">';
							 echo' <li><a href="SignIn.php">Sign In</a></li>';
                                                         echo'<li><a href="SignUp.php">Sign Up</a></li>';
					                 echo'</ul>';
							 echo'</li>';
                                                        }
                                                        else
                                                         {
                                                            echo'<li><a href="#" class="active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['username'].'<span class="caret"></span></a>';
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
               	<?php 
                if(isset($_SESSION['username']) || !empty($_SESSION['username']))
                {
                echo "<h3 style='background-color:orange;'><center><a href='index.php'>Welcome<b style='color:purple'> ".$_SESSION['username']."</b> Click here</a></center></h3>";
                }
                
                ?>
                          <h2 class="agileits-title">Login</h2>
				<div class="agileits_mail_grid_right1">
                                    <form action="" method="post">
						
                                                
						<span>
							<i>Username</i>
                                                        <input type="text" name="username" placeholder="Enter your Username"  required="">
						</span>
						
						<span>
							<i>Password</i>
                                                        <input type="password" id="password" name="password" placeholder="Enter your password" >
                                                         <input type="button" id="togglePasswordField" value="Show"  />
						</span>
                                                <br>
                                        <h4 style="text-decoration: underline"><a style="color: #286090" href="SignUp.php">Not a Member....Register Here</a></h4>
                                                
						
						<div class="w3_submit">
							<input type="submit" name="submit" value="Submit Now" >
						</div>
							
                                        <span style="color: red"><?php echo $error; ?></span>
					</form>
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
		
	<!-- //reservation -->
        
        
        
       
      
	<script type="text/javascript" src="js/wickedpicker.js"></script>
        
        <script type="text/javascript">
        (function() {

	try {

		// switch the password field to text, then back to password to see if it supports
		// changing the field type (IE9+, and all other browsers do). then switch it back.
		var password = document.getElementById('password');
		password.type = 'text';
		password.type = 'password';
		
		// if it does support changing the field type then add the event handler and make
		// the button visible. if the browser doesn't support it, then this is bypassed
		// and code execution continues in the catch() section below
		var togglePasswordField = document.getElementById('togglePasswordField');
		togglePasswordField.addEventListener('click', togglePasswordFieldClicked, false);
		togglePasswordField.style.display = 'inline';
		
	}
	catch(err) {

	}

})();

function togglePasswordFieldClicked() {

	var password = document.getElementById('password');
	var value = password.value;

	if(password.type == 'password') {
		password.type = 'text';
	}
	else {
		password.type = 'password';
	}
	
	password.value = value;

}       
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
		});
	</script>   
	<!-- //jarallax effect -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>