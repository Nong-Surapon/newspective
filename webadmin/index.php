<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    if (isset($_COOKIE["webadmin"])) {
        header("Location: new-activities-list.php");
    }
    if(isset($_SESSION['webadmin'])){
        header("Location: new-activities-list.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ligin</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="../css/style.css" rel="stylesheet">-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <!--for datepicker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="css/newspective.css" rel="stylesheet">

    <script>
    $(function () {
        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
    </script>
    <!--for datepicker and use footer_picker.php-->
    <style type="text/css">
    .inputForm:first-child{display:none; }
    
    </style>

</head>
<body>
    <?php
    if(isset($_POST["inputEmail"])){
        if($_POST["inputEmail"]=="webadmin@newspective.co.th" && $_POST["inputPassword"] == "1234"){
        if($_POST["rememberme"]=="on"){
        	setcookie("webadmin", "admin", strtotime( '+30 days' ));	
        }    
            $_SESSION['webadmin']="admin";  
            
            echo '<script type="text/javascript">';
            echo 'window.location.href="new-activities-list.php";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }
    
    ?>
    <div class="container" style="width:500px;">

        <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
              <input type="checkbox" name="rememberme"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
