<?php
require('db.php');
extract($_POST);
 
$target_dir = "../videos/";
define ("filesplace","../videos");
 
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
    $result = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], filesplace."/$videoId.mp4");
     
    if($result == 1)
     {
      $videoName = mysqli_real_escape_string($con, $_POST['name']);
      $courseId = mysqli_real_escape_string($con, $_POST['courseId']);
      $sqlInsert = "INSERT INTO video(videoId,courseId,videoName) 
         VALUES('$videoId','$courseId','$videoName')";
         if(mysqli_query($con,$sqlInsert))
         {
            header("Location:../pages/addvideos.php");
         }
         else
         {
            header("Location:../pages/addvideos.php");
         }
    }
     }
?>
