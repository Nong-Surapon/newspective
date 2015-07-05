<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(isset($_COOKIE['uid'])){
    $_SESSION['uid'] = $_COOKIE['uid'];
  }
  if(isset($_SESSION['uid'])) {
    header("Location: home.php");
  }
}

include_once("../includes/conn.php");
include_once("../includes/functions.php");

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
</head>
<body>

  <div class="container">
    <form class="form-signin" role="form" method="post" action="chkLogin.php">
      <div class="row" style="padding-top:10%">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-panel panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="remember" type="checkbox" >Remember Me
                    </label>
                  </div>

                  <button type="submit" class="btn btn-lg btn-success btn-block">Loginn</button>
                  
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <?php

if(isset($_GET["err"])=="1"){
  echo '<script language="javascript">';
  echo 'alert("ไม่พบข้อมูล")';
  echo '</script>';
}
  ?>


</body>
</html>
