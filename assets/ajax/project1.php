<?php 
include_once("../../includes/conn.php");
include_once("../../includes/functions-web.php");

$row = newsActivitiesFetch($_GET["id"])

?>
<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <?php 
                $newsFile = newsFile($_GET["id"]);
                while ($nRow = $newsFile->fetch_assoc()) {
                   echo $nRow["name"];
                
                ?>
                <li class="cbp-slider-item">
                    <a href="webadmin/file/news/<?php echo $nRow['name']?>" class="cbp-lightbox">
                        <img src="webadmin/file/news/<?php echo $nRow['name']?>" alt="<?php echo $row['en_title'];?>" height="333" width="500">
                    </a>
                </li>
                <?php } ?>            
            </ul>
        </div>
    </div>

    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title"><?php echo $row["en_title"];?></div>
        <div class="cbp-l-inline-subtitle"><?php echo $row["en_desc"]?></div>
        <div class="cbp-l-inline-desc"><?php echo $row["en_detail"]?></div>
        <a href="#" target="_blank" class="cbp-l-inline-view">More</a>
    </div>
</div>

