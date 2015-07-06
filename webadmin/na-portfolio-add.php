<?php

include_once("../includes/conn.php");

$en_title = $_POST["en_title"];
$en_desc = $_POST["en_desc"];
$en_detail = $_POST["en_detail"];
$th_title = $_POST["th_title"];
$th_desc = $_POST["th_desc"];
$th_detail = $_POST["th_detail"];

$company = $_POST["company"];




$result = mysqli_query($mysqli,"INSERT INTO w_na_portfolio (id,seq,en_title,en_desc,en_detail,th_title,th_desc,th_detail,company)
VALUES ('',0,'$en_title','$en_desc','$en_detail','$th_title','$th_desc','$th_detail','$company')");

if($result){

	//select tb w_news max
	if($result = $mysqli->query("SELECT max(id) as maxID FROM w_na_portfolio")) {
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
		$move = ImageJPEG($images_fin,"file/portfolio/".$new_images); //size thumbnails
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
            //Resize//
                
           // if(move_uploaded_file($_FILES["file_"]["tmp_name"][$i],"file/portfolio/".$f_rename))
           // { 
                $result_insert = mysqli_query($mysqli,
                	"INSERT INTO w_na_portfolio_file (id,na_portfolio_id,name) VALUES (NULL, '$maxID','$f_rename')");
           // }
        }      
    }
	if($move){
            header('Location: na-portfolio.php');
            exit;
            
		//echo "Success<br>";
		//echo "<a href='na-portfolio.php'><< Black</a>";
	}else{
		echo "Error";
	}
}else{
	echo "Error";
}