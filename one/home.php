<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("Location: login.php");
  }
}

    include_once("../includes/conn.php");
    //if come in use cookie
    include_once("../includes/functions.php");
    $queryUser =  queryUser($_SESSION["uid"]);
    $_SESSION["fname_th"] = $queryUser['fname_th'];
    $_SESSION["possibility"] = $queryUser['possibility'];
    //if come in use cookie
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Newspective</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
<body>
<?php include_once("navbar.php");?>
<div class="container-fluid">
    <div class="row">
    <br>
    <br>
        <div class="col-sm-2">
            <?php include_once("sidebar.php");?>
        </div>
        <div class="col-sm-10">
            <img src="image/home.jpg" alt="Smiley face" height="100%" width="100%">
            <?php include_once("footer.php");?>
        </div>
    </div>
  </div><!-- container -->