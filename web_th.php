<?php
include_once("includes/conn.php");
include_once("includes/functions-web.php");
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <title>Newspective</title>
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--custom css (Using style.scss file for customize)-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!--Ion icons-->
        <link href="assets/icons/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <!--google fonts-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,300italic,500,500italic,700,900' rel='stylesheet' type='text/css'>
        <!--Flex slider-->
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <!--popups css-->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <!--animated css-->
        <link href="assets/css/animate.css" rel="stylesheet">
        <!--cube portfolio-->
        <link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
        <!--pricing css-->
        <link href="assets/css/pricing.css" rel="stylesheet" type="text/css">
        <!--revolution slider setting css-->
        <link href="assets/rs-plugin/css/settings.css" rel="stylesheet">
        <!--master slider-->
        <link href="assets/master-slider/style/masterslider.css" rel="stylesheet">
        <link href="assets/master-slider/skins/default/style.css" rel="stylesheet">
        <link href="assets/css/master-slider-custom.css" rel="stylesheet" type="text/css">       
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="assets/css/newspective.css" rel="stylesheet" type="text/css">
        <link href="css/ihover.css" rel="stylesheet">
        <link href="css/ihover.min.css" rel="stylesheet">

    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">
        <div class="fullwidthbanner" id="home">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/images/bg-2.jpg" data-delay="10000"  data-saveperformance="off" data-title="slider 1">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/bg-2.jpg"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->    
                        <div class="tp-caption srcaption-bigwhite lfl ltr slider-title"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="1000"
                             data-start="100"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 2"><strong>Welcome to Newspective</strong><!-- <strong>newage</strong>-->
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption srcaption-miniwhite sfb slider-caption"
                             data-x="center" data-hoffset="0"
                             data-y="bottom" data-voffset="-140"
                             data-speed="500"
                             data-start="1200"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 3"><font size="14">"make it batter"</font>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption srcaption-miniwhite sfb text-light scroll-to slider-arrow-down"
                             data-x="center" data-hoffset="0"
                             data-y="bottom" data-voffset="-40"
                             data-speed="500"
                             data-start="1300"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 3"><a href="#about" class="sr-button sr-buttonicon small-iconbutton scroll-to"><i class="ion-ios-arrow-down"></i></a>
                        </div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/images/bg-3.jpg" data-delay="10000"  data-saveperformance="off" data-title="slider 2">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/bg-3.jpg"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->    
                        <div class="tp-caption srcaption-bigwhite lfl ltr slider-title"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="1000"
                             data-start="100"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 2"><strong>Newspective newage</strong>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption srcaption-miniwhite sfb slider-caption"
                             data-x="center" data-hoffset="0"
                             data-y="bottom" data-voffset="-140"
                             data-speed="500"
                             data-start="1200"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 3"><font size="14">Marketing Activities Specialist</font>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption srcaption-miniwhite sfb text-light scroll-to slider-arrow-down"
                             data-x="center" data-hoffset="0"
                             data-y="bottom" data-voffset="-40"
                             data-speed="500"
                             data-start="1300"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 3"><a href="#work" class="sr-button sr-buttonicon small-iconbutton scroll-to"><i class="ion-ios-arrow-down"></i></a>
                        </div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/images/bg-1.jpg" data-delay="10000"  data-saveperformance="off" data-title="slider 3">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/bg-1.jpg"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->    
                        <div class="tp-caption srcaption-bigwhite lfl ltr slider-title"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="1000"
                             data-start="100"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 2"><strong>Newspective Address</strong>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption srcaption-miniwhite sfb slider-caption"
                             data-x="center" data-hoffset="0"
                             data-y="bottom" data-voffset="-140"
                             data-speed="500"
                             data-start="1200"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 3"><font size="14">Private Property Partner</font>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption srcaption-miniwhite sfb text-light scroll-to slider-arrow-down"
                             data-x="center" data-hoffset="0"
                             data-y="bottom" data-voffset="-40"
                             data-speed="500"
                             data-start="1300"
                             data-easing="easeInOutQuad"
                             data-endspeed="1000"
                             data-endeasing="easeInOutQuad"
                             style="z-index: 3"><a href="#contact" class="sr-button sr-buttonicon small-iconbutton scroll-to"><i class="ion-ios-arrow-down"></i></a>
                        </div>

                    </li>
                </ul>
            </div>
        </div><!--full width banner-->

        <!-- Static navbar -->
        <nav class="navbar navbar-default sticky-nav navbar-static-top">
            <div class="container">
                <div class="navbar-header navbar-right scroll-to">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home" style="padding-top:0px"><img src="assets/images/Logo-newspective.png" alt="LOGO" height="50"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left scroll-to">
                        <!--<li class="active"><a href="#home">Home</a></li>-->
                        <!--<li><a href="#about">Town Hall</a></li>-->
                        <li class="dropdown">
                            <a href="#about" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Town Hall <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#founder">Founder & Group General Manager</a></li>
                                <li><a href="#symbol">Newspective Symbol</a></li>
                                <li><a href="#mib">“Make it Better” philosophyof SUCCESS</a></li>
                                <li><a href="#company">Group Company</a></li>
                                <li><a href="#timelime">Our Historic Timeline</a></li>
                                <li><a href="#wnp">We are Newspective people</a></li>                                
                            </ul>
                        </li>
                        <li><a href="#n-ac">News & Activities</a></li>
                        <li class="dropdown">
                            <a href="#n-head" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Newspective Newage <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#n-about">About Us & Our Service</a></li>
                                <li><a href="#n-people">People</a></li>
                                <li><a href="#n-portfolio">Portfolio</a></li>
                                <li><a href="#n-client">Client</a></li>                               
                            </ul>
                        </li>
                        <!--<li><a href="#work">Newspective Address</a></li>-->
                        <li class="dropdown">
                            <a href="#a-head" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Newspective Address <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#a-about">About Us & Our Service</a></li>
                                <li><a href="#a-people">People</a></li>
                                <li><a href="#a-portfolio">Portfolio</a></li>
                                <li><a href="#a-client">Client</a></li>                                
                            </ul>
                        </li>                      
                        <!--<li><a href="#contact">CSR</a></li>-->
                        <li class="dropdown">
                            <a href="#csr" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">CSR <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#mbs">Make it Better Scholarship</a></li>
                                <li><a href="#mbt">Make it Better Trainee</a></li>
                            </ul>
                        </li>
                        <li><a href="#careers">Careers</a></li>                                
                        <li class="dropdown">
                            <a href="#contact" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Contact Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#address">Address</a></li>
                                <li><a href="#google-map">Google Map</a></li>
                                <li><a href="#map-download">Map Download</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </nav>



        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="text-center">
                            <h2 class="center-title"> Town Hall</h2>
                            <span class="center-border-line"></span>                            
                        </div>
                    </div>
                </div><!--left title row end-->
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <!--<div class="col-sm-8 col-sm-offset-2">-->
                        <div id="founder"><br><br><br></div>
                        <h3>Founder & Group General Manager ตัวตนของผู้ก่อตั้ง : ณัฐภูมิ รัฐชยากร</h3>
                        <hr class="fancy-hr">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="colored-text">คุณปอ ณัฐภูมิ รัฐชยากร</span>ผู้ก่อตั้ง เกิดและเติบโต ที่ อำเภอสัตหีบ จังหวัดชลบุรี ซึ่งเป็นถิ่นของทหารเรือ สอบติดโครงการนักเรียนเรียนดีจากชนบท (ช้างเผือก) ในคณะเศรษฐศาสตร์ มหาวิทยาลัยธรรมศาสตร์ 
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากเวลาที่ได้ศึกษาเล่าเรียน มีความสนใจทำกิจกรรมต่างๆ มากมาย เช่น เคยได้รับเลือกตั้งเป็นประธานนักเรียนโรงเรียนสิงห์สมุทร, ได้รับเลือกตั้งเป็นอุปนายกองค์การนักศึกษามหาวิทยาลัยธรรมศาสตร์ ฝ่ายการภายนอก, รองประธานชุมนุมเชียร์และแปรอักษร ฝ่ายธุรการ และดูแลกิจกรรมสมัยเป็นนักเรียน นักศึกษาอีกมากมาย จนเพื่อนๆ หลายคนทักว่า จบการศึกษา กิจกรรมศาสตร์บัณฑิต เกียรตินิยมอันดับหนึ่ง
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การเรียนในคณะเศรษฐศาสตร์ ทำให้ได้ความรู้ในการพัฒนาประเทศมาในสองด้านใหญ่ๆ คือ เศรษฐศาสตร์พัฒนาทรัพยากรมนุษย์ และ เศรษฐศาสตร์การพัฒนา ทำให้เป็นคนที่มีความสามารถในการคิดและมองภาพรวม รวมถึงการวิเคราะห์สิ่งต่างๆ ได้ดี นอกจากนี้ยังได้ศึกษาเพิ่มเติมเรื่องการโฆษณาและประชาสัมพันธ์ จากคณะวารสารศาสตร์และสื่อสารมวลชน จนได้เป็นวิชาโท อีกด้วย
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากจบการศึกษา ไม่ได้เลือกเดินในสิ่งที่ได้เรียนมา แต่ได้เริ่มต้นทำงานที่บริษัทโฆษณาข้ามชาติ เนื่องจากมีความชอบในวงการโฆษณาและต้องการเรียนรู้ระบบการทำงานในบริษัทข้ามชาติ เพื่อศึกษาและนำสิ่งที่ดีที่สุดที่ได้เรียนรู้ เพื่อมาเปิดบริษัทเป็นของตนเอง จนสามารถทำสำเร็จเมื่ออายุเพียง 25 ปี โดยใช้ชื่อว่า “New Age” มีความหมายว่า ยุคของคนรุ่นใหม่ ปัจจุบันดำเนินการมาแล้ว 10 ปี มีความมั่นคง เติบโต ต่อเนื่องมาโดยตลอด
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากประสบการณ์และตัวตนทั้งหมด จึงทำให้เป็นคนที่มีมุมมองที่ “รู้ลึก หลากหลาย และทำได้จริง” ทำให้การทำงาน, การใช้ชีวิต และความคิด มีมุมมองเหมือนการวาดภาพ Perspective ที่สามารถมองเห็นจุดหลายๆ จุด และนำจุดเหล่านั้น มาคิด ต่อเติม เชื่อมโยง เป็นภาพเดียวกันได้อย่างสมบูรณ์แบบ สามารถนำมาพัฒนาเป็นงานดีที่มีคุณภาพได้ ถือเป็นความสามารถพิเศษ และความเป็นตัวตนเฉพาะ
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากนี้ ยังมีความสนใจในสังคมโดยเฉพาะ แนวคิด การเป็นนักพัฒนาคุณภาพชีวิตด้วยการศึกษาและการเรียนรู้ เชื่อว่าทุกสิ่งพัฒนาได้ โดยเริ่มที่ตนเอง และทุกๆ อย่างจะดีขึ้นเรื่อยๆ (Make it Better) จากแนวคิดนี้จึงนำมาเป็นหนึ่งในนโยบายสำคัญในการสร้างองค์กร บุคคลากร และพัฒนางาน รวมถึงการพัฒนาประเทศไทยให้ดียิ่งๆ ขึ้นไปอย่างมุ่งมั่น
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นับจากนี้ต่อไป พร้อมที่จะสร้างองค์กรใหม่ ให้ก้าวหน้ากว่าเดิม เพื่อการเติบโต ต่อเนื่อง อย่างก้าวกระโดด และยั่งยืน ควบคู่การพัฒนาบุคคลากร พัฒนางานของลูกค้า และประเทศไทย ในนาม Brand Newspective “Make it Better”

                        </p>
                    </div>
                </div><!--sub title center-->   


                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <!--<div class="col-sm-8 col-sm-offset-2">-->
                        <div id="symbol"><br><br><br></div>
                        <h3>Newspective Symbol</h3>
                        <hr class="fancy-hr">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">

                            <b><span class="colored-text">ที่มาของชื่อ</span></b><br>

                            Newspective มาจากการรวมตัวของคำ 2 คำ<br>
                            <span class="colored-text"><b>“New”</b></span> แปลว่า ความชอบ ความสนุก ที่จะสร้างสิ่งใหม่ๆ อยู่ตลอดเวลา <br> 
                            <span class="colored-text">และเป็นชื่อคำแรกของ <b>“New Age”</b></span> เดิมที่ดำเนินธุรกิจมากว่า 10 ปีแล้ว<br>
                            <span class="colored-text"><b>“Perspective”</b></span> แปลว่า มุมมองในการทำงาน ที่มองเห็นมากกว่าปกติ ทั้งด้าน กว้าง ลึก สูง พร้อมทั้งยังมีความสามารถในการเชื่อมโยงสิ่งต่างๆ เข้าด้วยกัน
                            Newspective จึงมีความหมายว่า มุมมองในหลายมิติ ที่เชื่อมต่อและสนุกที่จะทำสิ่งใหม่ๆ อยู่ตลอดเวลา เพื่อให้ทุกๆ อย่างที่ได้ทำดีขึ้นอยู่เรื่อยๆ ไม่มีที่สิ้นสุด

                            <br>

                            <b><span class="colored-text">ความหมายของโลโก้/สี/ตัวอักษรในโลโก้</span></b>

                            หมายถึงประตูที่จะนำทุกคนสู่สิ่งใหม่ๆ เพื่อให้ชีวิตของทุกคนดีขึ้นเรื่อยๆ
                            สีทอง หมายถึง ความเจริญก้าวหน้า มั่งคั่ง มั่งคง รุ่งเรื่อง ความสำเร็จตามที่ตั้งใจไว้ ความคงอยู่ตลอดกาล<br>
                            <span class="colored-text"><b>สีเทาอ่อนตรงกลาง </b></span> หมายถึง การก่อร่าง สร้างตัว สร้างความสำเร็จ มีความมุ่งมั่น มีความตั้งใจ สบายใจ อบอุ่นเป็นกันเอง<br>

                            <span class="colored-text"><b>สีเทาเข้าที่ฐานทั้งสองข้าง </b></span> หมายถึง ความหนักแน่น มั่งคง จริงจัง เป็นรากฐานที่ดี<br>

                            <span class="colored-text"><b>ตัวอักษร “Newspective”</b></span> สื่อให้เห็นถึงความมั่งคง จริงจัง ทันสมัย<br>

                            <span class="colored-text"><b>โลโก้ Newspective </b></span> ยังสื่อความหมายได้ถึง ประตูศาลเจ้าในประเทศญี่ปุ่น ซึ่งเป็นที่เคารพสักการะในแบบเซน มีความสงบ ลึก เข้าถึงความเรียบง่ายที่อยู่ในจิตใจของทุกคน “Simple is the best” การออกแบบโลโก้นี้ นำหลักปรัชญาของเซนมาใช้ในการออกแบบ
                        </p>
                    </div>
                </div><!--sub title center-->   

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="mib"><br><br><br></div>
                        <h3>“Make it Better” philosophyof SUCCESS</h3>
                        <hr class="fancy-hr">
                        <div class="text-center">
                            <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                                <br><span class="colored-text"><b>“พร้อมทำทุกๆ อย่างเพื่อให้ลูกค้า <br>
                                        ได้รับสิ่งที่ดีๆ ขึ้นไปเรื่อยๆ<br>
                                        ในทุกๆ วันที่ได้ทำงานร่วมกัน”</b></span><br>
                            </p>
                            <p><b>จากความตั้งใจของผู้ก่อตั้ง ที่จะพัฒนาคุณภาพชีวิตด้วยการศึกษาและการเรียนรู้ เชื่อว่าทุกสิ่งพัฒนาได้ โดยเริ่มที่ตนเอง และทุกๆ อย่างจะดีขึ้นเรื่อยๆ <br>(Make it Better) </b></p>
                        </div>
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">


                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปรัชญานี้ จึงทำมาใช้ในการทำงานให้กับลูกค้าของเรา โดยให้ความสำคัญกับการมีส่วนร่วมในการพัฒนางานของลูกค้า ในทุกๆ รายละเอียด โดยให้ดีกว่าเดิม เพิ่มขึ้นเรื่อยๆ ในทุกๆ วัน โดยไม่หยุดที่จะพัฒนางาน รวมไปถึงพร้อมปรับปรุงแก้ไขงานเสมอ หากสิ่งนั้นเป็นสิ่งดีที่ควรแก้ไข เพื่อให้งานพัฒนาต่อไปไม่มีที่สิ้นสุด<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รวมไปถึงในองค์กรของ Newspective ทีมงานทุกคนสามารถเสนอไอเดีย ในการบริหารงานทุกๆ เรื่อง ได้ตรงถึงผู้บริหาร เพื่อให้การทำงานในทุกๆ วันของทีมงานมีความสุขและมีคุณภาพชีวิตที่ดีกว่าที่เป็นอยู่ในทุกๆ วัน เพราะเชื่อว่า ถ้าทีมงานเก่งขึ้นและมีชีวิตที่ดีขึ้นทุกๆ วัน งานของลูกค้าที่ออกมาก็จะดีเยี่ยมเช่นกัน<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="colored-text"><b>“Make it Better”</b></span>จึงเป็นปรัชญาแห่งความสำเร็จที่เรายึดถือและใช้กับชีวิตของพวกเรา อย่างสำคัญยิ่ง
                        </p>
                    </div>
                </div><!--mib-->   


                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">                    
                        <div id="company"><br><br><br></div>
                        <h3>Group Company</h3>
                        <hr class="fancy-hr">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตลอดระยะเวลาที่ผ่านมา 10 กว่าปี บริษัท ได้เติบโตและพัฒนางานมาโดยตลอด ปัจจุบันได้จัดกลุ่มธุรกิจเป็น 3 ธุรกิจ ดังต่อไปนี้
                        </p>
                    </div>
                </div><!--company--> 
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-4 margin-bottom30">
                            <div class="service-features wow animated fadeIn" data-wow-delay=".2s">
                                <i class="ion-ios-people-outline"></i>
                                <b><span style="font-size:18px;">ธุรกิจที่ 1</span></b>
                                <p>
                                    ธุรกิจให้คำปรึกษาด้านการตลาดและการบริหารธุรกิจ ในนาม
                                    บริษัท นิวสเปคทีฟ จำกัด
                                    Newspective Co.,Ltd.
                                    Your Marketing and Business Solution


                                </p>
                            </div><!--service features-->
                        </div>
                        <div class="col-sm-4 margin-bottom30">
                            <div class="service-features wow animated fadeIn" data-wow-delay=".3s">
                                <i class="ion-ios-people-outline"></i>
                                <b><span style="font-size:18px;">ธุรกิจที่ 2</span></b>                            
                                <p>
                                    ธุรกิจให้บริการด้านกิจกรรมทางการตลาดและสื่อโฆษณา ในนาม
                                    บริษัท นิวสเปคทีฟ นิวเอจซ์ จำกัด		
                                    Newspective Newage Co.,Ltd. 
                                    Marketing Activities Specialist


                                </p>
                            </div><!--service features-->
                        </div>
                        <div class="col-sm-4 margin-bottom30">
                            <div class="service-features wow animated fadeIn" data-wow-delay=".4s">
                                <i class="ion-ios-people-outline"></i>
                                <b><span style="font-size:18px;">ธุรกิจที่ 3</span></b>                            
                                <p>
                                    ธุรกิจตัวแทนขายและการตลาดอสังหาริมทรัพย์ (Property Agent) ในนาม
                                    บริษัท นิวสเปคทีฟ แอดเดรส จำกัด
                                    Newspective Address Co.,Ltd.
                                    Private Property Partner

                                </p>
                            </div><!--service features-->
                        </div>
                    </div>
                </div><!--row-->
                <div class="row">
                    <div class="text-center">
                        <p>3 บริษัท 3 ธุรกิจ ที่จะทำให้ชีวิตคุณ ดีขึ้นในทุกๆ วัน</p>
                    </div>
                </div>





                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="timelime"><br><br><br></div>
                        <h3>Our Historic Timeline</h3>
                        <hr class="fancy-hr">


                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
                            <div class="blog-date">
                                <span class="date-day">2548</span>                                
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <blockquote>
                                        <span class="font14">ก่อตั้งบริษัท นิวเอจ ไดเรคชั่น จำกัด รับจัดงาน Event งานแรก คือ งานเลี้ยงประจำปี ของสมาคมช่างเหมาไฟฟ้าและเครื่องกลไทย จัดที่ ศูนย์ประชุมพีช โรงแรมรอยัลคลิปบีช พัทยา</span>
                                    </blockquote>
                                </div><!--entry media-->
                            </div><!--blog content-->
                        </div><!--blog entry-->


                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
                            <div class="blog-date">
                                <span class="date-day">2549</span>                                
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <blockquote>
                                        <span class="font14">ลงทุนซื้ออาคารสำนักงานเพื่อเป็นที่ตั้ง ของบริษัทอย่างถาวร มุ่งมั่นเดินหน้าทำธุรกิจอย่างแน่วแน่</span>
                                    </blockquote>
                                </div><!--entry media-->
                            </div><!--blog content-->
                        </div><!--blog entry-->

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
                            <div class="blog-date">
                                <span class="date-day">2551</span>                                
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <blockquote>
                                        <span class="font14">เปลี่ยนชื่อ เป็น บริษัท นิวเอจ เอเจนซี่ จำกัด และขยายงานทำ Event เป็นเพิ่มงาน Media ขึ้นมา พร้อมทำให้เป็นที่รู้จักมากขึ้น </span>
                                    </blockquote>
                                </div><!--entry media-->
                            </div><!--blog content-->
                        </div><!--blog entry-->

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
                            <div class="blog-date">
                                <span class="date-day">2552</span>                                
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <blockquote>
                                        <span class="font14">MaGazine คือ นิตยสารที่บริษัทเคยผลิต เป็นนิตยสารเกี่ยวกับ Mac เป็นจุดเริ่มต้นและการเรียนรู้ในการพัฒนางาน Media ที่ดีจุดหนึ่งของบริษัท</span>
                                    </blockquote>
                                </div><!--entry media-->
                            </div><!--blog content-->
                        </div><!--blog entry-->

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
                            <div class="blog-date">
                                <span class="date-day">2554</span>                                
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <blockquote>
                                        <span class="font14">มุ่งมั่นและพัฒนา นโยบาย “สร้างคนแบบนิวเอจ”</span>
                                    </blockquote>
                                </div><!--entry media-->
                            </div><!--blog content-->
                        </div><!--blog entry-->

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
                            <div class="blog-date">
                                <span class="date-day">2557</span>                                
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <blockquote>
                                        <span class="font14">ขยายงานนอกกลุ่มธุรกิจเดิม โดยก่อตั้ง บริษัท แอดเดรส366 จำกัด บริษัทตัวแทนการขายและการตลาดอสังหาริมทรัพย์</span>
                                    </blockquote>
                                </div><!--entry media-->
                            </div><!--blog content-->
                        </div><!--blog entry-->

                        <div class="blog-entry clearfix wow animated fadeInUp" data-wow-delay=".4s">

                            <p class="blog-date-custom">21 มกราคม 2558</p>


                            <div class="entry-media">
                                <blockquote style="border-left:0px">
                                    <span class="font14">ปรับภาพลักษณ์องค์กรใหม่ เป็น Newspective พร้อมจัดกลุ่มธุรกิจ และมุ่งมั่นขยายงานอย่างต่อเนื่อง </span>
                                </blockquote>
                            </div><!--entry media-->                            

                        </div><!--blog entry-->

                    </div>
                </div><!-- ##### end Our Historic Timeline #####-->


                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="wnp"><br><br><br></div>
                        <h3>We are Newspective people</h3>
                        <hr class="fancy-hr">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective ดำเนินงานภายใต้ปรัชญาแห่งความสำเร็จ “Make it Better” เรามุ่งมั่นและให้ความสำคัญกับการพัฒนาคนในองค์กรของเราเป็นอย่างมาก คนในองค์กรของเรา จะถูกคัดเลือกและพัฒนามาจากหลัก 3 ประการ ได้แก่</b><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ระดับบน :</b> ถือเป็นระดับปรัชญาการใช้ชีวิต : “Make it Better” ต้องเป็นคนที่อยากจะพัฒนาตนเอง และเรียนรู้ตลอดเวลา เพื่อทำให้ชีวิตของตนเองดีขึ้นกว่าเดิมในทุกๆ วัน<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ระดับกลาง :</b> ระดับคุณลักษณะพิเศษของคน Newspective : ประกอบด้วย 3 ด้านคือ<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รู้ลึก : รู้จริงและเก่ง ในเรื่องที่ต้องทำงานในหน้าที่ของตนเอง สามารถสอนให้คนอื่นเข้าใจได้อย่างถ่องแท้<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลากหลาย : รู้เยอะ มีข้อมูลเรื่องอื่นๆ ที่อาจจะเกี่ยวข้องและไม่เกี่ยวข้องในงานของตัวเอง สามารถมาประยุกต์ใช้ได้เสมอๆ<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทำได้จริง : เป็นคนทำจริง มุ่งมั่น มีผลงานที่ทำจริงจากฝีมือตนเองและเป็นที่ยอมรับของคนอื่น<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ระดับพื้นฐาน :</b> ระดับปฎิบัติงานในแต่ละธุรกิจ : ในแต่ละธุรกิจของ Newspective จะมีความแตกต่างของคนกันออกไปในแต่ลักษณะของธุรกิจ อันได้แก่<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดดเด่น, เคลื่อนไหว, มีชีวิตชีวา  <br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นของ บริษัท นิวสเปคทีฟ นิวเอจซ์ จำกัด  <br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ทำงาน Focus, ชอบต่อรอง, มีความเป็นมิตร 	เป็นของ บริษัท นิวสเปคทีฟ แอดเดรส จำกัด<br><br>

                            <b>ซึ่งทั้ง 3 ระดับ สามารถอธิบายถึงคนของ Newspective ได้จาก Cubic นี้</b><br>
                            Newspective เชื่อมั่นว่า คนของเราจะสร้างสรรค์ให้ทุกวันของลูกค้ามีแต่เรื่องดีๆ ขึ้นไปเรื่อยๆ
                        </p>
                    </div>
                </div><!--mib-->   

            </div><!--container-->   
        </section><!--about section end-->
        <!-- ############################################ END TOWN HALL#####################################-->


        <section id="work" class="section-padding wow animated fadeIn" data-wow-delay=".1s">
            <div class="container">
                <div class="row">
                    <div id="n-ac"><br><br><br></div>               
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="text-center">
                            <h2 class="center-title">NEWS & ACTIVITIES</h2>
                            <span class="center-border-line"></span>
                            <!--<p class="sub-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in piece of classical Latin literature from 45 BC, it a old.</p>-->
                        </div>
                    </div>
                </div><!--center title row end-->
            </div><!--container-->
            <div class="container">  


                <div style="display: none" id="filters-container" class="cbp-l-filters-dropdown">
                    <div class="cbp-l-filters-dropdownWrap">
                        <div class="cbp-l-filters-dropdownHeader">Sort Gallery</div>
                        <div class="cbp-l-filters-dropdownList">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                                All (<div class="cbp-filter-counter"></div> items)
                            </div>
                            <div data-filter=".print" class="cbp-filter-item">
                                Print (<div class="cbp-filter-counter"></div> items)
                            </div>
                            <div data-filter=".web-design" class="cbp-filter-item">
                                Web Design (<div class="cbp-filter-counter"></div> items)
                            </div>
                            <div data-filter=".motion" class="cbp-filter-item">
                                Motion (<div class="cbp-filter-counter"></div> items)
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div id="grid-container" class="cbp">
                    <?php
                    $newsActivities = newsActivities();
                    while ($row = $newsActivities->fetch_assoc()) {
                        ?>
                        <div class="cbp-item print motion">
                            <a href="assets/ajax/project1.php?id=<?php echo $row['id']; ?>" class="cbp-caption cbp-singlePageInline">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="webadmin/file/news/<?php echo newsFileFilst($row['id']) ?>" alt="<?php echo $row["th_title"]; ?>">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><?php echo $row["th_title"]; ?></div>
                                            <div class="cbp-l-caption-desc"><?php echo $row["th_desc"] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>


                    <!--<div class="cbp-item web-design">
                        <a href="assets/ajax/project2.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-8.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Bolt UI</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="assets/ajax/project3.html" class="cbp-caption cbp-singlePageInline"
                           data-title="WhereTO App<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-7.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">WhereTO App</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="assets/ajax/project4.html" class="cbp-caption cbp-singlePageInline"
                           data-title="iDevices<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-6.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">iDevices</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/ajax/project5.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-5.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="assets/ajax/project6.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-4.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Remind~Me Widget</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="assets/ajax/project7.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Workout Buddy<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-3.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Workout Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print">
                        <a href="assets/ajax/project8.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Digital Menu<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-2.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Digital Menu</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="assets/ajax/project9.html" class="cbp-caption cbp-singlePageInline"
                           data-title="Holiday Selector<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/work-1.jpg" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Holiday Selector</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>-->
                </div>

                <!--<div id="loadMore-container" class="cbp-l-loadMore-button">
                    <a href="assets/ajax/loadMore.html" class="cbp-l-loadMore-link">
                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                    </a>
                </div>-->

            </div><!--container-->
        </section><!--portfolio section end here-->


        <!-- ############################################ END NEWS & ACTIVITIES #############################-->

        <div class="container">
            <div id="n-head"><br><br><br></div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="text-center">
                        <h2 class="center-title">Newspective Newage Co.,Ltd.</h2>
                        <span class="center-border-line"></span>                           
                    </div>
                </div>
            </div><!--left title row end-->        
        </div>
        <div class="container">
            <div id="n-about"><br><br><br></div>
            <h3>About Us & Our Service</h3>
            <hr class="fancy-hr">
            <dir class="row">
                <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                    บริษัท นิวสเปคทีฟ นิวเอจซ์ จำกัด เราคือผู้เชี่ยวชาญด้านกิจกรรมทางการตลาดและสื่อโฆษณาทุกประเภท (Marketing Activities Spectial) ด้วยประสบการณ์กว่า 10 ปี<br><br>

                    <b>3 บริการเด่นของเรา</b><br><br>

                <div class="row">
                    <div class="col-sm-4 margin-bottom30">
                        <div class="services-box wow animated fadeIn" data-wow-delay="0.2s">
                            <h3 class="services-title"><span class="colored-text">EVEN</span></h3>                    
                            <ul class=" list-unstyled">
                                <li>Press Conference</li>
                                <li>Grand Opening</li>
                                <li>Thank You Party</li>
                                <li>Staff Party</li>
                                <li>Road Show</li>
                                <li>Booth & Exhibitions </li>
                                <li>Exclusive Event </li>
                                <li>Rally</li>
                                <li>Contest</li>
                                <li>Sport Day</li>
                                <li>Seminar</li>
                                <li>Internal Communication </li>
                                <li>CSR</li>
                                <li>Graphic Design</li>
                                <li>Wedding Partner </li>
                                <li>Corporate Communication</li>
                                <li>Etc.</li>                                
                            </ul>
                        </div><!--service box-->
                    </div><!--col-->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="services-box wow animated fadeIn" data-wow-delay="0.4s">
                            <h3 class="services-title"><span class="colored-text">Web development</span></h3>                           
                            <ul class=" list-unstyled">
                                <li>Media Planning</li>
                                <li>Media Buying</li>
                                <li>Initiative Out of Home</li>
                                <li>Website & Apps Production</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                            </ul>
                        </div><!--service box-->
                    </div><!--col-->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="services-box wow animated fadeIn" data-wow-delay="0.6s">
                            <h3 class="services-title"><span class="colored-text">Additional</span></h3>                           
                            <p>
                                และบริการเสริมที่คุณไม่ต้องไปหาที่ไหน
                            </p>                          
                            <ul class=" list-unstyled">
                                <li>Branding & Corporate Identity</li>
                                <li>VDO & 3D Animation</li>
                                <li>Personal Sale & Promotion Deals</li>
                                <li>Copy Writer</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>                             
                            </ul>
                        </div><!--service box-->
                    </div><!--col-->
                </div><!--row-->

                <!--<div class="text-center">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        <br><span class="colored-text"><b>“Never say no, we deliver all things you desire”</b></span><br>
                    </p>
                </div>-->

                <div class="quote parallax-1">
                    <div class="container text-center">
                        <div class="col-sm-8 col-sm-offset-2 wow animated fadeIn" data-wow-delay=".2s">
                            <p>
                                “ใครไม่ทำเราทำได้ ที่เดียวจบ ครบทุกความต้องการ”
                            </p>
                            <h5>Newspective</h5>
                        </div>
                    </div>
                </div><!--quote section end-->
        </div>
    </div>

    <div class="container">
        <div id="n-people"><br><br><br></div>
        <h3>People</h3>
        <hr class="fancy-hr">              
    </div>

    <div class="row">
        <div class="col-sm-12">
            <!-- team slider -->
            <div class="ms-staff-carousel">
                <!-- masterslider -->
                <div class="master-slider" id="teamslider">
                    <div class="ms-slide">
                        <img src="assets/master-slider/style/blank.gif" data-src="img/Nattapoom.jpg" alt="lorem ipsum dolor sit"/>  

                        <div class="ms-info text-center">
                            <h3>นายณัฐภูมิ รัฐชยากร</h3>
                            <h4>ผู้จัดการทั่วไปกลุ่ม</h4>
                            <p class="email">E-Mail: <span class="colored-text">nattapoom@newspective.co.th</span></p>
                            <p>อดีตนักกิจกรรมนักเรียน นักศึกษา เริ่มงานแรกที่ OMD Thailand ต่อด้วย Dentsu Media Palette (Thailand) และมาเริ่มสร้างบริษัทตั้งแต่อายุ 25 ปี มีความชำนาญด้านกิจกรรมทางการตลาดกว่า 10 ปี</p>
                            <p class="email">Mobile: <span class="colored-text">081-439-5533</span></p>
                        </div>     
                    </div><!--slide item-->
                    <div class="ms-slide">
                        <img src="assets/master-slider/style/blank.gif" data-src="img/Mananya.jpg" alt="lorem ipsum dolor sit"/>  

                        <div class="ms-info text-center">
                            <h3>นางสาวมนัญญา เตยราชกุล</h3>
                            <h4>Associate Business Director</h4>
                            <p class="email">E-Mail: <span class="colored-text">mananya@newspective.co.th</span></p>
                            <p>อดีตนักกิจกรรมนักเรียนนักศึกษา เริ่มงานกับ Newspective ตั้งแต่เรียนจบเมื่อ 9 ปีที่แล้ว ถือเป็นกำลังสำคัญในการพัฒนางานกับลูกค้า มีบุคคลิกโดดเด่นเรื่องความว่องไว มีความคิดหลากหลาย และรักลูกค้าเหมือนเพื่อน พี่ น้อง ปัจจุบันดูแลธุรกิจ Event ให้กับ Newspective ให้ต่อเนื่องและยั่งยืน</p>
                            <p class="email">Mobile: <span class="colored-text">081-625-2587</span></p>
                        </div>     
                    </div><!--slide item-->
                    <div class="ms-slide">
                        <img src="assets/master-slider/style/blank.gif" data-src="img/Nuengruethai.jpg" alt="lorem ipsum dolor sit"/>  

                        <div class="ms-info text-center">
                            <h3>นางสาวหนึ่งฤทัย บางนาชาด</h3>
                            <h4>Media Manager</h4>
                            <p class="email">E-Mail: <span class="colored-text">nuengruethai@newspective.co.th</span></p>
                            <p>นักศึกษาหัวดี ด้านการตลาด เรียนในสิ่งที่ชอบ และได้ทำในสิ่งที่เรียน เริ่มงานกับ Newspective เมื่อ 7 ปีที่แล้ว ตั้งแต่เรียนจบ เป็นกำลังหลักในการขยายธุรกิจใหม่ด้าน Media เป็นคนตัวเล๊กแต่ชัดเจน ตรงไปตรงมา ทำงานแม่นยำ รักลูกค้าเหมือนพี่น้องเช่นกัน ปัจจุบันมุ่งมั่นสร้างธุรกิจ Media ให้เติบโตต่อไป</p>
                            <p class="email">Mobile: <span class="colored-text">086-880-4466</span></p>
                        </div>     
                    </div><!--slide item-->                                
                </div>
                <!-- end of masterslider -->
                <div class="ms-staff-info" id="staff-info"> </div>
            </div>
            <!-- end of team slider -->
        </div>
    </div>

    <div class="container">
        <div id="n-portfolio"><br><br><br></div>
        <h3>Portfolio</h3>
        <hr class="fancy-hr">              
    </div><br>

    <div class="container">
        <div class="row">
            <?php
            $Nportfolio = portfolioN();
            while ($nport = $Nportfolio->fetch_assoc()) {
                ?>
                <div class="col-md-4 col-lg-4">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top" style="margin:20px"><a href="portfolio.php?id=<?php echo $nport["id"]; ?>">
                            <div class="img"><img src="webadmin/file/portfolio/<?php echo $nport["fileNme"]; ?>"></div>
                            <div class="info">
                                <h3><?php echo $nport["th_title"]; ?></h3>
                                <p style="margin-top: 0px"><?php echo $nport["th_desc"]; ?></p>
                            </div></a></div>
                    <!-- end normal -->
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="container">
        <div id="n-client"><br><br><br></div>
        <h3>Client</h3>
        <hr class="fancy-hr">              
    </div>

    <div class="container">
        <div class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
            <img width="100%" src="img/Logo_cus.jpg">
        </div>
    </div>

    <!-- ############################################ END Newspective newage ############################-->
    <div class="container">
        <div id="a-head"><br><br><br></div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="text-center">
                    <h2 class="center-title">Newspective Address</h2>
                    <span class="center-border-line"></span>                           
                </div>
            </div>
        </div><!--left title row end-->        
    </div>
    <div class="container">
        <div id="a-about"><br><br><br></div>
        <h3>About Us & Our Service</h3>
        <hr class="fancy-hr">
        <dir class="row">
            <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัจจัย 4 ของมนุษย์โลก หนึ่งในนั้นคือที่อยู่อาศัย การที่มนุษย์เรามีที่อยู่อาศัยที่ดีนับว่าเป็นสิ่งที่สร้างความสุขได้เป็นอย่างยิ่ง ที่อยู่อาศัยจึงนับเป็นเรื่องสำคัญของชีวิตมนุษย์มากๆ บ้าน ทาว์เฮาส์ คอนโด อาคารสำนักงาน ที่ดิน และอื่นๆ เรารวมเรียกว่าที่อยู่อาศัย การมีชีวิตในที่อยู่อาศัยทั้ง 366 วันในแต่ละปี จะทำให้เราดำเนินชีวิตได้เป็นอย่างดี<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากความสำคัญนี้เอง จึงทำให้เกิดธุรกิจนี้ขึ้นมา เรายินดีและพร้อมที่จะเป็นเพื่อนที่ดี ให้กับผู้ที่ต้องการหาที่อยู่อาศัยที่ทำให้คุณมีความสุขได้ตลอด 366 วัน ตลอดปี คำแนะนำและข้อมูลดีๆ ที่เราให้ คือความสุขที่เราต้องการมอบให้ลูกค้าของเรา<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Who Are We : We Are Property Agent</b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Vision ที่เรายึดถือ Private Property Partner เพื่อนด้านอสังหาริมทรัพย์ ที่ดี่ที่สุดของคุณ </b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Mission ของเรา คือ Anytime is you ตลอดเวลาที่มี เราพร้อมให้คุณ</b><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริการชั้นเลิศจากเรา : เรามีความเชี่ยวชาญในการเป็นตัวแทนอสังหาริมทรัพย์ให้กับโครงการที่สำคัญ ของคุณ (Sole Agent) และมีความชำนาญใน 3 บริการ<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Project Sale บริการให้คำปรึกษาและเป็นตัวแทนการขาย เรามีทีมงานขายที่เชี่ยวชาญและมีประสบการณ์ให้คุณสัมผัสได้มากกว่า โดยไม่เหมือนที่ใด เน้นความเป็นกันเองในการขาย และความเข้าใจลูกค้า พร้อมทั้งมี Service Mind สูง และยังรวมไปถึงความสามารถในการปิดการขายอีกด้วยบริการให้คำปรึกษาและเป็นตัวแทนการขาย เรามีทีมงานขายที่เชี่ยวชาญและมีประสบการณ์ให้คุณสัมผัสได้มากกว่า โดยไม่เหมือนที่ใด เน้นความเป็นกันเองในการขาย และความเข้าใจลูกค้า พร้อมทั้งมี Service Mind สูง และยังรวมไปถึงความสามารถในการปิดการขายอีกด้วย<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Project Marketing บริการให้คำปรึกษาด้านการทำการตลาดเจาะจงเฉพาะอสังหาริมทรัพย์ซึ่งมีความพิเศษเฉพาะธุรกิจที่ไม่เหมือนธุรกิจอื่นๆ เชี่ยวชาญด้านการตลาด Online และ Offline ที่จะทำให้โครงการของคุณบรรลุยอดขายได้ตามเป้าหมายบริการให้คำปรึกษาด้านการทำการตลาดเจาะจงเฉพาะอสังหาริมทรัพย์ซึ่งมีความพิเศษเฉพาะธุรกิจที่ไม่เหมือนธุรกิจอื่นๆ เชี่ยวชาญด้านการตลาด Online และ Offline ที่จะทำให้โครงการของคุณบรรลุยอดขายได้ตามเป้าหมาย<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Project  Analysis บริการให้คำปรึกษาด้านการวิเคราะห์โครงการ ทั้งก่อนลงมือทำ หรือ ระหว่างทำโครงการ วิเคราะห์ทั้งทางด้านการตลาด (Marketing) การขาย (Sale) การวิเคราะห์ทางการเงิน (Financial) ผลตอบแทนของโครงการ (Project Feasibility) และอื่นๆ อีกมากมาย เพื่อให้โครงการของคุณ มีข้อมูลที่แท้จริง แลประสบความสำเร็จตั้งแต่เริ่มโครงการบริการให้คำปรึกษาด้านการวิเคราะห์โครงการ ทั้งก่อนลงมือทำ หรือ ระหว่างทำโครงการ วิเคราะห์ทั้งทางด้านการตลาด (Marketing) การขาย (Sale) การวิเคราะห์ทางการเงิน (Financial) ผลตอบแทนของโครงการ (Project Feasibility) และอื่นๆ อีกมากมาย เพื่อให้โครงการของคุณ มีข้อมูลที่แท้จริง แลประสบความสำเร็จตั้งแต่เริ่มโครงการ<br><br>

            <div class="text-center">
                <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                    <br><span class="colored-text"><b>Anytime is you</b></span><br>
                </p>
            </div>


            <div class="container">
                <div id="a-people"><br><br><br></div>
                <h3>People</h3>
                <hr class="fancy-hr">              
            </div>
            <div class="testimonials parallax-2 dark">

                <div class="container">
                    <div class="text-center wow animated fadeInDown" data-wow-delay=".1s">
                        <h2 class="center-title"> <span class="colored-text">Newspectie address </span></h2>                    
                        <!--<p class="sub-text">Over 8000 extremely satisfied clients!</p>-->
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="flexslider testi-slider wow animated fadeInUp" data-wow-delay=".2s">
                                <ul class="slides">
                                    <li>
                                        <div class="testi-slider-item">
                                            <img src="img/Nattapoom.jpg" alt="">
                                            <h6>นายณัฐภูมิ รัฐชยากรนายณัฐภูมิ รัฐชยากร <span class="colored-text">Group General Manager</span></h6>
                                            <p>
                                                ทำธุรกิจนี้ด้วยความรักและความชอบเป็นทุนเดิม มุ่งหวังให้ทุกคน ได้มีที่อยู่อาศัยที่มีความสุขได้ในทุกๆ วัน
                                            </p>                                 
                                        </div>
                                    </li><!--Single slide li-->
                                    <li>
                                        <div class="testi-slider-item">                                        
                                            <p>
                                                มีประสบการณ์ในวงการโฆษณามากว่า 10 ปี พร้อมนำความรู้ที่มีมาช่วยพัฒนางานด้านอสังหาริมทรัพย์ให้กับลูกค้าทุกท่านอย่างเต็มความสามารถ
                                                <br>
                                                <span class="colored-text"><b> E-Mail : nattapoom@newspective.co.th</b></span><br>
                                                <span class="colored-text"><b> Mobile : 081-439-5533</b></span><br>
                                            <hr style="width: 10%;">
                                            <br>
                                            </p>                                 
                                        </div>
                                    </li><!--Single slide li-->

                                    <li>
                                        <div class="testi-slider-item">
                                            <img src="img/Poompan.jpg" alt="">
                                            <h6>นายภูมิพรรณ ภัทรนุธาพร <span class="colored-text">Finance Director (Board Member)</span></h6>                                        
                                            <p>
                                                นักตรวจสอบบัญชี นักการเงิน และเจ้าของกิจการด้านอสังหาริมทรัพย์ ประสบการณ์จากการทำธุรกิจด้วยตนเองกว่า 10 ปี จะช่วยทำให้เรื่องบัญชีและการเงิน ที่ดูน่าปวดหัว ไม่น่าปวดหัวอีกต่อไป 
                                            </p>                                        
                                        </div>
                                    </li><!--Single slide li--> 
                                    <li>
                                        <div class="testi-slider-item">                                        
                                            <p>
                                                เพราะทุกอย่างในวงการอสังหาริมทรัพย์ต้องใช้ตัวเลขมาประกอบเพื่อความถูกต้องและแม่นยำ คุณภูมิพรรณสามารถสร้างเรื่องยากๆ ให้เป็นตัวเลขที่ดูง่ายๆ แต่เข้าใจ
                                                <br>
                                                <span class="colored-text"><b> E-Mail : poompan@newspective.co.th</b></span><br>
                                                <span class="colored-text"><b> Mobile : 089-779-9877</b></span><br>
                                            <hr style="width: 10%;">                                      
                                            </p>                                 
                                        </div>
                                    </li><!--Single slide li-->

                                    <li>
                                        <div class="testi-slider-item">
                                            <img src="img/Muchaklit.jpg" alt="">
                                            <h6>นายมัชกฤษณ์ นิวัติกรรณุมาตร์ <span class="colored-text">Private Property Partner-Director (Board Member)</span></h6>
                                            <p>
                                                นักขายมือทอง ขายมาแล้วทุกอย่างแต่ที่สนใจเป็นพิเศษคือขายอสังหาริมทรัพย์ซึ่งถือว่า Sale คนไหนขายอสังหาฯ ได้ ถือว่าเป็นสุดยอด Sale เพราะมีความหลากหลายของความรู้ที่ต้องมี พร้อมทั้งยังมีราคาสูง 
                                            </p>                                        
                                        </div>
                                    </li><!--Single slide li-->
                                    <li>
                                        <div class="testi-slider-item">                                        
                                            <p>
                                                ซึ่งต้องอาศัยความน่าเชื่อถือของผู้ขายเป็นอย่างยิ่ง คุณสมบัติทั้งหมดนี้มีอยู่ในคนนี้คนเดียว พร้อมที่จะนำพาทีมงานขาย ด้วยความคิดสร้างสรรค์ ไปสู่เป้าหมายได้อย่างเต็มกำลัง
                                                <br>
                                                <span class="colored-text"><b> E-Mail : muchaklit@newspective.co.th</b></span><br>
                                                <span class="colored-text"><b> Mobile : 094-794-3335</b></span><br>
                                            <hr style="width: 10%;">                                      
                                            </p>                                 
                                        </div>
                                    </li><!--Single slide li-->

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--testimonials-->


            <div class="container">
                <div class="row">
                    <div id="a-current-project"><br><br><br></div>
                    <h4>Current Project</h4>
                </div>       
            </div>
            <div class="container">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Project</th>
                                <th>Location</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Condominium  </td>
                                <td>The Next </td>
                                <td>Sukhumvit 52</td>
                                <td>Bangkok</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>ZEN NEXT</td>
                                <td>Khao Yai</td>
                                <td>Nakhonratchasima</td>                            
                            </tr>
                            <tr>
                                <td></td>
                                <td>The River   </td>
                                <td>Chaophraya River</td>
                                <td>Bangkok</td>                           
                            </tr>
                            <tr>
                                <td></td>
                                <td>Zire Wongamart</td>
                                <td>Wongamart  Beach</td>
                                <td>Pattaya</td>                            
                            </tr>
                            <tr>
                                <td>Single House</td>
                                <td>The Master</td>
                                <td>Petchakasem 84</td>
                                <td>Bangkok</td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div id="a-reference-project"><br><br><br></div>
                    <h4>Reference Project</h4>
                </div>       
            </div>
            <div class="container">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Project</th>
                                <th>Location</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Condominium</td>
                                <td>Baan Rub Lom</td>
                                <td>Khao Yai</td>
                                <td>Nakhonratchasima</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Bangna Country Complex</td>
                                <td>Bang Na</td>
                                <td>Bangkok</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Massaluna</td>
                                <td>Nai Yang Beach</td>
                                <td>Phuket</td>                        
                            </tr>
                            <tr>
                                <td></td>
                                <td>Zen City</td>
                                <td>Sriracha</td>
                                <td>Chonburi</td>                        
                            </tr>
                            <tr>
                                <td></td>
                                <td>Lasantir</td>
                                <td>Na Jomtian</td>
                                <td>Pattaya</td>
                            </tr>
                            <tr>
                                <td>Single House</td>
                                <td>Nakarasarp</td>
                                <td>Bangpra</td>
                                <td>Chonburi</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <!-- team slider -->
                    <div class="ms-staff-carousel">
                        <!-- masterslider -->
                        <div class="master-slider" id="teamslider">
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="assets/images/team-1.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center">
                                    <h3>Mr.Nattapoom Ratchayakorn</h3>
                                    <h4>Group General Manager</h4>
                                    <p class="email">E-Mail: <a href="#">nattapoom@newspective.co.th</a></p>
                                    <p>Former activity lover student who started his first career at M=OMD Thailand, followed by Dentsu Media Palette (Thailand) and began his own company at the age of 25. Nattapoom has over 10 years of marketing experiences.</p>
                                    <p class="email">Mobile: <a href="#">081-439-5533</a></p>
                                </div>     
                            </div><!--slide item-->
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="assets/images/team-2.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center">
                                    <h3>Miss Mananya Teyarajkul</h3>
                                    <h4>Associate Business Director</h4>
                                    <p class="email">E-Mail: <a href="#">mananya@newspective.co.th</a></p>
                                    <p>Former activity lover student who started her career at Newspective since 9 years ago as fresh graduate, Mananya is the important pillar for business development with clients. She has outstanding personality, quick, always come up with several ideas and love her clients like family members. Currently, Mananya is in charge of event business for Newspective.</p>
                                    <p class="email">Mobile: <a href="#">081-625-2587</a></p>
                                </div>     
                            </div><!--slide item-->
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="assets/images/team-3.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center">
                                    <h3>Miss Nuengruethai Bangnachat</h3>
                                    <h4>Media Manager</h4>
                                    <p class="email">E-Mail: <a href="#">nuengruethai@newspective.co.th</a></p>
                                    <p>Former bright marketing student who studied what she loves and further work on it as a career, Nuengruethai joined Newspective since 7 years ago and has been playing important role to expand new media business for the company. She may be a small lady but very straight forward, precise and love her clients like family members as well. Currently, Neungruethai is focusing on building up a consistent media business for the company.</p>
                                    <p class="email">Mobile: <a href="#">086-880-4466</a></p>
                                </div>     
                            </div><!--slide item-->                                
                        </div>
                        <!-- end of masterslider -->

                    </div>
                    <!-- end of team slider -->
                </div>
            </div>

            <div class="container">
                <div id="a-portfolio"><br><br><br></div>
                <h3>Portfolio</h3>
                <hr class="fancy-hr">              
            </div><br>


            <div class="container">
                <div class="row">
                    <?php
                    $Aportfolio = portfolioA();
                    while ($aport = $Aportfolio->fetch_assoc()) {
                        ?>
                        <div class="col-md-4 col-lg-4">
                            <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top"><a href="portfolio.php?id=<?php echo $aport["id"]; ?>">
                                    <div class="img"><img src="webadmin/file/portfolio/<?php echo $aport["fileNme"]; ?>"></div>
                                    <div class="info">
                                        <h3><?php echo $aport["th_title"]; ?></h3>
                                        <p style="margin-top: 0px"><?php echo $aport["th_desc"]; ?></p>
                                    </div></a></div>
                            <!-- end normal -->
                        </div>
                    <?php } ?>
                </div>
            </div>
    </div>
    <div class="container">                
        <div class="row">  
            <div class="container">
                <div id="a-client"><br><br><br></div>
                <h3>Client</h3>
                <hr class="fancy-hr">              
            </div>
        </div>
    </div>

    <div class="container">                
        <div class="row">                    
            <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KD Asset & Development Co.,Ltd.</b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Raimon Land PCL</b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pieamsuk Development Co.,Ltd.</b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Ban Rub Lom Co.,Ltd.</b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>VISPAC Co.,Ltd.</b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Porchland Group</b>
            </p>                              
        </div>
    </div>

    <!-- ############################################ END Newspective address ############################-->

    <div class="container">
        <div id="csr"><br><br><br></div>
        <div class="text-center wow animated bounceIn" data-wow-delay=".1s">
            <h2 class="center-title"> Corporate Social Responsibility</h2>
            <span class="center-border-line"></span>
            <p class="sub-text">Newspective เชื่อว่าชีวิตจะดีขึ้นได้ ด้วยการพัฒนาการศึกษาและการเรียนรู้ จึงได้ให้ความสำคัญด้านการศึกษาและการเรียนรู้ของเยาวชนเป็นอย่างยิ่ง โดยได้ทำโครงการทั้ง 2 นี้อย่างต่อเนื่อง ได้แก่</p>
        </div>
    </div>             

    <div class="container">
        <div id="mbs"><br><br><br></div>
        <h3>“Make it Better” Scholarship ทุนการศึกษาที่จะทำให้ชีวิตดีขึ้น</h3>
        <hr class="fancy-hr">              
    </div>
    <div class="container">
        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective เห็นถึงความสำคัญเรื่องการศึกษาของน้องๆ ระดับชั้นมัธยมศึกษาตอนปลาย จึงได้มอบทุนการศึกษาสำหรับน้องๆ ที่ตั้งใจเรียนและรักการทำกิจกรรมระหว่างศึกษา โดยได้เริ่มในปีที่ผ่านมาเป็นปีแรก ซึ่งมีผู้ได้รับทุนการศึกษาต่อเนื่องจนจบมัธยมศึกษาตอนปลาย ดังต่อไปนี้
            <br>
            <br>
            <b>ปี 2557</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. นางสาวชณิตา มั่งมี	ระดับชั้นมัธยมศึกษาปีที่ 4	โรงเรียนสิงห์สมุทร<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. นายจักรพงษ์ วงศ์อยู่ 	ระดับชั้นมัธยมศึกษาปีที่ 4	โรงเรียนสิงห์สมุทร<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. นางสาวอารยา ตรงยงค์	ระดับชั้นมัธยมศึกษาปีที่ 5      โรงเรียนสิงห์สมุทร<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. นางสาวนิศารัตน์ บุตรดี	ระดับชั้นมัธยมศึกษาปีที่ 6	โรงเรียนสิงห์สมุทร<br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากระดับชั้นมัธยมศึกษาแล้ว ยังได้ให้การสนับสนุนทุนการศึกษาสำหรับน้องๆ ระดับอุดมศึกษาด้วย ซึ่งมีผู้ได้รับทุนการศึกษาดังต่อไปนี้นอกจากระดับชั้นมัธยมศึกษาแล้ว ยังได้ให้การสนับสนุนทุนการศึกษาสำหรับน้องๆ ระดับอุดมศึกษาด้วย ซึ่งมีผู้ได้รับทุนการศึกษาดังต่อไปนี้<br>
            <b>ปี 2557</b><br>
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. (รอชื่อ)                   Tianjin University China<br>-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. นางสาวสุวิมล อธิเกียรติ์ 		วิทยาลัยพยาบาลบรมราชชนนี ชลบุรี<br>

        </p>
        <!--<div class="text-center">
            <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                <br><span class="colored-text"><b>“Education Makes Your Life Better”</b></span><br>
            </p>
        </div>-->
    </div>
    <div class="gray-cta">
        <div class="container text-center scroll-to">
            <h2><span class="colored-text">“ชีวิตคุณจะดีขึ้นได้ ด้วยการศึกษา”</span></h2>   
            <hr style="width:10%; background-color:#B29036;height: 2px;">             
        </div>
    </div><!--gray cta-->

    <div class="container">
        <div id="mbt"><br><br><br></div>
        <h3>“Make it Better” Internship ชีวิตคุณจะดีขึ้นได้ ด้วยการศึกษา</h3>
        <hr class="fancy-hr">              
    </div>

    <div class="container">
        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective เห็นความสำคัญความรู้ระหว่างเรียน จึงเปิดรับนักศึกษามาฝึกงานโดยตลอดและต่อเนื่อง<br><br>
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. รอรายชื่อ-->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นิสิต นักศึกษาท่านใดสนใจฝึกงานกับ Newspective ติดต่อได้ที่<br>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นางสาวหนึ่งฤทัย บางนาชาด<br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Media Manager<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : nuengruethai@newspective.co.th<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile : 086-880-4466<br>

        </p>
    </div>
    <div class="gray-cta">
        <div class="container text-center scroll-to">
            <h2><span class="colored-text">เรารับตลอดทั้งปี ขอแค่ตั้งใจ เราฝึกให้คุณเก่ง</span></h2>   
            <hr style="width:10%; background-color:#B29036;height: 2px;">             
        </div>
    </div><!--gray cta-->

    <div id="careers"><br><br></div>
    <div class="call-to-action cta-1 parallax-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center wow animated fadeInDown" data-wow-delay=".1s">
                    <h2>Newspective Careers</h2>
                    <a href="http://www.jobthai.com/job/0,765419.html" target="_blank" class="btn btn-white btn-lg wow animated fadeInDown" data-wow-delay=".2s">
                        <span> Position : Personal Assistance</span>
                    </a> 
                </div>
            </div>
        </div>
    </div><!--call to action-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-offset-2">
                    <div class="text-center">
                        <h2 class="center-title" id="address">Contact Us</h2>
                        <span class="center-border-line"></span>
                        <p class="sub-text"><b>Newspective Group</b><br>
                            163 Soi Sukhumvit 62/1, Bangchak, Phakanong, Bangkok, 10260. Thailand.<br>
                            Tel & Fax : 02-741-7225 E-Mail : nattapoom@newspective.co.th<br>
                            Social Network : <a href="https://www.facebook.com/newspective.address" target="_blank"> Facebook.com/Newspective</a>
                        </p>
                    </div>
                </div>
            </div>               
            <div class="row">
                <div class="col-sm-7"><br><br><br>
                    <h2 class="elements-title">Newspective Contact</h2>
                    <hr class="fancy-hr">
                    <div class="contact-form wow animated fadeInLeft" data-wow-delay=".2s">

                        <form role="form" id="feedbackForm">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name *</label>
                                        <div>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" />

                                        </div>
                                        <span class="help-block" style="display: none;">Please enter your name.</span>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email Address *</label>
                                        <div>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />

                                        </div>
                                        <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Message *</label>
                                <div>
                                    <textarea rows="5" cols="30" class="form-control" id="message" name="message" placeholder="Enter your message" ></textarea>

                                </div>
                                <span class="help-block" style="display: none;">Please enter a message.</span>
                            </div>
                            <img id="captcha" src="assets/form/library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
                            <a href="#" onclick="document.getElementById('captcha').src = 'assets/form/library/vender/securimage/securimage_show.php?' + Math.random();
                                            return false" class="btn btn-dark-bg btn-sm"><i class="ion-refresh"></i> Show a Different Image</a><br/>
                            <div class="form-group" style="margin-top: 10px;">
                                <label class="control-label" for="captcha_code">Text Within Image *</label>
                                <div>
                                    <input type="text" class="form-control" name="captcha_code" id="captcha_code" placeholder="For security, please enter the code displayed in the box." />

                                </div>
                                <span class="help-block" style="display: none;">Please enter the code displayed within the image.</span>
                            </div>
                            <span class="help-block" style="display: none;">Please enter a the security code.</span>
                            <button type="submit" id="feedbackSubmit" class="btn btn-dark-bg btn-lg" data-loading-text="Sending..." style="display: block; margin-top: 10px;">Send Feedback</button>
                        </form>
                    </div><!--contact form-->
                </div><!--col-7--> 
                <div id="google-map"></div><br><br><br>
                <div class="col-sm-5">
                    <h2 class="elements-title">Google map</h2>
                    <hr class="fancy-hr">
                    <div id="map-canvas" style="width:100%; height: 300px;"></div>
                    <div id="map-download"></div>
                    <br>
                    <br>
                    <br>
                    <h2 class="elements-title">Map Download</h2>
                    <hr class="fancy-hr">
                    <!--<a herf="#" class="btn btn-lg btn-block btn-dark-bg">Download</a>-->
                    <a href="img/Map.pdf" class="btn btn-lg btn-block btn-dark-bg" download>Download</a>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section><!--contact section end-->

    <div class="numbers-cta">
        <div class="container">
            <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                <i class="ion-android-call"></i>
                <h3>Tel. 02-741-7225</h3>
            </div>
            <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                <i class="ion-email"></i>
                <h3>nattapoom@newspective.co.th</h3>
            </div>
            <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                <i class="ion-location"></i>
                <h3>62 Soi Sukhumvit 62, Yak 8-5, Bangchak, Phakanong, Bangkok, 10260. Thailand.</h3>
            </div>
            <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                <i class="ion-ios-printer"></i>
                <h3>Fax. 02-741-7225</h3>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container text-center">
            <a href="#home"><img src="assets/images/new_sective_logo.png" alt=""></a>
            <ul class="list-inline socials">
                <li><a href="https://www.facebook.com/newspective.address" target="_blank" class="fb"><i class="ion-social-facebook-outline"></i></a></li>
                <li><a href="#" class="yout"><i class="ion-social-youtube-outline"></i></a></li>
                <!--<li><a href="#" class="twit"><i class="ion-social-twitter-outline"></i></a></li>
                <li><a href="#" class="g-plus"><i class="ion-social-googleplus-outline"></i></a></li>                    
                <li><a href="#" class="drib"><i class="ion-social-dribbble-outline"></i></a></li>-->
            </ul>
            <p>&copy; 2015. Newspective Group
        </div>
    </footer><!--footer end-->

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
                                var myLatlng;
                                var map;
                                var marker;

                                function initialize() {
                                    myLatlng = new google.maps.LatLng(13.690690, 100.602147);

                                    var mapOptions = {
                                        zoom: 13,
                                        center: myLatlng,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        scrollwheel: false,
                                        draggable: true
                                    };
                                    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                                    var contentString = '<p>123 My Street, bavely City, CA 4567</p>';

                                    var infowindow = new google.maps.InfoWindow({
                                        content: contentString
                                    });

                                    marker = new google.maps.Marker({
                                        position: myLatlng,
                                        map: map,
                                        title: 'Marker'
                                    });

                                    google.maps.event.addListener(marker, 'click', function () {
                                        infowindow.open(map, marker);
                                    });
                                }

                                google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="scripts/app.js"></script>
    <!--jquery-->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-migrate.min.js" type="text/javascript"></script> 
    <script src="assets/js/moderniz.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/parallax.min.js"></script>
    <script src="assets/js/tweetie.min.js" type="text/javascript"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>  
    <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/js/wow.min.js" type="text/javascript"></script>
    <script src="assets/js/template.js" type="text/javascript"></script>
    <script src="assets/js/contact-form.js" type="text/javascript"></script>
    <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="assets/js/revolution-custom.js" type="text/javascript"></script>
    <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="assets/js/cube-portfolio.js" type="text/javascript"></script>
    <script src="assets/js/pricing.js" type="text/javascript"></script>
    <!--master slider-->
    <script src="assets/master-slider/js/masterslider.min.js" type="text/javascript"></script>
    <script src="assets/js/masterslider-custom.js" type="text/javascript"></script>

</body>
</html>
