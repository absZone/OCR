<?php 
session_start();
require('../scripts/db.php');
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

    <title>Neon | Add Course</title>

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
                <li class="active">
                    <a href="ui-panels.html">Courses</a>
                </li>
            </ol>
            <h1>View All Course</h1>
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
									$query = "Select student.loginId, course.courseName, course_type.courseType from course Left JOIN course_type on course.courseTypeId = course_type.courseTypeId";
									$result = mysqli_query($con, $query);
									$i = 0;
									while ($row = mysqli_fetch_array($result)) {
										$i++;
										?>
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td>
                                            <?php echo $row["courseName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["courseType"]; ?>
                                        </td>
                                        <td>

                                            <button type="button" onclick="showViewModal('<?php echo $row['courseId']; ?>');" class="btn btn-white">
                                                <i class="entypo-eye"></i>
                                            </button>
                                            <button type="button" onclick="showEditModal('<?php echo $row['courseId']; ?>');" class="btn btn-info">
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
                                        url: "../scripts/courseSel.php",
                                        type: "POST",

                                        data: {
                                            CourseId: iD
                                        },
                                        dataType: 'json',
                                        success: function(data) {
                                            jQuery('#modal-view .modal-body #courseNameView').val(data.courseName);
                                            jQuery('#modal-view .modal-body #courseTypeView').val(data.courseType);
                                        }
                                    });
                                }