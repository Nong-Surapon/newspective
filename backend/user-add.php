<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("../includes/conn.php");

//$id = $_POST["id"];
$uid = $_POST["uid"];

$title_en = $_POST["title_en"];
$fname_en = $_POST["fname_en"];
$lname_en = $_POST["lname_en"];
$title_th = $_POST["title_th"];
$fname_th = $_POST["fname_th"];
$lname_th = $_POST["lname_th"];
$nname = $_POST["nname"];
$position = $_POST["position"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$phone = $_POST["phone"];
$acc_kbank = $_POST["acc_kbank"];
$acc_uob = $_POST["acc_uob"];
$possibility = $_POST["possibility"];
$status = $_POST["status"];
$identity = $_POST["identity"];
$social = $_POST["social"];
$graduation = $_POST["graduation"];
$birthday = $_POST["birthday"];
$sex = $_POST["sex"];
$weight = $_POST["weight"];
$height = $_POST["height"];
$size = $_POST["size"];
$status2 = $_POST["status2"];
$nationality = $_POST["nationality"];
$religion = $_POST["religion"];
$workday = $_POST["workday"];
$salary = $_POST["salary"];
$note = $_POST["note"];
$other = $_POST["other"];
$usr_update = $_POST["usr_update"];
$usr_create = $_POST["usr_create"];
$companyId = $_POST["company"];

$an_no=$_POST["an_no"];
$an_moo=$_POST["an_moo"];
$an_soi=$_POST["an_soi"];
$an_road=$_POST["an_road"];
$an_tumbon=$_POST["an_tumbon"];
$an_amphoe=$_POST["an_amphoe"];
$an_province=$_POST["an_province"];
$an_postcode=$_POST["an_postcode"];
$ah_no=$_POST["ah_no"];
$ah_moo=$_POST["ah_moo"];
$ah_soi=$_POST["ah_soi"];
$ah_road=$_POST["ah_road"];
$ah_tumbon=$_POST["ah_tumbon"];
$ah_amphoe=$_POST["ah_amphoe"];
$ah_province=$_POST["ah_province"];
$ah_postcode=$_POST["ah_postcode"];
$photo = $_FILES["photo"]["name"];


//tb_usr_salary create
//if($salary!=""){
    $res_sal = mysqli_query($mysqli,"INSERT INTO tb_usr_salary (id,usr_uid,salary,create_det,last_update) 
    VALUES (NULL, '$uid', '$salary', CURRENT_TIMESTAMP,'')");
//}
//tb_usr_note create
//if($note!=""){
    $res_note = mysqli_query($mysqli,"INSERT INTO tb_usr_note (id,usr_uid,note,create_det,last_update) 
    VALUES (NULL, '$uid', '$note', CURRENT_TIMESTAMP,'')");
//}

if($photo!=""){
	$p_name = explode(".",$photo);
	$p_rename = $uid.".".$p_name['1'];
	if(move_uploaded_file($_FILES["photo"]["tmp_name"],"profile_photo/".$p_rename))
	{ 
		$photo_up 	=1;
		$photo 		=$p_rename;
	}
}

$doc_identity =  $_FILES["doc_identity"]["name"];
if($doc_identity!=""){
	$i_name = explode(".",$doc_identity);
	$i_rename = $uid."_identity.".$i_name['1'];
	if(move_uploaded_file($_FILES["doc_identity"]["tmp_name"],"documents/".$i_rename))
	{ 
		$identity 		=1;
		$doc_identity 	=$i_rename;
	}
}

$doc_home =  $_FILES["doc_home"]["name"];
if($doc_home!=""){
	$h_name = explode(".",$doc_home);
	$h_rename = $uid."_home.".$h_name['1'];
	if(move_uploaded_file($_FILES["doc_home"]["tmp_name"],"documents/".$h_rename))
	{ 
		$home 		=1;
		$doc_home 	=$h_rename;
	}
}

$doc_graduation =  $_FILES["doc_graduation"]["name"];
if($doc_graduation!=""){
	$g_name = explode(".",$doc_graduation);
	$g_rename = $uid."_graduation.".$g_name['1'];
	if(move_uploaded_file($_FILES["doc_graduation"]["tmp_name"],"documents/".$g_rename))
	{ 
		$graduation 		=1;
		$doc_graduation 	=$g_rename;
	}
}

$doc_resume =  $_FILES["doc_resume"]["name"];
if($doc_resume!=""){
	$r_name = explode(".",$doc_resume);
	$r_rename = $uid."_resume.".$r_name['1'];
	if(move_uploaded_file($_FILES["doc_resume"]["tmp_name"],"documents/".$r_rename))
	{ 
		$resume 		=1;
		$doc_resume 	=$r_rename;
	}
}


$enlist =  $_FILES["enlist"]["name"];
if($enlist!=""){
	$e_name = explode(".",$enlist);
	$e_rename = $uid."_enlist.".$e_name['1'];
	if(move_uploaded_file($_FILES["enlist"]["tmp_name"],"documents/".$e_rename))
	{ 
		$enl		=1;
		$enlist 	=$e_rename;
	}
}

$doc_social =  $_FILES["doc_social"]["name"];
if($doc_social!=""){
	$s_name = explode(".",$doc_social);
	$s_rename = $uid."_social.".$s_name['1'];
	if(move_uploaded_file($_FILES["doc_social"]["tmp_name"],"documents/".$s_rename))
	{ 
		$social		=1;
		$doc_social 	=$s_rename;
	}
}


$result = mysqli_query($mysqli,"INSERT INTO tb_users (
id,uid,title_en,fname_en,lname_en,title_th,fname_th,
lname_th,nname,position,email,password,
mobile,phone,acc_kbank,acc_uob,possibility,
status,identity,social,
an_no,an_moo,an_soi,an_road,an_tumbon,an_amphoe,
an_province,an_postcode,ah_no,ah_moo,ah_soi,ah_road,
ah_tumbon,ah_amphoe,ah_province,ah_postcode,
graduation,birthday,sex,weight,height,
size,status2,nationality,religion,workday,
salary,note,doc_identity,doc_social,doc_home,
doc_graduation,doc_resume,enlist,other,photo,companyId,
usr_update,usr_create,last_update,cre_date,last_login
) 
VALUES (NULL, 
'$uid','$title_en','$fname_en','$lname_en','$title_th','$fname_th',
'$lname_th','$nname','$position','$email','$password',
'$mobile','$phone','$acc_kbank','$acc_uob','$possibility',
'$status','$identity','$social',
'$an_no','$an_moo','$an_soi','$an_road','$an_tumbon','$an_amphoe','$an_province','$an_postcode',
'$ah_no','$ah_moo','$ah_soi','$ah_road','$ah_tumbon','$ah_amphoe','$ah_province','$ah_postcode',
'$graduation','$birthday','$sex','$weight','$height',
'$size','$status2','$nationality','$religion','$workday',
'$salary','$note','$doc_identity','$doc_social','$doc_home',
'$doc_graduation','$doc_resume','$enlist','$other','$photo','$companyId',
'$usr_update','$usr_create',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,''
)");

if(isset($result)){

$result = $mysqli->query("SELECT max(id) as maxID FROM tb_users");
if ($row = $result->fetch_assoc()) {

	header("Location: users.php?id=".$row["maxID"]);
        //echo $row["maxID"];
    }else{ echo "error_result";}
  
}else{ echo "error_insert";}

//}else{ echo "error";}//upphoto

mysqli_close($mysqli);