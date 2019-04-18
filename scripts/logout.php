<?php
session_start();
if(isset($_SESSION['key'])) {
    unset($_SESSION['key']);
}
header("Location:../index.php");
?>