<?php
include_once("../includes/conn.php");
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$countOld = $_REQUEST["countId"];
$seq = $_REQUEST["seq"];

$strExp = explode("_",$name);

@unlink("file/".$name);
$sql = "DELETE FROM web_information_res WHERE text_data='$name' ";
$mysqli->query($sql);
 
  for($i=$seq; $i<$countOld; $i++){
    
   $old = $strExp[0]."_".($i+1)."_".$strExp[2];
   $new = $strExp[0]."_".$i."_".$strExp[2];
   rename("file/".$old, "file/".$new);
   
   $mysqli->query("UPDATE web_information_res SET text_data='$new' where text_data='$old' ");
   /*echo $i."<br>";
   echo $old."<br>";
   echo $new."<br>";*/
}


if($mysqli){
    header("Location: information-edit.php?id=".$id);
}else{
    echo "Error";
}