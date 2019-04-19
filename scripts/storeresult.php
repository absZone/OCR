<?php
session_start();
require('db.php');
$marks = 0;
$courseId = $_POST['courseId'];
$studentId = $_SESSION['key'];
for ($i = 1; $i <= 10; $i++) {
    $keyOp = $i . 'op';
    $keyQ = $i . 'q';
    if(isset($_POST[$keyOp])) {
        $option = $_POST[$keyOp];
    }
    else {
        $option = -1;
    }
    $questionId = $_POST[$keyQ];
    

    $query = "SELECT * FROM question WHERE questionId = '$questionId'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        if($option == $row['correctAns']) {
            $marks=$marks+1;

        }
    }
}
else {
    echo "no";
}
}
$sqlInsert = "INSERT INTO result(reusltId,courseId,studentId,marks) 
	VALUES(UUID(),'$courseId','$studentId','$marks')";
    if(mysqli_query($con,$sqlInsert))
    {
        header("Location:../pages/dashboard.php");
    }
    else {
        echo "error";
    }
?>
