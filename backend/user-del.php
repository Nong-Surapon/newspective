<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("Location: login.php");
  }
}
include_once("../includes/conn.php");

$id = $_GET['id'];

if($result = $mysqli->query(" SELECT * FROM tb_users WHERE id='$id' ")) {
        
           if($row = $result->fetch_assoc()) {
                $uid = $row['uid'];
           	@unlink("profile_photo/".$row['photo']);

           	@unlink("documents/".$row['doc_identity']);
           	@unlink("documents/".$row['doc_home']);
           	@unlink("documents/".$row['doc_graduation']);
           	@unlink("documents/".$row['doc_resume']);
           	@unlink("documents/".$row['enlist']);
           	@unlink("documents/".$row['doc_social']);

            }

        }

 //delect tb_usr_salary   
$usr_salary = "DELETE FROM tb_usr_salary WHERE usr_uid='$uid'";
$mysqli->query($usr_salary);
//delete tb_usr_note
$usr_note = "DELETE FROM tb_usr_note WHERE usr_uid='$uid'";
$mysqli->query($usr_note);

// sql to delete a record
$sql = "DELETE FROM tb_users WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
    header("Location: user-list.php");
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$mysqli->close();
