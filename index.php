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
        <title>Newspective : Make it Better</title>
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
                        <img src="assets/images/bg-2.jpg"  alt="kenburns1"  data-bgposition="left center"  data-duration="10000" data-ease="Linear.easeNone"  data-bgfitend="100" data-bgpositionend="right center"><!-- data-kenburns="on" (add to slide), data-bgfit="130" (zoom pic)-->
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
                             style="z-index: 3"><span style="font-size: 300%;">"Make it Better"</span>
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
                             style="z-index: 3"><a href="#town-hall" class="sr-button sr-buttonicon small-iconbutton scroll-to"><i class="ion-ios-arrow-down"></i></a>
                        </div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/images/bg-3.jpg" data-delay="10000"  data-saveperformance="off" data-title="slider 2">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/bg-3.jpg"  alt="kenburns1"  data-bgposition="left center" data-duration="10000" data-ease="Linear.easeNone" data-bgfitend="100" data-bgpositionend="right center">
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
                             style="z-index: 3"><span style="font-size: 300%;">Marketing Activities Specialist</span>
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
                             style="z-index: 3"><a href="#n-head" class="sr-button sr-buttonicon small-iconbutton scroll-to"><i class="ion-ios-arrow-down"></i></a>
                        </div>

                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="assets/images/bg-1.jpg" data-delay="10000"  data-saveperformance="off" data-title="slider 3">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/bg-1.jpg"  alt="kenburns1"  data-bgposition="left center" data-duration="10000" data-ease="Linear.easeNone" data-bgfitend="100" data-bgpositionend="right center">
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
                             style="z-index: 3"><span style="font-size: 300%;">Private Property Partner</span>
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
                             style="z-index: 3"><a href="#a-head" class="sr-button sr-buttonicon small-iconbutton scroll-to"><i class="ion-ios-arrow-down"></i></a>
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
                        <!--<li><a href="#town-hall">Town Hall</a></li>-->
                        <li class="dropdown">
                            <a href="#town-hall" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true">Town Hall <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#founder">Founder & Group General Manager</a></li>
                                <li><a href="#symbol">Newspective Symbol</a></li>
                                <li><a href="#mib">“Make it Better” philosophy of SUCCESS</a></li>
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
        <div class="container">
            <div class="row">
                <div id="town-hall"><br><br><br></div>
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="text-center">
                        <h2 class="center-title"> Town Hall</h2>
                        <span class="center-border-line"></span>                            
                    </div>
                </div>
            </div><!--left title row end-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="founder"><br><br><br></div>
                    <h3>Founder & Group General Manager</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <br>
                    <img src="img/Nattapoom_Founder.jpg" width="400" class="img-responsive center-block" alt="Nattapoom Ratchayakorn"><br>
                    <h3 class="text-center"><span class="colored-text">Nattapoom Ratchayakorn (Por)</span></h3>
                </div>
                <div class="col-sm-7">
                    <!--<div class="col-sm-8 col-sm-offset-2">-->

                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nattapoom was born and raised in Sattahip, Chonburi, Thailand where is nationally known as the area of The Royal Navy. Nattapoom has won the seat in “White Elephant” Program that supports students from rural areas with high GPA scores to continue their college degree at The Faculty of Economics, Thammasart University.<br>                           

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nattapoom has joined several activities during his free time after school. He was selected to take on several important roles such as the president of Singsamut School,Vice President– external affairs for Thammasart University Student Union and Vice President  - Administration at the Cheer Club , etc.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By studying Economics, Nattapoom has been equipped with two major subjects for national development, Human Resource Management Economy and Economy for Development. This knowledge gave Nattapoom a solid ability to think, see and analyze the big picture. Not only Economics but Nattapoom also enrolled to study Public Relations and Advertising from the Faculty of Journalism and Mass Communications as his minor subjects.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After graduation, Nattapoom started his career at a global advertising agency. His ambition was to learn the working system in a multi-national company and apply what he learned in order to start his own company that has been successfully done at the age of 25 for him. The new company was named “New Age” which represents the new era of young generation. The company has been growing continuously over a decade.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All these experiences and identities create Nattapoom to be the man of “In-depth and broad knowledge with capacity to make things literally happen”. He lives his life, career and thoughts to be like perspective pictures that is able to see through all the dots and connect them all together to be one big perfect pictures and to be developed as a piece of work further. This is totally Nattapoom’s uniqueness and talent.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nonetheless, Nattapoom also share his interest on social community, especially the ideal of being a quality of life developer through educational and learning process. He believes that everything can be improved. Thus, he started with himself and has been making things around him better. This ideal to “Make It Better” became one of his major policies in building up the organization, staff, developing the projects up to intentionally developing Thailand further.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From this day forward, Nattapoom is ready to build the organization sustainably and continuously further together with human resource development, client’s project and the nation under the name Brand <b>Newspective “Make it Better”</b><br>

                    </p>
                </div>
            </div><!--row-->   
        </div><!--container--> 
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="symbol"><br><br><br></div>
                    <h3>Newspective Symbol</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <br>
                    <img src="img/logo.gif" width="100%" class="img-responsive" alt="logo newspective">
                    <h2 class="text-center">“Make It Better”</h2>
                </div>
                <div class="col-sm-7">
                    <!--<div class="col-sm-8 col-sm-offset-2">-->

                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">

                        <b><span class="colored-text">The Origin of Name</span></b><br>

                        Newspective is from the combination of 2 words<br><br>
                        <span class="colored-text"><b>“New”</b></span> represents the joy and fun to create new things consistently and the first word of 
                        <span class="colored-text"><b>“New Age”</b></span> which has been around in the business for over a decade.<br>
                        <span class="colored-text"><b>“Perspective”</b></span> represents working vision that sees through all the angles, width, depth, height and the ability to connect things altogether. 
                        Therefore, <span class="colored-text"><b>“Newspective”</b></span> represents visions in all dimensions that is connected and fun to create new things at all times. This shall lead to infinite development. 
                        <br>

                        <br>
                        <b><span class="colored-text">The Meaning of Logo, Color and Logo’s Font </span></b><br>

                        It represents the <span class="colored-text"><b>“Gate”</b></span> that will lead you to the new experiences to make everyone’s life better.<br><br>

                        <span class="colored-text"><b>The Gold color</b></span> represents prosperity, glory and accomplishments that shall perish eternally.<br><br>

                        <span class="colored-text"><b>The Marble grey color</b></span> in the middle represents establishment and success development through strong will together with coziness and friendship<br><br>

                        <span class="colored-text"><b>The grey color</b></span> at the base represents firmness as a good foundation

                        <span class="colored-text"><b>The letters “Newspective”</b></span> represents solidity and modern. 

                        <span class="colored-text"><b>Newspective logo</b></span> also represents Japanese “Torii” temple gate which is respected in Zen’s philosophy. It reflects calmness and simplicity in everybody’s mind that enrich the idea of “Simply is the best”. This logo has been designed based on this Zen’s philosophy. 
                    </p>
                </div>
            </div><!--sub title center-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="mib"><br><br><br></div>
                    <h3>“Make it Better” philosophy of SUCCESS</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <br>
                    <img src="img/logo.gif" width="40%" class="img-responsive center-block" alt="logo newspective">
                    <h2 class="text-center">“Make it Better”</h2>
                </div>
            </div>
            <div class="row">                    
                <div class="col-sm-12">                        
                    <div class="text-center">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        <h1>
                            <span class="colored-text">
                                “Willing to response client’s every wish<br>
                                in everyday of working together<br>
                                to create endless positive outcomes”
                            </span>
                        </h1>
                        </p>
                    </div>
                    <br>
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;According to the intention of all founders, Newspective aims to develop quality of life by education and learning ‘coz we believe that everything can be improved by starting at one’s self and it can be lifted up to another level (Make it better) </b><br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This philosophy has been applied to the project for our clients in the way that we have been giving our full attention to develop client’s works in every possible details, making it better every day without hesitation and ready to modify if there is necessity for endless development.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At Newspective, all staff are encouraged to share ideas in every managing aspect directly to the managements. This is in order to create happy working environment and better quality of life at the office more everyday. We believe that if our staff are happy, the quality of work, passing onto our clients will be excellent as well. <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="colored-text"><b>“Make it Better”</b></span>, therefore, it is our philosophy of success and apply to our daily life. 
                    </p>
                </div>
            </div><!--mib-->   
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="company"><br><br><br></div>
                    <h3>Group Company</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Throughout a decade, the company has been growing and improving all the tasks to serve client’s needs. Currently we have divided out business cluster into 3 groups
                    </p>
                </div>
            </div><!--company--> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4 margin-bottom30">
                        <div class="service-features wow animated fadeIn" data-wow-delay=".1s">
                            <img src="img/logo-box.gif" width="40%" class="img-responsive center-block" alt="logo newspective">
                            <p><b>1<span style="vertical-align:top; font-size: 10px;">st</span> &nbsp;Group:</b> Marketing and Business <br>Management Consultancy</p>                                
                            <p style="font-size: 20px;"><b>Newspective Co.,Ltd.</b><br>
                                Your Marketing and<br>
                                Business Solution</p>

                        </div><!--service features-->
                    </div>
                    <div class="col-sm-4 margin-bottom30">
                        <div class="service-features wow animated fadeIn" data-wow-delay=".2s">
                            <img src="img/logo-box.gif" width="40%" class="img-responsive center-block" alt="logo newspective">
                            <p><b>2<span style="vertical-align:top; font-size: 10px;">nd</span> &nbsp;Group:</b> Marketing Activities <br>and Advertising</p>                                
                            <p style="font-size: 20px;"><b>Newspective Newage Co.,Ltd.</b><br>
                                Marketing Activities Specialist<br>
                                Event/Media
                            </p>
                        </div><!--service features-->
                    </div>
                    <div class="col-sm-4 margin-bottom30">
                        <div class="service-features wow animated fadeIn" data-wow-delay=".3s">
                            <img src="img/logo-box.gif" width="40%" class="img-responsive center-block" alt="logo newspective">

                            <p><b>3<span style="vertical-align:top; font-size: 10px;">nd</span> &nbsp;Group:</b> Property Agent and Marketing <br>Consultancy for Real Estate Business</p>                                
                            <p style="font-size: 20px;"><b>Newspective Address Co.,Ltd.</b><br>
                                Private Property Partner<br>
                                Property Agent
                            </p>                                
                        </div><!--service features-->
                    </div>
                </div>
            </div><!--row-->
        </div>


        <div class="gray-cta">
            <div class="container text-center scroll-to">
                <h1><span class="colored-text">“3 companies in 3 business that will <br>make your life better everyday”</span></h1>   
                <hr style="width:10%; background-color:#B29036;height: 2px;">             
            </div>
        </div><!--gray cta-->


        <!--   ########### ADD col-sm- xx OK ###########-->


        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="timelime"><br><br><br></div>
                    <h3>Our Historic Timeline</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".1s">
                        <div class="blog-date">
                            <span class="date-day">2005</span>                                
                        </div><!--blog date into left position-->
                        <div class="blog-content">
                            <div class="entry-media">
                                <blockquote>
                                    <span class="font14">Newage Direction Co., Ltd. was found and responsible for the first event that was the annual party of Thai Electrical and Mechanical Contractors Association (TEMCA), held at Peace Conference Center, Royal Cliff Beach Pattaya Hotel.</span>
                                </blockquote>
                            </div><!--entry media-->
                        </div><!--blog content-->
                    </div><!--blog entry-->


                    <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".1s">
                        <div class="blog-date">
                            <span class="date-day">2006</span>                                
                        </div><!--blog date into left position-->
                        <div class="blog-content">
                            <div class="entry-media">
                                <blockquote>
                                    <span class="font14">Invested to buy office building to be company’s permanent office. This was to support our will to fully accelerate our growth in the business.</span>
                                </blockquote>
                            </div><!--entry media-->
                        </div><!--blog content-->
                    </div><!--blog entry-->

                    <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".1s">
                        <div class="blog-date">
                            <span class="date-day">2008</span>                                
                        </div><!--blog date into left position-->
                        <div class="blog-content">
                            <div class="entry-media">
                                <blockquote>
                                    <span class="font14">Changed company’s name to be “Newage Agency” and expanded more field work from event to media and became more well known in the industry. </span>
                                </blockquote>
                            </div><!--entry media-->
                        </div><!--blog content-->
                    </div><!--blog entry-->

                    <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".1s">
                        <div class="blog-date">
                            <span class="date-day">2009</span>                                
                        </div><!--blog date into left position-->
                        <div class="blog-content">
                            <div class="entry-media">
                                <blockquote>
                                    <span class="font14">Launched MaGazine which  is the magazine about Mac products. It was a good stepping stone for the company to learn about media development.</span>
                                </blockquote>
                            </div><!--entry media-->
                        </div><!--blog content-->
                    </div><!--blog entry-->

                    <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".1s">
                        <div class="blog-date">
                            <span class="date-day">2011</span>                                
                        </div><!--blog date into left position-->
                        <div class="blog-content">
                            <div class="entry-media">
                                <blockquote>
                                    <span class="font14">Determined to inhance the policy “Develop staff – Newage Style”</span>
                                </blockquote>
                            </div><!--entry media-->
                        </div><!--blog content-->
                    </div><!--blog entry-->

                    <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".1s">
                        <div class="blog-date">
                            <span class="date-day">2014</span>                                
                        </div><!--blog date into left position-->
                        <div class="blog-content">
                            <div class="entry-media">
                                <blockquote>
                                    <span class="font14">Expanded the work outside previous working scope by setting up Address 366 Co., Ltd. to be property agent and real estate marketing consultancy.</span>
                                </blockquote>
                            </div><!--entry media-->
                        </div><!--blog content-->
                    </div><!--blog entry-->

                    <div class="blog-entry clearfix wow animated fadeInUp" data-wow-delay=".1s">

                        <p class="blog-date-custom"><span class="colored-text">21 January 2015</span></p>
                        <p><span class="colored-text" style="font-size: 25px;">Adjust organization’s image to be <b>Newspective</b> in order to divide business cluster and accelerate continuously.</span></p>

                    </div><!--blog entry-->

                </div>
            </div><!-- ##### end Our Historic Timeline #####-->
        </div>
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <div id="wnp"><br><br><br></div>
                    <h3>We are Newspective people</h3>
                    <hr class="fancy-hr">    
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <img class="img-responsive center-block" src="img/Rubic.jpg" alt="" width="50%">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">                        
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        <b><span class="colored-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective has been operating under success philosophy “Make it Better”. We are seriously focusing and giving priority to internal human resource development. All staff are selected and developed via 3 important codes.</span></b><br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span class="colored-text">High level:</span></b> “Make it Better” is the philosophy of life. Newspective staff must be hungry to learn and be developed at all times to make their life better on a daily basis.<br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span class="colored-text">Medium level:</span></b> There are 3 elements of Newspective staff’s qualifications.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>In-depth knowledge:</b> Fully understand and having expertise in their roles, must be able to teach other people about their specialty perfectly.<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Variety:</b> Knowing variety of information that may or may not be related to their works but can be applied to the tasks to make them better. <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Practical:</b> Must have ability to make things practically happen. Getting the job done from their own ability and broadly accepted by others. <br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span class="colored-text">Fundamental level:</span></b> Operation level in each business: Newspective staff in each business has their uniqueness which is <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Outstanding, Movement, Lively</b> – Newspective Newage Co.Ltd. <br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Focus on the task, negotiable, friendly</b> – Newspective Address Co.Ltd. <br><br>

                        <b><span class="colored-text">All these 3 levels can describe Newspective people precisely </span></b><br>
                        Newspective strongly believe in our people that they will continuously make lives of the client better on a daily basis. 



                    </p>
                </div>
            </div><!--mib-->   

        </div><!--container-->   

        <!-- ############################################ END TOWN HALL#####################################-->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="n-ac"><br><br><br></div>               
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="text-center">
                            <h2 class="center-title">NEWS & ACTIVITIES</h2>
                            <span class="center-border-line"></span>
                            <!--<p class="sub-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in piece of classical Latin literature from 45 BC, it a old.</p>-->
                        </div>
                    </div>
                </div>
            </div><!--center title row end-->
        </div><!--container-->
        <br>
        <br>         
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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
                </div>
                <br>
                <br>
                <div class="col-sm-12">
                    <div id="grid-container" class="cbp">
                        <?php
                        $newsActivities = informationType('news');
                        while ($row = $newsActivities->fetch_assoc()) {

                            $en_title = $row["en_title"];
                            $len_title = strlen($en_title);
                            if ($len_title > 42) {
                                $sub_title = substr($en_title, 0, 42);
                                $enTitle = $sub_title . " ...";
                            } else {
                                $enTitle = $en_title;
                            }


                            $en_desc = $row["en_desc"];
                            $len_desc = strlen($en_desc);
                            if ($len_desc > 58) {
                                $sub_desc = substr($en_desc, 0, 58);
                                $enDesc = $sub_desc . " ...";
                            } else {
                                $enDesc = $en_desc;
                            }
                            ?>
                            <div class="cbp-item print motion">
                                <a href="assets/ajax/project1.php?id=<?php echo $row['id']; ?>" class="cbp-caption cbp-singlePageInline">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="webadmin/file/<?php echo informationFileFilst($row['id']) ?>" alt="<?php echo $row["en_title"]; ?>">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignLeft">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-title"><?php echo $enTitle ?></div>
                                                <div class="cbp-l-caption-desc"><?php echo $enDesc ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <a href="more-all.php?cpn=news" class="btn btn-lg btn-block btn-dark-bg center-block" style="width: 16%;" target="_blank">All NEWS & ACTIVITIES</a>
                </div>
            </div>
        </div><!--container-->

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
            <div class="row">
                <div class="col-sm-12">
                    <div id="n-about"><br><br><br></div>
                    <h3>About Us & Our Service</h3>
                    <hr class="fancy-hr">
                    <dir class="row">
                        <p class="text-center"><b>With more than a decade of experiences, we are expert in marketing<br>
                                activities and all types of advertising media. 2 areas of our major services</b></p><br>
                    </dir>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="text-center">Since 2005</h2><br>
                    <img src="img/logo.gif" width="100%" class="img-responsive" alt="logo newspective">
                    <br>
                    <h4 class="text-center">Newspective Newage Co.,Ltd.</h4>
                    <p class="text-center">
                        Marketing Activities Specialist<br>
                        Event/Media
                    </p>
                </div>
                <div class="col-sm-4">
                    <h2>Event</h2>
                    <p>Press Conference<br>
                        Grand Opening<br>
                        Thank You Party<br>
                        Staff Party<br>
                        Road Show<br>
                        Booth & Exhibitions <br>
                        Exclusive Event<br>
                        Rally<br>
                        Contest<br>
                        Sport Day<br>
                        Seminar<br>
                        Internal Communication <br>
                        CSR<br>
                        Graphic Design<br>
                        Wedding Partner <br>
                        Corporate Communication<br>
                        Etc.<br></p>
                </div>
                <div class="col-sm-4">
                    <h2>Media</h2>
                    <p>
                        Media Planning<br>
                        Media Buying<br>
                        Initiative Out of Home<br>
                        Website & Apps Production<br>
                        Etc.<br><br>
                    </p>
                    <h2>And additional service <br>you do not need to seek<br> elsewhere</h2>
                    <p>
                        Branding & Corporate Identity<br>
                        VDO & 3D Animation<br>
                        Personal Sale & Promotion Deals<br>
                        Copy Writer<br>
                        Etc.<br>
                    </p>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="quote parallax-1">
                        <div class="container text-center">
                            <div class="col-sm-8 col-sm-offset-2 wow animated fadeIn" data-wow-delay=".1s">
                                <p>
                                    <span class="colored-text">
                                        <b>“Never say no”</b><br>
                                        We deliver all things you desire
                                    </span>
                                </p>                            
                            </div>
                        </div>
                    </div><!--quote section end-->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="n-people"><br><br><br></div>
                    <h3>People</h3>
                    <hr class="fancy-hr"> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- team slider -->
                    <div class="ms-staff-carousel">
                        <!-- masterslider -->
                        <div class="master-slider" id="teamslider">
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="img/Nattapoom.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center center-block" style="width: 60%">
                                    <h3>Mr.Nattapoom Ratchayakorn</h3>
                                    <h4>Group General Manager</h4>
                                    <p class="email">E-Mail: <a href="mailto:nattapoom@newspective.co.th"><span class="colored-text">nattapoom@newspective.co.th</span></a></p>
                                    <p>Former activity lover student who started his first career at OMD Thailand, followed by Dentsu Media Palette (Thailand) and began his own company at the age of 25. <br>Nattapoom has over 10 years of marketing experiences.</p>
                                    <p class="email">Mobile: <span class="colored-text">+66 81-439-5533</span></p>
                                </div>     
                            </div><!--slide item-->

                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="img/Nuengruethai.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center center-block" style="width: 70%">
                                    <h3>Miss Nuengruethai Bangnachard</h3>
                                    <h4>Media Manager</h4>
                                    <p class="email">E-Mail: <a href="mailto:nuengruethai@newspective.co.th"><span class="colored-text">nuengruethai@newspective.co.th</span></a></p>
                                    <p>Former bright marketing student who studied what she loves and further work on it as a career, Nuengruethai joined Newspective since 7 years ago and has been playing important role to expand new media business for the company. She may be a small lady but very straight forward, precise and love her clients like family members as well. Currently, Neungruethai is focusing on building up a consistent media business for the company.</p>
                                    <p class="email">Mobile: <span class="colored-text">+66 86-880-4466</span></p>
                                </div>     
                            </div><!--slide item--> 
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="img/Mananya.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center center-block" style="width: 60%; height: 100%">
                                    <h3>Miss Mananya Teyarajkul</h3>
                                    <h4>Associate Business Director</h4>
                                    <p class="email">E-Mail: <a href="mailto:mananya@newspective.co.th"><span class="colored-text">mananya@newspective.co.th</span></a></p>
                                    <p>Former activity lover student who started her career at Newspective since 9 years ago as fresh graduate, Mananya is the important pillar for business development with clients. She has outstanding personality, quick, always come up with several ideas and love her clients like family members. Currently, Mananya is in charge of event business for Newspective.</p>
                                    <p class="email">Mobile: <span class="colored-text">+66 81-625-2587</span></p>
                                </div>     
                            </div><!--slide item-->
                        </div>
                        <!-- end of masterslider -->
                        <div class="ms-staff-info" id="staff-info"> </div>
                    </div>
                    <!-- end of team slider -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="n-portfolio"><br><br><br></div>
                    <h3>Portfolio</h3>
                    <hr class="fancy-hr">              
                </div>
            </div></div><br>

        <div class="container">
            <div class="row">
                <?php
                $Nportfolio = informationType('Newage');
                while ($nport = $Nportfolio->fetch_assoc()) {

                    $en_title = $nport["en_title"];
                    $len_title = strlen($en_title);
                    if ($len_title > 24) {
                        $sub_title = substr($en_title, 0, 24);
                        $enTitle = $sub_title . " ...";
                    } else {
                        $enTitle = $en_title;
                    }

                    $en_desc = $nport["en_desc"];
                    $len_desc = strlen($en_desc);
                    if ($len_desc > 48) {
                        $sub_desc = substr($en_desc, 0, 48);
                        $enDesc = $sub_desc . " ...";
                    } else {
                        $enDesc = $en_desc;
                    }
                    ?>
                    <div class="col-md-4 col-lg-4">
                        <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top" style="margin:20px"><a href="more.php?id=<?php echo $nport["id"]; ?>" target="_blank">
                                <div class="img"><img src="webadmin/file/<?php echo informationFileFilst($nport['id']) ?>"></div>
                                <div class="info">
                                    <h3><?php echo $enTitle; ?></h3>
                                    <p style="margin-top: 0px"><?php echo $enDesc; ?></p>
                                </div></a></div>
                        <!-- end normal -->
                    </div>
                <?php } ?>
            </div><!--row-->
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <a href="more-all.php?cpn=Newage" class="btn btn-lg btn-block btn-dark-bg center-block" style="width: 11%;" target="_blank">All PORTFOLIO</a>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-sm-12">        
                    <div id="n-client"><br><br><br></div>
                    <h3>Client</h3>
                    <hr class="fancy-hr">  
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm12">
                    <div class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        <img width="100%" src="img/Logo_cus.jpg">
                    </div>
                </div>
            </div>
        </div>

        <!-- ############################################ END Newspective newage ############################-->
        <div class="container">
            <div class="row">
                <div id="a-head"><br><br><br></div>        
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="text-center">
                        <h2 class="center-title">Newspective Address CO.,LTD.</h2>
                        <span class="center-border-line"></span>                           
                    </div>
                </div>
            </div><!--left title row end-->        
        </div>


        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="a-about"><br><br><br></div>
                    <h3>About Us & Our Service</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 of the 4 important factors of human’s living is accommodation. Having a good home is considered as human’s absolute happiness. Therefore, accommodation is human’s very important factor of life. A house, townhouse, condominium, office building these are called accommodation and having a good living throughout 366 days each year in an accommodation will give us a good life. <br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The importance of this factor brings up business, we are pleased and ready to be  true friend to those who are looking for a good accommodation that brings happiness throughout 366 days in a year. <br><br>
                        <span class="colored-text">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Who Are We : We Are Property Agent</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Our Vision – Your Best Private Property Partner </b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Our Mission -  Anytime You Need</b><br><br>
                        </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Excellent Service: We have expertise in being sole agent for your property projects and specialize in 3 service areas.<br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. <b>Project Sale</b> – Providing consultancy and being sole agent with high experienced sales team. Unlike the others, we focus on friendly sales, understand client’s needs <br>and maximum service mind.<br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. <b>Project Marketing</b> – Marketing Consultancy for Real Estate business. We specialize in Online and Offline Marketing strategies that will help you achieve your target successfully. <br><br>

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. <b>Project  Analysis</b> -  Analysis Consultancy for the projects at all stages. We provide Marketing analysis, Sales analysis, Financial Analysis and Project Feasibility to make sure you have solid information for your projects to reach your goals since the early stage. <br><br>
                    </p>
                </div>
            </div>        
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm12">
                    <img class="img-responsive" src="img/200_MB.jpg" width="100%">
                </div>
            </div>
        </div>


        <div class="gray-cta">
            <div class="container text-center scroll-to">
                <h1><span class="colored-text">“Anytime you need”</span></h1>   
                <hr style="width:10%; background-color:#B29036;height: 2px;">             
            </div>
        </div><!--gray cta-->


        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="a-people"><br><br><br></div>
                    <h3>People</h3>
                    <hr class="fancy-hr">  
                </div>
            </div>
        </div>
        <div class="testimonials parallax-2 dark">
            <div class="container">
                <div class="text-center wow animated fadeInDown" data-wow-delay=".1s">
                    <h2 class="center-title"> <span class="colored-text">Newspective address CO.,LTD.</span></h2>                    
                    <!--<p class="sub-text">Over 8000 extremely satisfied clients!</p>-->
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="flexslider testi-slider wow animated fadeInUp" data-wow-delay=".2s">
                            <ul class="slides">
                                <li>
                                    <div class="testi-slider-item">

                                        <img src="img/Nattapoom.jpg" alt="">
                                        <p style="font-size: 20px;">Mr.Nattapoom Ratchayakorn - <span class="colored-text">Group General Manager</span></p>

 <!--<p>
     Started this business with love and passion, Nattapoom aims to help everyone getting a nice accommodation that creates everyday happiness.
 </p> -->                                
                                    </div>
                                </li><!--Single slide li-->
                                <li>
                                    <div class="testi-slider-item">                                        
                                        <p>
                                            Started this business with love and passion, Nattapoom aims to help everyone getting a nice accommodation that creates everyday happiness.
                                            With confidence from over 10 years in advertising industry, Nattapoom is ready to convey his experiences to develop real estate tasks for clients at his best capacity.
                                            <br>
                                            <a href="mailto:nattapoom@newspective.co.th"><span class="colored-text"><b> E-Mail : nattapoom@newspective.co.th</b></span></a><br>
                                            <span class="colored-text"><b> Mobile : +66 81-439-5533</b></span><br>
                                        </p>  
                                        <hr style="width: 10%;">


                                    </div>
                                </li><!--Single slide li-->

                                <li>
                                    <div class="testi-slider-item">
                                        <img src="img/Poompan.jpg" alt="">
                                        <p style="font-size: 20px;">Mr. Poompan Pattaranutaporn - <span class="colored-text">Finance Director (Board Member)</span></p>

                                    </div>
                                </li><!--Single slide li--> 
                                <li>
                                    <div class="testi-slider-item">                                        
                                        <p>
                                            An auditor, financier, and real estate owner, Poompan has direct experiences from doing his personal business for more than a decade and will
                                            bring his capacity to help managing accounting and financial related issues from messy to cozy. Poompan has an ability to transform difficulties in numbers to comfort but understandable figures that are necessary in real estate business. 
                                            <br>
                                            <a href="mailto:poompan@newspective.co.th"><span class="colored-text"><b> E-Mail : poompan@newspective.co.th</b></span></a><br>
                                            <span class="colored-text"><b> Mobile : +66 89-779-9877</b></span><br>
                                        <hr style="width: 10%;">                                      
                                        </p>                                 
                                    </div>
                                </li><!--Single slide li-->

                                <li>
                                    <div class="testi-slider-item">
                                        <img src="img/Muchaklit.jpg" alt="">
                                        <p style="font-size: 20px;">Mr. Muchaklit Niwatkannumart - <span class="colored-text">Private Property Partner-Director (Board Member)</span></p>

                                    </div>
                                </li><!--Single slide li-->
                                <li>
                                    <div class="testi-slider-item">                                        
                                        <p>
                                            High experienced sales person who had sold almost everything but has special interest in real estate. Muchaklit is considered as one of the top sales person 
                                            due to his variety of knowledge and trusted personality. All these aspects are equipped in Muchaklit and granted him an ability to lead sales team with creativity to the goals with full capacity. 
                                            <br>
                                            <a href="mailto:muchaklit@newspective.co.th"><span class="colored-text"><b> E-Mail : muchaklit@newspective.co.th</b></span></a><br>
                                            <span class="colored-text"><b> Mobile : +66 94-794-3335</b></span><br>
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
                <div class="col-sm-12">
                    <div id="a-portfolio"><br><br><br></div>
                    <h3>Portfolio</h3>
                    <hr class="fancy-hr">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-responsive" src="img/Address_Portfolio.png" alt="" width="100%">
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">                    
                    <h4>Current Project</h4>
                </div>
            </div>       
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">                    
                    <h4>Reference Project</h4>
                </div>
            </div>       
        </div>          
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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
                                <td> Bangna Country Complex</td>
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
        </div>
        <div class="container">
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
                                    <p class="email">E-Mail: <a href="mailto:nattapoom@newspective">nattapoom@newspective.co.th</a></p>
                                    <p>Former activity lover student who started his first career at OMD Thailand, followed by Dentsu Media Palette (Thailand) and began his own company at the age of 25. Nattapoom has over 10 years of marketing experiences.</p>
                                    <p class="email">Mobile: <a href="#">+66 81-439-5533</a></p>
                                </div>     
                            </div><!--slide item-->
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="assets/images/team-2.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center">
                                    <h3>Miss Mananya Teyarajkul</h3>
                                    <h4>Associate Business Director</h4>
                                    <p class="email">E-Mail: <a href="mailto:mananya@newspective.co.th">mananya@newspective.co.th</a></p>
                                    <p>Former activity lover student who started her career at Newspective since 9 years ago as fresh graduate, Mananya is the important pillar for business development with clients. She has outstanding personality, quick, always come up with several ideas and love her clients like family members. Currently, Mananya is in charge of event business for Newspective.</p>
                                    <p class="email">Mobile: <a href="#">+66 81-625-2587</a></p>
                                </div>     
                            </div><!--slide item-->
                            <div class="ms-slide">
                                <img src="assets/master-slider/style/blank.gif" data-src="assets/images/team-3.jpg" alt="lorem ipsum dolor sit"/>  

                                <div class="ms-info text-center">
                                    <h3>Miss Nuengruethai Bangnachat</h3>
                                    <h4>Media Manager</h4>
                                    <p class="email">E-Mail: <a href="mailto:nuengruethai@newspective.co.th">nuengruethai@newspective.co.th</a></p>
                                    <p>Former bright marketing student who studied what she loves and further work on it as a career, Nuengruethai joined Newspective since 7 years ago and has been playing important role to expand new media business for the company. She may be a small lady but very straight forward, precise and love her clients like family members as well. Currently, Neungruethai is focusing on building up a consistent media business for the company.</p>
                                    <p class="email">Mobile: <a href="#">+66 86-880-4466</a></p>
                                </div>     
                            </div><!--slide item-->                                
                        </div>
                        <!-- end of masterslider -->

                    </div>
                    <!-- end of team slider -->
                </div>
            </div>
        </div>

        <div class="container">                
            <div class="row">  
                <div class="col-sm-12">
                    <div id="a-client"><br><br><br></div>
                    <h3>Client</h3>
                    <hr class="fancy-hr">              
                </div>
            </div>
        </div>

        <div class="container">                
            <div class="row"> 
                <div class="col-sm-12">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">               
                        <b>KD Asset & Development Co.,Ltd.</b><br>
                        <b>Raimon Land PCL</b><br>
                        <b>Pieamsuk Development Co.,Ltd.</b><br>
                        <b>Ban Rub Lom Co.,Ltd.</b><br>
                        <b>VISPAC Co.,Ltd.</b><br>
                        <b>Porchland Group</b><br>
                    </p>                              
                </div>
            </div>
        </div>

        <!-- ############################################ END Newspective address ############################-->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="csr"><br><br><br></div>
                    <div class="text-center wow animated bounceIn" data-wow-delay=".1s">
                        <h2 class="center-title"> Corporate Social Responsibility</h2>
                        <span class="center-border-line"></span>
                        <br>
                        <br>
                        <img class="img-responsive" src="img/csr.png" alt="" width="100%">
                        <br>
                        <p class="sub-text">Newspective believes that educational development and consistent learning  can create a better life. Therefore, we emphasize on education and learning process of the youth so that we have started these 2 programs continuously </p>
                    </div>
                </div>   
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="mbs"><br><br><br></div>
                    <h3>“Make it Better” Scholarship </h3>
                    <hr class="fancy-hr">  
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective realizes the necessity of Hi-school education, thus, we have been giving scholarship to students who show their dedication to study and beneficial activities. Having started since last year, we have now been supporting these students their tuition fees upon their Hi-school graduations.
                        
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12"><b>2014</b></div>
            </div>
            <div class="row">                
                <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Ms. Chanita Mungmee</div>
                <div class="col-sm-1">Grade 10,</div>
                <div class="col-sm-3">Singsamut School</div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">                
                <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Mr. Chakrapong Wongyoo</div>
                <div class="col-sm-1">Grade 10,</div>
                <div class="col-sm-3">Singsamut School</div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">                
                <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Ms. Araya Trongyong</div>
                <div class="col-sm-1">Grade 11,</div>
                <div class="col-sm-3">Singsamut School</div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">                
                <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Ms. Nisarat Butrdee</div>
                <div class="col-sm-1">Grade 12,</div>
                <div class="col-sm-3">Singsamut School</div>
                <div class="col-sm-5"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not only Hi-school but Newspective has been giving scholarship to colleage students also. They are</div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12"><b>2014</b></div>
            </div>
            <div class="row">                
                <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Ms. Areerat Rungreang</div>
                <div class="col-sm-3">Tianjin Normal University,</div>
                <div class="col-sm-3">China</div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">                
                <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Ms. Suwimol Athikiat</div>
                <div class="col-sm-3">Boromarajonani College of Nursing,</div>
                <div class="col-sm-3">Chonburi</div>
                <div class="col-sm-4"></div>
            </div>                          
        </div><!--div container-->
        <br>


        <div class="gray-cta">
            <div class="container text-center scroll-to">
                <h1><span class="colored-text">“Education Makes Your Life Better”</span></h1>   
                <hr style="width:10%; background-color:#B29036;height: 2px;">             
            </div>
        </div><!--gray cta-->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="mbt"><br><br><br></div>
                    <h3>“Make it Better” Internship</h3>
                    <hr class="fancy-hr">              
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective realizes the importance of learning process during college time so that we have continuously been giving opportunities to qualified college student to work with us as trainees up until now. They are…<br><br>
                        <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. รอรายชื่อ-->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students who would like to join Newspective’s internship program please contact<br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miss Nuengruethai Bangnachat - Media Manager<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="nuengruethai@newspective.co.th"><span style="color:#777777">E-Mail : nuengruethai@newspective.co.th</span></a><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile : +66 86-880-4466<br>

                    </p>
                </div>
            </div>
        </div>

        <div class="gray-cta">
            <div class="container text-center scroll-to">
                <h1><span class="colored-text">“Internship opportunity opens all year round, <br>just show us your strong will and we will train you to be expert”</span></h1>   
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
                            <p class="sub-text"><b>Newspective Group</b></p>
                            <p>
                                163 Soi Sukhumvit 62/1, Bangchak, Phakanong, Bangkok, 10260. Thailand.<br>
                                Tel & Fax : 02-741-7225 <a href="mailto:nattapoom@newspective.co.th"><span style="color:#777777">E-Mail : nattapoom@newspective.co.th</span></a><br>
                                <!--<a href="https://www.facebook.com/newspective.address" target="_blank"><span style="color:#777777">Facebook.com/Newspective</span></a>-->
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
                        <h2 class="elements-title">Google Map</h2>
                        <hr class="fancy-hr">
                        <div id="map-canvas" style="width:100%; height: 300px;"></div>
                        <div id="map-download"></div>
                        <br>
                        <br>
                        <br>
                        <h2 class="elements-title">Map Download</h2>
                        <hr class="fancy-hr">
                        <!--<a herf="web.php" download class="btn btn-lg btn-block btn-dark-bg">Download</a>-->
                        <a href="img/Map.pdf" class="btn btn-lg btn-block btn-dark-bg" download>Download</a>
                    </div>
                </div><!--row-->
            </div><!--container-->
        </section><!--contact section end-->

        <div class="numbers-cta">
            <div class="container">
                <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                    <i class="ion-android-call"></i>
                    <h3>Tel. +662-741-7225</h3>
                </div>
                <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                    <i class="ion-email"></i>
                    <a href="mailto:nattapoom@newspective.co.th"><h3>nattapoom@newspective.co.th</h3></a>
                </div>
                <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                    <i class="ion-location"></i>
                    <h3>163 Soi Sukhumvit 62/1, Bangchak, Phakanong, Bangkok, 10260. Thailand.</h3>
                </div>
                <div class="col-sm-6 col-md-3 margin-bottom30 text-center">
                    <i class="ion-ios-printer"></i>
                    <h3>Fax. +662-741-7225</h3>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container text-center">
                <a href="#home"><img src="img/logo.gif" alt="" width="50%"></a>
                <ul class="list-inline socials">
                    <li><a href="https://www.facebook.com/newspective.address" target="_blank" class="fb"><i class="ion-social-facebook-outline"></i></a></li>
                    <li><a href="#" class="yout"><i class="ion-social-youtube-outline"></i></a></li>
                    <li><a href="#" class="line"><img src="img/line.jpg" width="40px"></a></li>
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

                                        var contentString = '<p><b>Newspective Group</b><br> 163 Soi Sukhumvit 62/1, Bangchak, Phakanong, Bangkok, 10260. Thailand. <br>Tel & Fax : 02-741-7225</p>';

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
        <!--<script src="scripts/app.js"></script>-->
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
