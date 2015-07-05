<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");
include_once("../includes/functions.php");

//$_POST["id"];
$uid = $_POST["uid"];
$pj_code = $_POST["pj_code"];
$pj_name = $_POST["pj_name"];
$pj_detail= $_POST["pj_detail"];
$pj_create = $_POST["pj_create"];
$pj_use = $_POST["pj_use"];
$pj_clear = $_POST["pj_clear"];
$pay_by = $_POST["pay_by"];
$chk_transfer = $_POST["chk_transfer"];
$total = $_POST["total"];

$mailAdmin = $_POST["mailAdmin"];
$emailRequest = $_POST["email"];
$username = $_POST["username"];
$phone = $_POST["phone"];
$account = $_POST["account"];
$totalNum = number_format($total);
$nameEn = $_POST["nameEn"];


if($pj_code!=""){
$result = $mysqli->query("SELECT max(pj_code)+1 as maxCode FROM tb_project");
if ($row = $result->fetch_assoc()) {
        $pj_code = $row["maxCode"];
    }
}else{
    $pj_code = 1000;
}

$result = mysqli_query($mysqli,"INSERT INTO tb_project (id,uid,pj_code,pj_name,pj_detail,pj_create,pj_use,pj_clear,pay_by,chk_transfer,total,total2,jobcode_sts)
VALUES (null,'$uid','$pj_code','$pj_name','$pj_detail','$pj_create','$pj_use','$pj_clear','$pay_by','$chk_transfer','$total','','1')");

if($result){
    
    for ($x = 1; $x <= 6; $x++) {
        $pj_list = $_POST["list".$x];
        $amount = $_POST["amount".$x];$amount = str_replace(",","",$amount);
        $result = mysqli_query($mysqli,"INSERT INTO tb_project_detail (id,seq,pj_code,pj_list,amount1)
        VALUES (null,'$x','$pj_code','$pj_list','$amount') ");     
    }
}else{ echo "INSERT ERROR";}

$result = $mysqli->query("SELECT max(pj_code) as maxID FROM tb_project");
if ($row = $result->fetch_assoc()) {
    $message1="";
    $maxID = $row["maxID"];
    
    $queryPjDtl=queryPjDtl($pj_code);
    while($pjDtl = $queryPjDtl->fetch_assoc()) {
        if($pjDtl['pj_list']!=""){
            
            $pj_list = $pjDtl['pj_list'];
            $seq = $pjDtl['seq'];
            $amount1 = number_format($pjDtl['amount1']);

            $message1 .=  "$seq. $pj_list $amount1 บาท<br>";
        }
    }
    
    
    }else{ echo "max pj_code Error"; }



    //send Mail
    $subject = "Advance :: ".$pj_name;
    $message = "
    <html>
    <head>
    <title></title>
    <style type='text/css'>
      body {
              font-family: Arial, Tahoma, 'Trebuchet MS', Verdana, Helvetica, sans-serif;
              color:#333;
      }
      .title {
              font-size: 14px;
              font-weight: bold;
              color:#FFF;
              background-color: #B39137;
              padding-right: 5px;
      }
      .detail {
              font-size: 14px;
              padding-left: 5px;
      }
      .regular {
              color:#0F9449;
              font-weight:bold;
      }
      .know {font-size:18px;
      color: #003300;
      font-weight: bold;
      }
      .reg {
              color:#333;
      }
      .warning {
              font-weight: bold;
              color: #C00;
      }
      </style>
    </head>
    <body>
        <table width='650' border='0' cellspacing='0' cellpadding='5'>
            <tr>
              <td colspan='2' align='left' valign='top'><p><a href='http://www.newspective.co.th/'><img src='http://newspective.co.th/one/image/newspective-logo-email.gif' alt='Newspective.co.th' width='185' height='80' border='0' align='right'></a>              
              <p><b>เรื่อง</b> เบิกเงิน advance</p></td>
            </tr>
            <tr>
              <td width='180' align='right' valign='top' class='title'><b>ข้อมูลโครงการ </b></td>
              <td width='450' align='left' valign='top'>&nbsp;</td>
            </tr>
              <tr>
              <td align='right' valign='top' class='title'>Job Code:</td>
              <td align='left' valign='top' class='detail'>$pj_code</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>ชือโครงการ:</td>
              <td align='left' valign='top' class='detail'>$pj_name</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>รายละเอียด:</td>
              <td align='left' valign='top' class='detail'>$pj_detail</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>สถานะ:</td>
              <td align='left' valign='top' class='detail'>รออนุมัติ</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>&nbsp;</td>
              <td align='left' valign='top' class='detail'>&nbsp;</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'><strong>ข้อมูลผู้ขอ </strong></td>
              <td align='left' valign='top' class='detail'>&nbsp;</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>ชื่อ-สกุล:</td>
              <td align='left' valign='top' class='detail'>$username</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>เบอร์โทร:</td>
              <td align='left' valign='top' class='detail'>$phone</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>อีเมล์:</td>
              <td align='left' valign='top' class='detail'>$emailRequest</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>เลขที่บัญชี:</td>
              <td align='left' valign='top' class='detail'>$account</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>วันที่ใช้เงิน:</td>
              <td align='left' valign='top' class='detail'>$pj_use</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>กำหนดวันเคลียร์:</td>
              <td align='left' valign='top' class='detail'>$pj_clear</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>จำนวนเงิน:</td>
              <td align='left' valign='top' class='detail'>$totalNum</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>จ่ายโดย:</td>
              <td align='left' valign='top' class='detail'>$pay_by</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>&nbsp;</td>
              <td align='left' valign='top' class='detail'>&nbsp;</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'><strong>รายการค่าใช้จ่าย</strong> </td>
              <td align='left' valign='top' class='detail'>&nbsp;</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>&nbsp;</td>
              <td align='left' valign='top' class='detail'>$message1</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>รวม:</td>
              <td align='left' valign='top' class='detail'>$totalNum บาท</td>
            </tr>
            <tr>
              <td align='right' valign='top' class='title'>ทำรายการต่อ:</td>
              <td align='left' valign='top' class='detail'><p><a href='$domainName/one/advance-2.php?id=$maxID'>เว็บไซต์ คลิกที่นี่</a></p></td>
            </tr>
            <tr>
              <td align='right' valign='top'>&nbsp;</td>
              <td align='left' valign='top'>&nbsp;</td>
            </tr>
            <tr>
              <td colspan='2' align='left' valign='top'><p>&nbsp;</p>
                <p align='center'>--------------------------------------------------------------------------------------------------------</p>
              <p class='know'>&nbsp;</p></td>
            </tr>
          </table>
    </body>
    </html>
    ";
    
    $to = $mailAdmin;
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers 
    $headers .= 'From: '.$nameEn.' <'.$emailRequest.'>' . "\r\n";
    $headers .= 'Cc: '.$emailRequest.'' . "\r\n";

    mail($to,$subject,$message,$headers);
    //echo "to = ".$to."<br>subject = ".$subject."<br>message = ".$message."<br>headers = ".$headers;

    header("Location: advance-2.php?id=".$row["maxID"]);

mysqli_close($mysqli);
