<?php
include_once("inc_session.php");
?>
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
    .inputForm:first-child{display:none; }

    </style>

</head>
<body>
    <?php
    include_once("../includes/conn.php");
    include_once("../includes/functions.php");
    include_once("nav.php");
    ?>


<div class="container">
    <div class="row">
        <div class="margin-h">
            <div class="text-center">
                <h1>Upload data News & Activities</h1>
            </div>
        </div>
    </div>
    <form name="form1" class="form-signin" role="form" method="post" action="new-activities-add.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <h3>Group</h3>                        
                <div class="checkbox">
                    <label><input type="checkbox" name="new" value="News">News</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="activities" value="Activities">Activities</label>
                </div>                      
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>For english</h3>
                <label class="control-label" for="en_title">Title:</label>
                <input type="text" class="form-control" maxlength="255" id="en_title" name="en_title" >
                <label class="control-label" for="en_desc">Descination:</label>
                <input type="text" class="form-control" maxlength="255" id="en_desc" name="en_desc" >
                <label for="en_detail">Detail:</label>
                <textarea class="form-control" rows="5" id="en_detail" name="en_detail"></textarea>
            </div>
            <div class="col-md-6">
                <h3>For thai</h3>
                <label class="control-label" for="th_title">Title:</label>
                <input type="text" class="form-control" maxlength="255" id="th_title" name="th_title" >
                <label class="control-label" for="th_desc">Descination:</label>
                <input type="text" class="form-control" maxlength="255" id="th_desc" name="th_desc" >
                <label for="th_detail">Detail:</label>
                <textarea class="form-control" rows="5" id="th_detail" name="th_detail"></textarea>
            </div>
        </div>
        <div class="row">
            <h3>Upload File <span class="glyphicon glyphicon-picture"></span> <span class="glyphicon glyphicon-film"></span></h3>
            <br>ขนาดรูป 500*333 px<br>
            <table>
                <thead>
                    <tr >
                        <th>File</th>           
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <tr id="inputForm" class="inputForm">
                        <td><input name="file_[]" type="file"></td>                    
                        <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                    <tr class="inputForm">
                        <td><input name="file_[]" type="file"></td>                    
                        <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                    <tr class="inputForm">
                        <td><input name="file_[]" type="file"></td>                    
                        <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                    <tr class="inputForm">
                        <td><input name="file_[]" type="file"></td>                    
                        <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                    <tr class="inputForm-add">
                        <td>&nbsp;</td>                    
                        <td>&nbsp;</td>
                    </tr> 
                    <tr class="inputForm-add">
                        <td></td>                    
                        <td class="deleteRow"><button type="button" id="add" class="addMoreRow btn btn-default"><span class="glyphicon glyphicon-plus"></span></button></td>
                    </tr>          
                </tbody>
            </table>
            <br><button type="submit" class="btn btn-default">Submit</button>
        </div><!--row-->           
    </form>
</div>
<br>
<br>


<script>
$(function(){
    $('td.deleteRow').click(function(){
        $(this).parent('.inputForm').remove();
    });

    $('.addMoreRow').click(function(){
        $('#inputForm').clone(true).insertAfter('tr.inputForm:last');
        return false;

        $('td.deleteRow').click(function(){
            $(this).parent('.inputForm').remove();
        });
    });
});

</script>
<script src="<?php echo $domainName;?>/js/bootstrap.min.js"></script> 

</body>
</html>
