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
  <link href="../css/style.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>


</head>
<body id="aThis">
  <?php include_once("navbar.php");


           $project = queryProject($_REQUEST["id"]);
           ?>


  <div class="container">

    <legend>แก้ไขข้อมูลโครงการใหม่</legend>

    <form id="send-form" action="project-list.php" method="post"> 
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label" for="project">ชื่อโครงการ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="project" name="project" value="<?php echo $project['name']?>">            

            <label class="control-label" for="detail">รายละเอียด <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="detail" name="detail" value="<?php echo $project['detail']?>">
            <input type="hidden" class="form-control" id="logNme" name="logNme" value="<?php echo $_SESSION["first_name"];?>">
            <input type="hidden" class="form-control" id="response-num" name="response-num">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $project['id']?>">

            <label for="status">สะถานะ <span class="text-danger">*</span></label>
            <select class="form-control" id="status" name="status">
              <option value="">-เลือกสถานะ-</option>
              <option <?php if($project['status']==1){ echo "selected";}?> value="1">ใช้งานปกติ</option>
              <option <?php if($project['status']==0){ echo "selected";}?> value="0">ยกเลิกการใช้งาน</option>

            </select>
            <br>
            <button type="button" class="btn btn-warning" onclick="checkval()">แก้ไขข้อมูล</button>
            <button type="reset" value="Reset" class="btn" onclick="location.href='<?php echo $domainName;?>/backend/project-list.php'">ย้อนกลับ</button>            
            <br>
            <div id="response"></div>
          </div>
        </div>
        <div class="col-sm-6" id="response-back">

          

           <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">ข้อมูลโครงการ</h3>
            </div>
            <div class="panel-body">


              <div class="table-responsive">
                <table class="table">
                  <!--<tr  >
                    <td align="right">ลำดับ : </td>
                    <td><?php echo $project['id']?></td>
                  </tr>-->
                  <tr>
                    <td align="right">ชื่อโครงการ : </td>
                    <td><?php echo $project['name']?></td>
                  </tr>
                  <tr>
                    <td align="right">รายละเอียด : </td>
                    <td><?php echo $project['detail']?></td>
                  </tr>
                  <tr>
                    <td align="right">สถานะ : </td>
                    <td><?php if($project['status']==1){ echo "ใช้งานปกติ"; }else{ echo "ยกเลิกการใช้งาน"; } ?></td>
                  </tr>
                  <tr>
                    <td align="right">ผู้สร้าง : </td>
                    <td><?php echo $project['usr_create']?></td>
                  </tr>
                  <tr>
                    <td align="right">วันที่สร้าง : </td>
                    <td><?php echo $project['usr_update']?></td>
                  </tr>
                  <tr>
                    <td align="right">ผู้แก้ไข : </td>
                    <td><?php echo $project['dte_create']?></td>
                  </tr>
                  <tr>
                    <td align="right">วันที่แก้ไข : </td>
                    <td><?php echo $project['dte_update']?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </form>



    <?php 

    include_once("footer.php");?>

  </div><!-- container -->


  <script type="text/javascript">


  
  function checkval(){

    errormsg = '';
    if (document.getElementById('project').value == '') {
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
        project = document.getElementById('project').value;
        detail = document.getElementById('detail').value;
        logNme = document.getElementById('logNme').value;
        status = document.getElementById('status').value;

        str_param = 'project=' + project + '&id=' + id + '&detail=' + detail + '&logNme=' + logNme + '&status=' + status ;


        xmlHTTP_opp.open('GET', '<?php echo $domainName ?>/backend/project-update.php?' + str_param, true);
        xmlHTTP_opp.send(); 

        document.getElementById('response').innerHTML = 'Sending . . .';


      }


      </script>
      <script type="text/javascript">
$("#aThis a:contains('โครงการ ')").parent().addClass('active');
$("#aThis a:contains('รายการโครงการ')").parent().addClass('active');
</script>

    </body>
    </html>