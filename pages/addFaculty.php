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

    <title>Neon | Add Faculty</title>

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
                    <a href="viewFaculty.php">Faculty</a>
                </li>
                <li class="active">
                    <strong>Add</strong>
                </li>
            </ol>
            <h1>Create a New Faculty</h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" data-collapsed="0">

                        <!-- panel body -->
                        <div class="panel-body">
                            <form role="form" id="form2" method="post" class="validate">

                                <div class="form-group">
                                    <label class="control-label">Login Name</label>

                                    <input type="text" id="loginId" name="loginId" class="form-control" placeholder="Login Name" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Password</label>

                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">First Name</label>

                                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Last Name</label>

                                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" />
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Gender </label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" id="gender" value="Male" checked>Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" id="gender" value="Female">Female
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="control-label">Age</label>

                                    <input type="text" id="age" name="age" class="form-control" placeholder="Age" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Course</label>

                                    <input type="text" id="course" name="course" class="form-control" placeholder="Course" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Experience Years</label>

                                    <input type="text" id="experienceYears" name="experienceYears" class="form-control" placeholder="Experience Years" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Address</label>

                                    <input type="text" id="adress" name="adress" class="form-control" placeholder="Address" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Phone Number</label>

                                    <input type="text" id="phoneNo" name="phoneNo" class="form-control" placeholder="Phone Number" />
                                </div>


                                <div class="form-group">
                                    <!-- go to last script tag for form submit understanding -->
                                    <button type="submit" id="submit" class="btn btn-success">Create</button>
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
            //form id #form2, call validation of form
            $("#form2").validate({
                //setup rules for validation
                rules: {
                    
                    loginId: {
                        
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        maxlength: 20
                    },
                    firstName: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    lastName: {
                        required: true,
                        minlength: 3,
                        maxlength: 20
                    },
                    gender: {
                        required: true
                    },
                    age: {
                        required: true,
                        number: true,
                        min: 25,
                        max: 60
                    },
                    course: {
                        required: true
                    },
                    experienceYears: {
                        required: true,
                        number: true,    
                    },
                    adress: {
                        required: true,
                        minlength: 3,
                        maxlength: 40
                    },
                    phoneNo: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    }
                },
                //display error messages
                messages: {
                    
                    loginId: {
                        
                        required: 'Required Field',
                        minlength: 'Required atleast 3 characters',
                        maxlength: 'Required atmost 20 characters'
                    },
                    password: {
                        required: 'Enter Password',
                        minlength: 'Required atleast 8 characters',
                        maxlength: 'Required atmost 20 characters'
                    },
                    firstName: {
                        required: 'Enter Your First Name',
                        minlength: 'Required atleast 3 characters',
                        maxlength: 'Required atmost 20 characters'
                    },
                    lastName: {
                        required: 'Enter Your Last Name',
                        minlength: 'Required atleast 3 characters',
                        maxlength: 'Required atmost 20 characters'
                    },
                    gender: {
                        required: 'Select Your Gender'
                    },
                    age: {
                        required: 'Enter Your Age',
                        number: 'Invalid Entry',
                        min: 'Age should be more than 25',
                        max: 'Age should be less than 60'
                    },
                    course: {
                        required: 'Enter Course'
                    },
                    experienceYears: {
                        required: 'Enter Experience Years',
                        number: 'Invalid Entry'
                    },
                    adress: {
                        required: 'Enter Your Address',
                        minlength: 'Required atleast 3 characters',
                        maxlength: 'Required atmost 40 characters'
                    },
                    phoneNo: {
                        required: 'Enter Your Phone No',
                        minlength: 'Required 10 numbers',
                        maxlength: 'Required 10 numbers',
                        number: 'Invalid Entry'
                    }
                },
                //Call Element Validation on focus out from element
                onfocusout: function(element) {
                    this.element(element);
                },
                //Call Form Validation on Submit
                submitHandler: function(form) {
                    show_loading_bar(20);

                    var submitted_loginId = $("#loginId").val(),
                        submitted_password = $("#password").val(),
                        submitted_firstName = $("#firstName").val(),
                        submitted_lastName = $("#lastName").val(),
                        submitted_gender = $("#gender").val(),
                        submitted_age = $("#age").val(),
                        submitted_course = $("#course").val(),
                        submitted_experienceYears = $("#experienceYears").val(),
                        submitted_adress = $("#adress").val(),
                        submitted_phoneNo = $("#phoneNo").val();


                    $.ajax({
                        url: "../scripts/addfacultyscript.php", // Your php script to wait for login connections and set login sessions
                        type: "POST",
                        // You can access the user and pass with $_POST['username'] and $_POST['password']
                        data: {
                            loginId: submitted_loginId,
                            password: submitted_password ,
                            firstName: submitted_firstName,
                            lastName: submitted_lastName,
                            gender: submitted_gender,
                            age: submitted_age,
                            course: submitted_course,
                            experienceYears: submitted_experienceYears,
                            adress: submitted_adress,
                            phoneNo: submitted_phoneNo
                        },

                        success: function(response_text) // response_text - is what you output based on user login information, lets suggest you output numbers i.e. 1 means logged in, 2 password incorred, 3 any other reason...
                        {
                            show_loading_bar(65);
                            if (response_text == 1) {
                                show_loading_bar({
                                    pct: 100,
                                    finish: function(pct) {
                                        toastr.info("Faculty Added Successfully");
                                        hide_loading_bar();
                                    }
                                });
                            } else if (response_text == 2) {
                                show_loading_bar({
                                    pct: 100,
                                    finish: function(pct) {
                                        toastr.info("Faculty Updated Successfully");
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
                            document.getElementById("form2").reset();
                        }
                    });
                    return false;
                }
            });
        </script>

</body>

</html> 