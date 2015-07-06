<?php
include_once("../includes/conn.php");
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];

$countOld = $_REQUEST["countId"];
$seq = $_REQUEST["seq"];

$strExp = explode("_",$name);

@unlink("file/portfolio/".$name);
$sql = "DELETE FROM w_na_portfolio_file WHERE name='$name' ";
$mysqli->query($sql);
 
  for($i=$seq; $i<$countOld; $i++){
    
   $old = $strExp[0]."_".($i+1)."_".$strExp[2];
   $new = $strExp[0]."_".$i."_".$strExp[2];
   rename("file/portfolio/".$old, "file/portfolio/".$new);
   
   $mysqli->query("UPDATE w_na_portfolio_file SET name='$new' where name='$old' ");
   /*echo $i."<br>";
   echo $old."<br>";
   echo $new."<br>";*/
}


if($mysqli){
    header("Location: na-portfolio-edit.php?id=".$id);
}else{
    echo "Error";
}