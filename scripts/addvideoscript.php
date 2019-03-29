<?php
require('db.php');



if (isset($_POST['submit'])) {
        $videoName = $_FILES['file']['videoName'];
        $temp = $_FILES['file']['tmp_name'];
        $courseId = mysqli_real_escape_string($con, $_POST['courseId']);

        move_uploaded_file($temp, "upload/", $videoName);
        $query = "INSERT INTO 'video'('videoId','courseId','videoName') VALUES ('UUID','$courseId','$videoName')";
        if (mysqli_query($con, $query)) {
                echo "submitted to database";
            }

        {
            echo "" . $videoName . "has been submitted";
        }
    }
 