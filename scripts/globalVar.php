<?php
include('db.php');
$isLogIn = isset($_SESSION['key']);
if (isset($_SESSION['key'])) {
    $id = $_SESSION['key'];
    $loginType = $_SESSION['type'];
}
?>