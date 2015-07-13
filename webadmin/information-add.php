<?php
include_once("inc_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Information for web newspective.co.th</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!--<link href="../css/style.css" rel="stylesheet">-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

        <!--for datepicker-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link href="css/newspective.css" rel="stylesheet">
        <script src="js/newspective.js"></script>

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
    <body onload="chkType()">
        <?php
        include_once("../includes/conn.php");
        include_once("../includes/functions.php");
        include_once("nav.php");
        ?>

        <div class="container">
            <div class="row">
                <div class="margin-h">
                    <div class="text-center">
                        <h1>Information for Newspective website</h1>
                    </div>
                </div>
            </div>
            <form name="form1" class="form-signin" role="form" method="post" action="information-add-data.php" enctype="multipart/form-data" onsubmit="return chkVal();">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Group</h3>   
                        <div class="radio">
                            <label><input type="radio" name="group" value="news" checked>News & Activities</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="group" value="Newage">Newspective Newage</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="group" value="Address">Newspective Address</label>
                        </div>                      
                    </div>
                    <div class="col-md-6"></div>
                </div>


                <div class="row">            
                    <div class="col-md-3">
                        <label class="control-label" for="dte">Date:</label>
                        <input type="text" class="form-control datepicker"  maxlength="255" id="dte" name="dte">
                    </div>
                    <div class="col-md-10">&nbsp;</div>
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
                    <h3>Upload File <span class="glyphicon glyphicon-picture"></span></h3>
                    <!--<div class="radio">
                            <label><input type="radio" name="typt_data" id="typt_data1" value="photo" checked onchange="chkType()">Photo</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="typt_data" id="typt_data2" value="youtube" onchange="chkType()">Youtube</label>
                    </div>-->
                    
                    <!--<input type="hidden" name="typt_data" value="photo">-->
                    <br>Size 500*333 px<br>
                    <table width="500" border="0">
                        <thead>
                            <tr>
                                <th width="400">Photo</th>           
                                <th width="100">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr id="inputForm" class="inputForm">
                                <td width="400"><input name="file_[]" type="file" ></td>                    
                                <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                            <tr class="inputForm">
                                <td><input name="file_[]" type="file"  onchange="chkSize(this.id);"></td>                    
                                <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                            <tr class="inputForm" id="file_input2">
                                <td><input name="file_[]" type="file"  onchange="chkSize(this.id);"></td>                    
                                <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                            <tr class="inputForm" id="file_input3">
                                <td><input name="file_[]" type="file"  onchange="chkSize(this.id);"></td>                    
                                <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>                            
                            <tr class="inputForm-add">
                                <td>&nbsp;</td>                    
                                <td>&nbsp;</td>
                            </tr>
                            <tr class="inputForm-add" id="inputForm-add">
                                <td>&nbsp;</td>                    
                                <td class="deleteRow"><button type="button" id="add" class="addMoreRow btn btn-default"><span class="glyphicon glyphicon-plus"></span></button></td>
                            </tr>
                            </tbody>
                            </table>
                </div>
                <div class="row">
                    <h4>Youtube</h4>
                    <p>Example : src="<font style="color:#ff0000">https://www.youtube.com/embed/GYpzzbVRrsk?list=RDzYNsQ6ibdZs</font>"<br>
                    <font style="color:#ff0000">*At least one photo for youtube</font></p>                    
                       
                            
                        <table width="600" border="0">   
                            <tr class="inputFormY" id="video1">
                                <td><input name="video_[]" type="text" class="form-control"></td>                    
                                <td class="deleteRowY"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                            <tr class="inputFormY" id="video2">
                                <td><input name="video_[]" type="text" class="form-control"></td>                    
                                <td class="deleteRowY"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                            <tr class="inputFormY" id="video3">
                                <td><input name="video_[]" type="text" class="form-control"></td>                    
                                <td class="deleteRowY"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                            </tr>
                             <tr class="inputForm-add" id="inputForm-add">
                                <td>&nbsp;</td>                    
                                <td class="deleteRow"><button type="button" id="add" class="addMoreRowY btn btn-default"><span class="glyphicon glyphicon-plus"></span></button></td>
                            </tr>
                        </table>
                      
                    <br><button type="submit" class="btn btn-default">Submit</button>
                </div><!--row-->           
            </form>
        </div>
        <br>
        <br>


        <script>
            
            function chkVal() {

                errormsg = '';

                if (document.getElementById('dte').value == "") {
                    errormsg += 'plase check date not null\n';
                }
                if (document.getElementById('en_title').value == "") {
                    errormsg += 'check input title not null\n';
                }

                if (errormsg != '') {
                    alert(errormsg);
                    return false;
                } else {
                    return true;

                }
            }

            $(function () {
                $('td.deleteRow').click(function () {
                    $(this).parent('.inputForm').remove();
                });

                $('.addMoreRow').click(function () {
                    $('#inputForm').clone(true).insertAfter('tr.inputForm:last');
                    return false;

                    $('td.deleteRow').click(function () {
                        $(this).parent('.inputForm').remove();
                    });
                });
                
                //for youtube
                $('td.deleteRowY').click(function () {
                    $(this).parent('.inputFormY').remove();
                });

                $('.addMoreRowY').click(function () {
                    $('#inputFormY').clone(true).insertAfter('tr.inputFormY:last');
                    return false;

                    $('td.deleteRowY').click(function () {
                        $(this).parent('.inputFormY').remove();
                    });
                });
                
            });

        </script>
        <script src="../js/bootstrap.min.js"></script> 

    </body>
</html>
