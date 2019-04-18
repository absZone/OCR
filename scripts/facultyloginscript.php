<?php
require('db.php');

$loginId=mysqli_real_escape_string($con,$_POST['loginEmail']);
$password=mysqli_real_escape_string($con,$_POST['loginPassword']);
$encryptPassword=md5($password);
$loginQuery="select * from faculty WHERE loginId='$loginId' and password='$encryptPassword'";
$result=mysqli_query($con,$loginQuery);

if(mysqli_num_rows($result)>0)
{
    session_start();
    while($row=mysqli_fetch_assoc($result))
    {
        $_SESSION['key']=$row["facultyId"];
        $_SESSION['type']='faculty';
    }
    header("Location:../pages/dashboard.php");
}
else{
    header("Location:../facultyLogin.php");
}
?>