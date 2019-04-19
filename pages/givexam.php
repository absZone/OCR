<?php session_start();
require('../scripts/db.php');
if ($_SESSION['type'] == 'student') { } else if ($_SESSION['type'] == 'faculty') {
	header("Location:../dashboard.php");
} else {
	header("Location:../dashboard.php");
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

	<title>Neon | Give Exam</title>

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
					<a href="index.html"><i class="fa-home"></i>Home</a>
				</li>
				<li>
					<a href="viewCourse.php">Exams</a>
				</li>
				<li class="active">
					<strong>Give</strong>
				</li>
			</ol>
			<h1>Select course</h1>
			<br>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary" data-collapsed="0">

						<!-- panel body -->
						<div class="panel-body">
							<div id="courseSel">
								<div class="form-group">
									<label class="control-label">CourseType:</label>
									<select required id="courseId" name="courseId" class="form-control">
										<option value="">Select ..</option>
										<?php
										$userId = $_SESSION['key'];
										$query = "SELECT course.courseId, course.courseName FROM course
										INNER JOIN student_course
										on course.courseId = student_course.courseId
										WHERE student_course.studentId = '$userId'";
										$result = mysqli_query($con, $query);
										while ($row = mysqli_fetch_array($result)) {
											?>
											<option value="<?php echo $row["courseId"]; ?>">
												<?php echo $row["courseName"]; ?>
											</option>
										<?php
									} ?>
									</select>
								</div>

								<div class="form-group">
									<!-- go to last script tag for form submit understanding -->
									<button id="give" class="btn btn-success">Get Questions</button>
									<button type="reset" class="btn">Reset</button>
								</div>

							</div>


							<script>
								$("#give").click(function() {
									if ($("#courseId").val() != "")
										$("#courseSel").hide();
								});
							</script>


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
		<script src="../assets/js/jquery.validate.min.js"></script>


		<!-- Demo Settings -->
		<script src="../assets/js/neon-demo.js"></script>
		<script src="../assets/js/toastr.js"></script>


</body>

</html>