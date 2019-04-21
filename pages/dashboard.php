<?php session_start(); 
require('../scripts/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="../assets/images/favicon.ico">

	<title>ONLINE CLASSROOM | Dashboard</title>

	<link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/neon-core.css">
	<link rel="stylesheet" href="../assets/css/neon-theme.css">
	<link rel="stylesheet" href="../assets/css/neon-forms.css">
	<link rel="stylesheet" href="../assets/css/custom.css">

	<script src="../assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php include('../elements/header.php'); ?>

	<div class="main-content">
				
	<?php include('../elements/tobbar.php'); ?>
		
		<hr />
		
		
		
		<div class="col-md-12">
            <div class="col-md-4">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<?php
										$query = "SELECT * FROM student";
										$result2 = mysqli_query($con, $query);
										$q=0;
										while ($row = mysqli_fetch_array($result2)) {
											$q++;
										}
										$count=$q;
                            ?>
					<div class="num" data-start="0" data-end="<?php echo $count; ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Registered Students</h3>
					<p>so far in our blog, and our website.</p>
				</div>
		
			</div>
		
			<div class="col-md-4">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<?php
										$query = "SELECT * FROM faculty";
										$result2 = mysqli_query($con, $query);
										$q=0;
										while ($row = mysqli_fetch_array($result2)) {
											$q++;
										}
										
                            ?>
					<div class="num" data-start="0" data-end="<?php echo $q ?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Faculties</h3>
					<p>this is the average value.</p>
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
			<div class="col-md-4">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					
                                        <?php
										$query = "SELECT * FROM course";
										$result2 = mysqli_query($con, $query);
										$i=0;
										while ($row = mysqli_fetch_array($result2)) {
											$i++;
										}
                            ?>
					<div class="num" data-start="0" data-end="<?php echo $i; ?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Courses</h3>
					<p>messages per day.</p>
				</div>
		
			</div>
		
			
		</div>
		
		<br />
		
		
		
		<br />
		
	</div>
	
</div>






	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="../assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="../assets/js/gsap/TweenMax.min.js"></script>
	<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/joinable.js"></script>
	<script src="../assets/js/resizeable.js"></script>
	<script src="../assets/js/neon-api.js"></script>
	<script src="../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="../assets/js/jquery.sparkline.min.js"></script>
	<script src="../assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="../assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/toastr.js"></script>
	<script src="../assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="../assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="../assets/js/neon-demo.js"></script>

</body>
</html>