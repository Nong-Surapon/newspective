<?php
include_once("config.php");
$mysqli = new mysqli("".DB_HOST."","".DB_USER."","".DB_PASS."","".DB_NAME."");


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* change character set to utf8 */
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
} else {
   // printf("Current character set: %s\n", $mysqli->character_set_name());
}


?>