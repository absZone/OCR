<?php

?>
<?php require('scripts/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My project</title>
	<title>Online Classroom</title>
	
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">



	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


</head>

<body>
<div id="wrapper">
<div>
			<?php include('elements/header.php');
			?>
					</div>
        
				<div id="page-content-wrapper">
				
				<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
						</button>
<hr>

	<div class="row">
	<div class="col-md-6 col-md-offset-3">
	
	<div class="panel panel-default">
		  <div class="panel-heading">
				<h3 class="form-heading" >Add Books</h3>
		  </div>
		  <div class="panel-body">
				<div class="row">
				<div class="col-md-12">
				
				<div class="form-group">
					<label for="input" class="col-sm-3 control-label">Course Name:</label>
					<div class="col-sm-9">
						<input type="text" name="courseName" id="input" class="form-control" value="" required="required" >
					</div>
				</div>

				<div class="form-group">
					<label for="inputCourseType" class="col-sm-3 control-label">CourseType:</label>
					<div class="col-sm-8">
						<select name="CourseType" id="inputCourseType" class="form-control" required="required">
							<option value="1234">Semester1</option>
						</select>
					</div>
				</div>
                
                
                <div class="form-group">
					<label for="inputCourseType" class="col-sm-3 control-label">Upload PDF:</label>
					<div class="col-sm-8">
                    <input type="file" name="video" accept=".pdf">
                    
					</div>
                </div>
                

				<div class="form-group">
					<label for="inputCourseType" class="col-sm-3 control-label"></label>
					<div class="col-sm-8">
					<button type="submit" class="main-button">Submit</button>
					</div>
				</div>
				
				</div>
				</div>
		  </div>
	</div>
	
	</div>
	</div>
	



</div>
        <!-- /#page-content-wrapper -->
</div>
    <!-- /#wrapper -->

		
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script src="js/main_side.js"></script>

	<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>
</html>