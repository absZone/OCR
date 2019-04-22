<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="../assets/images/favicon.ico">

	<title>Online Classroom | Certificate</title>

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

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
<?php include('../elements/header.php'); ?>

	<div class="main-content">
    <?php include('../elements/tobbar.php'); ?>
	<hr />
		
<ol class="breadcrumb bc-3" >
    <li>
        <a href="dashboard.php"><i class="fa-home"></i>Home</a>
    </li>
    
    <li class="active">
        <strong>Add</strong>
    </li>
</ol>				
<h1>CERTIFICATE</h1>
<br>
<div class="row">
    <div class="col-md-12">
    <div class="panel panel-primary" data-collapsed="0">
					
					<!-- panel body -->
					<div class="panel-body">
					
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br><br>
	  
								
						
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
	   <?php if ($_SESSION['type'] == 'student') {
                        $userId = $_SESSION['key'];
                        $query = "Select student.studentId, student.firstName, student.lastName, course_type.courseType from student Inner Join course_type on student.courseTypeId = course_type.courseTypeId where studentId = '$userId'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result))
							{ ?>
       <span style="font-size:30px"><b><?php echo $row["firstName"] ?> <?php echo $row["lastName"] ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed</i></span> <br/><br/>
       <span style="font-size:30px"><?php echo $row["courseType"]?></span> <br/><br/>
       <span style="font-size:25px"><i>Dated : <?php echo date("d-m-Y"); ?></i></span><br>
      <!-- #set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM dd, yyyy")) -->
      <span style="font-size:30px"></span>
	  <?php }
	  }
	  } ?>
</div>
</div>
						
						
					</div>
					
				</div>
    </div>
</div>
    

	
	
</div>




	<!-- Bottom scripts (common) -->
	<script src="../assets/js/gsap/TweenMax.min.js"></script>
	<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/joinable.js"></script>
	<script src="../assets/js/resizeable.js"></script>
	<script src="../assets/js/neon-api.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="../assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="../assets/js/neon-demo.js"></script>

</body>
</html>