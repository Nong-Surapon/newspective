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
                        <h3>Founder & Group General Manager: Nattapoom Ratchayakorn (Por)</h3>
                        <hr class="fancy-hr">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="colored-text">Nattapoom</span> was born and raised in Sattahip, Chonburi, Thailand where is nationally known as the area of The Royal Navy. Nattapoom has won the seat in “White Elephant” Program that supports students from rural areas with high GPA scores to continue their college degree at The Faculty of Economics, Thammasart University.<br>                           

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nattapoom has joined several activities during his free time after school. He was selected to take on several important roles such as the president of Singsamut School,Vice President– external affairs for Thammasart University Student Union and Vice President  - Administration at the Cheer Club , etc.<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By studying Economics, Nattapoom has been equipped with two major subjects for national development, Human Resource Management Economy and Economy for Development. This knowledge gave Nattapoom a solid ability to think, see and analyze the big picture. Not only Economics but Nattapoom also enrolled to study Public Relations and Advertising from the Faculty of Journalism and Mass Communications as his minor subjects.<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After graduation, Nattapoom started his career at a global advertising agency. His ambition was to learn the working system in a multi-national company and apply what he learned in order to start his own company that has been successfully done at the age of 25 for him. The new company was named “New Age” which represents the new era of young generation. The company has been growing continuously over a decade.<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All these experiences and identities create Nattapoom to be the man of “In-depth and broad knowledge with capacity to make things literally happen”. He lives his life, career and thoughts to be like perspective pictures that is able to see through all the dots and connect them all together to be one big perfect pictures and to be developed as a piece of work further. This is totally Nattapoom’s uniqueness and talent.<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nonetheless, Nattapoom also share his interest on social community, especially the ideal of being a quality of life developer through educational and learning process. He believes that everything can be improved. Thus, he started with himself and has been making things around him better. This ideal to “Make It Better” became one of his major policies in building up the organization, staff, developing the projects up to intentionally developing Thailand further.<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From this day forward, Nattapoom is ready to build the organization sustainably and continuously further together with human resource development, client’s project and the nation under the name BrandNewspective “Make it Better”<br>


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

                            <b><span class="colored-text">The Origin of Name</span></b><br>

                            Newspective is from the combination of 2 words<br>
                            <span class="colored-text"><b>“New”</b></span> represents the joy and fun to create new things consistently and the first word of<br> 
                            <span class="colored-text"><b>“New Age”</b></span> which has been around in the business for over a decade.<br>
                            <span class="colored-text"><b>“Perspective”</b></span> represents working vision that sees through all the angles, width, depth, height and the ability to connect things altogether. 
                            Therefore, <span class="colored-text"><b>“Newspective”</b></span> represents visions in all dimensions that is connected and fun to create new things at all times. This shall lead to infinite development. 
                            <br><br>

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

                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="mib"><br><br><br></div>
                        <h3>“Make it Better” philosophyof SUCCESS</h3>
                        <hr class="fancy-hr">
                        <div class="text-center">
                            <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                                <br><span class="colored-text"><b>“Willing to response client’s every wish<br>
                                        in everyday of working together<br>
                                        to create endless positive outcomes”</b></span><br>
                            </p>
                        </div>
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;According to the intention of all founders, Newspective aims to develop quality of life by education and learning ‘coz we believe that everything can be improved by starting at one’s self and it can be lifted up to another level (Make it better) </b><br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This philosophy has been applied to the project for our clients in the way that we have been giving our full attention to develop client’s works in every possible details, making it better every day without hesitation and ready to modify if there is necessity for endless development.<br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At Newspective, all staff are encouraged to share ideas in every managing aspect directly to the managements. This is in order to create happy working environment and better quality of life at the office more everyday. We believe that if our staff are happy, the quality of work, passing onto our clients will be excellent as well. <br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="colored-text"><b>“Make it Better”</b></span>, therefore, it is our philosophy of success and apply to our daily life. 
                        </p>
                    </div>
                </div><!--mib-->   


                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">                    
                        <div id="company"><br><br><br></div>
                        <h3>Group Company</h3>
                        <hr class="fancy-hr">
                        <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Throughout a decade, the company has been growing and improving all the tasks to serve client’s needs. Currently we have divided out business cluster into 3 groups
                        </p>
                    </div>
                </div><!--company--> 
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-4 margin-bottom30">
                            <div class="service-features wow animated fadeIn" data-wow-delay=".2s">
                                <i class="ion-ios-people-outline"></i>
                                <b><span style="font-size:18px;">1</span><span style="vertical-align:top;">st</span> &nbsp;<span style="font-size:18px;">Group</span></b>
                                <p>
                                    Marketing and Business Management Consultancy under the name 
                                    Newspective Co.,Ltd. - Your Marketing and Business Solution

                                </p>
                            </div><!--service features-->
                        </div>
                        <div class="col-sm-4 margin-bottom30">
                            <div class="service-features wow animated fadeIn" data-wow-delay=".3s">
                                <i class="ion-ios-people-outline"></i>
                                <b><span style="font-size:18px;">2</span><span style="vertical-align:top;">nd</span> &nbsp;<span style="font-size:18px;">Group</span></b>                            
                                <p>
                                    Marketing Activities and Advertising under the name         
                                    Newspective Newage Co.,Ltd. - Marketing Activities Specialist

                                </p>
                            </div><!--service features-->
                        </div>
                        <div class="col-sm-4 margin-bottom30">
                            <div class="service-features wow animated fadeIn" data-wow-delay=".4s">
                                <i class="ion-ios-people-outline"></i>
                                <b><span style="font-size:18px;">3</span><span style="vertical-align:top;">rd</span> &nbsp;<span style="font-size:18px;">Group</span></b>                            
                                <p>
                                    Property Agent and Marketing Consultancy for Real Estate Business under the name
                                    Newspective Address Co.,Ltd. - Private Property Partner
                                </p>
                            </div><!--service features-->
                        </div>
                    </div>
                </div><!--row-->





                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div id="timelime"><br><br><br></div>
                        <h3>Our Historic Timeline</h3>
                        <hr class="fancy-hr">


                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
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


                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
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

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
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

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
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

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
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

                        <div class="blog-entry-custom clearfix wow animated fadeInUp" data-wow-delay=".4s">
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

                        <div class="blog-entry clearfix wow animated fadeInUp" data-wow-delay=".4s">

                            <p class="blog-date-custom">21 January 2015</p>


                            <div class="entry-media">
                                <blockquote style="border-left:0px">
                                    <span class="font14">Adjust organization’s image to be Newspective in order to divide business cluster and accelerate continuously. </span>
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
                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective has been operating under success philosophy “Make It Better”. We are seriously focusing and giving priority to internal human resource development. All staff are selected and developed via 3 important codes.</b><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>High level:</b> “Make It Better” is the philosophy of life. Newspective staff must be hungry to learn and be developed at all times to make their life better on a daily basis.<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Medium level:</b> There are 3 elements of Newspective staff’s qualifications.<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In-depth knowledge: Fully understand and having expertise in their roles, must be able to teach other people about their specialty perfectly.<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variety: Knowing variety of information that may or may not be related to their works but can be applied to the tasks to make them better. <br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Practical: Must have ability to make things practically happen. Getting the job done from their own ability and broadly accepted by others. <br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Fundamental level:</b> Operation level in each business: Newspective staff in each business has their uniqueness which is <br><br>

                            Outstanding, Movement, Lively – Newspective Newage Co.Ltd. <br><br>

                            Focus on the task, negotiable, friendly – Newspective Address Co.Ltd. <br><br>

                            <b>All these 3 levels can describe Newspective people precisely </b><br><br>
                            Newspective strongly believe in our people that they will continuously make lives of the client better on a daily basis. 



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
                                    <img src="webadmin/file/news/<?php echo newsFileFilst($row['id']) ?>" alt="<?php echo $row["en_title"]; ?>">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><?php echo $row["en_title"]; ?></div>
                                            <div class="cbp-l-caption-desc"><?php echo $row["en_desc"] ?></div>
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
                    With more than a decade of experiences, we are expert in marketing activities and all types of advertising media.<br><br>

                    <b>2 areas of our major services</b><br><br>

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
                                And additional service you do not need to seek elsewhere
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
                                “Never say no, we deliver all things you desire”
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
                            <h3>Mr.Nattapoom Ratchayakorn</h3>
                            <h4>Group General Manager</h4>
                            <p class="email">E-Mail: <span class="colored-text">nattapoom@newspective.co.th</span></p>
                            <p>Former activity lover student who started his first career at M=OMD Thailand, followed by Dentsu Media Palette (Thailand) and began his own company at the age of 25. Nattapoom has over 10 years of marketing experiences.</p>
                            <p class="email">Mobile: <span class="colored-text">081-439-5533</span></p>
                        </div>     
                    </div><!--slide item-->
                    <div class="ms-slide">
                        <img src="assets/master-slider/style/blank.gif" data-src="img/Mananya.jpg" alt="lorem ipsum dolor sit"/>  

                        <div class="ms-info text-center">
                            <h3>Miss Mananya Teyarajkul</h3>
                            <h4>Associate Business Director</h4>
                            <p class="email">E-Mail: <span class="colored-text">mananya@newspective.co.th</span></p>
                            <p>Former activity lover student who started her career at Newspective since 9 years ago as fresh graduate, Mananya is the important pillar for business development with clients. She has outstanding personality, quick, always come up with several ideas and love her clients like family members. Currently, Mananya is in charge of event business for Newspective.</p>
                            <p class="email">Mobile: <span class="colored-text">081-625-2587</span></p>
                        </div>     
                    </div><!--slide item-->
                    <div class="ms-slide">
                        <img src="assets/master-slider/style/blank.gif" data-src="img/Nuengruethai.jpg" alt="lorem ipsum dolor sit"/>  

                        <div class="ms-info text-center">
                            <h3>Miss Nuengruethai Bangnachat</h3>
                            <h4>Media Manager</h4>
                            <p class="email">E-Mail: <span class="colored-text">nuengruethai@newspective.co.th</span></p>
                            <p>Former bright marketing student who studied what she loves and further work on it as a career, Nuengruethai joined Newspective since 7 years ago and has been playing important role to expand new media business for the company. She may be a small lady but very straight forward, precise and love her clients like family members as well. Currently, Neungruethai is focusing on building up a consistent media business for the company.</p>
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
            while($nport = $Nportfolio->fetch_assoc()){
            ?>
            <div class="col-md-4 col-lg-4">
                <!-- normal -->
                <div class="ih-item square effect3 bottom_to_top" style="margin:20px"><a href="portfolio.php?id=<?php echo $nport["id"];?>">
                        <div class="img"><img src="webadmin/file/portfolio/<?php echo $nport["fileNme"];?>"></div>
                        <div class="info">
                            <h3><?php echo $nport["en_title"];?></h3>
                            <p style="margin-top: 0px"><?php echo $nport["en_desc"];?></p>
                        </div></a></div>
                <!-- end normal -->
            </div>
            <?php }?>
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 of the 4 important factors of human’s living is accommodation. Having a good home is considered as human’s absolute happiness. Therefore, accommodation is human’s very important factor of life. A house, townhouse, condominium, office building these are called accommodation and having a good living throughout 366 days each year in an accommodation will give us a good life. <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The importance of this factor brings up business, we are pleased and ready to be  true friend to those who are looking for a good accommodation that brings happiness throughout 366 days in a year. <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Who Are We : We Are Property Agent</b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Our Vision – Your Best Private Property Partner </b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Our Mission -  Anytime You Need</b><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Excellent Service: We have expertise in being sole agent for your property projects and specialize in 3 service areas.<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Project Sale – Providing consultancy and being sole agent with high experienced sales team. Unlike the others, we focus on friendly sales, understand client’s needs and maximum service mind.<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Project Marketing – Marketing Consultancy for Real Estate business. We specialize in Online and Offline Marketing strategies that will help you achieve your target successfully. <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Project  Analysis -  Analysis Consultancy for the projects at all stages. We provide Marketing analysis, Sales analysis, Financial Analysis and Project Feasibility to make sure you have solid information for your projects to reach your goals since the early stage. <br><br>

            <div class="text-center">
                <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                    <br><span class="colored-text"><b>“Anytime you need”</b></span><br>
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
                                            <h6>Mr.Nattapoom Ratchayakorn - <span class="colored-text">Group General Manager</span></h6>
                                            <p>
                                                Started this business with love and passion, Nattapoom aims to help everyone getting a nice accommodation that creates everyday happiness.
                                            </p>                                 
                                        </div>
                                    </li><!--Single slide li-->
                                    <li>
                                        <div class="testi-slider-item">                                        
                                            <p>
                                                With confidence from over 10 years in advertising industry, Nattapoom is ready to convey his experiences to develop real estate tasks for clients at his best capacity.
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
                                            <h6>Mr. Poompan Pattaranutaporn - <span class="colored-text">Finance Director (Board Member)</span></h6>                                        
                                            <p>
                                                An auditor, financier, and real estate owner, Poompan has direct experiences from doing his personal business for more than a decade and will
                                            </p>                                        
                                        </div>
                                    </li><!--Single slide li--> 
                                    <li>
                                        <div class="testi-slider-item">                                        
                                            <p>
                                                bring his capacity to help managing accounting and financial related issues from messy to cozy. Poompan has an ability to transform difficulties in numbers to comfort but understandable figures that are necessary in real estate business. 
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
                                            <h6>Mr. Muchaklit Niwatkannumart - <span class="colored-text">Private Property Partner-Director (Board Member)</span></h6>
                                            <p>
                                                High experienced sales person who had sold almost everything but has special interest in real estate. Muchaklit is considered as one of the top sales person 
                                            </p>                                        
                                        </div>
                                    </li><!--Single slide li-->
                                    <li>
                                        <div class="testi-slider-item">                                        
                                            <p>
                                                due to his variety of knowledge and trusted personality. All these aspects are equipped in Muchaklit and granted him an ability to lead sales team with creativity to the goals with full capacity. 
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
            while($aport = $Aportfolio->fetch_assoc()){
            ?>
            <div class="col-md-4 col-lg-4">
                <!-- normal -->
                <div class="ih-item square effect3 bottom_to_top"><a href="portfolio.php?id=<?php echo $aport["id"];?>">
                        <div class="img"><img src="webadmin/file/portfolio/<?php echo $aport["fileNme"];?>"></div>
                        <div class="info">
                            <h3><?php echo $aport["en_title"];?></h3>
                            <p style="margin-top: 0px"><?php echo $aport["en_desc"];?></p>
                        </div></a></div>
                <!-- end normal -->
            </div>
            <?php }?>
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
                    <p class="sub-text">Newspective believes that educational development and consistent learning  can create a better life. Therefore, we emphasize on education and learning process of the youth so that we have started these 2 programs continuously </p>
                </div>
            </div>             

            <div class="container">
                <div id="mbs"><br><br><br></div>
                <h3>“Make it Better” Scholarship </h3>
                <hr class="fancy-hr">              
            </div>
            <div class="container">
                <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective realizes the necessity of Hi-school education, thus, we have been giving scholarship to students who show their dedication to study and beneficial activities. Having started since last year, we have now been supporting these students their tuition fees upon their Hi-school graduations.
                    <br>
                    <br>
                    <b>2014</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Ms. Chanita Mungmee - Grade 10, Singha Samutr School<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Mr. Chakrapong Wongyoo - Grade 10, Singha Samutr School<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Ms. Araya Trongyong - Grade 11, Singha Samutr School<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Ms. Nisarat Butrdee- Grade 12, Singha Samutr School<br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not only Hi-school but Newspective has been giving scholarship to colleage students also. They are<br>
                    <b>2014</b><br>
                    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. (รอชื่อ)                   Tianjin University China<br>-->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Ms. Suwimol Athikiat Boromarajonani College of Nursing, Cnonburi<br>

                </p>
                <!--<div class="text-center">
                    <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                        <br><span class="colored-text"><b>“Education Makes Your Life Better”</b></span><br>
                    </p>
                </div>-->
            </div>
            <div class="gray-cta">
                <div class="container text-center scroll-to">
                    <h2><span class="colored-text">“Education Makes Your Life Better”</span></h2>   
                    <hr style="width:10%; background-color:#B29036;height: 2px;">             
                </div>
            </div><!--gray cta-->

            <div class="container">
                <div id="mbt"><br><br><br></div>
                <h3>“Make it Better” Internship</h3>
                <hr class="fancy-hr">              
            </div>

            <div class="container">
                <p class="lead subtitle-center wow animated fadeIn" data-wow-delay=".1s" data-wow-delay=".1s">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Newspective realizes the importance of learning process during college time so that we have continuously been giving opportunities to qualified college student to work with us as trainees up until now. They are…<br><br>
                    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. รอรายชื่อ-->
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students who would like to join Newspective’s internship program please contact<br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Miss Nuengruethai Bangnachat - Media Manager<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : nuengruethai@newspective.co.th<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile : 086-880-4466<br>

                </p>
            </div>
            <div class="gray-cta">
                <div class="container text-center scroll-to">
                    <h2><span class="colored-text">“Internship opportunity opens all year round, <br>just show us your strong will and we will train you to be expert”</span></h2>   
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
                            <a herf="#" class="btn btn-lg btn-block btn-dark-bg">Download</a>
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
