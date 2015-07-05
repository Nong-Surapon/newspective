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
  <script src="../js/chkform.js"></script>

  <!--for datepicker-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script>
  $(function() {
    $( ".datepicker" ).datepicker({
     dateFormat: 'yy-mm-dd'
   });
  });

  </script>
  <!--for datepicker and use footer_picker.php-->

</head>
<body id="aThis">
  <?php include_once("navbar.php");
  $user = queryUserID($_REQUEST["id"]);

  ?>

  <div class="container">

    <legend>แก้ไขข้อมูลผู้ใช้งาน</legend>

    <form id="send-form" action="user-update.php" method="post" enctype="multipart/form-data" onsubmit="return checkval();"> 
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">

            <label class="control-label" for="uid">รหัสประจำตัว</label>
            <input type="text" class="form-control" id="uid" name="uid" value="<?php echo $user['uid']?>" readonly>

            <label class="control-label" for="fname_th">ชื่อ-ภาษาไทย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="fname_th" name="fname_th" value="<?php echo $user['fname_th']?>">

            <label class="control-label" for="lname_th">สกุล-ภาษาไทย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="lname_th" name="lname_th" value="<?php echo $user['lname_th']?>">

            <label class="control-label" for="fname_en">ชื่อ-อังกฤษ</label>
            <input type="text" class="form-control" id="fname_en" name="fname_en" value="<?php echo $user['fname_en']?>">

            <label class="control-label" for="lname_en">สกุล-อังกฤษ</label>
            <input type="text" class="form-control" id="lname_en" name="lname_en" value="<?php echo $user['lname_en']?>">

            <label class="control-label" for="nname">ชื่อเล่น</label>
            <input type="text" class="form-control" id="nname" name="nname" value="<?php echo $user['nname']?>">

            <label class="control-label" for="position">ตำแหน่ง</label>
            <input type="text" class="form-control" id="position" name="position" value="<?php echo $user['position']?>">

            <label for="possibility">สิทธิ์การใช้งานระบบ <span class="text-danger">*</span></label>
            <select class="form-control" id="possibility" name="possibility">
             <option value="">-เลือกสิทธิ์การใช้งานระบบ-</option>
             <?php  $result = whilePosit();
             while ($row = $result->fetch_assoc()) {
              ?>             
              <option <?php if($row['name'] == $user['possibility']){ echo "selected"; } ?> value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
              
              <?php } ?>
            </select>

            <label class="control-label" for="email">อีเมล์ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']?>">

            <label class="control-label" for="password">รหัส <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="password" name="password" value="<?php echo $user['password']?>">

            <label class="control-label" for="mobile">เบอร์โทรศัพท์มือถือ</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $user['mobile']?>">

            <label class="control-label" for="phone">เบอร์โทรศัพท์บ้าน</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user['phone']?>">

            <label class="control-label" for="acc_uob">เลขบัญชี UOB</label>
            <input type="text" class="form-control" id="acc_uob" name="acc_uob" value="<?php echo $user['acc_uob']?>">

            <label class="control-label" for="acc_kbank">เลขบัญชีกสิกรไทย</label>
            <input type="text" class="form-control" id="acc_kbank" name="acc_kbank" value="<?php echo $user['acc_kbank']?>">

            <label class="control-label" for="identity">เลขบัตรประจำตัวประชาชน</label>
            <input type="text" class="form-control" id="identity" name="identity" value="<?php echo $user['identity']?>">

            <label class="control-label" for="social">เลขบัตรประกันสังคม</label>
            <input type="text" class="form-control" id="social" name="social" value="<?php echo $user['social']?>">

            <label class="control-label" for="address_now">ที่อยู่ปัจจุบัน</label>
            <input type="text" class="form-control" id="address_now" name="address_now" value="<?php echo $user['address_now']?>">

            <label class="control-label" for="address_home">ที่อยู่ตามทะเบียนบ้าน</label>
            <input type="text" class="form-control" id="address_home" name="address_home" value="<?php echo $user['address_home']?>">

            <label class="control-label" for="graduation">จบการศึกษา</label>
            <input type="text" class="form-control" id="graduation" name="graduation" value="<?php echo $user['graduation']?>">

            <label class="control-label" for="birthday">วันเกิด</label>
            <input type="text" class="form-control datepicker" id="birthday" name="birthday" value="<?php if($user['birthday']!="0000-00-00"){ echo $user['birthday'];}?>">

            <label class="control-label" for="sex">เพศ</label>
             <select class="form-control" id="sex" name="sex">
              <option value="">-เลือกเพศ-</option>
              <option <?php if($user['sex']=="ชาย"){ echo "selected"; }?> value="ชาย">ชาย</option>
              <option <?php if($user['sex']=="หญิง"){ echo "selected"; }?> value="หญิง">หญิง</option>
            </select>

            <label class="control-label" for="weight">น้ำหนัก</label>
            <input type="text" class="form-control" id="weight" name="weight" value="<?php echo $user['weight']?>">

            <label class="control-label" for="height">ส่วนสูง</label>
            <input type="text" class="form-control" id="height" name="height" value="<?php echo $user['height']?>">

            <label class="control-label" for="size">ขนาดเสื้อ</label>
            <input type="text" class="form-control" id="size" name="size" value="<?php echo $user['size']?>">



            <label class="control-label" for="status2">สถานภาพ</label>
            <select class="form-control" id="status2" name="status2">
              <option value="">-เลือกสถานภาพ-</option>
              <option <?php if($user['status2']=="โสด"){ echo "selected"; }?> value="โสด">โสด</option>
              <option <?php if($user['status2']=="สมรส"){ echo "selected"; }?> value="สมรส">สมรส</option>
              <option <?php if($user['status2']=="สมรสไม่จดทะเบียน"){ echo "selected"; }?> value="สมรสไม่จดทะเบียน">สมรสไม่จดทะเบียน</option>
              <option <?php if($user['status2']=="หย่า"){ echo "selected"; }?> value="หย่า">หย่า</option>
              <option <?php if($user['status2']=="หม่าย"){ echo "selected"; }?> value="หม่าย">หม่าย</option>
            </select>

            

            <label class="control-label" for="nationality">สัญชาติ</label>
            <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $user['nationality']?>">

            <label class="control-label" for="religion">ศาสนา</label>
            <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $user['religion']?>">

            <label class="control-label" for="workday">วันที่เริ่มงาน</label>
            <input type="text" class="form-control datepicker" id="workday" name="workday" value="<?php if($user['workday']!="0000-00-00"){ echo $user['workday'];}?>">

            <label class="control-label" for="salary">เงินเดือน</label>
            <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $user['salary']?>">

            <label class="control-label" for="note">หมายเหตุ</label>
            <input type="text" class="form-control" id="note" name="note" value="<?php echo $user['note']?>">





            <!--<label class="control-label" for="doc_identity">บัตรประชาชน</label>
            <input type="text" class="form-control" id="doc_identity" name="doc_identity" value="<?php echo $user['doc_identity']?>">

            <label class="control-label" for="doc_home">ทะเบียนบ้าน</label>
            <input type="text" class="form-control" id="doc_home" name="doc_home" value="<?php echo $user['doc_home']?>">

            <label class="control-label" for="doc_graduation">วุฒิการศึกษา/ใบเกรด</label>
            <input type="text" class="form-control" id="doc_graduation" name="doc_graduation" value="<?php echo $user['doc_graduation']?>">

            <label class="control-label" for="doc_resume">Resume</label>
            <input type="text" class="form-control" id="doc_resume" name="doc_resume" value="<?php echo $user['doc_resume']?>">

            <label class="control-label" for="enlist">หลักฐานเกณฑ์ทหาร</label>
            <input type="text" class="form-control" id="enlist" name="enlist" value="<?php echo $user['enlist']?>">

            <label class="control-label" for="doc_social">บัตรประกันสังคม</label>
            <input type="text" class="form-control" id="doc_social" name="doc_social" value="<?php echo $user['doc_social']?>">
          -->

          <label class="control-label" for="other">อื่นๆ</label>
          <input type="text" class="form-control" id="other" name="other" value="<?php echo $user['other']?>">

          <label class="control-label" for="company">บริษัทที่สังกัด</label>
          <select class="form-control" id="company" name="company">
            <option value="">-เลือกบริษัท-</option>
            <?php 
            $resCom = whileCompany();
            while ($company = $resCom->fetch_assoc()){  
              ?>
              <option <?php if($company['id']==$user["companyId"]){ echo "selected"; }?> value="<?php echo $company['id']; ?>"><?php echo $company["name"]; ?></option>
              <?php } ?>

            </select>


            

            <label for="status">สถานะ <span class="text-danger">*</span></label>
            <select class="form-control" id="status" name="status">
              <option value="">-เลือกสถานะ-</option>
              <option <?php if($user['status']==1){ echo "selected"; }?> value="1">ใช้งานปกติ</option>
              <option <?php if($user['status']==0){ echo "selected"; }?> value="0">ยกเลิกการใช้งาน</option>
            </select>

            <label class="control-label" for="uid">รูปถ่าย</label>
            <input name="photo" type="file">
            <input type="hidden" class="form-control" id="old_photo" name="old_photo" value="<?php echo $user['photo']?>">

            <label class="control-label" for="doc_identity">บัตรประชาชน</label>
            <input name="doc_identity" id="doc_identity" type="file">
            <input type="hidden" class="form-control" id="old_doc_identity" name="old_doc_identity" value="<?php echo $user['doc_identity']?>">

            <label class="control-label" for="doc_home">ทะเบียนบ้าน</label>
            <input name="doc_home" id="doc_home" type="file">
            <input type="hidden" class="form-control" id="old_doc_home" name="old_doc_home" value="<?php echo $user['doc_home']?>">

            <label class="control-label" for="doc_graduation">วุฒิการศึกษา/ใบเกรด</label>
            <input name="doc_graduation" id="doc_graduation" type="file">
            <input type="hidden" class="form-control" id="old_doc_graduation" name="old_doc_graduation" value="<?php echo $user['doc_graduation']?>">

            <label class="control-label" for="doc_resume">Resume</label>
            <input name="doc_resume" id="doc_resume" type="file">
            <input type="hidden" class="form-control" id="old_doc_resume" name="old_doc_resume" value="<?php echo $user['doc_resume']?>">

            <label class="control-label" for="enlist">หลักฐานเกณฑ์ทหาร</label>
            <input name="enlist" id="enlist" type="file">
            <input type="hidden" class="form-control" id="old_enlist" name="old_enlist" value="<?php echo $user['enlist']?>">         

            <label class="control-label" for="doc_social">บัตรประกันสังคม</label>
            <input name="doc_social" id="doc_social" type="file">
            <input type="hidden" class="form-control" id="old_doc_social" name="old_doc_social" value="<?php echo $user['doc_social']?>">

            <input type="hidden" class="form-control" id="logNme" name="logNme" value="<?php echo $_SESSION["fname_th"];?>">
            <input type="hidden" class="form-control" id="response-num" name="response-num" value="<?php echo $user['uid']?>">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user['id']?>">
            <input type="hidden" class="form-control" id="usr_update" name="usr_update" value="<?php echo $_SESSION["fname_th"];?>">

            <br>
            <button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk">  UPDATE</button>
            <a href="user-list.php" class="btn btn-default"><span class="glyphicon glyphicon-repeat"></span>  BACK</span></a></td>  
            

            <br>
            <div id="response"></div>
          </div>
        </div>
        <div class="col-sm-6" id="response-back">






         <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">ข้อมูลผู้ใช้ระบบงาน</h3>
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
               <td><?php echo $user["id"]?></td>
             </tr>
             <tr>
               <td align="right">ชื่อ-ภาษาไทย : </td>
               <td><?php echo $user["fname_th"]?></td>
             </tr>
             <tr>
               <td align="right">สกุล-ภาษาไทย : </td>
               <td><?php echo $user["lname_th"]?></td>
             </tr>
             <tr>
               <td align="right">ชื่อ-อังกฤษ : </td>
               <td><?php echo $user["fname_en"]?></td>
             </tr>
             <tr>
               <td align="right">สกุล-อังกฤษ : </td>
               <td><?php echo $user["lname_en"]?></td>
             </tr>
             <tr>
               <td align="right">ชื่อเล่น : </td>
               <td><?php echo $user["nname"]?></td>
             </tr>
             <tr>
               <td align="right">ตำแหน่ง : </td>
               <td><?php echo $user["position"]?></td>
             </tr>
             <tr>
               <td align="right">สิทธิในการใช้งาน : </td>
               <td><?php echo $user["possibility"]?></td>
             </tr>
             <tr>
               <td align="right">อีเมล์ : </td>
               <td><?php echo $user["email"]?></td>
             </tr>
             <tr>
               <td align="right">พาสเวิร์ด : </td>
               <td><?php echo $user["password"]?></td>
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
               <td align="right">เลขบัญชี UOB : </td>
               <td><?php echo $user["acc_uob"]?></td>
             </tr>
             <tr>
               <td align="right">เลขบัญชีกสิกรไทย : </td>
               <td><?php echo $user["acc_kbank"]?></td>
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
               <td align="right">ที่อยู่ปัจจุบัน : </td>
               <td><?php echo $user["address_now"]?></td>
             </tr>
             <tr>
               <td align="right">ที่อยู่ตามทะเบียนบ้าน : </td>
               <td><?php echo $user["address_home"]?></td>
             </tr>
             <tr>
               <td align="right">จบการศึกษา : </td>
               <td><?php echo $user["graduation"]?></td>
             </tr>
             <tr>
               <td align="right">วันเกิด : </td>
               <td><?php if($user["birthday"]!="0000-00-00"){ echo $user["birthday"];}?></td>
             </tr>
             <tr>
               <td align="right">เพศ : </td>
               <td><?php echo $user["sex"]?></td>
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
               <td align="right">ขนาดเสื้อ : </td>
               <td><?php echo $user["size"]?></td>
             </tr>
             <tr>
               <td align="right">สถานภาพ : </td>
               <td><?php echo $user["status2"]?></td>
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
<!--<tr>
 <td align="right">บัตรประชาชน : </td>
 <td><?php echo $user["doc_identity"]?></td>
