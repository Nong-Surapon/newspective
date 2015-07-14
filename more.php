<?php
include_once("includes/conn.php");
include_once("includes/functions-web.php");
$portfolioQurery = informationQurery($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="shortcut icon" href="img/logo-box-ico.ico" />
        <title><?php echo $portfolioQurery["en_title"]; ?></title>
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

        <!--revolution slider setting css-->
        <link href="assets/rs-plugin/css/settings.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
    <body class="gray-bg">
        <!-- Static navbar -->
        <?php include_once 'web-nav.php'; ?>

        <div class="container section-inner">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="text-center">
                        <h2 class="center-title"><?php echo $portfolioQurery["en_title"]; ?></h2>
                        <span class="center-border-line"></span>
                        <p class="sub-text"><?php echo $portfolioQurery["en_desc"]; ?></p>
                    </div>
                </div>
            </div><!--center title row end-->
        </div><!--header container end-->
        <div class="inner-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-entry clearfix">
                            <!--<div class="blog-date">
                                <span class="date-day">28</span>
                                <span class="date-month">April 015</span>
                            </div><!--blog date into left position-->
                            <div class="blog-content">
                                <div class="entry-media">
                                    <div class="flexslider blog-slider">
                                        <ul class="slides ">
                                            <?php
                                            $portfolioFile = informationFileMore($_GET["id"]);
                                            while ($row = $portfolioFile->fetch_assoc()) {
                                                if ($row['typt_data'] == "photo") {
                                                    ?>
                                                    <li>
                                                        <img src="webadmin/file/<?php echo $row['text_data'] ?>" alt="">
                                                    </li><!--Single slide li-->
                                                <?php } else { ?>
                                                    <li class="cbp-slider-item">
                                                        <iframe width="500" height="435" src="//<?php echo $row['text_data'] ?>" frameborder="0" allowfullscreen></iframe>
                                                    </li>
                                                <?php }} ?>
                                        </ul>
                                    </div>
                                </div><!--entry media-->
                                <h3 class="entry-title"><?php echo $portfolioQurery["en_title"]; ?></h3>
                                <h6 class="entry-author">
                                    <?php echo $portfolioQurery["dte"] ?><br><br>
                                    <?php echo $portfolioQurery["en_desc"]; ?></h6>
                                <p class="post-text">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $portfolioQurery["en_detail"]; ?>
                                </p>
                            </div><!--blog content-->
                        </div><!--blog entry-->
                        <div class="divided70"></div>
                        <!--<div class="comments">
                            <h4>2 Comments</h4>

                            <div class="comment-box clearfix">
                                <img src="assets/images/team-1.jpg" alt="">
                                <div class="comment-text">
                                    <span>Elkind at 11:30 Am</span>
                                    <a href="#">Reply</a>
                                    <p>
                                        In elit purus, ullamcorper vel luctus vitae, venenatis eu odio. Vivamus tincidunt, urna quis consectetur venenatis,
                                    </p>
                                </div>
                            </div><!--comment box-->
                        <!--<div class="comment-box clearfix">
                            <img src="assets/images/team-2.jpg" alt="">
                            <div class="comment-text">
                                <span>John at 11:30 Am</span>
                                <a href="#">Reply</a>
                                <p>
                                    In elit purus, ullamcorper vel luctus vitae, venenatis eu odio. Vivamus tincidunt, urna quis consectetur venenatis,
                                </p>
                            </div>
                        </div><!--comment box-->
                        <!--</div><!--comments end-->
                        <div class="divided70"></div>
                        <div class="comment-form clearfix">
                            <!--<h4>Leave a comment</h4>
                            <form>
                                <div class="form-group">

                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">

                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark-border pull-right btn-lg">Submit comment</button>
                            </form>-->
                        </div>
                        <div class="divided70"></div>
                    </div><!--blog entry column end-->
                    <div class="col-md-3 col-md-offset-1">
                        <div class="sidebar-column">
                            <!--<div class="sidebar-widget">
                                <form role="form">
                                    <input type="text" placeholder="Search" class="form-control">
                                    <button type="submit" class="search-icon"><i class="ion-android-search"></i></button>
                                </form>
                            </div> <!--sidebar-widget-->
                            <div class="sidebar-widget">
                                <h3 class="sidebar-title">Latest portfolios</h3>
                                <ul class="list-unstyled latest-post">
                                    <?php
                                    $portfolioLast = informationLast($portfolioQurery["type_group"]);
                                    while ($rowLast = $portfolioLast->fetch_assoc()) {
                                        ?>

                                        <li class="clearfix">
                                            <a href="more.php?id=<?php echo $rowLast["id"] ?>" class="post-thumb"> <img src="webadmin/file/<?php echo $rowLast['text_data'] ?>" class="img-responsive" alt="<?php echo $rowLast["en_title"]; ?>"></a>
                                            <div class="recent-post-content">
                                                <a href="more.php?id=<?php echo $rowLast["id"] ?>">
                                                    <?php echo $rowLast["en_title"]; ?>
                                                </a>
                                                <!--<span>John doe, 26 april 2015</span>-->
                                            </div>
                                        </li>
                                    <?php } ?>
                                    <!--<li class="clearfix">
                                        <a href="#" class="post-thumb"> <img src="assets/images/work-6.jpg" class="img-responsive" alt=""></a>
                                        <div class="recent-post-content">
                                            <a href="#">
                                                Good news for sass lovers lorem ipsum.
                                            </a>
                                            <span>John doe, 26 april 2015</span>
                                        </div>
                                    </li>-->

                                </ul>
                            </div><!--sidebar widget-->
                            <!--<div class="sidebar-widget">
                                <h3 class="sidebar-title">Contact</h3>
                                <div class="tweet"></div>
                            </div><!--sidebar widget-->

                            <!--<div class="sidebar-widget">
                                <h3 class="sidebar-title">Some text</h3>
                                <p>
                                    Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                </p>
                            </div><!--sidebar widget-->
                            <div class="sidebar-widget">    
                                <a href="more-all.php?cpn=<?php echo $portfolioQurery["type_group"]; ?>" class="btn btn-lg btn-block btn-dark-bg">All PROJECT</a>    
                            </div>
                            <div class="sidebar-widget">
                                <h3 class="sidebar-title">Tags</h3>
                                <div class="tag-list">
                                    <a href="web.php">Newspective</a>                                    
                                    <a href="web.php">Newspective </a>
                                    <a href="web.php" style="font-size: 18px;">Newage</a>
                                    <a href="web.php" style="font-size: 18px;">Newspective Address</a>
                                    <a href="web.php">even</a>
                                    <a href="web.php">Media</a>
                                    <a href="web.php" style="font-size: 18px;">Palette</a>
                                    <a href="web.php">Event</a>
                                    <a href="web.php">Organizer</a>
                                    <a href="web.php" style="font-size: 18px;">Newspective.co.th</a>
                                </div>
                            </div><!--sidebar widget-->
                        </div><!--sidebar column-->
                    </div>
                </div>
            </div><!--container-->
        </div><!--inner page content-->

        <?php include_once 'web-footer.php'; ?>


        <!--jquery-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery-migrate.min.js" type="text/javascript"></script> 
        <script src="assets/js/moderniz.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!--flex slider-->
        <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
        <!--Parallax-->
        <script type="text/javascript" src="assets/js/parallax.min.js"></script>
        <!--twitter api-->
        <script src="assets/js/tweetie.min.js" type="text/javascript"></script>
        <!--Waypoints-->
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>  
        <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/template.js" type="text/javascript"></script>
        <!--revolution slider scripts-->
        <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
        <script src="assets/js/revolution-custom.js" type="text/javascript"></script>
        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/js/cube-portfolio.js" type="text/javascript"></script>
    </body>
</html>
