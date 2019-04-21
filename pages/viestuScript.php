<?php

require('db.php');
$data = array();
   $studentId = mysqli_real_escape_string($con, $_POST['StudentId']);
   
   $query = "Select student.studentId, student.firstName, student.courseTypeId from student
   WHERE student.studentId = '$studentId'";
   $result = mysqli_query($con, $query);
   while ($row = mysqli_fetch_array($result)) {
    $firstName = $row['firstName'];
    $courseTypeId = $row['courseTypeId'];
    $data['firstName'] = $firstName;
    $data['courseTypeId'] = $courseTypeId;
    echo json_encode($data);
   }
   mysqli_close($con);
?>