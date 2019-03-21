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
			<?php include('elements/header.php'); ?>
					</div>
        
				<div id="page-content-wrapper">
				
				<button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
						</button>
<hr>

	



<div class="main-login-form">
<form action="scripts/studentsignupscript.php" method= "post" class="main-form">
  
	<h2 class="form-heading">             Student Signup </h2>
	<hr>
  <div class="main-container">

	<input type="text" placeholder="Login Name" name="loginId"  id="loginId"  minlength="3" maxlength="20" required>
	<input type="text" placeholder="Password" name="password" id="password" minlength="8" maxlength="20" required>
	<input type="text" placeholder="First Name" name="firstName" id="firstName" minlength="3" maxlength="20" required>
	<input type="text" placeholder="Last Name" name="lastName"  id="lastName" minlength="3" maxlength="20" required>
	<input type="text" placeholder="Age" name="age"  id="age" minlength="3" maxlength="20" required>
	<!-- <input type="text" placeholder="Course" name="courseName" required> -->
	<select name="courseTypeId" id="courseTypeId" class="form-control" >
				<?php
					$query="SELECT * FROM course_type";
					if($result2=mysqli_query($con,$query))
					{
						echo 'successful';
					}
					else{
						echo'unsuccessfull';
					}
				
				 	while($row=mysqli_fetch_array($result2)) 
					{
			 	?>
	<option value="<?php echo $row["courseTypeId"]; ?>"><?php echo $row["courseType"]; ?></option>
				<?php 
				 }
				 ?> 
	</select>
  <input type="radio" name="gender" id="gender"  value="male" >Male 
  <input type="radio" name="gender"  id="gender" value="female"> Female
  <input type="text" placeholder="Address" name="address" id="address" minlength="3" maxlength="20" required>
  <input type="text" placeholder="Phone No" name="phoneNo" id="phoneNo" minlength="3" maxlength="20" required>
  <button type="submit"class="main-button" disabled>Signup</button>
<br/>
</div></form>
<script>
const loginId = document.getElementById('loginId');
const password = document.getElementById('password');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const age = document.getElementById('age');
const courseTypeId = document.getElementById('courseTypeId');
const gender = document.getElementById('gender');
const address = document.getElementById('address');
const phoneNo = document.getElementById('phoneNo');
const submit = document.getElementById('submit');
  
loginId.addEventListener('onclick', function (event) {
  isValidId = loginId.checkValidity();
  
  if ( isValidId ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
		
		}
		
});
password.addEventListener('onclick', function (event) {
  isValidpass = password.checkValidity();
  
  if ( isValidpass ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
});  
firstName.addEventListener('onclick', function (event) {
  isValidfir = firstName.checkValidity();
  
  if ( isValidfir ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
}); 
lastName.addEventListener('onclick', function (event) {
  isValidlas = lastName.checkValidity();
  
  if ( isValidlas ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
}); 

age.addEventListener('onclick', function (event) {
  isValidage = age.checkValidity();
  
  if ( isValidage ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
}); 
address.addEventListener('onclick', function (event) {
  isValidadre = address.checkValidity();
  
  if ( isValidadre ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
}); 
phoneNo.addEventListener('keyup', function (event) {
  isValidphne = phoneNo.checkValidity();
  
  if ( isValidphne ) {
    submit.disabled = false;
  } else {
    submit.disabled = true;
  }
}); 

</script>

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