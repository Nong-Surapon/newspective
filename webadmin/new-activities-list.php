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
    include_once("../includes/functions-web.php");
    include_once("nav.php");
    ?>
    <div class="container" style="margin-top:80px;">
        <h1>List :: Portfolio Newage address</h1><br>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-4">
                    <label for="search_txt">Search:</label>
                    <input class="form-control" id="search_txt" type="text" name="search_txt" value="<?php echo $_REQUEST['search_txt'];?>">
                </div>                
                <div class="col-md-4">
                     <div class="form-group">
                         <label for="selCompany">Select group:</label>
                         <select class="form-control" id="selCompany" name="selCompany">
                             <option value="">-Select-</option>
                             <option value="News" <?php if ($_REQUEST['selCompany']=='News'){ echo "selected";}?> >News</option>
                             <option value="Activities" <?php if ($_REQUEST['selCompany']=='Activities'){ echo "selected";}?> >Activities</option>
                             <option value="News Activities" <?php if ($_REQUEST['selCompany']=='News Activities'){ echo "selected";}?> >News Activities</option>
                         </select>
                     </div>
                </div>
                <div class="col-md-4" style="margin-top:25px;">
                    <button type="submit" class="btn btn-default">Search</button>
                </div>
            </div>
            </form>
            <br><br>
        <div class="table-responsive">
          <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Photo.</th>
                    <th>List</th>
                    <th>Group</th>
                    <th>More</th>
                    <th>Edit</th>
                    <th>Delet</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                    $newsQuery =  newsAll($_POST["search_txt"],$_POST["selCompany"]);
                    while ($row = $newsQuery->fetch_assoc()) {
                      $i++;     
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><img src="file/news/<?php echo newsPic2($row["id"])?>" alt="" width="100"></td>
                    <td><?php echo $row["en_title"]?></td>
                    <td><?php echo $row["n_group"]?></td>
                    <td><a class="btn btn-default" href="../news-activities.php?id=<?php echo $row["id"];?>" target="_bank"><span class="glyphicon glyphicon-search"></span></a></td>
                    <td><a class="btn btn-default" href="new-activities-edit.php?id=<?php echo $row["id"];?>"><span class="glyphicon glyphicon-cog"></span></a></td>
                    <td><a class="btn btn-default" href="new-activities-del.php?id=<?php echo $row["id"];?>" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
              <?php } ?>
            </tbody>

        </table>
    </div>
</div>
    
    <script src="../js/bootstrap.min.js"></script> 
</body>
</html>