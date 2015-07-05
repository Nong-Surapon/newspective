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
  <?php include_once("navbar.php");?>


  <div class="container">

    <legend>ข้อมูลผู้ใช้ระบบงาน</legend>

    <form id="send-form" action="" method="post"> 
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <!--<label class="control-label" for="pwdOur">รหัสประจำตัว</label>
            <input type="text" class="form-control" id="pwdOur" name="pwdOur">

            <label class="control-label" for="usr">ชื่อผู้ใช้งานระบบ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="usr" name="usr">

            <label class="control-label" for="pwd">รหัสผ่าน <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="pwd" name="pwd">

            <label class="control-label" for="fname">ชื่อ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="fname" name="fname">

            <label class="control-label" for="lname">นามสกุล <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="lname" name="lname">

            <label class="control-label" for="posit">ตำแหน่ง</label>
            <input type="text" class="form-control" id="posit" name="posit">

            <label for="possib">สิทธิ์การใช้งานระบบ <span class="text-danger">*</span></label>
            <select class="form-control" id="possib" name="possib">
               <option value="">-เลือกสิทธิ์การใช้งานระบบ-</option>
              <?php  $result = whilePosit();
                  while ($row = $result->fetch_assoc()) {
              ?>             
              <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
              
              <?php } ?>
            </select>

            <label class="control-label" for="email">อีเมล์</label>
            <input type="text" class="form-control" id="email" name="email">

            <label class="control-label" for="phone">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control" id="phone" name="phone">

            <label class="control-label" for="acc">เลขที่บัญชีธนาคาร</label>
            <input type="text" class="form-control" id="acc" name="acc">

            <input type="hidden" class="form-control" id="logNme" name="logNme" value="<?php echo $_SESSION["first_name"];?>">
            <input type="hidden" class="form-control" id="response-num" name="response-num">

            <label for="status">สถานะ <span class="text-danger">*</span></label>
            <select class="form-control" id="status" name="status">
              <option value="">-เลือกสถานะ-</option>
              <option value="1">ใช้งานปกติ</option>
              <option value="0">ยกเลิกการใช้งาน</option>
            </select>
            <br>
            <button type="button" class="btn btn-primary" onclick="checkval()">สร้างข้อมูล</button>
            <button type="reset" value="Reset" class="btn">ยกเลิก</button>            
            <br>
            <div id="response"></div>
          </div>
        </div>
        <div class="col-sm-6" id="response-back">-->

         <?php if(isset($_REQUEST["id"])){

           $user = queryUserID($_REQUEST["id"]);
           ?>

           <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">ข้อมูลตำแหน่ง</h3>
            </div>
            <div class="panel-body">
              <div align="center">
               <?php if($user["photo"]==""){?>
               <img src="profile_photo/defaultProfile.jpg" class="img-thumbnail" width="120" height="150">
               <?php }else{ ?>
               <img src="profile_photo/<?php echo $user["photo"]?>" class="img-thumbnail" width="120" height="150">
               <?php } ?>

               <div align="center"><b>รูปถ่าย</b></div>

             </div><br>

             <div class="table-responsive">
              <table class="table">
                <tr>
                 <td align="right">รหัสประจำตัว : </td>
                 <td><?php echo $user["uid"]?></td>
               </tr>            
               <tr>
                 <td align="right"><br><b>ข้อมูลส่วนตัว</b></td>
                 <td></td>
               </tr>
               <tr>
                 <td align="right">ชื่อ-สกุล ภาษาไทย : </td>
                 <td><?php echo $user["title_th"]." ".$user["fname_th"]." ".$user["lname_th"]?></td>
               </tr>              
               <tr>
                 <td align="right">ชื่อ-สกุล ภาษาอังกฤษ : </td>
                 <td><?php echo $user["title_en"]." ".$user["fname_en"]." ".$user["lname_en"]?></td>
               </tr>               
               <tr>
                 <td align="right">ชื่อเล่น : </td>
                 <td><?php echo $user["nname"]?></td>
               </tr>
               <tr>
                 <td align="right">เพศ : </td>
                 <td><?php echo $user["sex"]?></td>
               </tr>
                <tr>
                 <td align="right">วันเกิด : </td>
                 <td><?php if($user["birthday"]!="0000-00-00"){ echo $user["birthday"];}?></td>
               </tr>
               <tr>
                 <td align="right">สถานภาพ : </td>
                 <td><?php echo $user["status2"]?></td>
               </tr>
               <tr>
                 <td align="right">น้ำหนัก : </td>
                 <td><?php echo $user["weight"]?></td>
               </tr>
               <tr>
                 <td align="right">ส่วนสูง : </td>
                 <td><?php echo $user["height"]?></td>
               </tr>
                 <tr>
                 <td align="right">จบการศึกษา : </td>
                 <td><?php echo $user["graduation"]?></td>
               </tr>
               <tr>
                 <td align="right">สัญชาติ : </td>
                 <td><?php echo $user["nationality"]?></td>
               </tr>
               <tr>
                 <td align="right">ศาสนา : </td>
                 <td><?php echo $user["religion"]?></td>
               </tr>
               <tr>
                 <td align="right">เลขบัตรประจำตัวประชาชน : </td>
                 <td><?php echo $user["identity"]?></td>
               </tr>
               <tr>
                 <td align="right">เลขบัตรประกันสังคม : </td>
                 <td><?php echo $user["social"]?></td>
               </tr>
               <tr>
                 <td align="right">ขนาดเสื้อ : </td>
                 <td><?php echo $user["size"]?></td>
               </tr>
               <tr>
                 <td align="right">เบอร์โทรศัพท์มือถือ : </td>
                 <td><?php echo $user["mobile"]?></td>
               </tr>
               <tr>
                 <td align="right">เบอร์โทรศัพท์บ้าน : </td>
                 <td><?php echo $user["phone"]?></td>
               </tr>
                <tr>
                 <td align="right">เลชบัญชีกสิกรไทย : </td>
                 <td><?php echo $user["acc_kbank"]?></td>
               </tr>
               <tr>
                 <td align="right">เลขบัญชี UOB : </td>
                 <td><?php echo $user["acc_uob"]?></td>
               </tr>
               <tr>
                 <td align="right">ที่อยู่ปัจจุบัน : </td>
                 <td>
                    <?php 
                        if($user["an_no"]!=""){ echo "บ้านเลขที่ ".$user["an_no"]." ";}
                        if($user["an_moo"]!=""){ echo "หมู่ ".$user["an_moo"]." ";}
                        if($user["an_soi"]!=""){ echo "ซอย ".$user["an_soi"]." ";}
                        if($user["an_road"]!=""){ echo "ถนน ".$user["an_road"]." ";}
                        if($user["an_tumbon"]!=""){ echo "แขวง/ตำบล ".$user["an_tumbon"]." ";}
                        if($user["an_amphoe"]!=""){ echo "เขต/อำเภอ ".$user["an_amphoe"]." ";}
                        if($user["an_province"]!=""){ echo "จังหวัด ".$user["an_province"]." ";}
                        if($user["an_postcode"]!=""){ echo "รหัสไปรษณีย์ ".$user["an_postcode"]." ";}
                    ?>
                 </td>
               </tr>        
               <tr>
                 <td align="right">ที่อยู่ตามทะเบียนบ้าน : </td>
                 <td>
                    <?php 
                        if($user["ah_no"]!=""){ echo "บ้านเลขที่ ".$user["ah_no"]." ";}
                        if($user["ah_moo"]!=""){ echo "หมู่ ".$user["ah_moo"]." ";}
                        if($user["ah_soi"]!=""){ echo "ซอย ".$user["ah_soi"]." ";}
                        if($user["ah_road"]!=""){ echo "ถนน ".$user["ah_road"]." ";}
                        if($user["ah_tumbon"]!=""){ echo "แขวง/ตำบล ".$user["ah_tumbon"]." ";}
                        if($user["ah_amphoe"]!=""){ echo "เขต/อำเภอ ".$user["ah_amphoe"]." ";}
                        if($user["ah_province"]!=""){ echo "จังหวัด ".$user["ah_province"]." ";}
                        if($user["ah_postcode"]!=""){ echo "รหัสไปรษณีย์ ".$user["ah_postcode"]." ";}
                    ?>
                 </td>
               </tr>
             
              
               <tr>
                 <td align="right"><br><b>ระบบงาน</b></td>
                 <td></td>
               </tr>
               <tr>
                 <td align="right">บริษัทที่สังกัด : </td>
                 <td><?php echo queryCompany($user["companyId"]);?></td>
               </tr>
               <tr>
                 <td align="right">ตำแหน่ง : </td>
                 <td><?php echo $user["position"]?></td>
               </tr>
               <tr>
                 <td align="right">วันที่เริ่มงาน : </td>
                 <td><?php if($user["workday"]!="0000-00-00"){ echo $user["workday"];}?></td>
               </tr>
               <tr>
                 <td align="right">เงินเดือน : </td>
                 <td><?php echo $user["salary"]?></td>
               </tr>
               <tr>
                 <td align="right">หมายเหตุ : </td>
                 <td><?php echo $user["note"]?></td>
               </tr>
               <tr>
                 <td align="right">อื่นๆ : </td>
                 <td><?php echo $user["other"]?></td>
               </tr>
               <tr>
                 <td align="right">อีเมล์ : </td>
                 <td><?php echo $user["email"]?></td>
               </tr>
               <tr>
                 <td align="right">รหัส : </td>
                 <td><?php echo $user["password"]?></td>
               </tr>               
               <tr>
                 <td align="right">สิทธิในการใช้งาน : </td>
                 <td><?php echo $user["possibility"]?></td>
               </tr>
               <tr>
                 <td align="right">สถานะ : </td>
                 <td>
                     <?php 
                        if($user["status"]=="1"){ echo "ใช้งานปกติ"; }
                        if($user["status"]=="2"){ echo "ยกเลิกใช้งาน"; }
                    ?>
                 </td>
               </tr>
               
               
               
               
               
               
               <tr>
                 <td align="right">บัตรประชาชน (สำเนา): </td>
                 <td>
                  <?php if($user["doc_identity"]!=""){ ?>
                  <a href="documents/<?php echo $user["doc_identity"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
                  <?php } ?>
                </td>                  
              </tr>
              <tr>
               <td align="right">ทะเบียนบ้าน (สำเนา): </td>
               <td>
                <?php if($user["doc_home"]!=""){ ?>
                <a href="documents/<?php echo $user["doc_identity"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
                <?php } ?>
              </td>
            </tr>
            <tr>
             <td align="right">วุฒิการศึกษา/ใบเกรด (สำเนา): </td>
             <td>
              <?php if($user["doc_graduation"]!=""){ ?>
              <a href="documents/<?php echo $user["doc_graduation"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
              <?php } ?>
            </td>
          </tr>
          <tr>
           <td align="right">Resume (สำเนา): </td>
           <td>
            <?php if($user["doc_resume"]!=""){ ?>
            <a href="documents/<?php echo $user["doc_resume"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
            <?php } ?>
          </td>
        </tr>
        <tr>
         <td align="right">หลักฐานเกณฑ์ทหาร (สำเนา): </td>
         <td>
          <?php if($user["doc_identity"]!=""){ ?>
          <a href="documents/<?php echo $user["doc_identity"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
          <?php } ?>
        </td>
      </tr>      
      <tr>
       <td align="right">บัตรประกันสังคม (สำเนา): </td>
       <td>
        <?php if($user["doc_social"]!=""){ ?>
        <a href="documents/<?php echo $user["doc_social"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
        <?php } ?>
      </td>
    </tr>

    <tr>
     <td align="right">ผู้สร้าง : </td>
     <td><?php echo $user["usr_create"]?></td>
   </tr>
   <tr>
     <td align="right">เวลาสร้าง : </td>
     <td><?php echo $user["cre_date"]?></td>
   </tr>
   <tr>
     <td align="right">ผู้แก้ไขล่าสุด : </td>
     <td><?php echo $user["usr_update"]?></td>
   </tr>
   <tr>
     <td align="right">เวลาแก้ไข : </td>
     <td><?php echo $user["last_update"]?></td>
   </tr>
   <tr>
     <td align="right">ล็อกอินครั้งล่าสุด : </td>
     <td><?php echo $user["last_login"]?></td>
   </tr>


 </table>
</div>
</div>
</div>
<?php 
} 
$getID=$_REQUEST["id"];
?>
</div>
<a href="user-list.php" class="btn btn-default"><span class="glyphicon glyphicon-user"></span>  Staff</a>
<a href="user-edit.php?id=<?php echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>  Edit</a>
<a href="user-del.php?id=<?php echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span>  Delete</a>
</div>
</form>

