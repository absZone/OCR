<?php
require('db.php');

$loginId=mysqli_real_escape_string($con,$_POST['loginId']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$encryptPassword=md5($password);
$loginQuery="select * from admin WHERE loginId='$loginId' and password='$encryptPassword'";
$result=mysqli_query($con,$loginQuery);
if(mysqli_num_rows($result)>0)
{
    session_start();
    while($row=mysqli_fetch_assoc($result))
    {
		$msg = 1;
        echo "adminId= ".$row["adminId"];
        $_SESSION['key']=$row["adminId"];
        $_SESSION['type']='admin';
    }
}
else{
    $msg = 3;
}

echo $msg;
?>