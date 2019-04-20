<?php session_start();
require('../scripts/db.php');
if ($_SESSION['type'] == 'student') { } else if ($_SESSION['type'] == 'faculty') {
	header("Location:dashboard.php");
} else {
	header("Location:dashboard.php");
}
if (isset($_POST["courseId"])) {
	$courseId = $_POST["courseId"];
} else {
	header("Location:giveexam.php");
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
							<div id="question">
								<form method="post" action="../scripts/storeresult.php">
									<?php
									$getQuestions = "SELECT * FROM question where question.courseId = '$courseId' ORDER by RAND() LIMIT 10";

									$result = mysqli_query($con, $getQuestions);
									if (mysqli_query($con, $getQuestions)) {
										$i = 0;
										if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_array($result)) {
												$i++;
												?>
												<input type="hidden" name="courseId" value="<?php echo $courseId ?>" class="form-control">
												<div class="form-group">
													<span><?php echo $i . ") " . $row['question']; ?></span>
													<input type="hidden" name="<?php echo $i . 'q' ?>" value="<?php echo $row['questionId'] ?>" class="form-control">
												</div>
												<div class="col-md-12">
													<div class="col-md-1">

														<input type="radio" name="<?php echo $i . 'op' ?>" value="1" class="form-control">
													</div>
													<div class="col-md-6">

														<input type="text" placeholder="Option 1" value="<?php echo $row['optionOne']; ?>" disabled name="optionOne" class="form-control" required>

													</div>
												</div>
												<div class="col-md-12">
													<div class="col-md-1">
														<input type="radio" name="<?php echo $i . 'op' ?>" value="2" class="form-control">
													</div>


													<div class="col-md-6">
														<input type="text" placeholder="Option 2" value="<?php echo $row['optionTwo']; ?>" disabled name="optionTwo" class="form-control" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="col-md-1">
														<input type="radio" name="<?php echo $i . 'op' ?>" value="3" class="form-control">
													</div>


													<div class="col-md-6">
														<input type="text" placeholder="Option 3" value="<?php echo $row['optionThree']; ?>" disabled name="optionThree" class="form-control" required>
													</div>
												</div>

												<div class="col-md-12">
													<div class="col-md-1">
														<input type="radio" name="<?php echo $i . 'op' ?>" value="4" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="Option 4" value="<?php echo $row['optionFour']; ?>" disabled name="optionFour" class="form-control" required>
													</div>
												</div>
											<?php }
									} else {
										echo " no records";
									}
								} else {
									echo " fail ";
								}
								?>
									<div class="form-group">
										<!-- go to last script tag for form submit understanding -->
										<button id="submit" class="btn btn-success">Submit</button>
										<button type="reset" class="btn">Reset</button>
									</div>
								</form>

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
		<script src="../assets/js/jquery.validate.min.js"></script>


		<!-- Demo Settings -->
		<script src="../assets/js/neon-demo.js"></script>
		<script src="../assets/js/toastr.js"></script>
		<!-- <script>
        //form id #form1, call validation of form
        $("#form1").validate({
                //setup rules for validation
                rules: {
                    //element id courseName
                    courseName: {
                        //validation property
                        required: true,
                    },
                    courseType: {
                        required: true
                    }
                }
                //Call Element Validation on focus out from element
                onfocusout: function(element) {
                    this.element(element);
                }
                }
            });
        </script>						 -->

</body>

</html>