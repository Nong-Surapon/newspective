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
  <?php include_once("navbar.php");


           $Posit = queryPosit($_REQUEST["id"]);
           ?>


  <div class="container">

    <legend>แก้ไขข้อมูลตำแหน่งใหม่</legend>

    <form id="send-form" action="user-role-list.php" method="post"> 
      <div class="row">
  
          <div class="form-group">
            <label class="control-label" for="posit">ตำแหน่ง <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="posit" name="posit" value="<?php echo $Posit['name']?>">            

            <label class="control-label" for="detail">รายละเอียด <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="detail" name="detail" value="<?php echo $Posit['detail']?>">
            <input type="hidden" class="form-control" id="logNme" name="logNme" value="<?php echo $_SESSION["fname_th"];?>">
            <input type="hidden" class="form-control" id="response-num" name="response-num">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $Posit['id']?>">

            <label for="status">สะถานะ <span class="text-danger">*</span></label>
            <select class="form-control" id="status" name="status">
              <option value="">-เลือกสถานะ-</option>
              <option <?php if($Posit['status']==1){ echo "selected";}?> value="1">ใช้งานปกติ</option>
              <option <?php if($Posit['status']==0){ echo "selected";}?> value="0">ยกเลิกการใช้งาน</option>

            </select>
            <br>
            <button type="button" class="btn btn-gold" onclick="checkval()"><span class="glyphicon glyphicon-floppy-disk"></span>  UPDATE</button>
            <button type="reset" value="Reset" class="btn" onclick="location.href='<?php echo $domainName;?>/one/user-role-list.php'"><span class="glyphicon glyphicon-repeat"></span>  BACK</button>            
            <br>
            <div id="response"></div>
          </div>

       
      </div>
    </form>



    <?php 

    include_once("footer.php");?>

  </div><!-- container -->


  <script type="text/javascript">


  
  function checkval(){

    errormsg = '';
    if (document.getElementById('posit').value == '') {
     errormsg += 'กรุณากรอกข้อมูล ตำแหน่ง\n';
   }

   if (document.getElementById('detail').value == '') {
    errormsg += 'กรุณากรอกข้อมูล รายละเอียด\n';
  }

  if (document.getElementById('status').value == '') {
    errormsg += 'กรุณาเลือก สถานะ\n';
  }


  if (errormsg != '') {
    alert(errormsg);
    return false;
  } else {       
    send_form();             
    return true;   

  }        
}


function send_form()
{

  if (window.XMLHttpRequest) {
    xmlHTTP_opp = new XMLHttpRequest();
        } // code for IE7+, Firefox, Chrome, Opera, Safari
        else {
          xmlHTTP_opp = new ActiveXObject("Microsoft.XMLHTTP");
        } // code for IE6, IE5


        xmlHTTP_opp.onreadystatechange = function ()
        {
          if (xmlHTTP_opp.readyState == 4 && xmlHTTP_opp.status == 200)
          {
            //document.getElementById('response-back').innerHTML = xmlHTTP_opp.responseText;
            //document.getElementById('response-num').value = xmlHTTP_opp.responseText;
            //url = document.getElementById('response-num').value;
            //document.getElementById("send-form").action = ""+'?id='+url;
            document.getElementById('send-form').submit();  

          }
        }
        id = document.getElementById('id').value;
        posit = document.getElementById('posit').value;
        detail = document.getElementById('detail').value;
        logNme = document.getElementById('logNme').value;
        status = document.getElementById('status').value;

        str_param = 'posit=' + posit + '&id=' + id + '&detail=' + detail + '&logNme=' + logNme + '&status=' + status ;


        xmlHTTP_opp.open('GET', '<?php echo $domainName ?>/one/user-role-update.php?' + str_param, true);
        xmlHTTP_opp.send(); 

        document.getElementById('response').innerHTML = 'Sending . . .';


      }


      </script>
      <script type="text/javascript">
$("#aThis a:contains('รายการตำแหน่ง')").parent().addClass('active');
$("#aThis a:contains('ตำแหน่ง ')").parent().addClass('active');
</script>

    </body>
    </html>