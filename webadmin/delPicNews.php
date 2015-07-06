<?php
include_once("../includes/conn.php");
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$countOld = $_REQUEST["countId"];
$seq = $_REQUEST["seq"];

$strExp = explode("_",$name);

//echo $strExp[0]."<br>".$strExp[1]."<br>".$strExp[2]."<br>count=".$countOld."<br>";




//rename("file/news/".$name, "file/news/".$id);

@unlink("file/news/".$name);
$sql = "DELETE FROM w_news_file WHERE name='$name' ";
$mysqli->query($sql);
 
  for($i=$seq; $i<$countOld; $i++){
    
   $old = $strExp[0]."_".($i+1)."_".$strExp[2];
   $new = $strExp[0]."_".$i."_".$strExp[2];
   rename("file/news/".$old, "file/news/".$new);
   
   $mysqli->query("UPDATE w_news_file SET name='$new' where name='$old' ");
   
}

if($mysqli){
    header("Location: new-activities-edit.php?id=".$id);
}else{
    echo "Error";
}