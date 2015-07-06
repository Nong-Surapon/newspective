<?php

include_once("../includes/conn.php");
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];




    if($result = $mysqli->query("select b.name from w_news a, w_news_file b where a.id = '$id' and a.id = b.news_id ")){
        while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            @unlink("file/portfolio/".$name);
            $mysqli->query("DELETE FROM w_news_file WHERE name='$name' ");   
        }
    }

$mysqli->query("DELETE FROM w_news WHERE id='$id' ");
if($mysqli){
    header("Location: new-activities-list.php");
}else{
    echo "Error";
}
