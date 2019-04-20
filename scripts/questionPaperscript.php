<?php

require('db.php');
   $question = mysqli_real_escape_string($con, $_POST['question']);
   $optionOne = mysqli_real_escape_string($con, $_POST['optionOne']);
   $optionTwo = mysqli_real_escape_string($con, $_POST['optionTwo']);
   $optionThree = mysqli_real_escape_string($con, $_POST['optionThree']);
   $optionFour = mysqli_real_escape_string($con, $_POST['optionFour']);
   $correctAns = mysqli_real_escape_string($con, $_POST['correctAns']);

   $sqlInsert = "INSERT INTO question(questionId,question,optionOne,optionTwo,optionThree,optionFour,correctAns) 
	VALUES(UUID(),'$question','$optionOne','$optionTwo','$optionThree','$optionFour','$correctAns')";
    if(mysqli_query($con,$sqlInsert))
    {
        $msg = 1;
    }
else
{
        $msg = 3;  
}

echo $msg;
?>