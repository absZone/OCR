<?php
require('db.php');
 define ("filesplace","../books");
 $studentQuery = " Select UUID() as uid";
 $studentIdResult = mysqli_query($con, $studentQuery);
 if (mysqli_num_rows($studentIdResult) > 0) {
       while ($row = mysqli_fetch_assoc($studentIdResult)) {
             $bookId = $row["uid"];
             //UUID stored in this variable
          }
    }
 if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {

 if ($_FILES['classnotes']['type'] != "application/pdf") {
 echo "<p>Class notes must be uploaded in PDF format.</p>";
 } else {

 $name = $bookId;
 $result = move_uploaded_file($_FILES['classnotes']['tmp_name'], filesplace."/$name.pdf");
 if ($result == 1)
 {
   $bookName = mysqli_real_escape_string($con, $_POST['book']);
   $courseId = mysqli_real_escape_string($con, $_POST['courseId']);
   $sqlInsert = "INSERT INTO book(bookId,courseId,bookName) 
	VALUES('$bookId','$courseId','$bookName')";
	if(mysqli_query($con,$sqlInsert))
	{
            echo 1;
	}
	else
	{
            echo 3;

	}
 }

 else echo 3;
} #endIF
 } #endIF
?>