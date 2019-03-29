<?php

require('db.php');
$data = array();
   $courseId = mysqli_real_escape_string($con, $_POST['CourseId']);
   
   $query = "Select course.courseId, course.courseTypeId, course.courseName, course_type.courseType from course Left JOIN course_type on course.courseTypeId = course_type.courseTypeId
   WHERE course.courseId = '$courseId'";
   $result = mysqli_query($con, $query);
   while ($row = mysqli_fetch_array($result)) {
    $courseName = $row['courseName'];
    $courseTypeId = $row['courseTypeId'];
    $courseType = $row['courseType'];
    $data['courseName'] = $courseName;
    $data['courseType'] = $courseType;
    $data['courseTypeId'] = $courseTypeId;
    echo json_encode($data);
   }
   mysqli_close($con);
?>