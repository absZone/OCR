<?php

require('db.php');
   $courseName = mysqli_real_escape_string($con, $_POST['courseName']);
   $courseType = mysqli_real_escape_string($con, $_POST['courseTypeId']);
   $sqlInsert = "INSERT INTO course(courseId,courseTypeId,courseName) 
	VALUES(UUID(),'$courseType','$courseName')";
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