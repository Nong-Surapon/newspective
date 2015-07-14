<?php 
include_once("../../includes/conn.php");
include_once("../../includes/functions-web.php");

$row = informationActivitiesFetch($_GET["id"])

?>
<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <?php 
                $newsFile = informationFileAj($_GET["id"]);
                while ($nRow = $newsFile->fetch_assoc()) {
                   //echo $nRow["text_data"];
                    
                    if($nRow['typt_data'] == "photo"){
                ?>
                
                <li class="cbp-slider-item">
                    <a href="webadmin/file/<?php echo $nRow['text_data']?>" class="cbp-lightbox">
                        <img src="webadmin/file/<?php echo $nRow['text_data']?>" alt="<?php echo $row['en_title'];?>" height="333" width="500">
                    </a>
                </li>
                    <?php }else{?>
                <li class="cbp-slider-item">
                    <div class="cbp-misc-video">
                        <iframe src="//<?php echo $nRow['text_data']?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </li>                
                    <?php }} ?>            
            </ul>
        </div>
    </div>

    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title"><?php echo $row["en_title"];?></div>
        <div class="cbp-l-inline-subtitle"><?php echo $row["dte"]?><br><?php echo $row["en_desc"]?></div>
        <div class="cbp-l-inline-desc"><?php echo $row["en_detail"]?></div>
        <a href="more.php?id=<?php echo $row["id"];?>" target="_blank" class="cbp-l-inline-view">More</a>
    </div>
</div>

