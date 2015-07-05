<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['uid'])) {
        header("Location: login.php");
    }
    if ($_SESSION["possibility"] != "Admin") {
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
        <link href="../css/newspective.css" rel="stylesheet">
        <script src="../js/chkform.js"></script>

        <!--for datepicker-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <script>
            $(function () {
                $(".datepicker").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
        <!--for datepicker and use footer_picker.php-->

    </head>
    <body>
        <?php include_once("navbar.php"); ?>
        <div class="container">
            <h3><b>สร้างข้อมูลใหม่</b></h3><hr>

            <div class="row">
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
                        
                        <div class="row">
                            <div class='form-group'>
                            <div class="col-md-2">
                        <label class="control-label" for="dte">วันเกิด</label>
                        <select class="form-control" id="dte" name="dte">                           
                            <option value="">วันที่</option>
                            <?php for($d=1; $d<=31; $d++){?>
                            <option value="<?php echo $d?>"><?php echo $d?></option>
                            <?php }?>                           
                        </select>
                            </div>
                            <div class="col-md-2">
                        <label class="control-label" for="mont">เดือนเกิด</label>
                        <select class="form-control" id="mont" name="mont">
                            <option value="">เดือน</option>
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนายน</option>
                            <option value="07">กรกฎาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                            </div>
                            <div class="col-md-2">
                        <label class="control-label" for="year">ปีเกิด</label>
                        <select class="form-control" id="year" name="year">
                            <option value="">ปี</option>
                           <?php for($y=2500; $y<=2558; $y++){?>
                            <option value="<?php echo $y-543?>"><?php echo $y?></option>
                            <?php }?>    
                        </select>
                            </div>
                            </div>
                        </div>                        
                        <!--birthday = year.mont.dte-->
                        
                        <!--<label class="control-label" for="birthday">วันเกิด</label>
                        <input type="text" class="form-control datepicker" id="birthday" name="birthday" >-->
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
                            while ($company = $resCom->fetch_assoc()) {
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
                            <?php
                            $result = whilePosit();
                            while ($row = $result->fetch_assoc()) {
                                ?>             
                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>

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

                        <input type="hidden" class="form-control" id="usr_create" name="usr_create" value="<?php echo $_SESSION["fname_th"]; ?>">
                        <input type="hidden" class="form-control" id="usr_update" name="usr_update" value="<?php echo $_SESSION["fname_th"]; ?>">

                        <br>
                        <button type="submit" class="btn btn-gold"><span class="glyphicon glyphicon-floppy-disk"><span>  สร้างข้อมูล</button>
                        <a href="user-list.php" class="btn btn-default"><span class="glyphicon glyphicon-user"></span>  Staff</a>
                        <br>
                <div id="response"></div>
            </div>
        </form>
</div>

<?php include_once("footer_picker.php"); ?>

</div><!-- container -->

<script type="text/javascript">

    function checkval() {

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