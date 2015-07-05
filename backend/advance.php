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
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/chkform.js"></script>
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

    </head>
    <body>
        
        <?php
        include_once("navbar.php");
        $uid = $_SESSION["uid"];
        $user = queryUserUID($uid);
        ?>
        <form action="advance-add.php" method="POST" class="form-horizontal" role="form" onsubmit="return chkVal();">
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
                                    <input type="text" class="form-control" id="pj_name" name="pj_name" maxlength="200">                                    
                                    <!--<label for="jobCode">Job Code:</label>-->
                                    <input type="hidden" class="form-control" id="pj_code" name="pj_code" maxlength="5" value="<?php echo maxPjcode();?>" >
                                    <br>
                                    <label for="sts">สถานะ: <?php echo jobCodeSts("0")?>
                                   
                                </div>
                                <div class="form-group col-sm-1"></div>
                                <div class="form-group col-sm-7">
                                    <label for="pj_detail">รายละเอียด:</label>
                                    <textarea class="form-control" rows="5" id="pj_detail" name="pj_detail"></textarea>
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
                                                <input type="text" class="form-control" id="account" name="account" value="<?php echo accountSub($user['acc_kbank']) ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pay_out" class="col-md-3 control-label">จ่ายโดย</label>
                                            <div class="col-md-9">
                                                <div class="radio">
                                                    <label><input type="radio" name="pay_by" id="pay_by1" value="เงินสด">เงินสด</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="pay_by" id="pay_by2" value="เงินโอน">เงินโอน</label>
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
                                                <input type="text" class="form-control datepicker" id="pj_use" name="pj_use">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pj_clear" class="col-md-3 control-label">กำหนดวันเคลียร์</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control datepicker" id="pj_clear" name="pj_clear">
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
                                                <input type="text" class="form-control" id="total" name="total" readonly>
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
                                        <th class="cre text-center">จำนวนเงิน<br>(ที่ใช้จริง)</th>
                                        <th colspan="3" class="cre text-center">แนบไฟล์</th>                                    
                                        </tr>
                                        </thead>                                
                                        <tbody>
                                            <tr>
                                                <td><div class="text-center">1</div></td>
                                                <td style="width: <?php echo $col ?>"><input name="list1" id="list1" type="text" maxlength="255" class="form-control" value=""></td>
                                                <td><input name="amount1" id="amount1" type="text" maxlength="10" class="form-control" onkeyup="return sum()"></td>
                                                <td class="cre"><input name="amount2_1" id="amount2_1" type="text" maxlength="10" class="form-control" onkeyup="return sum2()"></td>
                                                <td class="cre"><input type="file" name="file1" id="file1" class="form-control" onchange="checkFile(this, 'pro_sheet_file')"></td>
                                                <td class="cre"><a href="user-edit.php?id=<?php //echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></a></td>
                                                <td class="cre"><a href="user-del.php?id=<?php //echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a><td>
                                            </tr>
                                            <tr>
                                                <td><div class="text-center">2</div></td>
                                                <td><input name="list2" id="list2" type="text" maxlength="255" class="form-control"></td>
                                                <td><input name="amount2" id="amount2" type="text" maxlength="10" class="form-control" onkeyup="return sum()"></td>
                                                <td class="cre"><input name="amount2_2" id="amount2_2" type="text" maxlength="10" class="form-control" onkeyup="return sum2()"></td>
                                                <td class="cre"><input type="file" name="file2" id="file2" class="form-control" onchange="checkFile(this, 'pro_sheet_file')"></td>
                                                <td class="cre"><a href="user-edit.php?id=<?php //echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></a></td>
                                                <td class="cre"><a href="user-del.php?id=<?php //echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a><td>
                                            </tr>
                                            <tr>
                                                <td><div class="text-center">3</div></td>
                                                <td><input name="list3" id="list3" type="text" maxlength="255" class="form-control"></td>
                                                <td><input name="amount3" id="amount3" type="text" maxlength="10" class="form-control" onkeyup="return sum()"></td>
                                                <td class="cre"><input name="amount2_3" id="amount2_3" type="text" maxlength="10" class="form-control" onkeyup="return sum2()"></td>
                                                <td class="cre"><input type="file" name="file3" id="file3" class="form-control" onchange="checkFile(this, 'pro_sheet_file')"></td>
                                               <td class="cre"><a href="user-edit.php?id=<?php //echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></a></td>
                                                <td class="cre"><a href="user-del.php?id=<?php //echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a><td>
                                            </tr>
                                            <tr>
                                                <td><div class="text-center">4</div></td>
                                                <td><input name="list4" id="list4" type="text" maxlength="255" class="form-control"></td>
                                                <td><input name="amount4" id="amount4" type="text" maxlength="10" class="form-control" onkeyup="return sum()"></td>
                                                <td class="cre"><input name="amount2_4" id="amount2_4" type="text" maxlength="10" class="form-control" onkeyup="return sum2()"></td>
                                                <td class="cre"><input type="file" name="file4" id="file4" class="form-control" onchange="checkFile(this, 'pro_sheet_file')"></td>
                                                <td class="cre"><a href="user-edit.php?id=<?php //echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></a></td>
                                                <td class="cre"><a href="user-del.php?id=<?php //echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a><td> 
                                            </tr>
                                            <tr>
                                                <td><div class="text-center">5</div></td>
                                                <td><input name="list5" id="list5" type="text" maxlength="255" class="form-control"></td>
                                                <td><input name="amount5" id="amount5" type="text" maxlength="10" class="form-control" onkeyup="return sum()"></td>
                                                <td class="cre"><input name="amount2_5" id="amount2_5" type="text" maxlength="10" class="form-control" onkeyup="return sum2()"></td>
                                                <td class="cre"><input type="file" name="file5" id="file5" class="form-control" onchange="checkFile(this, 'pro_sheet_file')"></td>
                                                <td class="cre"><a href="user-edit.php?id=<?php //echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></a></td>
                                                <td class="cre"><a href="user-del.php?id=<?php //echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a><td> 
                                            </tr>
                                            <tr>
                                                <td><div class="text-center">6</div></td>
                                                <td><input name="list6" id="list6" type="text" maxlength="255" class="form-control"></td>
                                                <td><input name="amount6" id="amount6" type="text" maxlength="10" class="form-control" onkeyup="return sum()"></td>
                                                <td class="cre"><input name="amount2_6" id="amount2_6" type="text" maxlength="10" class="form-control" onkeyup="return sum2()"></td>
                                                <td class="cre"><input type="file" name="file6" id="fil6e" class="form-control" onchange="checkFile(this, 'pro_sheet_file')"></td>
                                                <td class="cre"><a href="user-edit.php?id=<?php //echo $getID; ?>" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></a></td>
                                                <td class="cre"><a href="user-del.php?id=<?php //echo $getID;?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a><td> 
                                            </tr>
                                            <tr>
                                                <td colspan="2"><div class="text-right"><b>ยอดรวม</b></div></td>
                                                <td><input name="sum1" id="sum1" type="text" maxlength="10" class="w90 datePicker form-control" ></td>
                                                <td class="cre"><input name="sum2" id="sum2" type="text" maxlength="10" class="w90 datePicker form-control" ></td>
                                                <td class="cre" colspan="3"><label>บาท</label></td><!--flieAttachID=3-->                                       
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-2">
                                        <div class="checkbox">                                            
                                            <label><input type="checkbox" id="chk_transfer" name="chk_transfer" onchange="return chk_trans();">ตั้งโอนแล้ว</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">                                       
                                        <input type="hidden" name="nameEn" id="nameEn" value="<?php echo flnameEn($uid);?>">
                                        <input type="hidden" name="mailAdmin" id="mailAdmin" value="<?php echo mailAdmin();?>">
                                        <button type="submit" id="save" class="btn btn-success btn-lg col-md-12" style="folat:right" disabled>บันทึก</button>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
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
            function chkVal(){
                errormsg = '';
                if(document.getElementById('pj_name').value == ""){
                    errormsg += 'กรุณากรอกข้อมูล ชื่อโครงการ\n';                    
                }
                if(document.getElementById('pj_detail').value == ""){
                    errormsg += 'กรุณากรอกข้อมูล รายละเอียดโครงการ\n';                    
                }
                if(document.getElementById('pj_use').value == ""){
                    errormsg += 'กรุณากรอกข้อมูล วันที่ใช้เงิน\n';                    
                }
                if(document.getElementById('pj_clear').value == ""){
                    errormsg += 'กรุณากรอกข้อมูล วันกำหนดเคลียร์เงิน\n';                    
                } 
                if (document.getElementById("pay_by1").checked == document.getElementById("pay_by2").checked){
                    errormsg += 'กรุณากรอกข้อมูล รูปแบบการจ่าย เงินสด/เงินโอน\n';
                }
                if(document.getElementById('list1').value == ""){
                    errormsg += 'กรุณากรอกข้อมูล รายการค่าใช้จ่าย\n';                    
                }
                if(document.getElementById('amount1').value == ""){
                    errormsg += 'กรุณากรอกข้อมูล จำนวนเงิน(ประมาณการ)\n';                    
                }
               
                if (errormsg != '') {
                    alert(errormsg);
                    return false;
                } else {                 
                    return true;   

                }
            }
            function chk_trans(){                
                if(document.getElementById("chk_transfer").checked === true){
                    document.getElementById('save').disabled = false;
                }else{
                    document.getElementById('save').disabled = true;
                }
            }
            
            function sum(){   
                
                total1 = (document.getElementById('amount1').value).replace(",","");
                total2 = (document.getElementById('amount2').value).replace(",","");
                total3 = (document.getElementById('amount3').value).replace(",","");
                total4 = (document.getElementById('amount4').value).replace(",","");
                total5 = (document.getElementById('amount5').value).replace(",","");
                total6 = (document.getElementById('amount6').value).replace(",","");

                total = +total1 + +total2 + +total3 + +total4 + +total5 + +total6;                    

                document.getElementById('sum1').value = total;
                document.getElementById('total').value = total;
                
            }
            
            function sum2(){   
                
                total1 = (document.getElementById('amount2_1').value).replace(",","");
                total2 = (document.getElementById('amount2_2').value).replace(",","");
                total3 = (document.getElementById('amount2_3').value).replace(",","");
                total4 = (document.getElementById('amount2_4').value).replace(",","");
                total5 = (document.getElementById('amount2_5').value).replace(",","");
                total6 = (document.getElementById('amount2_6').value).replace(",","");

                total = +total1 + +total2 + +total3 + +total4 + +total5 + +total6;                    

                document.getElementById('sum2').value = total;    
                
            }       
        
        </script>
                               

    </body>
</html>