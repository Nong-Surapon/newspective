<?php
include_once("inc_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Newage & Address</title>
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
<body>
    <?php
    include_once("../includes/conn.php");
    include_once("../includes/functions-web.php");
    include_once("nav.php");
    $newsEidt = informationEidt($_GET["id"])
    
    ?>

<div class="container">
    <div class="row">
        <div class="margin-h">
            <div class="text-center">
                <h1>Portfolio Newage & Address</h1>
            </div>
        </div>
    </div>
    <form name="form1" class="form-signin" role="form" method="post" action="information-update.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <h3>Company</h3>
                <div class="radio">
                    <label><input type="radio" name="group" value="news" <?php if($newsEidt["type_group"] == "news"){ echo "checked";}?> >News & Activities</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="group" value="Newage" <?php if($newsEidt["type_group"] == "Newage"){ echo "checked";}?> >Newspective Newage</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="group" value="Address" <?php if($newsEidt["type_group"] == "Address"){ echo "checked";}?> >Newspective Address</label>
                </div>                      
            </div>
            <div class="col-md-6"></div>
        </div>
        <div class="row">            
            <div class="col-md-3">
                    <label class="control-label" for="dte">Date:</label>
                    <input type="text" class="form-control datepicker"  maxlength="255" id="dte" name="dte" value="<?php echo $newsEidt["dte"];?>">
            </div>
            <div class="col-md-10">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>For english</h3>
                <label class="control-label" for="en_title">Title:</label>
                <input type="text" class="form-control" maxlength="255" id="en_title" name="en_title" value="<?php echo $newsEidt["en_title"];?>" >
                <label class="control-label" for="en_desc">Descination:</label>
                <input type="text" class="form-control" maxlength="255" id="en_desc" name="en_desc" value="<?php echo $newsEidt["en_desc"];?>" >
                <label for="en_detail">Detail:</label>
                <textarea class="form-control" rows="5" id="en_detail" name="en_detail"><?php echo $newsEidt["en_detail"];?></textarea>
            </div>
            <div class="col-md-6">
                <h3>For thai</h3>
                <label class="control-label" for="th_title">Title:</label>
                <input type="text" class="form-control" maxlength="255" id="th_title" name="th_title" value="<?php echo $newsEidt["th_title"];?>" >
                <label class="control-label" for="th_desc">Descination:</label>
                <input type="text" class="form-control" maxlength="255" id="th_desc" name="th_desc" value="<?php echo $newsEidt["th_desc"];?>" >
                <label for="th_detail">Detail:</label>
                <textarea class="form-control" rows="5" id="th_detail" name="th_detail"><?php echo $newsEidt["th_detail"];?></textarea>
            </div>
        </div>
        <div class="row">
            <h3>Upload File <span class="glyphicon glyphicon-picture"></span> <span class="glyphicon glyphicon-film"></span></h3>
            <br>ขนาดรูป 500*333 px<br><br>
            <table>
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>File</th>           
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr id="inputForm" class="inputForm"> 
                        <td><input type="hidden" name="fileNme[]" value=""></td>
                        <td><input name="file_[]" type="file"></td>                    
                        <td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
                    </tr>
                    <?php
                    $i = 0;
                    $porfolioFile = informationFile($newsEidt["id"],'photo');
                    while ($FileNme = $porfolioFile->fetch_assoc()) {
                    $i++
                    ?>
                    <tr class="inputForm">
                        <td>
                            <img style="margin:10px;" src="file/<?php echo $FileNme["text_data"]?>" width="100">
                            <input type="hidden" name="fileNme[]" value="<?php echo $FileNme["text_data"]?>">
                        </td> 
                        <td><input name="file_[]" type="file" id="file_input<?php echo $i;?>" onchange="chkSize(this.id);"></td>                    
                        <td><a href="delPicInfo.php?id=<?php echo $_GET['id'];?>&name=<?php echo $FileNme["text_data"];?>&countId=<?php echo $FileNme["countId"]?>&seq=<?php echo $i?>"  class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                        <?php } ?>
                    
                    <tr class="inputForm-add">
                        <td><input type="hidden" name="countOld" value="<?php echo $i+1;?>"></td>
                        <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>                    
                        <td>&nbsp;</td>
                    </tr> 
                    <tr class="inputForm-add">
                        <td>&nbsp;</td>
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
                            <?php
                    $i = 0;
                    $informationlink = informationFile($newsEidt["id"],'video');
                    while ($youtube = $informationlink->fetch_assoc()) {
                    $i++
                    ?>
                            <tr id="video1">
                                <td><input name="video_[]" type="text" class="form-control" value="<?php echo $youtube["text_data"];?>"></td>                    
                                <td class="deleteRow"><a href="delPicInfo.php?id=<?php echo $_GET['id'];?>&name=<?php echo $youtube["text_data"];?>&countId=<?php echo $youtube["countId"]?>&seq=<?php echo $i?>"  class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                            </tr>
                    <?php }?>                            
                        </table>
                      
                    <br><button type="submit" class="btn btn-default">Submit</button>
                </div><!--row-->           
            </form>
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
<script src="../js/bootstrap.min.js"></script> 

</body>
</html>
