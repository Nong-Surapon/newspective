<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include_once("../includes/conn.php");

$id = $_POST["id"];
$uid = $_POST["uid"];
$fname_en = $_POST["fname_en"];
$lname_en = $_POST["lname_en"];
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

//$salary = $_POST["salary"];
//$note = $_POST["note"];
//$doc_identity = $_POST["doc_identity"];
//$doc_social = $_POST["doc_social"];
//$doc_home = $_POST["doc_home"];


//$doc_graduation = $_POST["doc_graduation"];
//$doc_resume = $_POST["doc_resume"];
//$enlist = $_POST["enlist"];
$other = $_POST["other"];
//$photo = $_POST["photo"];

$usr_update = $_POST["usr_update"];
//$usr_create = $_POST["usr_create"];
//$last_update = $_POST["last_update"];
//$login_date = $_POST["login_date"];
//$cre_date = $_POST["cre_date"];

$company = $_POST["company"];


$photo = $_FILES["photo"]["name"];
if($photo!=""){
	@unlink("profile_photo/".$_POST["old_photo"]);
	$p_name = explode(".",$photo);
	$p_rename = $uid.".".$p_name['1'];
	if(move_uploaded_file($_FILES["photo"]["tmp_name"],"profile_photo/".$p_rename))
	{ 		
		$photo=$p_rename;

		if ($mysqli->query("UPDATE tb_users SET photo='$photo' WHERE id='$id' ") === TRUE){
			$photo_up 	=1;

		}

	}
}

$doc_identity =  $_FILES["doc_identity"]["name"];
if($doc_identity!=""){
	@unlink("documents/".$_POST["old_doc_identity"]);
	$i_name = explode(".",$doc_identity);
	$i_rename = $uid."_identity.".$i_name['1'];
	if(move_uploaded_file($_FILES["doc_identity"]["tmp_name"],"documents/".$i_rename))
	{ 

		$doc_identity=$i_rename;
		if ($mysqli->query("UPDATE tb_users SET doc_identity='$doc_identity' WHERE id='$id' ") === TRUE){
			$identity_up = 1;
		}
	}
}

$doc_home =  $_FILES["doc_home"]["name"];
if($doc_home!=""){
	@unlink("documents/".$_POST["old_doc_home"]);
	$h_name = explode(".",$doc_home);
	$h_rename = $uid."_home.".$h_name['1'];
	if(move_uploaded_file($_FILES["doc_home"]["tmp_name"],"documents/".$h_rename))
	{ 
		$doc_home 	=$h_rename;
		if ($mysqli->query("UPDATE tb_users SET doc_home='$doc_home' WHERE id='$id' ") === TRUE){
			$home_up = 1;
		}
	}
}


$doc_graduation =  $_FILES["doc_graduation"]["name"];
if($doc_graduation!=""){
	@unlink("documents/".$_POST["old_doc_graduation"]);
	$g_name = explode(".",$doc_graduation);
	$g_rename = $uid."_graduation.".$g_name['1'];
	if(move_uploaded_file($_FILES["doc_graduation"]["tmp_name"],"documents/".$g_rename))
	{ 
		$doc_graduation=$g_rename;

		if ($mysqli->query("UPDATE tb_users SET doc_graduation='$doc_graduation' WHERE id='$id' ") === TRUE){
			$graduation_up = 1;
		}
	}
}

$doc_resume =  $_FILES["doc_resume"]["name"];
if($doc_resume!=""){
	@unlink("documents/".$_POST["old_doc_resume"]);
	$r_name = explode(".",$doc_resume);
	$r_rename = $uid."_resume.".$r_name['1'];
	if(move_uploaded_file($_FILES["doc_resume"]["tmp_name"],"documents/".$r_rename))
	{ 
		
		$doc_resume 	=$r_rename;
		if ($mysqli->query("UPDATE tb_users SET doc_resume='$doc_resume' WHERE id='$id' ") === TRUE){
			$resumeup 	=1;
		}
	}
}

$enlist =  $_FILES["enlist"]["name"];
if($enlist!=""){
	@unlink("documents/".$_POST["old_enlist"]);
	$e_name = explode(".",$enlist);
	$e_rename = $uid."_enlist.".$e_name['1'];
	if(move_uploaded_file($_FILES["enlist"]["tmp_name"],"documents/".$e_rename))
	{ 

		$enlist =$e_rename;
		if ($mysqli->query("UPDATE tb_users SET enlist='$enlist' WHERE id='$id' ") === TRUE){
			$enlist_up 	=1;
		}
	}
}

$doc_social =  $_FILES["doc_social"]["name"];
if($doc_social!=""){
	@unlink("documents/".$_POST["old_doc_social"]);
	$s_name = explode(".",$doc_social);
	$s_rename = $uid."_social.".$s_name['1'];
	if(move_uploaded_file($_FILES["doc_social"]["tmp_name"],"documents/".$s_rename))
	{ 
		
		$doc_social 	=$s_rename;

		if ($mysqli->query("UPDATE tb_users SET doc_social='$doc_social' WHERE id='$id' ") === TRUE){
			$social_up		=1;
		}
	}
}

$sql = "UPDATE tb_users SET fname_en='$fname_en',lname_en='$lname_en',fname_th='$fname_th',
lname_th='$lname_th',nname='$nname',position='$position',email='$email',password='$password',
mobile='$mobile',phone='$phone',acc_kbank='$acc_kbank',acc_uob='$acc_uob',possibility='$possibility',
status='$status',identity='$identity',social='$social',

an_no='$an_no',an_moo='$an_moo',an_soi='$an_soi',an_road='$an_road',an_tumbon='$an_tumbon',an_amphoe='$an_amphoe',
an_province='$an_province',an_postcode='$an_postcode',ah_no='$ah_no',ah_moo='$ah_moo',ah_soi='$ah_soi',
ah_road='$ah_road',ah_tumbon='$ah_tumbon',ah_amphoe='$ah_amphoe',ah_province='$ah_province',ah_postcode='$ah_postcode',

graduation='$graduation',birthday='$birthday',sex='$sex',weight='$weight',height='$height',
size='$size',status2='$status2',nationality='$nationality',religion='$religion',workday='$workday',
other='$other',
usr_update='$usr_update',companyId='$company'

WHERE id='$id' ";

if ($mysqli->query($sql) === TRUE) {
	header("Location: owner-edit.php");
} else {
   // header("Location: user-edit.php?err=1&&id=".$id);
}

$mysqli->close();