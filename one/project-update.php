<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");


$name  = $_GET["project"];
$detail = $_GET["detail"];
$logNme = $_GET["logNme"];
$status = $_GET["status"];
$id 	= $_GET["id"];




$sql = "UPDATE project SET name='$name', detail='$detail', status='$status', usr_update='$logNme'
WHERE id='$id' ";

if ($mysqli->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$mysqli->close();