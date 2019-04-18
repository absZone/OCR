<?php

require('db.php');

$loginId = mysqli_real_escape_string($con, $_POST['loginId']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$encryptPassword = md5($password);
$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
$age = mysqli_real_escape_string($con, $_POST['age']);
$courseTypeId = mysqli_real_escape_string($con, $_POST['courseTypeId']);
$phoneNo = mysqli_real_escape_string($con, $_POST['gender']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$gender = mysqli_real_escape_string($con, $_POST['phoneNo']);
//Steps to generate as a Local Variable, so it can be access
$studentQuery = " Select UUID() as uid";
$studentIdResult = mysqli_query($con, $studentQuery);
if (mysqli_num_rows($studentIdResult) > 0) {
		while ($row = mysqli_fetch_assoc($studentIdResult)) {
				$studentId = $row["uid"];
				//UUID stored in this variable
			}
	}
$sqlInsert = "INSERT INTO student(studentId,loginId,password,firstName,lastName,age,courseTypeId,gender,address,phoneNo)
	VALUES('$studentId','$loginId','$encryptPassword','$firstName','$lastName','$age','$courseTypeId','$gender','$address','$phoneNo')";
if (mysqli_query($con, $sqlInsert)) {
		$msg = 1;
		if ($courseTypeId != '9cb4211e-461f-11e9-acdc-c8d3fff0df35') {
				$courseQuery = "Select * from course Where courseTypeId='$courseTypeId'";
				$result = mysqli_query($con, $courseQuery);
				if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
								$courseId = $row["courseId"];
								$insertCourse = "INSERT INTO student_course VALUE(UUID(),'$studentId','$courseId')";
								mysqli_query($con, $insertCourse);
							}
					}
			}
	} else {
		$msg = 3;
	}

echo $msg;
