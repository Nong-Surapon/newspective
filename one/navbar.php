<?php
include_once("../includes/conn.php");
include_once("../includes/functions.php");
$domain = "http://$_SERVER[HTTP_HOST]";
?>
<div class="container">
    <img src="image/head.jpg">
</div>
<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $domainName;?>/one/home.php">Newspective</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!--<ul class="nav navbar-nav">            
            <li><a href="#about">Advance</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">โครงการ <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">            
            <li><a href="<?php echo $domainName;?>/one/project-list.php">รายการโครงการ</a></li>
            <li><a href="<?php echo $domainName;?>/one/project.php">สร้างโครงการใหม่</a></li>
            </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">รายงาน <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">ลูกค้าตามวันที่</a></li>
                <li><a href="#">การติดตามลูกค้่า</a></li>
                <li><a href="#">ลูกค้า Walk in</a></li>              
                <li><a href="#">ลูกค้า Call in</a></li>
                <li><a href="#">ลูกค้า Register</a></li>
                <li><a href="#">ปิดการขาย</a></li>
                <li><a href="#">การติดต่อลูกค้า</a></li>
              </ul>
            </li>
          </ul>-->
          <ul class="nav navbar-nav navbar-right">
            <?php if($_SESSION["possibility"]=="Admin"){?>


            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ผู้ใช้ระบบงาน <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $domainName;?>/one/user-list.php">ราการผู้ใช้งาน</a></li>
                <li><a href="<?php echo $domainName;?>/one/users.php">สร้างข้อมูลใช้งานระบบใหม่</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">ตำแหน่ง</li>
                <li><a href="<?php echo $domain;?>/newspective/one/user-role.php">สร้างข้อมูลใหม่</a></li>
                <li><a href="<?php echo $domain;?>/newspective/one/user-list.php">รายการตำแน่ง</a></li>             
              </ul>
            </li>--> 

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="<?php echo $domainName;?>/one/user-list.php"><span class="glyphicon glyphicon-user"></span>  Staff</a></li>
                <li><a href="<?php echo $domainName;?>/one/users.php"><span class="glyphicon glyphicon-cog"></span>  New staff</a></li>                      
                <li class="divider"></li>
                <li><a href="<?php echo $domainName;?>/one/user-role-list.php"><span class="glyphicon glyphicon-folder-open"></span>  User level</a></li>      
                <li><a href="<?php echo $domainName;?>/one/user-role.php"><span class="glyphicon glyphicon-folder-close"></span>  New user level</a></li>

              </ul>
            </li>


            
            <?php }?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $domainName;?>/one/owner-view.php"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION["fname_th"];?></a></li>      
                <li><a href="<?php echo $domainName;?>/one/owner-edit.php"><span class="glyphicon glyphicon-cog"></span>  Setings</a></li>
                 <li class="divider"></li>
                <li><a href="<?php echo $domainName;?>/one/logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                              
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" id="img">
    <!--<img src="<?php echo $domainName?>/one/image/head.jpg" height="100%" width="100%" />-->




</div>