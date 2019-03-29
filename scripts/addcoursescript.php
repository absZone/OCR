<?php

require('db.php');
   $courseName = mysqli_real_escape_string($con, $_POST['CourseName']);
   $courseType = mysqli_real_escape_string($con, $_POST['CourseType']);
   $sqlInsert = "INSERT INTO course(courseId,courseTypeId,courseName) 
	VALUES(UUID(),'$courseType','$courseName')";
    if(mysqli_query($con,$sqlInsert))
    {
        $msg = 1;
    }
else
{
        $msg = 3;  
}

echo $msg;
?>