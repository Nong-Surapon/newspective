<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");
$seq = $_GET["seq"];
$uid = $_GET["uid"];
$id = $_GET["id"];


$result = $mysqli->query("SELECT MAX(seq) as seq FROM tb_usr_note where usr_uid = '$uid' ");
    if($row = $result->fetch_assoc()) {
        $seqMax = $row["seq"];
        //echo "seqMax = ". $seqMax;
       }
       
       
$sql = "DELETE FROM tb_usr_note WHERE seq='$seq' and usr_uid='$uid' ";
$mysqli->query($sql);



for ($seq; $seq <= $seqMax; $seq++) {
    //echo "The number is: $x <br>";
  $seqP = $seq;
  $seqP++;
     $mysqli->query("UPDATE tb_usr_note SET seq='$seq'  where usr_uid='$uid' and seq='$seqP' ");
     //echo "seq=".$seq."<br>";
}

$result = $mysqli->query("SELECT note FROM tb_usr_note where usr_uid = '$uid' and seq = (select MAX(seq) from tb_usr_note where  usr_uid = '$uid') ");
if ($row = $result->fetch_assoc()) {
    $note_last = $row["note"];
}
$note = $note_last;
$mysqli->query("UPDATE tb_users SET note='$note_last'  where uid='$uid' ");

    header("Location: user-edit.php?id=".$id);



