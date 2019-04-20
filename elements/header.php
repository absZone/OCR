<?php session_start();
if ($_SESSION['type'] == 'student') {
	$student = true;
	$faculty = false;
	$admin = false;
} else if ($_SESSION['type'] == 'faculty') {
	$student = false;
	$faculty = true;
	$admin = false;
} else {
	$student = false;
	$faculty = false;
	$admin = true;
}
?>
<div class="sidebar-menu">

	<div class="sidebar-menu-inner">

		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<p style="font-size:15px"><b>ONLINE CLASSSROOM</b></p>
				</a>
			</div>

			<!-- logo collapse icon -->
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon">
					<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>


			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation">
					<!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>

		</header>


		<ul id="main-menu" class="main-menu">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<li>
				<a href="../pages/dashboard.php">
					<i class="entypo-gauge"></i>
					<span class="title">Dashboard</span>
				</a>
			</li>
			<li class="has-sub">
				<a href="">
					<i class="entypo-layout"></i>
					<span class="title">Course</span>
				</a>
				<ul>
					<?php if ($admin) { ?>
						<li>
							<a href="../pages/addCourse.php">
								<span class="title">Add Course</span>
							</a>
						</li>
					<?php } ?>
					<li>
						<a href="../pages/viewCourse.php">
							<span class="title">View Course</span>
						</a>
					</li>
					<?php if ($admin) { ?>
						<li>
							<a href="../pages/assignCourse.php">
								<span class="title">Assign Course</span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</li>
			<li class="has-sub">
				<a href="layout-api.html">
					<i class="entypo-users"></i>
					<span class="title">Faculties</span>
				</a>
				<ul>
					<?php if ($admin) { ?>
						<li>
							<a href="../pages/addFaculty.php">
								<span class="title">Add Faculty</span>
							</a>
						</li>
					<?php } ?>
					<li>
						<a href="layout-collapsed-sidebar.html">
							<span class="title">View Faculty</span>
						</a>
					</li>
				</ul>
			</li>
			<?php if ($admin || $faculty) { ?>
				<li class="has-sub">
					<a href="layout-api.html">
						<i class="entypo-vcard"></i>
						<span class="title">Students</span>
					</a>
					<ul>
						<?php if ($admin) { ?>
							<li>
								<a href="addStudent.php">
									<span class="title">Add Students</span>
								</a>
							</li>
						<?php } ?>
						<li>
							<a href="layout-collapsed-sidebar.html">
								<span class="title">View Students</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
			<li class="has-sub">
				<a href="layout-api.html">
					<i class="entypo-doc-text"></i>
					<span class="title">Exam</span>
				</a>
				<ul>
					<?php if ($admin || $faculty) { ?>
						<li>
							<a href="quesPaper.php">
								<span class="title">Add Question & Answers</span>
							</a>
						</li>
					<?php } ?>
					<?php if ($student) { ?>
						<li>
							<a href="givexam.php">
								<span class="title">Give Exams</span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</li>
			<li>
				<a href="index.html">
					<i class="entypo-docs"></i>
					<span class="title">Result</span>
				</a>
			</li>
			<li>
				<a href="addvideos.php">
					<i class="entypo-play"></i>
					<span class="title">Videos</span>
				</a>
			</li>
			<li>
				<a href="addbooks.php">
					<i class="entypo-book"></i>
					<span class="title">Books</span>
				</a>
			</li>
			<li>
				<a href="counselling.php">
					<i class="entypo-direction"></i>
					<span class="title">Counselling</span>
				</a>
			</li>

			<li>
				<a href="certificate.php">
					<i class="entypo-flag"></i>
					<span class="title">Certification</span>
				</a>
			</li>
			<li>
				<a href="newsfeed.php">
					<i class="entypo-newspaper"></i>
					<span class="title">Newsfeed</span>
				</a>
			</li>
			<li>
				<a href="index.html">
					<i class="entypo-docs"></i>
					<span class="title">Mediakit</span>
				</a>
			</li>
			<li>
				<a href="carrer.php">
					<i class="entypo-direction"></i>
					<span class="title">Carrer</span>
				</a>
			</li>
			<li class="has-sub">
				<a href="layout-api.html">
					<i class="entypo-flag"></i>
					<span class="title">Games</span>
				</a>
				<ul>

					<li>
						<a href="solowords.php">
							<span class="title">solo words</span>
						</a>
					</li>

					
						<li>
							<a href="rombh.php">
								<span class="title">rombh</span>
							</a>
						</li>

					</ul>
				</li>
			</ul>

		</div>

</div>