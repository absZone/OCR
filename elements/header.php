<?php
include('./scripts/globalVar.php');
?>
<div class="overlay"></div>
<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                ONLINE CLASSROOM
            </a>
        </li>
        <?php
        if (!(isset($_SESSION['key']))) {
            ?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a tabindex="-1" href="adminlogin.php">Admin Login</a></li>
                <li><a tabindex="-1" href="facultylogin.php">Faculty Login</a></li>
                <li><a tabindex="-1" href="studentlogin.php">Student Login</a></li>


            </ul>
        </li>
        <?php

    }
    ?>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <?php
            if (isset($_SESSION['key']) && $_SESSION['type'] == 'admin') {
                ?>  
                <li><a tabindex="-1" href="./addcourse.php">Add Course</a></li>
                <?php

            }
            ?>

                <li><a tabindex="-1" href="#">View Courses</a></li>
            </ul>
        </li>
        <?php
        if (isset($_SESSION['key'])) {
            ?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exam <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <?php
            if (isset($_SESSION['key']) && $_SESSION['type'] == 'faculty') {
                ?>
                <li><a tabindex="-1" href="questionpaper.php">Create Question Paper</a></li>
                <?php 
            }


            if (isset($_SESSION['key']) && $_SESSION['type'] == 'student') { ?>
                <li><a tabindex="-1" href="#">Give Exams</a></li>
             <?php 
        } ?>
            </ul>
        </li>
            <?php 
        } ?>
        <li class="dropdown">
        <?php
        if (isset($_SESSION['key'])) {
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Videos<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <?php
            if (isset($_SESSION['key']) && $_SESSION['type'] == 'faculty') {
                ?>
                <li><a tabindex="-1" href="addvideo.php">Add Videos</a></li>
                <?php 
            }


            if (isset($_SESSION['key']) && $_SESSION['type'] == 'student') { ?>
                <li><a tabindex="-1" href="#">View Videos</a></li>
                <?php 
            } ?>
            </ul>
        </li>
        <?php 
    } ?>
        <li class="dropdown">
        <?php
        if (isset($_SESSION['key'])) {
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Books<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <?php
            if (isset($_SESSION['key']) && $_SESSION['type'] == 'faculty') {
                ?>
                <li><a tabindex="-1" href="addbook.php">Add Books </a></li>
                <?php 
            }


            if (isset($_SESSION['key']) && $_SESSION['type'] == 'student') { ?>
                <li><a tabindex="-1" href="#">View Books </a></li>
                <?php 
            } ?>
            </ul>
        </li>
        <li>
        <?php 
    } ?>
            <a href="results.php">Results</a>
        </li>
        <li>
            <a href="#">Notification</a>
        </li>
        <li>
            <a href="#">Counselling</a>
        </li>
        <li>
            <a href="#">Certification</a>
        </li>
        <li>
            <a href="news.php">Newsfeed</a>
        </li>
        <li>
            <a href="#">Mediakit</a>
        </li>
        <li>
            <a href="#">Feedback</a>
        </li>
        <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Another action</a>
					<ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					</ul>
					</li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
				</li> -->


        <!--
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a tabindex="-1" href="#">HTML</a></li>
					<li><a tabindex="-1" href="#">CSS</a></li>
					<li class="dropdown-submenu">
						<a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
						<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
						<li class="dropdown-submenu">
							<a class="test" href="#">Another dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
							<li><a href="#">3rd level dropdown</a></li>
							<li><a href="#">3rd level dropdown</a></li>
							</ul>
						</li>
						</ul>
					</li>
					</ul>
				</li>
-->

    </ul>
</nav>


<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div id="colorlib-logo"><a href="index.php">ONLINE CLASSROOM</a></div>
                </div>
                <p>
                    <div>
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="carrer.php">Career</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <?php
                            if ($isLogIn) {
                                ?>
                            <li class="btn-cta"><a href="./scripts/logout.php"><span>Logout</span></a></li>
                            <?php 
                        } else {
                            ?>
                            <li class="btn-cta"><a href="adminlogin.php"><span>Login</span></a></li>
                            <?php

                        }
                        ?>
                        </ul>
                    </div>
                </p>
            </div>
        </div>
    </div>
</nav> 