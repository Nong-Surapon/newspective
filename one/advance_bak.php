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
 <script src="../js/bootstrap-datepicker.js"></script>

    
  <!--datepicker-->
     <link rel="stylesheet" media="all" type="text/css" href="../datepicker/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../datepicker/jquery-ui-timepicker-addon.css" />
    <script type="text/javascript" src="../datepicker/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../datepicker/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../datepicker/jquery-ui-timepicker-addon.js"></script>
   <script type="text/javascript" src="../datepicker/jquery-ui-sliderAccess.js"></script>
  <!--datepicker-->
  <script type="text/javascript">
  $(function(){
    $(".datepicker").datepicker({
      dateFormat: 'yy-mm-dd'
    });
  });

  $(":file").filestyle({icon: false});
  
  </script>
  
</head>
<body id="aThis">
	<?php include_once("navbar.php");?>
  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
  <div class="container">
    <div class="row">
      <div class="page-header">

        <?php 
          //project
        $pj_id=$_GET["id"];
        $pj_arr = queryProject($pj_id);

          //user
        $uid=$_SESSION['uid'];
        $uid_user=queryUser($uid);

        ?>
        <h1><?php echo $pj_arr['name']; ?><br><small> <?php echo $pj_arr['detail']; ?></small></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            ข้อมูลผู้ขอ
          </div>
          <div class="panel panel-body">
            <form action="" method="POST" class="form-horizontal" role="form">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="username" class="col-md-3 control-label">ชื่อ-สกุล</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $uid_user['username'];?>">
                    <input type="hidden" class="form-control" id="uid" value="<?php echo $uid_user['uid'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone" class="col-md-3 control-label">เบอร์โทร</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $uid_user['phone'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-md-3 control-label">อีเมล์</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $uid_user['email']?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="account" class="col-md-3 control-label">เลขที่บัญชี</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="account" name="account" value="<?php echo $uid_user['account']?>">
                  </div>
                </div>


                <div class="form-group">
                  <label for="pay_out" class="col-md-3 control-label">จ่ายโดย</label>
                  <div class="col-md-9">
                    <div class="radio">
                      <label><input type="radio" name="pay_out" value="เงินสด">เงินสด</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="pay_out" value="เงินโอน">โอนเข้าบัญชี</label>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="dte_cre" class="col-md-3 control-label">วันที่</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control datepicker" id="dte_cre" name="dte_cre" value="<?php echo date("Y-m-d");?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="dte_use" class="col-md-3 control-label">วันที่ใช้เงิน</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control datepicker" id="dte_use" name="dte_use">
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="dte_cle" class="col-md-3 control-label">กำหนดวันเคลียร์</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control datepicker" id="dte_cle" name="dte_cle">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dte_cle_fin" class="col-md-3 control-label">วันที่เคลียร์</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control datepicker" id="dte_cle_fin" name="dte_cle_fin">
                  </div>
                </div>
                <div class="form-group">
                  <label for="sum_amount" class="col-md-3 control-label">จำนวนเงิน</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="sum_amount" name="sum_amount" disabled>
                  </div>
                </div>
              </div>









            </form>


          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="text-center">
          <!--<h1>History</h1>-->
        </div>
      </div>
    </div>



    <div class="row">
      <div class="page-header">
        <h1><small>รายการค่าใช้จ่าย</small></h1>
      </div>
    </div>



    <div class="row">

      <div class="table-responsive">
        <table class="table table-bordered th_no_bor">
          <thead>
            <tr>
              <th>รายการ</th>
              <th>จำนวนเงิน</th>
              <th colspan="3">แนบไฟล์</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-xs-5"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td class="col-xs-1"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td><input type="file" name="pro_sheet_file" id="pro_sheet_file" class="form-control" onchange="checkFile(this,'pro_sheet_file')"></td><!--flieAttachID=3-->
              <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></button></td>
              <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr>
              <td class="col-xs-5"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td class="col-xs-1"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td><input type="file" name="pro_sheet_file" id="pro_sheet_file" class="form-control" onchange="checkFile(this,'pro_sheet_file')"></td><!--flieAttachID=3-->
              <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></button></td>
              <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr>
              <td class="col-xs-5"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td class="col-xs-1"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td><input type="file" name="pro_sheet_file" id="pro_sheet_file" class="form-control" onchange="checkFile(this,'pro_sheet_file')"></td><!--flieAttachID=3-->
              <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></button></td>
              <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr>
              <td class="col-xs-5"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td class="col-xs-1"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td><input type="file" name="pro_sheet_file" id="pro_sheet_file" class="form-control" onchange="checkFile(this,'pro_sheet_file')"></td><!--flieAttachID=3-->
              <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></button></td>
              <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr>
              <td class="col-xs-5"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td class="col-xs-1"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td><input type="file" name="pro_sheet_file" id="pro_sheet_file" class="form-control" onchange="checkFile(this,'pro_sheet_file')"></td><!--flieAttachID=3-->
              <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></button></td>
              <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>
            <tr>
              <td class="col-xs-5"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td class="col-xs-1"><input name="pro_sheet_dte" id="pro_sheet_dte" type="text" maxlength="10" maxlength="10" class="w90 datePicker form-control" onchange="checkDte(this,'pro_sheet_dte')"></td>
              <td><input type="file" name="pro_sheet_file" id="pro_sheet_file" class="form-control" onchange="checkFile(this,'pro_sheet_file')"></td><!--flieAttachID=3-->
              <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-file"></span></button></td>
              <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
            </tr>



          </tbody>
        </table>

      </div>
      <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2" align="right">
          <button type="button" class="btn btn-success btn-lg col-md-12" style="folat:right">บันทึก</button>
        </div>
      </div>



    </div>





    <?php //include_once("footer.php");?>
  </div><!-- container -->
  <script type="text/javascript">
  $("#aThis a:contains('โครงการ ')").parent().addClass('active');
  $("#aThis a:contains('รายการโครงการ')").parent().addClass('active');
  </script>
</body>
</html>