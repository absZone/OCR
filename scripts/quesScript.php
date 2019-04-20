<?php
require('db.php');

$courseId=mysqli_real_escape_string($con,$_POST['courseId']);
$question=mysqli_real_escape_string($con,$_POST['question']);
$optionOne=mysqli_real_escape_string($con,$_POST['optionOne']);
$optionTwo=mysqli_real_escape_string($con,$_POST['optionTwo']);
$optionThree=mysqli_real_escape_string($con,$_POST['optionThree']);
$optionFour=mysqli_real_escape_string($con,$_POST['optionFour']);
$rightAns=mysqli_real_escape_string($con,$_POST['radio']);
$correctAns=(int)$rightAns;

$result="INSERT INTO question(questionId,courseId,question,optionOne,optionTwo,optionThree,optionFour,correctAns)
	 VALUES(UUID(),'$courseId','$question','$optionOne','$optionTwo','$optionThree','$optionFour','$correctAns')";

if(mysqli_query($con,$result))
	 {
 echo 'successful';
     }
     else{
         echo 'failed';
     }

// if(mysqli_num_rows($result)>0)
// {
//     session_start();
//     while($row=mysqli_fetch_assoc($result))
//     {
//         echo "facultyId= ".$row["facultyId"];
//         $_SESSION['key']=$row["facultyId"];
//     }
    
// }
// else{
//     echo 'login fail';
// }
// ?>