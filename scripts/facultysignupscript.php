<?php

require('db.php');
   $loginId = mysqli_real_escape_string($con, $_POST['loginId']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$encryptPassword=md5($password);
	$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $experienceYears = mysqli_real_escape_string($con, $_POST['experienceYears']);
	$adress = mysqli_real_escape_string($con, $_POST['adress']);
	$phoneNo = mysqli_real_escape_string($con, $_POST['phoneNo']);
	$sqlInsert = "INSERT INTO faculty(facultyId,loginId,password,firstName,lastName,gender,age,course,experienceYear,adress,phoneNo) 
	VALUES(UUID(),'$loginId','$encryptPassword','$firstName','$lastName','$gender','$age','$course','$experienceYears','$adress','$phoneNo')";
	if(mysqli_query($con,$sqlInsert))
	{
            $msg = 'Congratulation you have successfully registered.';

	}
	else
	{
            $msg = 'Error while registering you...';
	
       
        
	}

echo $msg;
?>