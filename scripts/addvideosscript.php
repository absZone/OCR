<?php
require('db.php');
extract($_POST);
 
$target_dir = "../videos";
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $studentQuery = " Select UUID() as uid";
 $studentIdResult = mysqli_query($con, $studentQuery);
 if (mysqli_num_rows($studentIdResult) > 0) {
       while ($row = mysqli_fetch_assoc($studentIdResult)) {
             $videoId = $row["uid"];
             //UUID stored in this variable
          }
    }
    if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
    {
        echo "File Format Not Suppoted";
    } 
     
    else
    {
     
    $video_path=$_FILES['fileToUpload']['name'];
     
     
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
     
    echo "uploaded ";
     
    }
    ?>
