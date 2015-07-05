<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['webadmin'])) {
    if($_SESSION['webadmin']!="admin"){
        header("Location:index.php");
    }
}
?>

