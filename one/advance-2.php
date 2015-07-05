<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['uid'])) {
        $_SESSION['url'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
        <!--<link href="../css/style.css" rel="stylesheet">-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

        <!--for datepicker-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">

        <script>
            $(function () {
                $(".datepicker").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
            });
        </script>
        <!--for datepicker and use footer_picker.php-->
        <style type="text/css">
            #note_panel{
                display: none;
            }
            
        </style>

    </head>
    <body>
        
        <?php
        include_once("navbar.php");
        $pj_code =  $_GET["id"];
        $uid =      $_SESSION["uid"];
        $user =     queryUserUID($uid);
        $queryPj =  queryProject($pj_code);
        $queryPjDtl=queryPjDtl($pj_code);
        
        ?>
        <form action="advance-update-2.php" method="POST" class="form-horizontal" role="form" onsubmit="return chkVal();">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">             
                    <?php include_once("sidebar.php");?>
                </div><!--col-sm-2-->

                <div class="col-sm-10"> 
                    <div class="col-sm-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><b>ข้อมูลโครงการ</b></div>
                            <div class="panel panel-body">
                                <div class="form-group col-sm-4">
                                    <label for="jobNme">ชื่อโครงการ:</label>
                                    <input type="text" class="form-control" id="pj_name" name="pj_name" maxlength="200" value="<?php echo $queryPj['pj_name'];?>" readonly>                                    
                                    <label for="jobCode">Job Code:</label>
                                    <input type="text" class="form-control" id="pj_code" name="pj_code" maxlength="5" value="<?php echo $queryPj['pj_code'];?>" readonly>
                                    <br>
                                    <label for="sts">สถานะ: <?php echo jobCodeSts($queryPj['jobcode_sts']);?>
                                   
                                </div>
                                <div class="form-group col-sm-1"></div>
                                <div class="form-group col-sm-7">
                                    <label for="pj_detail">รายละเอียด:</label>
                                    <textarea class="form-control" rows="5" id="pj_detail" name="pj_detail" readonly><?php echo $queryPj['pj_detail'];?></textarea>
                                </div>
                            </div>
                        </div>           


                        <div class="panel panel-default">
                            <div class="panel-heading"><b>ข้อมูลผู้ขอ</b></div>
                            <div class="panel panel-body">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 control-label">ชื่อ-สกุล</label>
                                            <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $_SESSION['uid'];?>">
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="username" name="username" value="<?php echo usrSer($uid); ?>" readonly>
                                                <input type="hidden" class="form-control" id="uid" value="<?php echo $user['uid']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-md-3 control-label">เบอร์โทร</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo mobileSub($user['mobile']); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-md-3 control-label">อีเมล์</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="account" class="col-md-3 control-label">เลขที่บัญชี</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="account" name="account" value="<?php echo accountSub($user['acc_kbank']); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pay_out" class="col-md-3 control-label">จ่ายโดย</label>
                                            <div class="col-md-9">
                                                <div class="radio">
                                                    <label><input type="radio" name="pay_by" value="เงินสด" <?php if( $queryPj['pay_by']=='เงินสด'){ echo "checked";}?> disabled>เงินสด</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="pay_by" value="เงินโอน" <?php if( $queryPj['pay_by']=='เงินโอน'){ echo "checked";}?> disabled>เงินโอน</label>
                                                    <input type="hidden" name="pay_by" value="<?php echo $queryPj['pay_by'];?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dte_cre" class="col-md-3 control-label">วันที่</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="pj_create" name="pj_create" value="<?php echo date("Y-m-d"); ?>" readonly>                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pj_use" class="col-md-3 control-label">วันที่ใช้เงิน</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control datepicker" id="pj_use" name="pj_use" value="<?php echo $queryPj['pj_use'];?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pj_clear" class="col-md-3 control-label">กำหนดวันเคลียร์</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control datepicker" id="pj_clear" name="pj_clear" value="<?php echo $queryPj['pj_clear'];?>" readonly>
                                            </div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="pj_cleared" class="col-md-3 control-label">วันที่เคลียร์</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="pj_cleared" name="pj_cleared" readonly>
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label for="sum_amount" class="col-md-3 control-label">จำนวนเงิน</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="total" name="total" value="<?php echo number_format($queryPj['total']);?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>                  
                    </div><!--col-sm-12-->

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>รายการค่าใช้จ่าย</b></div>
                            <div class="panel panel-body">

                                <?php
                                $sts = 1;
                                if ($sts != "3") {
                                    $col = "80%";
                                    echo "<style type='text/css'>
                                      .cre{
                                        display:none;
                                      } 
                                   </style>";
                                } else {
                                    $col = "50%";
                                }
                                ?>


                                <div class="table-responsive">
                                    <table class="table table-bordered th_no_bor">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th><div class="text-center">รายการ</div></th>
                                        <th><div class="text-center">จำนวนเงิน<br>(ประมาณ)</div></th>                                                                          
                                        </tr>
                                        </thead>                                
                                        <tbody>
                                            <?php 
                                                while($pjDtl = $queryPjDtl->fetch_assoc()) {
                                                if($pjDtl['pj_list']!=""){
                                             ?>
                                            
                                            <tr>
                                                <td><div class="text-center"><?php echo $pjDtl['seq']?></div></td>
                                                <td style="width: <?php echo $col ?>"><input name="list1" id="list1" type="text" maxlength="10" maxlength="10" class="form-control" value="<?php echo $pjDtl['pj_list']?>" readonly></td>
                                                <td><input name="amount1" id="amount1" type="text" maxlength="10" maxlength="10" class="form-control" value="<?php echo number_format($pjDtl['amount1']);?>" readonly></td>                                                
                                            </tr>
                                            <?php }}?>
                                             <tr>
                                                <td colspan="2"><div class="text-right"><b>ยอดรวม</b></div></td>
                                                <td><input name="sum1" id="sum1" type="text" maxlength="10" class="w90 datePicker form-control" value="<?php echo number_format($queryPj['total']);?>" readonly></td>                                                                                    
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>                                    
                                    <div class="col-sm-2">                                       
                                            <h4>ขั้นตอนดำเนินงาน</h4>
                                        <div class="checkbox">                                                  
                                            <label><input type="checkbox" id="chk_transfer1" name="jobcode_sts" onchange="return chk_trans();" checked disabled>ตั้งโอนแล้ว</label><br>
                                            <label><input type="checkbox" id="chk_transfer2" name="jobcode_sts" value="2" onchange="return chk_trans2();" <?php if($queryPj['jobcode_sts']=='2' or $queryPj['jobcode_sts']=='3'){ echo 'checked';}else if($queryPj['jobcode_sts']=='4' or $queryPj['jobcode_sts']=='5'){ echo 'disabled'; }?> >อนุมัติ</label><br>
                                            <label><input type="checkbox" id="chk_transfer3" name="jobcode_sts" value="3" onchange="return chk_trans3();" <?php if($queryPj['jobcode_sts']=='3'){ echo 'checked';}else if($queryPj['jobcode_sts']=='4' or $queryPj['jobcode_sts']=='5'){ echo 'disabled'; }?> >โอนแล้ว</label><br>
                                            <label><input type="checkbox" id="chk_transfer4" name="jobcode_sts" value="4" onchange="return chk_trans4();" <?php if($queryPj['jobcode_sts']=='4' or $queryPj['jobcode_sts']=='5'){ echo 'checked';}else if($queryPj['jobcode_sts']=='2' or $queryPj['jobcode_sts']=='3'){ echo 'disabled'; }?> >ยังไม่ผ่าน</label><br>
                                            <label><input type="checkbox" id="chk_transfer5" name="jobcode_sts" value="5" onchange="return chk_trans5();" <?php if($queryPj['jobcode_sts']=='5'){ echo 'checked';}else if($queryPj['jobcode_sts']=='2' or $queryPj['jobcode_sts']=='3'){ echo 'disabled'; }?> >ไม่อนุมัติ</label><br>
                                            <!--<label><input type="checkbox" id="chk_transfer" name="chk_transfer"  disabled>โอนคืนแล้ว</label><br>
                                            <label><input type="checkbox" id="chk_transfer" name="chk_transfer"  disabled>เสร็จสิ้น</label><br>-->
                                         </div>
                                            <?php 
                                            if($queryPj['jobcode_sts']=='4' or $queryPj['jobcode_sts']=='5'){
                                                echo "<style type='text/css'>
                                                        #note_panel{
                                                          display:block;
                                                        } 
                                                     </style>";
                                            }
                                            ?>
                                     
                                    </div>
                                    <div class="col-sm-8"></div>
                                    <!--<div class="col-sm-2">
                                        <button type="button" id="save" class="btn btn-success btn-lg col-md-12" style="folat:right" disabled>บันทึก</button>
                                    </div>      -->                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" id="note_panel">
                        <div class="panel panel-default">
                            <div class="panel-heading"><b>หมายเหตุ</b></div>
                            <div class="panel panel-body">
                                 <label for="note">รายละเอียด:</label>
                                 <textarea class="form-control" rows="5" id="note" name="note"></textarea>
                               
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="nameEn" id="nameEn" value="<?php echo flnameEn($uid);?>">
                    <input type="hidden" name="mailAdmin" id="mailAdmin" value="<?php echo mailAdmin();?>">
                    
                    <div class="col-sm-12">
                        <button type="submit" id="save" class="btn btn-success btn-lg col-md-12" style="folat:right" disabled>บันทึก</button>
                    </div>  
                </div><!--col-sm-10-->
            </div><!--row-->
            
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php include_once("footer_picker.php"); ?>
                </div>
            </div>
        </div><!-- container-fluid  -->
         </form>
        <script>
            function chk_trans2(){
                
                 if(document.getElementById("chk_transfer2").checked == true){
                     document.getElementById('chk_transfer4').disabled = true;
                     document.getElementById('chk_transfer5').disabled = true;
                     document.getElementById('save').disabled = false;
                     
                 }else{
                     document.getElementById('chk_transfer4').disabled = false;
                     document.getElementById('chk_transfer5').disabled = false;
                     document.getElementById('save').disabled = true;
                     chk_trans3();
                 }
                 
                 
            }
            function chk_trans3(){
            if(document.getElementById("chk_transfer3").checked == true){
                     document.getElementById('chk_transfer2').checked = true;
                     document.getElementById('chk_transfer4').disabled = true;
                     document.getElementById('chk_transfer5').disabled = true;
                     document.getElementById('save').disabled = false;
                 }else{
                     document.getElementById('chk_transfer2').checked = false;
                     document.getElementById('save').disabled = true;
                     chk_trans2();
                 }
             }
             function chk_trans4(){
                
                 if(document.getElementById("chk_transfer4").checked == true){
                     document.getElementById('chk_transfer2').disabled = true;
                     document.getElementById('chk_transfer3').disabled = true;                     
                     document.getElementById("note_panel").style.display = "block";
                     document.getElementById('save').disabled = false;
                 }else{
                     document.getElementById('chk_transfer2').disabled = false;
                     document.getElementById('chk_transfer3').disabled = false;
                     document.getElementById("note_panel").style.display = "none";
                     document.getElementById('save').disabled = true;
                     chk_trans5();
                 }
                 
                 
            }
            function chk_trans5(){
            if(document.getElementById("chk_transfer5").checked == true){
                     document.getElementById('chk_transfer4').checked = true;
                     document.getElementById('chk_transfer2').disabled = true;
                     document.getElementById('chk_transfer3').disabled = true;
                     chk_trans4();
                 }else{
                     document.getElementById('chk_transfer4').checked = false;
                     chk_trans4();
                 }
             }
             
            
        </script>
                               

    </body>
</html>