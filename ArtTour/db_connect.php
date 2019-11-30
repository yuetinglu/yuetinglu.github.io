<?php
	
function console_log( $data ){
  // echo '<script>';
  // echo 'console.log('. json_encode( $data ) .')';
  // echo '</script>';
}


//Your host should be "localhost"
$db_host = "www.yuetinglu.com";
$user_name = "yueting1_fine_art";
$user_password = "luyueting1115";
$db_name = "yuetingl_WNM608";

$conn = new mysqli(
	$db_host,
	$user_name,
	$user_password,
	$db_name
);

if($conn->connect_errno)
	die($conn->connect_error);
// console_log("MySql connected");
// header('Content-Type: text/html; charset=UTF-8');
// $conn->set_charset('utf8');


// $conn = new mysqli ("localhost", "yuetingl_wnm608", "luyueting1115")
// or die ('I cannot connect to the database.');
// mysql_select_db ("yuetingl_WNM608");
?>
