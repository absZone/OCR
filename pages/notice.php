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


  <title>Online Classroom | Notices</title>


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
          <a href="#">Notices</a>
        </li>

      </ol>
      <h1>Post Notice</h1>
      <br>

      <div class="panel panel-default">

        <div class="panel-body">
          <form method="post" id="formf">
            <div class="form-group">
              <label for="exampleInputEmail1">Notice Heading</label>
              <input type="text" name="heading" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"> content</label>
              <textarea name="content" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Posted By</label>
              <input type="text" name="posted" class="form-control" id="exampleInputEmail1" value="<?php if ($_SESSION['type'] == 'student') {
                                                                                                      $userId = $_SESSION['key'];
                                                                                                      $query = "select * from student WHERE studentId='$userId'";
                                                                                                      $result = mysqli_query($con, $query);
                                                                                                      if (mysqli_num_rows($result) > 0) {
                                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                                          echo $row["firstName"] . " " . $row["lastName"];
                                                                                                        }
                                                                                                      }
                                                                                                    } else if ($_SESSION['type'] == 'faculty') {
                                                                                                      $userId = $_SESSION['key'];
                                                                                                      $query = "select * from faculty WHERE facultyId='$userId'";
                                                                                                      $result = mysqli_query($con, $query);
                                                                                                      if (mysqli_num_rows($result) > 0) {
                                                                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                                                                          echo $row["firstName"] . " " . $row["lastName"];
                                                                                                        }
                                                                                                      }
                                                                                                    } else {
                                                                                                      echo 'Admin';
                                                                                                    }

                                                                                                    ?>">
            </div>

            <button type="submit" class="btn btn-primary" onClick="setTimeout('clearform()', 1500 );">Submit</button>
          </form>
        </div>
      </div>

      <?php
      if (isset($_POST) & !empty($_POST)) {
        $heading = mysqli_real_escape_string($con, $_POST['heading']);
        $content = mysqli_real_escape_string($con, $_POST['content']);
        $posted = mysqli_real_escape_string($con, $_POST['posted']);

        $isql = "INSERT INTO notice (heading,content,posted) VALUES ('$heading', '$content', '$posted')";
        $ires = mysqli_query($con, $isql) or die(mysqli_error($con));
        if ($ires) {
          $smsg = "Your Notice Posted Successfully";
          echo $smsg;
        } else {
          $fmsg = "Failed to post";
          echo $fmsg;
        }
      }
      ?>

</body>

</html>