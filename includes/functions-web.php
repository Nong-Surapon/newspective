<?php
function newsActivities(){
	global $mysqli;
	while($result = $mysqli->query("SELECT id,en_title,en_desc,en_detail,n_group FROM w_news order by id desc limit 9 ")) {
		return $result;
	}
	$result->close();    
}
function newsActivities_All(){
	global $mysqli;
	while($result = $mysqli->query("SELECT id,en_title,en_desc,en_detail,n_group FROM w_news order by id desc ")) {
		return $result;
	}
	$result->close();    
}
function newsActivitiesFetch($id){
	global $mysqli;
	if($result = $mysqli->query("SELECT id,en_title,en_desc,en_detail,n_group FROM w_news where id = '$id' ")) {
		if ($row = $result->fetch_assoc()) {
			return $row;
		}
		return $result;
	}
}

function newsFile($news_id){
	global $mysqli;
	if($result = $mysqli->query("SELECT * FROM w_news_file 
		where news_id = '$news_id' ")) {
		return $result;
}
}

function newsFileFilst($news_id){
    global $mysqli;
    if($result = $mysqli->query("SELECT name FROM w_news_file 
            where news_id = '$news_id' and id =  (select max(id) from w_news_file where news_id = '$news_id') ")){
            if ($row = $result->fetch_assoc()) {
                    return $row["name"];
            }
    }
}

function portfolioN(){
    global $mysqli;
    if($result = $mysqli->query("SELECT a.*, b.name as fileNme FROM w_na_portfolio a, w_na_portfolio_file b
        where a.id = b.na_portfolio_id
        and b.id = (select min(id) from w_na_portfolio_file where na_portfolio_id = a.id and company = 'Newage') 
        ORDER BY a.id DESC limit 9 ")){
        return $result;
    }
    $result->close();
}

function portfolioA(){
    global $mysqli;
    if($result = $mysqli->query("SELECT a.*, b.name as fileNme FROM w_na_portfolio a, w_na_portfolio_file b
        where a.id = b.na_portfolio_id
        and b.id = (select min(id) from w_na_portfolio_file where na_portfolio_id = a.id and company = 'Address') 
        ORDER BY a.id DESC limit 9 ")){
        return $result;
    }
    $result->close();
}
function portfolioA_All($company){
    global $mysqli;
    if($result = $mysqli->query("SELECT a.*, b.name as fileNme FROM w_na_portfolio a, w_na_portfolio_file b
        where a.id = b.na_portfolio_id
        and b.id = (select min(id) from w_na_portfolio_file where na_portfolio_id = a.id and company = '$company') 
        ORDER BY a.id DESC ")){
        return $result;
    }
    $result->close();
}

function portfolioQurery($id){
    global $mysqli;
    if($result = $mysqli->query("select * from w_na_portfolio where id = '$id' ")){
        if ($row = $result->fetch_assoc()) {
                return $row;
            }
    }
    $result->close();
    
}
function portfolioFile($id){
    global $mysqli;
    if($result = $mysqli->query("select * from w_na_portfolio_file where na_portfolio_id = '$id' ")){
        return $result;            
    }
    $result->close();
    
}

function portfolioLast($company){
    global $mysqli;
    if($result = $mysqli->query("
            select a.*,b.name  from w_na_portfolio a, w_na_portfolio_file b 
            where company = '$company'
            and a.id = b.na_portfolio_id
            and b.id = (select min(id) FROM w_na_portfolio_file where na_portfolio_id = a.id)
            ORDER BY id DESC LIMIT 5 "
            )){
        return $result;            
    }
    $result->close();
    
}

function newsQuery($search,$selCompany){
    global $mysqli;
    if($result = $mysqli->query("SELECT * FROM w_na_portfolio where en_title like '%$search%' and company like '%$selCompany%'  order by id desc")){
        return $result;
    }
}

function newsPic($id){
    global $mysqli;
    if($result = $mysqli->query("select a.*,b.name  from w_na_portfolio a, w_na_portfolio_file b 
        where 
        a.id = b.na_portfolio_id
        and b.id = (select min(id) FROM w_na_portfolio_file where na_portfolio_id = a.id)
        and a.id = '$id'
        ORDER BY id DESC LIMIT 5"))
            {
         if ($row = $result->fetch_assoc()) {
                return $row["name"];
            }
    }
}

function newsEidt($id){
      global $mysqli;
    if($result = $mysqli->query("select * from w_na_portfolio where id ='$id' ")){
        if ($row = $result->fetch_assoc()) {
                return $row;
            }
    }
}



function porfolioFile($id){
    global $mysqli;
    if($result = $mysqli->query("SELECT *,(select count(id) from w_na_portfolio_file where na_portfolio_id ='$id') as countId  FROM w_na_portfolio_file where na_portfolio_id = '$id' ")){
        return $result;
    }
}

function newsAll($search,$n_group){
    global $mysqli;
    $sql = "SELECT * FROM w_news where en_title like '%$search%' ";
    if($n_group!=""){
    $sql .= "and n_group = '$n_group' ";
    }
    $sql .= "order by id desc";
    
    if($result = $mysqli->query($sql)){
        return $result;
    }
}

function newsPic2($id){
    global $mysqli;
    if($result = $mysqli->query("select a.*,b.name  from w_news a, w_news_file b 
        where 
        a.id = b.news_id
        and b.id = (select min(id) FROM w_news_file where news_id = a.id)
        and a.id = '$id'
        ORDER BY id DESC LIMIT 5"))
            {
         if ($row = $result->fetch_assoc()) {
                return $row["name"];
            }
    }
}

function newsQurery($id){
    global $mysqli;
    if($result = $mysqli->query("select * from w_news where id = '$id' ")){
        if ($row = $result->fetch_assoc()) {
                return $row;
            }
    }
    $result->close();
    
}

function newsFileID($id){
    global $mysqli;
    if($result = $mysqli->query("select * from w_news_file where news_id = '$id' ")){
        return $result;            
    }
    $result->close();
    
}

function newsLast(){
    global $mysqli;
    if($result = $mysqli->query("
            select a.*,b.name  from w_news a, w_news_file b 
            where a.id = b.news_id
            and b.id = (select min(id) FROM w_news_file where news_id = a.id)
            ORDER BY id DESC LIMIT 5 "
            )){
        return $result;            
    }
    $result->close();
    
}

function newsEidtAll($id){
      global $mysqli;
    if($result = $mysqli->query("select * from w_news where id ='$id' ")){
        if ($row = $result->fetch_assoc()) {
                return $row;
            }
    }
}

function newsFileByID($id){
    global $mysqli;
    if($result = $mysqli->query("SELECT *,(select count(id) from w_news_file where news_id ='$id') as countId FROM w_news_file where news_id ='$id' ")){
        return $result;
    }
}