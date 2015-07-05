<?php
ob_start(); session_start();
session_destroy();
$_SESSION['possibility']=null;
$_SESSION['uid']=null;
setcookie('uid', null);
header("Location: login.php");


?>