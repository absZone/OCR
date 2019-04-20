<?php session_start();
require('../scripts/db.php');
if($_SESSION['type']=='student') {
	header("Location:../dashboard.php");
}
else if($_SESSION['type']=='faculty') {
	
}
else {
	
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

    <link rel="icon" href="../assets/images/favicon.ico">

    <title>ONLINE CLASSROOM | Exams</title>

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

<body class="page-body" data-url="http://neon.dev">

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <?php include('../elements/header.php'); ?>

        <div class="main-content">
            <?php include('../elements/tobbar.php'); ?>
            <hr />

            <ol class="breadcrumb bc-3">
                <li>
                    <a href="dashboard.php"><i class="fa-home"></i>Home</a>
                </li>
               
                <li class="active">
                    <strong>Add Question Paper</strong>
                </li>
            </ol>

	



<div class="main-login-form1">
<form action="../scripts/quesScript.php" method="post" class="main-form1">
  
	<h1 class="form-heading">Create Question Paper</h1>
	<hr>
  <div class="main-container">
   <div class="onerow">
	 <!-- <input type="text" placeholder="Course Name" name="courseName" required> -->
	 <select name="courseId" id="inputCourse" class="form-control" >
						<?php
					$query="SELECT * FROM course";
					$result2=mysqli_query($con,$query);
				 	while($row=mysqli_fetch_array($result2)) 
					{
			 	 ?>
				 			<option value="<?php echo $row["courseId"]; ?>"><?php echo $row["courseName"]; ?></option>
					 <?php 
				 }
				 ?> 
						</select>
</div>
<hr/>
<div class="form-group">
    <input type="text" placeholder="Question " name="question" class="qs"  required>
		</div>

		<div class="col-md-12">
                                <div class="col-md-1">
		                            <input type="radio"  name="radio" value="1">
		</div>
        <div class="col-md-6">
		<input type="text" placeholder="Option 1" name="optionOne" required>
		</div>
        </div>
		<br/>
        <div class="col-md-12">
                                <div class="col-md-1">
		
		<input type="radio"  name="radio" value"2">
		</div>
        <div class="col-md-6">
		
		<input type="text" placeholder="Option 2" name="optionTwo" required>
		</div>
        </div>
		<br/>

		<div class="col-md-12">
                                <div class="col-md-1">
		
		<input type="radio"  name="radio" value="3">
		</div>

		<div class="col-md-6">
		<input type="text" placeholder="Option 3" name="optionThree" required>
		</div>
        </div>
		<br/>

        <div class="col-md-12">
                                <div class="col-md-1">
		<input type="radio"  name="radio" value="4">
		</div>

		<div class="col-md-6">
		<input type="text" placeholder="Option 4" name="optionFour" required>
		</div>
        </div>
		<br/>
		
 <hr/>
		<button type="submit" class="main-button">submit</button>
		<br/>   
  </div>

  
</form>
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