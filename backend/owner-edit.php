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
  $user = queryUserUID($_SESSION["uid"]);

  ?>

  <div class="container">

    <legend>แก้ไขข้อมูลผู้ใช้งาน</legend>

    <form id="send-form" action="owner-update.php" method="post" enctype="multipart/form-data" onsubmit="return checkval();"> 
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">



             <label class="control-label" for="uid">รหัสประจำตัว</label>
            <input type="text" class="form-control" id="uid" name="uid" value="<?php echo $user['uid']?>" readonly>

            <h3>ข้อมูลส่วนตัว</h3><hr>
            <label class="control-label" for="title_th">คำนำหน้า-ภาษาไทย <span class="text-danger">*</span></label>
            <select class="form-control" id="title_th" name="title_th">
              <option value="">-เลือกคำนำหน้า-</option>
              <option <?php if($user["title_th"]=="นาย"){ echo "selected";}?> value="นาย">นาย</option>
              <option <?php if($user["title_th"]=="นางสาว"){ echo "selected";}?> value="นางสาว">นางสาว</option>
              <option <?php if($user["title_th"]=="นาง"){ echo "selected";}?> value="นาง">นาง</option>
            </select>            
            <label class="control-label" for="fname_th">ชื่อ-ภาษาไทย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="20" id="fname_th" name="fname_th" value="<?php echo $user["fname_th"]?>">            
            <label class="control-label" for="lname_th">สกุล-ภาษาไทย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="20" id="lname_th" name="lname_th" value="<?php echo $user["lname_th"]?>">            
            <label class="control-label" for="title_en">คำนำหน้า-ภาษาอังกฤษ <span class="text-danger">*</span></label>
            <select class="form-control" id="title_en" name="title_en">
              <option value="">-เลือกคำนำหน้า-</option>
              <option <?php if($user["title_en"]=="Mr."){ echo "selected";}?> value="Mr.">Mr.</option>
              <option <?php if($user["title_en"]=="Miss"){ echo "selected";}?> value="Miss">Miss</option>
              <option <?php if($user["title_en"]=="Mrs."){ echo "selected";}?> value="Mrs.">Mrs.</option>
            </select>            
            <label class="control-label" for="fname_en">ชื่อ-ภาษาอังกฤษ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="20" id="fname_en" name="fname_en" value="<?php echo $user["fname_en"]?>">
            <label class="control-label" for="lname_en">สกุล-ภาษาอังกฤษ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="20" id="lname_en" name="lname_en" value="<?php echo $user["lname_en"]?>">
            <label class="control-label" for="nname">ชื่อเล่น <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="nname" name="nname" value="<?php echo $user["nname"]?>">   
            <label class="control-label" for="sex">เพศ <span class="text-danger">*</span></label>
            <select class="form-control" id="sex" name="sex">
              <option value="">-เลือกเพศ-</option>
              <option <?php if($user["sex"]=="ชาย"){ echo "selected";}?> value="ชาย">ชาย</option>
              <option <?php if($user["sex"]=="หญิง"){ echo "selected";}?> value="หญิง">หญิง</option>
            </select>
             <label class="control-label" for="birthday">วันเกิด <span class="text-danger">*</span></label>
            <input type="text" class="form-control datepicker" id="birthday" name="birthday" value="<?php if($user["birthday"]!="0000-00-00"){ echo $user["birthday"];}?>">
            <label class="control-label" for="status2">สถานภาพ <span class="text-danger">*</span></label>
            <select class="form-control" id="status2" name="status2">
              <option value="">-เลือกสถานภาพ-</option>
              <option <?php if($user["status2"]=="โสด"){ echo "selected";}?> value="โสด">โสด</option>
              <option <?php if($user["status2"]=="สมรส"){ echo "selected";}?> value="สมรส">สมรส</option>
              <option <?php if($user["status2"]=="สมรสไม่จดทะเบียน"){ echo "selected";}?> value="สมรสไม่จดทะเบียน">สมรสไม่จดทะเบียน</option>
              <option <?php if($user["status2"]=="หย่า"){ echo "selected";}?> value="หย่า">หย่า</option>
              <option <?php if($user["status2"]=="หม่าย"){ echo "selected";}?> value="หม่าย">หม่าย</option>
            </select>
            <label class="control-label" for="weight">น้ำหนัก <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="3" id="weight" name="weight" value="<?php echo $user["weight"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="height">ส่วนสูง <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="3" id="height" name="height" value="<?php echo $user["height"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="graduation">จบการศึกษา <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="40" id="graduation" name="graduation" value="<?php echo $user["graduation"]?>">
            <label class="control-label" for="nationality">สัญชาติ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="nationality" name="nationality" value="<?php echo $user["nationality"]?>">
            <label class="control-label" for="religion">ศาสนา <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="religion" name="religion" value="<?php echo $user["religion"]?>">
            <label class="control-label" for="identity">เลขบัตรประจำตัวประชาชน <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="13" id="identity" name="identity" value="<?php echo $user["identity"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="social">เลขบัตรประกันสังคม <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="13" id="social" name="social" value="<?php echo $user["social"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="size">ขนาดเสื้อ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="3" id="size" name="size" value="<?php echo $user["size"]?>">
            <label class="control-label" for="mobile">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="mobile" name="mobile" value="<?php echo $user["mobile"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="phone">เบอร์โทรศัพท์บ้าน <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="9" id="phone" name="phone" value="<?php echo $user["phone"]?>" OnKeyPress="return checkInt(this.id)"> 
            <label class="control-label" for="acc_kbank">เลชบัญชีกสิกรไทย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="acc_kbank" name="acc_kbank" value="<?php echo $user["acc_kbank"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="acc_uob">เลขบัญชี UOB <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="acc_uob" name="acc_uob" value="<?php echo $user["acc_uob"]?>" OnKeyPress="return checkInt(this.id)">
            
            
            <h3>ที่อยู่ปัจจุบัน</h3><hr>
            <label class="control-label" for="an_no">บ้านเลขที่ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="an_no" name="an_no" value="<?php echo $user["an_no"]?>">
            <label class="control-label" for="an_moo">หมู่ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="2" id="an_moo" name="an_moo" value="<?php echo $user["an_moo"]?>" OnKeyPress="return checkInt(this.id)" >
            <label class="control-label" for="an_soi">ซอย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="an_soi" name="an_soi" value="<?php echo $user["an_soi"]?>">
            <label class="control-label" for="an_road">ถนน <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="an_road" name="an_road" value="<?php echo $user["an_road"]?>">
            <label class="control-label" for="an_tumbon">แขวง/ตำบล <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="an_tumbon" name="an_tumbon" value="<?php echo $user["an_tumbon"]?>">
            <label class="control-label" for="an_amphoe">เขต/อำเภอ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="an_amphoe" name="an_amphoe" value="<?php echo $user["an_amphoe"]?>">
            <label class="control-label" for="an_province">จังหวัด <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="an_province" name="an_province" value="<?php echo $user["an_province"]?>">
            <label class="control-label" for="an_postcode">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="5" id="an_postcode" name="an_postcode" value="<?php echo $user["an_postcode"]?>" OnKeyPress="return checkInt(this.id)">
            
            <h3>ที่อยู่ตามทะเบียนบ้าน</h3><hr>
            <label class="control-label" for="ah_no">บ้านเลขที่ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="ah_no" name="ah_no" value="<?php echo $user["ah_no"]?>">
            <label class="control-label" for="ah_moo">หมู่ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="2" id="ah_moo" name="ah_moo" value="<?php echo $user["ah_moo"]?>" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="ah_soi">ซอย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="ah_soi" name="ah_soi" value="<?php echo $user["ah_soi"]?>">
            <label class="control-label" for="ah_road">ถนน <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="ah_road" name="ah_road" value="<?php echo $user["ah_road"]?>">
            <label class="control-label" for="ah_tumbon">แขวง/ตำบล <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="ah_tumbon" name="ah_tumbon" value="<?php echo $user["ah_tumbon"]?>">
            <label class="control-label" for="ah_amphoe">เขต/อำเภอ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="ah_amphoe" name="ah_amphoe" value="<?php echo $user["ah_amphoe"]?>">
            <label class="control-label" for="ah_province">จังหวัด <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="30" id="ah_province" name="ah_province" value="<?php echo $user["ah_province"]?>">
            <label class="control-label" for="ah_postcode">รหัสไปรษณีย์ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="5" id="ah_postcode" name="ah_postcode" value="<?php echo $user["ah_postcode"]?>" OnKeyPress="return checkInt(this.id)">
            

            <h3>ระบบงาน</h3><hr>
             <label class="control-label" for="company">บริษัทที่สังกัด <span class="text-danger">*</span></label>
            <select class="form-control" id="company" name="company">
              <option value="">-เลือกบริษัท-</option>
              <?php 
              $resCom = whileCompany();
              while ($company = $resCom->fetch_assoc()){  
                ?>
              <option <?php if($user['companyId']==$company['id']){ echo "selected";}?> value="<?php echo $company['id']; ?>"><?php echo $company["name"]; ?></option>
                <?php } ?>
              </select>
             <label class="control-label" for="position">ตำแหน่ง <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="20" id="position" name="position" value="<?php echo $user["position"]?>">
            <label class="control-label" for="workday">วันที่เริ่มงาน <span class="text-danger">*</span></label>            
            <input type="text" class="form-control datepicker" id="workday" name="workday" value="<?php if($user["workday"]!="0000-00-00"){ echo $user["workday"];}?>">
            
              <label class="control-label" for="other">อื่นๆ <span class="text-danger">*</span></label>
              <input type="text" class="form-control" maxlength="200" id="other" name="other" value="<?php echo $user["other"]?>">
<label class="control-label" for="email">อีเมล์ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="100" id="email" name="email" value="<?php echo $user["email"]?>">
            <label class="control-label" for="password">รหัส <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="password" name="password" value="<?php echo $user["password"]?>">
<label for="possibility">สิทธิ์การใช้งานระบบ <span class="text-danger">*</span></label>
            <select class="form-control" id="possibility" name="possibility">
             <option value="">-เลือกสิทธิ์การใช้งานระบบ-</option>
             <?php  $result = whilePosit();
             while ($row = $result->fetch_assoc()) {
              ?>             
             <option <?php if($user['possibility']==$row['name']){ echo "selected"; }?> value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
              
              <?php } ?>
            </select>

            
              <label for="status">สถานะ <span class="text-danger">*</span></label>
              <select class="form-control" id="status" name="status">
                  <option value="">-เลือกสถานะ-</option>
                <option <?php if($user["status"]=="1"){ echo "selected";}?> value="1">ใช้งานปกติ</option>
                <option <?php if($user["status"]=="0"){ echo "selected";}?> value="0">ยกเลิกการใช้งาน</option>
              </select>

              <h3>แนบไฟล์</h3><hr>
              <label class="control-label" for="uid">รูปถ่าย <span class="text-danger">*</span></label>
              <input name="photo" type="file">

              <label class="control-label" for="doc_identity">บัตรประชาชน (สำเนา) <span class="text-danger">*</span></label>
              <input name="doc_identity" id="doc_identity" type="file">

              <label class="control-label" for="doc_home">ทะเบียนบ้าน (สำเนา) <span class="text-danger">*</span></label>
              <input name="doc_home" id="doc_home" type="file">

              <label class="control-label" for="doc_graduation">วุฒิการศึกษา/ใบเกรด (สำเนา) <span class="text-danger">*</span></label>
              <input name="doc_graduation" id="doc_graduation" type="file">

              <label class="control-label" for="doc_resume">Resume (สำเนา) <span class="text-danger">*</span></label>
              <input name="doc_resume" id="doc_resume" type="file">

              <label class="control-label" for="enlist">หลักฐานเกณฑ์ทหาร (สำเนา) <span class="text-danger">*</span></label>
              <input name="enlist" id="enlist" type="file">            

              <label class="control-label" for="doc_social">บัตรประกันสังคม (สำเนา) <span class="text-danger">*</span></label>
              <input name="doc_social" id="doc_social" type="file">
              
            <input type="hidden" class="form-control" id="old_photo" name="old_photo" value="<?php echo $user['photo'];?>">
            <input type="hidden" class="form-control" id="old_doc_identity" name="old_doc_identity" value="<?php echo $user['doc_identity'];?>">
            <input type="hidden" class="form-control" id="old_doc_home" name="old_doc_home" value="<?php echo $user['doc_home'];?>">
            <input type="hidden" class="form-control" id="old_doc_graduation" name="old_doc_graduation" value="<?php echo $user['doc_graduation'];?>">
            <input type="hidden" class="form-control" id="old_enlist" name="old_enlist" value="<?php echo $user['enlist'];?>">
            <input type="hidden" class="form-control" id="old_doc_social" name="old_doc_social" value="<?php echo $user['doc_social'];?>">
            <input type="hidden" class="form-control" id="old_doc_resume" name="old_doc_resume" value="<?php echo $user['doc_resume'];?>">
           
              
            <input type="hidden" class="form-control" id="old_doc_social" name="old_doc_social" value="<?php echo $user['doc_social']?>">
            <input type="hidden" class="form-control" id="logNme" name="logNme" value="<?php echo $_SESSION["fname_th"];?>">
            <input type="hidden" class="form-control" id="response-num" name="response-num" value="<?php echo $user['uid']?>">
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user['id']?>">
            <input type="hidden" class="form-control" id="usr_update" name="usr_update" value="<?php echo $_SESSION["fname_th"];?>">
            <br>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>  UPDATE</button>
            <a href="home.php" class="btn btn-default"><span class="glyphicon glyphicon-home"></span>  HOME</a>


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
               <!--<tr>
                 <td align="right">เงินเดือน : </td>
                 <td><?php //echo $user["salary"]?></td>
               </tr>
               <tr>
                 <td align="right">หมายเหตุ : </td>
                 <td><?php //echo $user["note"]?></td>
               </tr>-->
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

</div>
</div>
</form>



<?php 

include_once("footer_picker.php");?>

</div><!-- container -->


<script type="text/javascript">



function checkval(){

  if (document.getElementById('fname_en').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('lname_en').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('fname_th').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }

 if (document.getElementById('lname_th').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('nname').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
if (document.getElementById('position').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('email').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('password').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }

  if (document.getElementById('mobile').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('phone').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
if (document.getElementById('acc_kbank').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('acc_uob').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('possibility').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }

 if (document.getElementById('status').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('identity').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
if (document.getElementById('social').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }

 if (document.getElementById('graduation').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('birthday').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
if (document.getElementById('sex').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('weight').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('height').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }

 if (document.getElementById('size').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('status2').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
if (document.getElementById('nationality').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('religion').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('workday').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
  if (document.getElementById('workday').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 
 if (document.getElementById('an_no').value == '') {
    alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
    return false;
 }
 if (document.getElementById('an_moo').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
 } 
if (document.getElementById('an_soi').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
 }
 if (document.getElementById('an_road').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
        return false;
 }
  if (document.getElementById('an_tumbon').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
 } 
         if (document.getElementById('an_amphoe').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }         
 if (document.getElementById('an_province').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('an_postcode').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
    
 if (document.getElementById('ah_no').value == '') {
    alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
    return false;
 }
 if (document.getElementById('ah_moo').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
 } 
if (document.getElementById('ah_soi').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
 }
 if (document.getElementById('ah_road').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
        return false;

 }
  if (document.getElementById('ah_tumbon').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
 } 
         if (document.getElementById('ah_amphoe').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }         
 if (document.getElementById('ah_province').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('ah_postcode').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
    
        

 
 if (document.getElementById('doc_identity').value == '') {
     if (document.getElementById('old_doc_identity').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
     }
 }

 if (document.getElementById('doc_social').value == '') {
    if (document.getElementById('old_doc_social').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
    }
 }
if (document.getElementById('doc_home').value == '') {
  if (document.getElementById('old_doc_home').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
    }
 }

 if (document.getElementById('doc_graduation').value == '') {
  if (document.getElementById('old_doc_graduation').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
    }
 }
 if (document.getElementById('doc_resume').value == '') {
    if (document.getElementById('old_doc_resume').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
    }
 }
if (document.getElementById('enlist').value == '') {
  if (document.getElementById('old_enlist').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
    }
 }
 if (document.getElementById('other').value == '') {
   alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
   return false;
 }
 if (document.getElementById('photo').value == '') {
   if (document.getElementById('old_photo').value == '') {
      alert('กรุณากรอกข้อมูลให้ครบทั้งหมดที่มีครื่องหมาย *');
      return false;
    }
 }

}

</script>

    </body>
    </html>