<div style="clear: both"></div>

<?php 

include_once("footer.php");?>

</div><!-- container -->


<script type="text/javascript">



function checkval(){

  errormsg = '';
  if (document.getElementById('usr').value == '') {
   errormsg += 'กรุณากรอกข้อมูล ขื่อผู้ใช้งาน\n';
 }

 if (document.getElementById('pwd').value == '') {
  errormsg += 'กรุณากรอกข้อมูล รหัสผ่านผู้ใช้งาน\n';
}

if (document.getElementById('fname').value == '') {
  errormsg += 'กรุณากรอกข้อมูล ชื่อผู้ใช้งาน\n';
}

if (document.getElementById('lname').value == '') {
  errormsg += 'กรุณากรอกข้อมูล นามสกุล\n';
}
if (document.getElementById('possib').value == '') {
  errormsg += 'กรุณาเลือก สิทธิ์การใช้งานระบบ\n';
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
            document.getElementById('response-num').value = xmlHTTP_opp.responseText;
            url = document.getElementById('response-num').value;
            document.getElementById("send-form").action = ""+'?id='+url;
            document.getElementById('send-form').submit();  

          }
        }

        pwdOur = document.getElementById('pwdOur').value;
        usr = document.getElementById('usr').value;
        pwd = document.getElementById('pwd').value;
        fname = document.getElementById('fname').value;
        lname = document.getElementById('lname').value;
        possib = document.getElementById('possib').value;
        posit = document.getElementById('posit').value;
        email = document.getElementById('email').value;
        phone = document.getElementById('phone').value;        
        acc = document.getElementById('acc').value;
        logNme = document.getElementById('logNme').value;
        status = document.getElementById('status').value;        


        str_param = 'pwdOur=' + pwdOur + '&usr=' + usr + '&pwd=' + pwd + '&fname=' + fname + 
        '&lname=' + lname + '&possib=' + possib + '&posit=' + posit + '&email=' + email + 
        '&phone=' + phone + '&acc=' + acc + '&logNme=' + logNme + '&status=' + status ;


        xmlHTTP_opp.open('GET', 'http://localhost/newspective/backend/user-add.php?' + str_param, true);
        xmlHTTP_opp.send(); 

        document.getElementById('response').innerHTML = 'Sending . . .';


      }


      </script>
      <script type="text/javascript">
      $("#aThis a:contains('ราการผู้ใช้งาน')").parent().addClass('active');
      $("#aThis a:contains('ผู้ใช้ระบบงาน ')").parent().addClass('active');
      </script>

    </body>
    </html>