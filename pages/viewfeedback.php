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


    <title>Online Classroom | Feedback</title>


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
                <li>
                    <a href="#"> View Feedback</a>
                </li>

            </ol>
            <h1> View Feedback</h1>
            <br>
            <div class="panel panel-default">
                
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Feedback</th>
                            
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM comments";
                        $res = mysqli_query($con, $sql);
                        ?>
                        <?php
                        while ($r = mysqli_fetch_assoc($res)) {
                            ?>
                            <tr>
                                

                                <td><?php echo $r['name'] ?></td>
                                <td><?php echo $r['subject']; ?></td>
                                
                                

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>




            </div>

</body>

</html>