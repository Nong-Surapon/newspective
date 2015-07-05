<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");

$name= $_GET["project"];
$detail = $_GET["detail"];
$logNme = $_GET["logNme"];
$status = $_GET["status"];


$result = mysqli_query($mysqli,"INSERT INTO project (name,detail,status,usr_create,usr_update,dte_create,dte_update)
VALUES ('$name','$detail','$status','$logNme','$logNme',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)");

if($result){

$result = $mysqli->query("SELECT max(id) as maxID FROM project");
while ($row = $result->fetch_assoc()) {
        echo $row["maxID"];
    }	
}

mysqli_close($mysqli);