</tr><tr>
 <td align="right">ทะเบียนบ้าน : </td>
 <td><?php echo $user["doc_home"]?></td>
</tr>
<tr>
 <td align="right">วุฒิการศึกษา/ใบเกรด : </td>
 <td><?php echo $user["doc_graduation"]?></td>
</tr>
<tr>
 <td align="right">Resume : </td>
 <td><?php echo $user["doc_resume"]?></td>
</tr>
<tr>
 <td align="right">หลักฐานเกณฑ์ทหาร : </td>
 <td><?php echo $user["enlist"]?></td>
</tr>
<tr>
 <td align="right">บัตรประกันสังคม : </td>
 <td><?php echo $user["doc_social"]?></td>
</tr>-->

<tr>
 <td align="right">บริษัทที่สังกัด : </td>
 <td><?php echo queryCompany($user["companyId"]); ?></td>
</tr>
<tr>
 <td align="right">อื่นๆ : </td>
 <td><?php echo $user["other"]?></td>
</tr>
<td align="right">บัตรประชาชน : </td>
<td>
  <?php if($user["doc_identity"]!=""){ ?>
  <a href="documents/<?php echo $user["doc_identity"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
  <?php } ?>
</td>                  
</tr>
<tr>
 <td align="right">ทะเบียนบ้าน : </td>
 <td>
  <?php if($user["doc_home"]!=""){ ?>
  <a href="documents/<?php echo $user["doc_home"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
  <?php } ?>
