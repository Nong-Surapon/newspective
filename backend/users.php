<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("Location: login.php");
  }
  if($_SESSION["possibility"]!="admin"){
      header("Location: home.php");
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
<body>
  <?php include_once("navbar.php");
  ?>


  <div class="container">

    <h3><b>สร้างข้อมูลใหม่</b></h3><hr>

    <div class="row">
      <div class="col-sm-6">
          <form name="form1" class="form-signin" role="form" method="post" action="user-add.php" enctype="multipart/form-data" onsubmit="return checkval()">
          <div class="form-group">

            <label class="control-label" for="uid">รหัสประจำตัว</label>
            <input type="text" class="form-control" id="uid" name="uid" value="<?php newUid(); ?>" readonly>
            
            <h3>ข้อมูลส่วนตัว</h3><hr>
            <label class="control-label" for="title_th">คำนำหน้า-ภาษาไทย</label>
            <select class="form-control" id="title_th" name="title_th">
              <option value="">-เลือกคำนำหน้า-</option>
              <option value="นาย">นาย</option>
              <option value="นางสาว">นางสาว</option>
              <option value="นาง">นาง</option>
            </select>            
            <label class="control-label" for="fname_th">ชื่อ-ภาษาไทย <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="20" id="fname_th" name="fname_th">            
            <label class="control-label" for="lname_th">สกุล-ภาษาไทย </label>
            <input type="text" class="form-control" maxlength="20" id="lname_th" name="lname_th">            
            <label class="control-label" for="title_en">คำนำหน้า-ภาษาอังกฤษ</label>
            <select class="form-control" id="title_en" name="title_en">
              <option value="">-เลือกคำนำหน้า-</option>
              <option value="Mr.">Mr.</option>
              <option value="Miss">Miss</option>
              <option value="Mrs.">Mrs.</option>
            </select>            
            <label class="control-label" for="fname_en">ชื่อ-ภาษาอังกฤษ</label>
            <input type="text" class="form-control" maxlength="20" id="fname_en" name="fname_en" >
            <label class="control-label" for="lname_en">สกุล-ภาษาอังกฤษ</label>
            <input type="text" class="form-control" maxlength="20" id="lname_en" name="lname_en" >
            <label class="control-label" for="nname">ชื่อเล่น</label>
            <input type="text" class="form-control" maxlength="10" id="nname" name="nname" >   
            <label class="control-label" for="sex">เพศ</label>
            <select class="form-control" id="sex" name="sex">
              <option value="">-เลือกเพศ-</option>
              <option value="ชาย">ชาย</option>
              <option value="หญิง">หญิง</option>
            </select>
             <label class="control-label" for="birthday">วันเกิด</label>
            <input type="text" class="form-control datepicker" id="birthday" name="birthday" >
            <label class="control-label" for="status2">สถานภาพ</label>
            <select class="form-control" id="status2" name="status2">
              <option value="">-เลือกสถานภาพ-</option>
              <option value="โสด">โสด</option>
              <option value="สมรส">สมรส</option>
              <option value="สมรสไม่จดทะเบียน">สมรสไม่จดทะเบียน</option>
              <option value="หย่า">หย่า</option>
              <option value="หม่าย">หม่าย</option>
            </select>
            <label class="control-label" for="weight">น้ำหนัก</label>
            <input type="text" class="form-control" maxlength="3" id="weight" name="weight" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="height">ส่วนสูง</label>
            <input type="text" class="form-control" maxlength="3" id="height" name="height" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="graduation">จบการศึกษา</label>
            <input type="text" class="form-control" maxlength="40" id="graduation" name="graduation" >
            <label class="control-label" for="nationality">สัญชาติ</label>
            <input type="text" class="form-control" maxlength="10" id="nationality" name="nationality" >
            <label class="control-label" for="religion">ศาสนา</label>
            <input type="text" class="form-control" maxlength="10" id="religion" name="religion" >
            <label class="control-label" for="identity">เลขบัตรประจำตัวประชาชน</label>
            <input type="text" class="form-control" maxlength="13" id="identity" name="identity" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="social">เลขบัตรประกันสังคม</label>
            <input type="text" class="form-control" maxlength="13" id="social" name="social" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="size">ขนาดเสื้อ</label>
            <input type="text" class="form-control" maxlength="3" id="size" name="size" >
            <label class="control-label" for="mobile">เบอร์โทรศัพท์มือถือ</label>
            <input type="text" class="form-control" maxlength="10" id="mobile" name="mobile" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="phone">เบอร์โทรศัพท์บ้าน</label>
            <input type="text" class="form-control" maxlength="9" id="phone" name="phone" OnKeyPress="return checkInt(this.id)"> 
            <label class="control-label" for="acc_kbank">เลชบัญชีกสิกรไทย</label>
            <input type="text" class="form-control" maxlength="10" id="acc_kbank" name="acc_kbank" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="acc_uob">เลขบัญชี UOB</label>
            <input type="text" class="form-control" maxlength="10" id="acc_uob" name="acc_uob" OnKeyPress="return checkInt(this.id)">
            
            
            <h3>ที่อยู่ปัจจุบัน</h3><hr>
            <label class="control-label" for="an_no">บ้านเลขที่</label>
            <input type="text" class="form-control" maxlength="10" id="an_no" name="an_no" >
            <label class="control-label" for="an_moo">หมู่</label>
            <input type="text" class="form-control" maxlength="2" id="an_moo" name="an_moo" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="an_soi">ซอย</label>
            <input type="text" class="form-control" maxlength="30" id="an_soi" name="an_soi" >
            <label class="control-label" for="an_road">ถนน</label>
            <input type="text" class="form-control" maxlength="30" id="an_road" name="an_road" >
            <label class="control-label" for="an_tumbon">แขวง/ตำบล</label>
            <input type="text" class="form-control" maxlength="30" id="an_tumbon" name="an_tumbon" >
            <label class="control-label" for="an_amphoe">เขต/อำเภอ</label>
            <input type="text" class="form-control" maxlength="30" id="an_amphoe" name="an_amphoe" >
            <label class="control-label" for="an_province">จังหวัด</label>
            <input type="text" class="form-control" maxlength="30" id="an_province" name="an_province" >
            <label class="control-label" for="an_postcode">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" maxlength="5" id="an_postcode" name="an_postcode" OnKeyPress="return checkInt(this.id)">
            
            <h3>ที่อยู่ตามทะเบียนบ้าน</h3><hr>
            <label class="control-label" for="ah_no">บ้านเลขที่</label>
            <input type="text" class="form-control" maxlength="10" id="ah_no" name="ah_no" >
            <label class="control-label" for="ah_moo">หมู่</label>
            <input type="text" class="form-control" maxlength="2" id="ah_moo" name="ah_moo" OnKeyPress="return checkInt(this.id)">
            <label class="control-label" for="ah_soi">ซอย</label>
            <input type="text" class="form-control" maxlength="30" id="ah_soi" name="ah_soi" >
            <label class="control-label" for="ah_road">ถนน</label>
            <input type="text" class="form-control" maxlength="30" id="ah_road" name="ah_road" >
            <label class="control-label" for="ah_tumbon">แขวง/ตำบล</label>
            <input type="text" class="form-control" maxlength="30" id="ah_tumbon" name="ah_tumbon" >
            <label class="control-label" for="ah_amphoe">เขต/อำเภอ</label>
            <input type="text" class="form-control" maxlength="30" id="ah_amphoe" name="ah_amphoe" >
            <label class="control-label" for="ah_province">จังหวัด</label>
            <input type="text" class="form-control" maxlength="30" id="ah_province" name="ah_province" >
            <label class="control-label" for="ah_postcode">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" maxlength="5" id="ah_postcode" name="ah_postcode" OnKeyPress="return checkInt(this.id)">
            

            <h3>ระบบงาน</h3><hr>
             <label class="control-label" for="company">บริษัทที่สังกัด</label>
            <select class="form-control" id="company" name="company">
              <option value="">-เลือกบริษัท-</option>
              <?php 
              $resCom = whileCompany();
              while ($company = $resCom->fetch_assoc()){  
                ?>
                <option value="<?php echo $company['id']; ?>"><?php echo $company["name"]; ?></option>
                <?php } ?>
              </select>
             <label class="control-label" for="position">ตำแหน่ง</label>
            <input type="text" class="form-control" maxlength="20" id="position" name="position" >
            <label class="control-label" for="workday">วันที่เริ่มงาน</label>
            <input type="text" class="form-control datepicker" id="workday" name="workday" >
            <label class="control-label" for="salary">เงินเดือน </label>
            <input type="text" class="form-control" maxlength="9" id="salary" name="salary" OnKeyPress="return checkInt(this.id)">          
            <label class="control-label" for="note">หมายเหตุ </label>
            <input type="text" class="form-control" maxlength="200" id="note" name="note" >
            <label class="control-label" for="other">อื่นๆ</label>
            <input type="text" class="form-control" maxlength="200" id="other" name="other" >
            <label class="control-label" for="email">อีเมล์ <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="100" id="email" name="email" >
            <label class="control-label" for="password">รหัส <span class="text-danger">*</span></label>
            <input type="text" class="form-control" maxlength="10" id="password" name="password" >
            <label for="possibility">สิทธิ์การใช้งานระบบ <span class="text-danger">*</span></label>
            <select class="form-control" id="possibility" name="possibility">
             <option value="">-เลือกสิทธิ์การใช้งานระบบ-</option>
             <?php  $result = whilePosit();
             while ($row = $result->fetch_assoc()) {
              ?>             
              <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
              
              <?php } ?>
            </select>

            
              <label for="status">สถานะ <span class="text-danger">*</span></label>
              <select class="form-control" id="status" name="status">
                <option value="">-เลือกสถานะ-</option>
                <option value="1">ใช้งานปกติ</option>
                <option value="0">ยกเลิกการใช้งาน</option>
              </select>

              <h3>แนบไฟล์</h3><hr>
              <label class="control-label" for="uid">รูปถ่าย</label>
              <input name="photo" type="file">

              <label class="control-label" for="doc_identity">บัตรประชาชน (สำเนา)</label>
              <input name="doc_identity" id="doc_identity" type="file">

              <label class="control-label" for="doc_home">ทะเบียนบ้าน (สำเนา)</label>
              <input name="doc_home" id="doc_home" type="file">

              <label class="control-label" for="doc_graduation">วุฒิการศึกษา/ใบเกรด (สำเนา)</label>
              <input name="doc_graduation" id="doc_graduation" type="file">

              <label class="control-label" for="doc_resume">Resume (สำเนา)</label>
              <input name="doc_resume" id="doc_resume" type="file">

              <label class="control-label" for="enlist">หลักฐานเกณฑ์ทหาร (สำเนา)</label>
              <input name="enlist" id="enlist" type="file">            

              <label class="control-label" for="doc_social">บัตรประกันสังคม (สำเนา)</label>
              <input name="doc_social" id="doc_social" type="file">

              <input type="hidden" class="form-control" id="usr_create" name="usr_create" value="<?php echo $_SESSION["fname_th"];?>">
              <input type="hidden" class="form-control" id="usr_update" name="usr_update" value="<?php echo $_SESSION["fname_th"];?>">
              
              <br>
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"><span>  สร้างข้อมูล</button>
              <a href="user-list.php" class="btn btn-default"><span class="glyphicon glyphicon-user"></span>  Staff</a>
              
              <br>
              <div id="response"></div>
            </div>
          </div>

        </form>


        <div class="col-sm-6" id="response-back">


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


 </table>
</div>
             <a href="user-edit.php?id=<?php echo $_GET['id']; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>  Edit</a>
</div>
</div>
<?php } ?>
</div>
</div>

<?php 

include_once("footer_picker.php");?>

</div><!-- container -->

<script type="text/javascript">

function checkval(){

  errormsg = '';
  
  if (document.getElementById('fname_th').value == '') {
   errormsg += 'กรุณากรอกข้อมูล ชื่อ-ภาษาไทย\n';
 }
// 
//  if (document.getElementById('salary').value == '') {
//   errormsg += 'กรุณากรอกข้อมูล เงินเดือนพนักงาน\n';
// }

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