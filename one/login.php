<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (isset($_COOKIE['uid'])) {
        $_SESSION['uid'] = $_COOKIE['uid'];
    }
    if (isset($_SESSION['uid'])) {
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
        <link href="../css/newspective.css" rel="stylesheet">
        <style type="text/css">
            body{
                background-color: #ECE9E0;
            }
            #box{
                margin-top: 10%;                
            }
        
         

            .inner-addon { 
                position: relative; 
            }

            /* style icon */
            .inner-addon .glyphicon {
              position: absolute;
              padding: 10px;
              pointer-events: none;
            }

            /* align icon */
            .left-addon .glyphicon  { left:  0px;}
            .right-addon .glyphicon { right: 0px;}

            /* add padding  */
            .left-addon input  { padding-left:  30px; }
            .right-addon input { padding-right: 30px; }
            .gray{color:#CBCBBB}
            .gray2{color:#a0a0a0}
        </style>
    </head>
    <body>

        <div class="container">
            <form class="form-signin" role="form" method="post" action="chkLogin.php" onsubmit="return chkval();">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" id="box">
                        <div align="center"><img src="image/login.gif"></div><br>
                        
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-envelope gray"></i>
                            <input class="form-control" placeholder="Email" name="email" type="email" id="email" autofocus>
                        </div>
                        <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-asterisk gray"></i>
                            <input class="form-control" placeholder="Password" name="password" type="password" id="password" value=""><br>
                        </div>
                        <button type="submit" class="btn btn-lg btn-gold btn-block">Sign In</button><br>
                        <input name="remember" type="checkbox" > <span class="gray2">Remember me</span>
   
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>
<?php
if (isset($_GET["err"]) == "1") {
    echo '<script language="javascript">';
    echo 'alert("ไม่พบข้อมูล")';
    echo '</script>';
}
?>
        
        <script>
        function chkval(){
            if(document.getElementById("email").value == ""){
                document.getElementById("email").focus();
                alert('กรุณากรอกอีเมล์');
                return false;
            }
            if(document.getElementById("password").value == ""){
                document.getElementById("password").focus();
                alert('กรุณากรอกรหัสผ่าน');
                return false;
            }
        }
        </script>


</body>
</html>
