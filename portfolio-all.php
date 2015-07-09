<?php
include_once("includes/conn.php");
include_once("includes/functions-web.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <title>Portfolio all project</title>
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
        <link href="css/ihover.min.css" rel="stylesheet">


    </head>
    <body class="gray-bg">
          <!-- Static navbar -->
        <?php include_once 'web-nav.php';?>

        <div class="container section-inner">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <div class="text-center">
                        <h2 class="center-title">Portfolio</h2>
                        <span class="center-border-line"></span>
                        <p class="sub-text">All Project</p>
                    </div>
                </div>
            </div><!--center title row end-->
        </div><!--header container end-->
        <div class="inner-page-content">
            <div class="container">
                <div class="row">
                    <?php
                    $Aportfolio = portfolioA_All($_GET["cpn"]);
                    while ($aport = $Aportfolio->fetch_assoc()) {

                        $en_title = $aport["en_title"];
                        $len_title = strlen($en_title);
                        if ($len_title > 24) {
                            $sub_title = substr($en_title, 0, 24);
                            $enTitle = $sub_title . " ...";
                        } else {
                            $enTitle = $en_title;
                        }


                        $en_desc = $aport["en_desc"];
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
                            <div class="ih-item square effect3 bottom_to_top" style="margin:20px"><a href="portfolio.php?id=<?php echo $aport["id"]; ?>">
                                    <div class="img"><img src="webadmin/file/portfolio/<?php echo $aport["fileNme"]; ?>"></div>
                                    <div class="info">
                                        <h3><?php echo $enTitle ?></h3>
                                        <p style="margin-top: 0px"><?php echo $enDesc ?></p>
                                    </div></a></div>
                            <!-- end normal -->
                        </div>
                    <?php } ?>
                </div><!--row-->
            </div><!--container-->
        </div><!--inner page content-->

        <?php include_once 'web-footer.php';?>

           
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
