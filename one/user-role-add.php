<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");

$posit  = $_GET["posit"];
$detail = $_GET["detail"];
$logNme = $_GET["logNme"];
$status = $_GET["status"];

/*
$posit = 'admin';
$detail = 'admin';
$logNme = 'surapon';
$status = '0';
*/

$result = mysqli_query($mysqli,"INSERT INTO position (name,detail,status,usr_create,usr_update,dte_create,dte_update)
VALUES ('$posit','$detail','$status','$logNme','$logNme',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");

if($result){

$result = $mysqli->query("SELECT max(id) as maxID FROM position");
while ($row = $result->fetch_assoc()) {
        echo $row["maxID"];
    }
	
}

mysqli_close($mysqli);