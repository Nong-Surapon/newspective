<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("Location: login.php");
  }
}
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
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


</head>
<body id="aThis">
  <?php include_once("navbar.php");?>


  <div class="container">

    <legend>ข้อมูลตำแหน่ง</legend>

    <form id="send-form" action="" method="post"> 
      <div class="row">
 
          <div class="form-group">
          <?php if(isset($_REQUEST["id"])){

           $Posit = queryPosit($_REQUEST["id"]);
           ?>

           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">ข้อมูลตำแหน่ง</h3>
            </div>
            <div class="panel-body">


              <div class="table-responsive">
                <table class="table">
                  <!--<tr  >
                    <td align="right">ลำดับ : </td>
                    <td><?php echo $Posit['id']?></td>
                  </tr>-->
                  <tr>
                    <td align="right">ตำแหน่ง : </td>
                    <td><?php echo $Posit['name']?></td>
                  </tr>
                  <tr>
                    <td align="right">รายละเอียด : </td>
                    <td><?php echo $Posit['detail']?></td>
                  </tr>
                  <tr>
                    <td align="right">สถานะ : </td>
                    <td><?php if($Posit['status']==1){ echo "ใช้งานปกติ"; }else{ echo "ยกเลิกการใช้งาน"; } ?></td>
                  </tr>
                  <tr>
                    <td align="right">ผู้สร้าง : </td>
                    <td><?php echo $Posit['usr_create']?></td>
                  </tr>
                  <tr>
                    <td align="right">วันที่สร้าง : </td>
                    <td><?php echo $Posit['dte_create']?></td>
                  </tr>
                  <tr>
                    <td align="right">ผู้แก้ไข : </td>
                    <td><?php echo $Posit['usr_update']?></td>
                  </tr>
                  <tr>
                    <td align="right">วันที่แก้ไข : </td>
                    <td><?php echo $Posit['dte_update']?></td>
                  </tr>
                </table>                
                <button type="button" class="btn btn-gold" style="float:right" onclick="location.href='<?php echo $domainName;?>/one/user-role-list.php'"><span class="glyphicon glyphicon-repeat"></span>  BACK</button>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

    </form>


<div style="clear: both"></div>


    <?php 

    include_once("footer.php");?>

  </div><!-- container -->

<script type="text/javascript">
$("#aThis a:contains('รายการตำแหน่ง')").parent().addClass('active');
$("#aThis a:contains('ตำแหน่ง ')").parent().addClass('active');
</script>

    </body>
    </html>