<?php

include_once("../includes/conn.php");

$en_title = $_POST["en_title"];
$en_desc = $_POST["en_desc"];
$en_detail = $_POST["en_detail"];
$th_title = $_POST["th_title"];
$th_desc = $_POST["th_desc"];
$th_detail = $_POST["th_detail"];
$dte = $_POST["dte"];
$group = $_POST["group"];
//$typt_data = $_POST["typt_data"];
$video_ = $_POST["video_"];





$result = mysqli_query($mysqli,"INSERT INTO web_information (id,en_title,en_desc,en_detail,th_title,th_desc,th_detail,type_group,dte)
VALUES ('','$en_title','$en_desc','$en_detail','$th_title','$th_desc','$th_detail','$group', '$dte')");

if($result){

	//select tb w_news max
	if($result = $mysqli->query("SELECT max(id) as maxID FROM web_information")) {
	        if ($row = $result->fetch_assoc()) {
	            $maxID =  $row["maxID"];
	        }
	    }
        
    //for file
	//count file
	$count=count(($_FILES["file_"]["name"]));
	$title_rep = str_replace(" ","",$en_title);

	for($i=1;$i < $count;$i++)
    {

    	$file_name = $_FILES["file_"]["name"][$i];
        if($file_name != ""){

            //file rename
            $f_name = explode(".",$file_name);
            $f_rename = $maxID."_".$i."_".$title_rep.".".$f_name['1'];
            
            
            //Resize//
                $images = $_FILES["file_"]["tmp_name"][$i];
		$new_images = $f_rename;
		//copy($_FILES["file_"]["tmp_name"][$i],"file/resize1/".$_FILES["file_"]["name"][$i]); //size original
		$width=500; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($images);
		$height=round($width*$size[1]/$size[0]);
		$images_orig = ImageCreateFromJPEG($images);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		$move = ImageJPEG($images_fin,"file/".$new_images); //size thumbnails
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
            //Resize//
                
           // if(move_uploaded_file($_FILES["file_"]["tmp_name"][$i],"file/".$f_rename))
           // { 
                $result_insert = mysqli_query($mysqli,
                	"INSERT INTO web_information_res (id,web_information_id,num,text_data,typt_data)
                        VALUES (NULL, '$maxID','$i','$f_rename','photo')");
           // }
        }      
    }
    
    //youtube
    $videoCount=count(($video_));
    for($r=0;$r < $videoCount;$r++){
        if($video_[$r]!=""){
        //echo $r.$video_[$r]."<br>";
        $v_name=$video_[$r];
        $rp=$r+1;
            $result_insert = mysqli_query($mysqli,
            "INSERT INTO web_information_res (id,web_information_id,num,text_data,typt_data)
            VALUES (NULL, '$maxID','$rp','$v_name','video')");
        }
    }
    

	if($move){
            header('Location: information-add.php');
            exit;
            
		//echo "Success<br>";
		//echo "<a href='na-portfolio.php'><< Black</a>";
	}else{
		echo "Error1";
	}
}else{
	echo "Error2";
}