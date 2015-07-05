<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPLOAD DATA NEWS $ ACTIVITIES</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="../css/style.css" rel="stylesheet">-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <!--for datepicker-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="css/newspective.css" rel="stylesheet">

    <script>
    $(function () {
        $(".datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
    </script>
    <!--for datepicker and use footer_picker.php-->
    <style type="text/css">


    </style>

</head>
<body>
    <?php
    include_once("../includes/conn.php");
    include_once("../includes/functions.php");
    include_once("nav.php");
    ?>
    <div class="container" style="margin-top:80px;">
        <div class="table-responsive">
          <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>List</th>
                    <th>More</th>
                    <th>Edit</th>
                    <th>Delet</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $newsList = newsList();
                while ($row = $newsList->fetch_assoc()) {          
                 
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php } ?>
            </tbody>



        </table>
    </div>
</div>
    
    <script src="<?php echo $domainName;?>/js/bootstrap.min.js"></script> 
</body>
</html>