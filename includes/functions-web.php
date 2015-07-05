<?php
function newsActivities(){
	global $mysqli;
	while($result = $mysqli->query("SELECT id,en_title,en_desc,en_detail,n_group FROM w_news order by id desc limit 2 ")) {
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
    if($result = $mysqli->query("SELECT a.*, b.id,b.name as fileNme FROM w_na_portfolio a, w_na_portfolio_file b
        where a.id = b.na_portfolio_id
        and b.id = (select min(id) from w_na_portfolio_file where na_portfolio_id = a.id and company = 'Newage') ")){
        return $result;
    }
    $result->close();
}

function portfolioA(){
    global $mysqli;
    if($result = $mysqli->query("SELECT a.*, b.id,b.name as fileNme FROM w_na_portfolio a, w_na_portfolio_file b
        where a.id = b.na_portfolio_id
        and b.id = (select min(id) from w_na_portfolio_file where na_portfolio_id = a.id and company = 'Address') ")){
        return $result;
    }
    $result->close();
}