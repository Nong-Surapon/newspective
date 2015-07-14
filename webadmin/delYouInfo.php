<?php
include_once("../includes/conn.php");
$id = $_GET["id"];
$seq=$_GET["seq"];
$countOldY=$_GET["countOldY"];
$pjId = $_GET["pjId"];

$sql = "DELETE FROM web_information_res WHERE id='$id' ";
$mysqli->query($sql);
 
  for($i=$seq; $i<$countOldY; $i++){
    $id++;

   $mysqli->query("UPDATE web_information_res SET num='$i' where id='$id'");
 
}


if($mysqli){
    header("Location: information-edit.php?id=".$pjId);
}else{
    echo "Error";
}