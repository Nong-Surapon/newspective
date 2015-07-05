<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");
$seq = $_GET["seq"];
$uid = $_GET["uid"];
$id = $_GET["id"];


$result = $mysqli->query("SELECT MAX(seq) as seq FROM tb_usr_salary where usr_uid = '$uid' ");
    if($row = $result->fetch_assoc()) {
        $seqMax = $row["seq"];
        //echo "seqMax = ". $seqMax;
       }
       
 
if($seqMax==0){
     $mysqli->query("UPDATE tb_usr_salary SET salary=0  where usr_uid='$uid' ");
     header("Location: user-edit.php?id=".$id);
}else{
       
$sql = "DELETE FROM tb_usr_salary WHERE seq='$seq' and usr_uid='$uid' ";
$mysqli->query($sql);



for ($seq; $seq <= $seqMax; $seq++) {
    //echo "The number is: $x <br>";
  $seqP = $seq;
  $seqP++;
     $mysqli->query("UPDATE tb_usr_salary SET seq='$seq'  where usr_uid='$uid' and seq='$seqP' ");
     //echo "seq=".$seq."<br>";
}


$result = $mysqli->query("SELECT salary FROM tb_usr_salary where usr_uid = '$uid' and seq = (select MAX(seq) from tb_usr_salary where  usr_uid = '$uid') ");
if ($row = $result->fetch_assoc()) {
    $salary_last = $row["salary"];
}
$salary = $salary_last;
$mysqli->query("UPDATE tb_users SET salary='$salary_last'  where uid='$uid' ");

    header("Location: user-edit.php?id=".$id);

}

