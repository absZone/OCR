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
								Learn coding here in detail.
							</h2>
							
							<p>
								With the help of our teachers and study material you can learn  coding.
								
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
<div class="col-md-10 col-md-offset-1 text-center animate-box">
						<div class="about-wrap">
							<div class="heading-2">
								<h2>ABOUT US</h2><br/>
							</div>
							<p style="font-size:15px">The online classroom is actually developed to provide the simulation of classrooms in
the departmental of network for the ease of teachers/presenters and students/participants. It
aims to complements the effort of educators within the network to integrate the technology
into their classrooms and circular and to link their schedule to the network in educationally
productive ways.</p><br/><br/>
							<p style="font-size:15px">Online classroom is a vision is to empower, enable and connect
students/participants and teachers/presenters around the departmental network using virtual
classroom. It provides students with a simulating, positive and enjoyable environment along
with the opportunity to develop skills that are essential in the 21 st century. Online quiz system
,lectures/presentations recordings chatting within the network to ask questions and to
collaborate, file sharing, directory sharing, audio/video input/output device sharing etc.</p><br/><br/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<p style="font-size:15px">Virtual education refers to instruction in a learning environment where
teachers/presenters and students/participants are separated by time or space, or both and the
teachers /presenters provide course content through course management applications,
multimedia resources, the network audio/video conferencing .</p>
					</div>
					<div class="col-md-4 animate-box">
						<p style="font-size:15px">Students from all over the world can enroll in courses offered by any institution.
They can participate in class activities whenever their schedule permits. Promote active
learning rather than passive reception.</p>
					</div>
					<div class="col-md-4 animate-box">
						<p style="font-size:15px">The aim of this project is to provide a web enabled interactive model of e-learning in
which the course material is presented using the advantages of multimedia and hypermedia.
Present technologies enable the creation of virtual classroom using the internet and its
resources.</p>
					</div>
				</div>
			</div>
		</div>

		
		
		
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