<?php
session_start();
if(isset($_SESSION['key'])) {
	header("Location:pages/dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="materials/images/favicon.ico">

	<title>Online Classroom | Homepage</title>

	<link rel="stylesheet" href="materials/css/bootstrap.css">
	<link rel="stylesheet" href="materials/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="materials/css/neon.css">

	<script src="materials/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="materials/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>

<div class="wrap">
	
	<!-- Logo and Navigation -->
<div class="site-header-container container">

	<div class="row">
	
		<div class="col-md-12">
			
			<header class="site-header">
			
				<section class="site-logo">
				
					
						<h1><b>ONLINE CLASSROOM<b></h2>
					</a>
					
				</section>
				
				<nav class="site-nav">
					
					<ul class="main-menu hidden-xs" id="main-menu">
						<li class="active">
							<a href="index.php">
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>Login</span>
							</a>
							
							<ul>
								<li>
									<a href="studentLogin.php">
										<span>Student Login</span>
									</a>
								</li>
								<li class="">
									<a href="facultyLogin.php">
										<span>Faculty Login</span>
									</a>
								</li>
								<li>
									<a href="adminLogin.php">
										<span>Admin Login</span>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
					
				
					<div class="visible-xs">
						
						<a href="#" class="menu-trigger">
							<i class="entypo-menu"></i>
						</a>
						
					</div>
				</nav>
				
			</header>
			
		</div>
		
	</div>
	
</div>	
	<!-- Main Slider -->
<section class="slider-container" style="background-image: url(materials/images/slide-img-1-bg.png);">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-12">
				
				<div class="slides">
					
					<!-- Slide 1 -->
					<div class="slide">
					
						<div class="slide-content">
							<h2>
								<small>BOOKS AND VIDEOS</small>
								ALL STUDY MATERIALS 
							</h2>
							
							<p>
								You can access all the books and video lectures provided by our faculties.
							</p>
						</div>
						
						<div class="slide-image">
							
							<a href="#">
								<img src="materials/images/studypic.jpg" class="img-responsive" />
							</a>
						</div>
						
					</div>
					
					<!-- Slide 2 -->
					<div class="slide" data-bg="materials/images/slide-img-1-bg.png">
						
						<div class="slide-image">
							
							<a href="#">
								<img src="materials/images/codeimage1.jpg" class="img-responsive" />
							</a>
						</div>
					
						<div class="slide-content text-right">
							<h2>
								<small>CODE</small>
								WRITE YOUR FIRST CODE
							</h2>
							
							<p>
								With the help of our teachers youcan start your coding as well as you can be able to make whole 
								project.
							</p>
							
						</div>
						
					</div>
					
					<!-- Slide 3 -->
					<div class="slide">
					
						<div class="slide-content">
							<h2>
								<small>ALL SUBJECTS</small>
								FROM INDIVIDUAL TO SEMESTERS
							</h2>
							
							<p>
								All the subjects included in Bachelors of Information Technology are there in ONLINE CLASSROOM.
								Need not to run for extra classes by paying large amount. 
							</p>
						</div>
						
						<div class="slide-image">
							
							<a href="#">
								<img src="materials/images/coding.jpg" class="img-responsive" />
							</a>
						</div>
						
					</div>
					
					<!-- Slider navigation -->
					<div class="slides-nextprev-nav">
						<a href="#" class="prev">
							<i class="entypo-left-open-mini"></i>
						</a>
						<a href="#" class="next">
							<i class="entypo-right-open-mini"></i>
						</a>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</section>
<!-- Features Blocks -->
<section class="features-blocks">
	
	<div class="container">
		
		<div class="row vspace"><!-- "vspace" class is added to distinct this row -->
			
			<div class="col-sm-4">
				
				<div class="feature-block">
					<h3>
						<i class="entypo-cog"></i>
						Settings
					</h3>
					
					<p>
						Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence son shy.
					</p>
				</div>
				
			</div>
			
			<div class="col-sm-4">
				
				<div class="feature-block">
					<h3>
						<i class="entypo-gauge"></i>
						Dashboard
					</h3>
					
					<p>
						On am we offices expense thought. Its hence ten smile age means. Seven chief sight far point any. Of so high into easy.
					</p>
				</div>
				
			</div>
			
			<div class="col-sm-4">
				
				<div class="feature-block">
					<h3>
						<i class="entypo-lifebuoy"></i>
						24/7 Support
					</h3>
					
					<p>
						You can ask your queries realted to the study anytime.We are always there to help you.
					</p>
				</div>
				
			</div>
			
		</div>
		
		<!-- Separator -->
		<div class="row">
			<div class="col-md-12">
				<hr />
			</div>
		</div>
		
	</div>
	
</section>
Portfolio
 <section class="portfolio-widget">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-3">
				
				<div class="portfolio-info">
					<h3>
						<a href="#">Portfolio</a>
					</h3>
					
					<p>Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence s...</p>
				</div>
				
			</div>
			
			<div class="col-sm-3"> 
				
				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="portfolio-single.html" class="image">
						<img src="materials/images/portfolio-thumb-1.png" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>
					
					<h4>
						<a href="portfolio-single.html" class="like">
							<i class="entypo-heart"></i>
						</a>
						
						<a href="portfolio-single.html" class="name">Neon</a>
					</h4>
					
					<div class="categories">
						<a href="portfolio-single.html">Web Design / Development</a>
					</div>
				</div>
				
			</div>
			
			<div class="col-sm-3">
				
				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="portfolio-single.html" class="image">
						<img src="materials/images/portfolio-thumb-1.png" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>
					
					<h4>
						<a href="portfolio-single.html" class="like liked">
							<i class="entypo-heart"></i>
						</a>
						
						<a href="portfolio-single.html" class="name">Motorola</a>
					</h4>
					
					<div class="categories">
						<a href="portfolio-single.html">Photography</a>
					</div>
				</div>
				
			</div>
			
			<div class="col-sm-3">
				
				<!-- Portfolio Item in Widget -->
				<div class="portfolio-item">
					<a href="portfolio-single.html" class="image">
						<img src="materials/images/portfolio-thumb-1.png" class="img-rounded" />
						<span class="hover-zoom"></span>
					</a>
					
					<h4>
						<a href="portfolio-single.html" class="like">
							<i class="entypo-heart"></i>
						</a>
						
						<a href="portfolio-single.html" class="name">Dribbble</a>
					</h4>
					
					<div class="categories">
						<a href="portfolio-single.html">UI Design</a>
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div> -->
	
</section>
<!-- Call for Action Button -->
<!-- <div class="container">
	<div class="row vspace">
		<div class="col-md-12">
			
			<div class="callout-action">
				<h2>Get your copy of Neon now</h2>
				
				<div class="callout-button">
					<a href="index.html" class="btn btn-secondary">Purchase</a>
				</div>
			</div>
			
		</div>
	</div>
</div> -->
<!-- Testimonails -->
<section class="testimonials-container">
	
	<div class="container">
		
		<div class="col-md-12">
			
			<div class="testimonials carousel slide" data-interval="8000">
			
				<div class="carousel-inner">
					
					<div class="item active">
					
						<blockquote>
							<p>
							Let yourself feel insecure from time, It will help you grow as an individual.
							</p>
							<small>
								<cite>Sundar Pichai</cite> - CEO at Google
							</small>
						</blockquote>
						
					</div>
					
					<div class="item">
					
						<blockquote>
							<p>
								Entered of cordial do on no hearted. Yet agreed whence and unable limits. <br />
								Use off him gay abilities concluded immediate allowance.
							</p>
							<small>
								<cite>Larry Page</cite> - co-founder at Google
							</small>
						</blockquote>
						
					</div>
					
					<div class="item">
					
						<blockquote>
							<p>
								Of regard warmth by unable sudden garden ladies. No kept hung am size spot no. <br />
								Likewise led and dissuade rejoiced welcomed husbands boy. 
							</p>
							<small>
								<cite>Bill Gates</cite> - ceo at Microsoft
							</small>
						</blockquote>
						
					</div>
				
				</div>
			
			</div>
			
		</div>
		
	</div>
	
</section>


<!-- Client Logos -->
<section class="clients-logos-container">
	
	<div class="container">
		
		<div class="row">
			
			<div class="client-logos carousel slide" data-ride="carousel" data-interval="5000">
			
				<div class="carousel-inner">
				
					<div class="item active">
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
					</div>
					
					<div class="item">
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
						<a href="#">
							<img src="materials/images/client-logo-1.png" />
						</a>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</section>	
	<!-- Footer Widgets -->
<section class="footer-widgets">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-6">
				
				<a href="#">
					<h2><b>ONLINE CLASSROOM<b></h2>
				</a>
				
				<p>
					Providing all the courses free of cost.
				</p>
				
			</div>
			
			<div class="col-sm-3">
				
				<h5>Address</h5>
				
				<p>
					Sheetal Indraprasth<br />
					Sheetal Nagar<br />
					Mira Road, 401107
				</p>
				
			</div>
			
			<div class="col-sm-3">
				
				<h5>Contact</h5>
				
				<p>
					Phone: 9167820916 <br />
					email: absonlineclassroom@gmail.com
				</p>
				
			</div>
			
		</div>
		
	</div>
	
</section>

<!-- Site Footer -->
<footer class="site-footer">

	<div class="container">
	
		<div class="row">
			
			<div class="col-sm-6">
				Copyright &copy; ONLINE CLASSROOM - All Rights Reserved. 
			</div>
			
			<div class="col-sm-6">
				
				<ul class="social-networks text-right">
					<li>
						<a href="#">
							<i class="entypo-instagram"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-facebook"></i>
						</a>
					</li>
				</ul>
				
			</div>
			
		</div>
		
	</div>
	
</footer>	
</div>


	<!-- Bottom scripts (common) -->
	<script src="materials/js/gsap/TweenMax.min.js"></script>
	<script src="materials/js/bootstrap.js"></script>
	<script src="materials/js/joinable.js"></script>
	<script src="materials/js/resizeable.js"></script>
	<script src="materials/js/neon-slider.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="materials/js/neon-custom.js"></script>

</body>
</html>