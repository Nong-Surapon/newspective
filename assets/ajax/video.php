<?php 
include_once("../../includes/conn.php");
include_once("../../includes/functions-web.php");

$row = newsActivitiesFetch($_GET["id"])

?>
<div class="cbp-l-inline">
    <div class="cbp-l-inline-left"> 
        <?php 
                $newsFile = newsFile($_GET["id"]);
                while ($nRow = $newsFile->fetch_assoc()) {
                   
                ?>
            <video id="sampleMovie" width="500" height="333" preload controls>
                <source src="webadmin/file/news/fashion_05.mov" />
            </video>
        <?php } ?> 
    </div>

    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title"><?php echo $row["en_title"];?></div>
        <div class="cbp-l-inline-subtitle"><?php echo $row["en_desc"]?></div>

        <div class="cbp-l-inline-desc"><?php echo $row["en_detail"]?></div>

        <a href="news-activities.php?id=<?php echo $row["id"];?>" target="_blank" class="cbp-l-inline-view">More</a>
    </div>
</div>
