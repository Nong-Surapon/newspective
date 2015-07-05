<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");
include_once("../includes/functions.php");

$remember="";
$email = $_POST["email"];
$password = $_POST["password"];

if(isset($_POST["remember"])){
$remember = $_POST["remember"];
}

//echo $email." ".$password." ".$remember;

  if($result = $mysqli->query("SELECT * FROM tb_users where email = '$email' and password = '$password' and status = 1 ")) {

    if ($row = $result->fetch_assoc()) {
    	
    	$_SESSION['uid'] = $row["uid"];
        $uid = $row["uid"];
        
        $queryUser =  queryUser($_SESSION["uid"]);
        $_SESSION["fname_th"] = $queryUser['fname_th'];
        $_SESSION["possibility"] = $queryUser['possibility'];
        
        // last login
        $mysqli->query("UPDATE tb_users SET last_login=".CURRENT_TIMESTAMP." where uid='$uid' ");

        //check remember
        if($remember=="on"){
        	setcookie("uid", $row["uid"]);	
        }
            if($_SESSION['url']!=null){
                header("Location: ".$_SESSION['url']);
            }else{
                 header("Location: home.php");
            }
           
        }else{
            header("Location: login.php?err=1");
        }
        

       $result->close();    
    }

    


?>



