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

    <title>Online Classroom | Books</title>

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
                    <strong>Books</strong>
                </li>
            </ol>
            <h1>Books</h1>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group joined" id="accordion-test-2">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" class="collapsed">
                                        Add Book
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form role="form" id="form6" enctype="multipart/form-data" method="post" class="validate" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="control-label">Book Name</label>

                                            <input type="text" id="book" name="book" class="form-control" placeholder="Book Name" />
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Select Course:</label>
                                            <select name="courseId" id="courseId" class="form-control">
                                                <?php
                                                $query = "SELECT * FROM course";
                                                $result2 = mysqli_query($con, $query);
                                                while ($row = mysqli_fetch_array($result2)) {
                                                    ?>
                                                    <option value="<?php echo $row["courseId"]; ?>"><?php echo $row["courseName"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Upload PDF</label>

                                            <input type="file" name="classnotes" id="classnotes" accept=".pdf">
                                        </div>
                                        <div class="form-group">
                                            <!-- go to last script tag for form submit understanding -->
                                            <button type="submit" id="submit" class="btn btn-success">Submit</button>
                                            <button type="reset" class="btn">Reset</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-primary" data-collapsed="0">

                            <!-- panel body -->
                            <div class="panel-body">

                                <table class="table responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Book</th>
                                            <th>Course</th>
                                            <th>download</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if ($admin || $faculty) {
                                            // $query = "Select course.courseId, course.courseName, course_type.courseType from course Left JOIN course_type on course.courseTypeId = course_type.courseTypeId";
                                            $query = "Select book.bookId,book.bookName, course.courseName from book Left JOIN course on book.courseId = course.courseId";
                                        } else {
                                            $user = $_SESSION['key'];
                                            $query = "Select book.bookId,book.bookName, course.courseName from book Left JOIN course on book.courseId = course.courseId";
                                        }

                                        $result = mysqli_query($con, $query);
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td>
                                                    <?php echo $row["bookName"]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row["courseName"]; ?>
                                                </td>
                                                <td>
                                                    <a href="../books/<?php echo $row["bookId"]; ?>.pdf" target="_blank">
                                                        <button type="button" class="btn btn-white">
                                                            <i class="entypo-download"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                    } ?>
                                    </tbody>
                                </table>

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
                $("#form6").validate({
                    //setup rules for validation
                    rules: {
                        //element id courseName
                        book: {
                            //validation property
                            required: true,

                        },
                        courseId: {
                            //validation property
                            required: true,

                        },
                        classnotes: {
                            required: true
                        }
                    },
                    //display error messages
                    messages: {
                        //element id courseName
                        book: {
                            //validation property and message value
                            required: 'Required Field',

                        },
                        courseId: {
                            //validation property and message value
                            required: 'Required Field',

                        },
                        classnotes: {
                            required: 'Select File..'
                        },
                    },
                    //Call Element Validation on focus out from element
                    onfocusout: function(element) {
                        this.element(element);
                    },
                    //Call Form Validation on Submit
                    submitHandler: function(form) {
                        show_loading_bar(20);
                        var file_data = $('#classnotes').prop('files')[0];
                        var form_data = new FormData($("#form6")[0]);
                        // form_data.append('file', file_data);


                        $.ajax({
                            url: "../scripts/addbooksscript.php", // Your php script to wait for login connections and set login sessions
                            type: "POST",
                            enctype: 'multipart/form-data',
                            // You can access the user and pass with $_POST['username'] and $_POST['password']
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: form_data,
                            success: function(response_text) // response_text - is what you output based on user login information, lets suggest you output numbers i.e. 1 means logged in, 2 password incorred, 3 any other reason...
                            {

                                show_loading_bar(65);
                                if (response_text == 1) {
                                    show_loading_bar({
                                        pct: 100,
                                        finish: function(pct) {
                                            toastr.info("Book Inserted Successfully");
                                            hide_loading_bar();
                                        }
                                    });
                                } else if (response_text == 2) {
                                    show_loading_bar({
                                        pct: 100,
                                        finish: function(pct) {
                                            toastr.info("Course Updated Successfully");
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
                                document.getElementById("form6").reset();
                            },
                            error: function(response) {
                                toastr.info(response); // display error response from the PHP script
                            }
                        });
                        return false;
                    }
                });
            </script>

</body>

</html>