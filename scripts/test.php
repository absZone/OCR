<?php
if(isset($_SESSION['key']))
{
    echo 'you are log in';
} else {
    echo 'you are not log in'.$_SESSION['key'];
}
?>