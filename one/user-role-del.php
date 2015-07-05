<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("Location: login.php");
  }
}
include_once("../includes/conn.php");

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM position WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
    header("Location: user-role-list.php");
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$mysqli->close();


