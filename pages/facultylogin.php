<?php session_start();
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

    <title>Neon | Faculty Login</title>

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
                    <a href="viewCourse.php">Login</a>
                </li>
                <li class="active">
                    <strong>Faculty Login</strong>
                </li>
            </ol>
            <h1>Faculty Login</h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">

                        <!-- panel body -->
                        <div class="panel-body">
                            <form role="form" id="form8" method="post" class="validate">

                                <div class="form-group">
                                    <label class="control-label">Faculty User ID</label>

                                    <input type="text" placeholder="Faculty user id" name="loginId" id="loginId" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Password</label>

                                    <input type="password" placeholder="Password" name="password" id="password" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <!-- go to last script tag for form submit understanding -->
                                    <button type="submit" id="submit" class="btn btn-success">Login</button>
                                    <button type="reset" class="btn">Reset</button>
                                </div>

                            </form>


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
        <script>
        //form id #form1, call validation of form
        $("#form8").validate({
                //setup rules for validation
                rules: {
                    //element id courseName
                    loginId: {
                        
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    password: {
                        required: true,
                        minlength: 4,
                        maxlength: 20
                    }
                },
                //display error messages
                messages: {
                    //element id courseName
                    loginId: {
                        
                        required: 'Required Field',
                        minlength: 'Required atleast 3 characters',
                        maxlength: 'Required atmost 20 characters'
                    },
                    password: {
                        required: 'Enter Password',
                        minlength: 'Required atleast 4 characters',
                        maxlength: 'Required atmost 20 characters'
                    },
                },
                //Call Element Validation on focus out from element
                onfocusout: function(element) {
                    this.element(element);
                },
                //Call Form Validation on Submit
                submitHandler: function(form) {
                    show_loading_bar(20);
                    
                    var submitted_loginId = $("#loginId").val(),
                    submitted_password = $("#password").val();


                    $.ajax({
                        url: "../scripts/facultyloginscript.php", // Your php script to wait for login connections and set login sessions
                        type: "POST",
                        // You can access the user and pass with $_POST['username'] and $_POST['password']
                        data: {
                            loginId: submitted_loginId,//$_POST['CourseName']
                            password: submitted_password
                        },

                        success: function(response_text) // response_text - is what you output based on user login information, lets suggest you output numbers i.e. 1 means logged in, 2 password incorred, 3 any other reason...
                        {
                            show_loading_bar(65);
                            if (response_text == 1) {
                                show_loading_bar({
                                    pct: 100,
                                    finish: function(pct) {
                                        toastr.info("Login Successful");
                                        hide_loading_bar();
                                    }
                                });
                            } else if (response_text == 2) {
                                show_loading_bar({
                                    pct: 100,
                                    finish: function(pct) {
                                        toastr.info("Login Successful");
                                        hide_loading_bar();
                                    }
                                });
                            } else {
                                show_loading_bar({
                                    pct: 65,
                                    finish: function(pct) {
                                        toastr.info("Some Error Occured");
                                        hide_loading_bar();
                                    }
                                });
                            }
                            document.getElementById("form8").reset();
                        }
                    });
                    return false;
                }
            });
        </script>

</body>

</html> 