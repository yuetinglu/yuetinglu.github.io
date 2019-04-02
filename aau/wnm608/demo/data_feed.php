<?php

include_once "lib/php/print_o.php";
include_once "db_connect.php";



function likeGroup($where,$like) {
	$result = " WHERE ";
	$arr = explode(",",$where);
	for($i=0; $i<count($arr); $i++) {
		if($i) $result .= " OR ";
		$result .= " $arr[$i] LIKE '%$like%' ";
	}
	return $result;
}




$wherewhat_string = isset($_GET['where']) && isset($_GET['what']) ?
	" WHERE {$_GET['where']} = '{$_GET['what']}' " :
	"";
$wherelike_string = isset($_GET['where']) && isset($_GET['like']) ?
	likeGroup($_GET['where'],$_GET['like']) :
	"";
$orderby_string = isset($_GET['orderby']) && isset($_GET['direction']) ?
	" ORDER BY {$_GET['orderby']} {$_GET['direction']}" :
	" ORDER BY date_create DESC ";
$limit_string = isset($_GET['limit']) ?
	" LIMIT {$_GET['limit']}" :
	" LIMIT 12 ";



$query_string = "SELECT * FROM products
	$wherewhat_string
	$wherelike_string
	$orderby_string
	$limit_string
	";




$result = $conn->query($query_string);
if($conn->errno) die($conn->error);

$output = array();

while($row = $result->fetch_object()) {
	// array_push
	$output[] = $row;
}

die(json_encode($output));