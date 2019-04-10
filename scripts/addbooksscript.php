<?php
require('db.php');



if (isset($_POST['submit'])) {
        $bookName = $_FILES['file']['bookName'];
        $temp = $_FILES['file']['tmp_name'];
        $courseId = mysqli_real_escape_string($con, $_POST['courseId']);

        move_uploaded_file($temp, "uploadvideo/", $bookName);
        $query = "INSERT INTO 'video'('bookId','courseId','bookName') VALUES ('UUID','$courseId','$bookName')";
        if (mysqli_query($con, $query)) {
                echo "submitted to database";
            }

        {
            echo "" . $bookName . "has been submitted";
        }
    }
 ?>