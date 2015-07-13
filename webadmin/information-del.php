<?php

include_once("../includes/conn.php");
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];




    if($result = $mysqli->query("select b.text_data from web_information a, web_information_res b where a.id = '$id' and a.id = b.web_information_id ")){
        while($row = $result->fetch_assoc()) {
            $name = $row["text_data"];
            @unlink("file/".$name);
            $mysqli->query("DELETE FROM web_information_res WHERE text_data='$name' ");   
        }
    }

$mysqli->query("DELETE FROM web_information WHERE id='$id' ");
if($mysqli){
    header("Location: information-list.php");
}else{
    echo "Error";
}
