<?php

include_once("../includes/conn.php");
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];




    if($result = $mysqli->query("select b.name from w_na_portfolio a, w_na_portfolio_file b where a.id = '$id' and a.id = b.na_portfolio_id ")){
        while($row = $result->fetch_assoc()) {
            $name = $row["name"];
            @unlink("file/portfolio/".$name);
            $mysqli->query("DELETE FROM w_na_portfolio_file WHERE name='$name' ");   
        }
    }

$mysqli->query("DELETE FROM w_na_portfolio WHERE id='$id' ");
if($mysqli){
    header("Location: na-portfolio-list.php");
}else{
    echo "Error";
}