</td>
</tr>
<tr>
 <td align="right">วุฒิการศึกษา/ใบเกรด : </td>
 <td>
  <?php if($user["doc_graduation"]!=""){ ?>
  <a href="documents/<?php echo $user["doc_graduation"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
  <?php } ?>
</td>
</tr>
<tr>
 <td align="right">Resume : </td>
 <td>
  <?php if($user["doc_resume"]!=""){ ?>
  <a href="documents/<?php echo $user["doc_resume"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
  <?php } ?>
</td>
</tr>
<tr>
 <td align="right">หลักฐานเกณฑ์ทหาร : </td>
 <td>
  <?php if($user["doc_identity"]!=""){ ?>
  <a href="documents/<?php echo $user["doc_identity"]?>" class="btn btn-default" target="_blank"><span class="glyphicon glyphicon-search"></span></a>
  <?php } ?>
</td>
</tr>      
<tr>
 <td align="right">บัตรประกันสังคม : </td>
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
</table>
</div>
</div>
</div>

</div>
</div>
</form>



<?php 

include_once("footer_picker.php");?>

</div><!-- container -->


<script type="text/javascript">
function checkval(){

  errormsg = '';
  if (document.getElementById('fname_th').value == '') {
   errormsg += 'กรุณากรอกข้อมูล ขื่อผู้ใช้งาน\n';
 }

 if (document.getElementById('lname_th').value == '') {
  errormsg += 'กรุณากรอกข้อมูล นามสกุล\n';
}



err_email = false;
if (document.getElementById('email').value == "") {
  errormsg += 'กรุณากรอกข้อมูล อีเมล์\n';
  err_email = true;
}

if (document.getElementById('password').value == '') {
  errormsg += 'กรุณากรอกข้อมูล รหัสผ่านผู้ใช้งาน\n';
}


if (document.getElementById('possibility').value == '') {
  errormsg += 'กรุณาเลือก สิทธิ์การใช้งานระบบ\n';
}
//alert(errormsg);



if (err_email == false) {
  var mail = /[-a-zA-Z0-9_\.]+@[-a-zA-Z0-9]+\.[-a-zA-Z0-9\.]+/;
  var eflag = document.getElementById('email').value.match(mail);
  if (eflag != document.getElementById('email').value) {
    errormsg += 'รูปแบบอีเมล์ไม่ถูกต้อง\n';
    err_email = true;
  }
}
if (document.getElementById('status').value == '') {
  errormsg += 'กรุณาเลือก สถานะ\n';
}

if (errormsg != '') {
  alert(errormsg);
  return false;
} else {                 
  return true;   

}
}
</script>

</body>
</html>