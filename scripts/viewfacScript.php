<?php

require('db.php');
$data = array();
   $facultyId = mysqli_real_escape_string($con, $_POST['FacultyId']);
   
   $query = "Select faculty.facultyId, faculty.firstName, faculty.course from faculty
   WHERE faculty.facultyId = '$facultyId'";
   $result = mysqli_query($con, $query);
   while ($row = mysqli_fetch_array($result)) {
    $firstName = $row['firstName'];
    $course = $row['course'];
    $data['firstName'] = $firstName;
    $data['course'] = $course;
    echo json_encode($data);
   }
   mysqli_close($con);
?>