<?php
function queryUser($uid){
	global $mysqli;
	if($result = $mysqli->query("SELECT * FROM tb_users where uid = '$uid' ")) {

        while ($row = $result->fetch_assoc()) {
            return $row;
        }

        $result->close();    

    }
}

function queryUserID($id){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_users where id = '$id' ")) {

        while ($row = $result->fetch_assoc()) {
            return $row;
        }

        $result->close();    

    }
}

function queryUserUID($uid){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_users where uid = '$uid' ")) {

        while ($row = $result->fetch_assoc()) {
            return $row;
        }

        $result->close();    

    }
}

function queryPosit($id){
	global $mysqli;
	if($result = $mysqli->query("SELECT * FROM position where id = '$id' ")) {

        while ($row = $result->fetch_assoc()) {
            return $row;
        }

        $result->close();    

    }
}

function whilePositAll(){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM position")) {
        
            return $result;
        }
        $result->close();    
    
}

function whilePosit(){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM position where status = 1 ")) {
        
            return $result;
        }
        $result->close();    
    
}

function whileUsers(){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_users order by fname_en")) {
        
            return $result;
        }
        $result->close();       
}

function newUid(){
    global $mysqli;
    if($result = $mysqli->query("SELECT MAX(uid)+1 as newUid FROM tb_users ")) {
        
           if($row = $result->fetch_assoc()) {
               $newUid = $row['newUid'];
            }

            echo $newUid;
        }
        $result->close();       
}

function whileProject(){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM project order by name")) {
        
            return $result;
        }
        $result->close();       
}

function whileCompany(){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_company order by name")) {
        
            return $result;
        }
        $result->close();       
}

function queryCompany($id){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_company where id = '$id' ")) {
        
           if ($row = $result->fetch_assoc()) {
            return $row["name"];
        }
        }
        $result->close();       
}

function whileSalary($uid){
    global $mysqli;
    if($result = $mysqli->query("SELECT salary,seq,dte FROM tb_usr_salary where usr_uid = '$uid' order by seq ")) {
        
        return $result;
    }
    $result->close();       
}

function dteSalary($uid){
    global $mysqli;
    if($result = $mysqli->query("SELECT dte FROM tb_usr_salary where usr_uid = '$uid' and seq = (select max(seq) from tb_usr_salary where usr_uid = '$uid')")) {
        if ($row = $result->fetch_assoc()) {
            return $row["dte"];
        }
    }
    $result->close();       
}

function dteNote($uid){
    global $mysqli;
    if($result = $mysqli->query("SELECT dte FROM tb_usr_note where usr_uid = '$uid' and seq = (select max(seq) from tb_usr_note where usr_uid = '$uid')")) {
        if ($row = $result->fetch_assoc()) {
            return $row["dte"];
        }
    }
    $result->close();       
}

function whileNote($uid){
    global $mysqli;
    if($result = $mysqli->query("SELECT note,seq,dte FROM tb_usr_note where usr_uid = '$uid' order by seq")) {
        
        return $result;
    }
    $result->close();       
}

function usrSer($uid){
    global $mysqli;
    if($result = $mysqli->query("select fname_th, lname_th from tb_users where uid='$uid' ")){
        if ($row = $result->fetch_assoc()) {
            return $row["fname_th"]." ".$row["lname_th"];
        }
        $result->close();
    }
}

function jobCodeSts($sts){
    global $mysqli;
    if($result=$mysqli->query("select name from tb_jobcode_sts where status = '$sts' ")){
        if($row = $result->fetch_assoc()){
            return $row["name"];
        }
    }
}

function maxPjcode(){
    global $mysqli;
    if($result=$mysqli->query("select max(pj_code) as pj_code from tb_project")){
        if($row = $result->fetch_assoc()){
            return $row["pj_code"];
        }
    }
    $result->close();
}

function queryProject($pj_code){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_project where pj_code = '$pj_code' ")) {  
        if($row = $result->fetch_assoc()) {
            return $row;
        }
    }
    $result->close();
}

function queryPjDtl($pj_code){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM tb_project_detail where pj_code = '$pj_code' order by seq")) {
        return $result;
        
    }
    $result->close();
}

function mailAdmin(){
    global $mysqli;
    $mail = "";
    if($result = $mysqli->query("select email from tb_users where possibility = 'admin' and status = 1")) {
        while($row = $result->fetch_assoc()){
            $mail .= $row["email"].",";
            
        }
        $rest = substr($mail, 0, -1); 
        return $rest;
    }
        
    $result->close();
}
function pjReject($pj_code){
    global $mysqli;
    if($result = $mysqli->query("select detail from tb_project_reject where pj_code = '$pj_code' ")) {
        if($row = $result->fetch_assoc()){
           return $row["detail"];
        }
    } 
    $result->close();
}

function flnameEn($uid){
    global $mysqli;
    if($result = $mysqli->query("select fname_en, lname_en from tb_users where uid = '$uid' ")) {
        if($row = $result->fetch_assoc()){
           $fname = $row["fname_en"];
           $lname = $row["lname_en"];
           
           $fname = ucfirst(strtolower($fname));
           $lname = ucfirst(strtolower($lname));
        }
        return $fname." ".$lname;
    } 
    $result->close();
}

function jobCodeSts2($status){
    global $mysqli;
    if($result = $mysqli->query("SELECT name2 FROM tb_jobcode_sts where status = '$status' ")) {
        if($row = $result->fetch_assoc()){
            $name2 = $row["name2"];
        }
        return $name2;
        
    }
    $result->close();
}


function accountSub($number){
   # 012-3-45678-9
    $rest1 = substr($number, 0, 3);
    $rest2 = substr($number, 3, 1);
    $rest3 = substr($number, 4, 5);
    $rest4 = substr($number, 9, 1);
    
    $rest = $rest1."-".$rest2."-".$rest3."-".$rest4;
    
    return $rest;
}

function mobileSub($number){

    $rest1 = substr($number, 0, 3);
    $rest2 = substr($number, 3, 3);
    $rest3 = substr($number, 7, 4);
    
    $rest = $rest1."-".$rest2."-".$rest3;
    
    return $rest;
}

function Thai_date($date)
  {
    $date = explode('-',$date);
    $year = $date["0"];
    $month = $date["1"];
    $day = $date["2"]; 
            
	if($day <10){
	   $day = substr($day,1,1);
	}
	
    $thMonth = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน",     
	                            "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	if($month<10){
	   $month = substr($month,1,1);
	}

    $year +=543;
	
	return $day."&nbsp;".$thMonth[$month-1]."&nbsp;".$year;  
 }



