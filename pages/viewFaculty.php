<?php session_start();
require('../scripts/db.php');
if($_SESSION['type']=='student') {
	$student=true;
	$faculty=false;
	$admin=false;
}
else if($_SESSION['type']=='faculty') {
	$student=false;
	$faculty=true;
	$admin=false;
}
else {
	$student=false;
	$faculty=false;
	$admin=true;
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

    <title>ONLINE CLASSROOM | Faculties</title>

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
                    <a href="viewFaculty.php">Courses</a>
                </li>
            </ol>
            <h1>View All Faculties</h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">

                        <!-- panel body -->
                        <div class="panel-body">

                            <table class="table responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    if($admin || $faculty) {
                                        $query = "Select faculty.facultyId, faculty.firstName, faculty.course from faculty";
                                    } else {
                                        $user = $_SESSION['key'];
                                        $query = "Select course.courseName, course_type.courseType from student_course Inner Join course on student_course.courseId = course.courseId Inner Join course_type on course.courseTypeId = course_type.courseTypeId where student_course.studentId = '$user' ";
                                    }
									
									$result = mysqli_query($con, $query);
									$i = 0;
									while ($row = mysqli_fetch_array($result)) {
										$i++;
										?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>
                                            <?php echo $row["firstName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["course"]; ?>
                                        </td>
                                        <td>

                                            <button type="button" onclick="showViewModal('<?php echo $row['facultyId']; ?>');" class="btn btn-white">
                                                <i class="entypo-eye"></i>
                                            </button>
                                            <button type="button" onclick="showEditModal('<?php echo $row['facultyId']; ?>');" class="btn btn-info">
                                                <i class="entypo-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="entypo-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php 
								} ?>
                                </tbody>
                            </table>
                            <script type="text/javascript">
                                function showViewModal(iD) {
                                    jQuery('#modal-view').modal('show', {
                                        backdrop: 'static'
                                    });

                                    jQuery.ajax({
                                        url: "../scripts/viewfacScript.php",
                                        type: "POST",

                                        data: {
                                            FacultyId: iD
                                        },
                                        dataType: 'json',
                                        success: function(data) {
                                            jQuery('#modal-view .modal-body #firstNameView').val(data.firstName);
                                            jQuery('#modal-view .modal-body #courseView').val(data.course);
                                        }
                                    });
                                }

                                function showEditModal(iD) {
                                    jQuery('#modal-edit').modal('show', {
                                        backdrop: 'static'
                                    });

                                    jQuery.ajax({
                                        url: "../scripts/viewfacScript.php", // Your php script to wait for login connections and set login sessions
                                        type: "POST",
                                        // You can access the user and pass with $_POST['username'] and $_POST['password']
                                        data: {
                                            FacultyId: iD
                                        },
                                        dataType: 'json',
                                        success: function(data) {
                                            jQuery('#modal-edit .modal-body #firstName').val(data.firstName);
                                            jQuery('#modal-edit .modal-body #course').val(data.course);
                                        }
                                    });
                                }
                            </script>


                        </div>

                    </div>
                </div>
            </div>




        </div>


        <div class="modal fade" id="modal-view">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">View Record</h4>
                    </div>

                    <div class="modal-body" style="padding:30px">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label">Faculty Name</label>

                                <input type="text" id="firstNameView" name="firstNameView" disabled class="form-control" placeholder="Faculty Name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label">Course Type</label>

                                <input type="text" id="courseView" name="courseView" disabled class="form-control" placeholder="Course Type" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Edit Record</h4>
                    </div>
                    <form role="form" id="form1" method="post" class="validate">
                        <div class="modal-body" style="padding:30px">
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label">Faculty Name</label>

                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Faculty Name" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label">CourseType:</label>
                                    <select id="courseType" name="courseType" class="form-control">
                                        <option value="">Select ..</option>
                                        <?php
										$query = "SELECT * FROM course";
										$result = mysqli_query($con, $query);
										while ($row = mysqli_fetch_array($result)) {
											?>
                                        <option value="<?php echo $row["courseTypeId"]; ?>">
                                            <?php echo $row["courseName"]; ?>
                                        </option>
                                        <?php 
									} ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit" class="btn btn-info">Save changes</button>

                        </div>
                    </form>
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
		<script src="../assets/js/jquery.validate.min.js"></script>
		


        <!-- JavaScripts initializations and stuff -->
        <script src="../assets/js/neon-custom.js"></script>


        <!-- Demo Settings -->
		<script src="../assets/js/neon-demo.js"></script>
		<script src="../assets/js/toastr.js"></script>
		<script src="ajaxJs/addCourse.js"></script>

</body>

</html> 
