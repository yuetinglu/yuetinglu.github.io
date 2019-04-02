<?php

include "lib/php/print_o.php";

$filename = "data/learning_json.json";
$file = file_get_contents($filename);
$data = json_decode($file);

//file_put_contents, json_encode

// print_o($data);

// for($i=0;$i<count($data->notes);$i++) {
// 	echo "<div>{$data->notes[$i]}</div>";
// }



// Define a new function
// The values passed into a function can be referred to as its arguments or parameters.
// These arguments can be named whatever we want.
// Arguments have a local scope
function showUser($user){
	console_log($user->type);
	console_log($user->email);
	?>
	<div>
		<form action="" method="post" enctype="multipart/form-data"  style="text-align:center">
			name:<br>
			<input type="text" name="name" value=<?= $user->name ?>>
			<br>
			user-type:<br>
			<input type="text" name="type" value=<?= $user->type ?>>
			<br>
			email:<br>
			<input type="text" name="email" value=<?= $user->email ?>>
			<br><br>
			<input type="submit" value="Submit">
		</form>
	</div>

	<?php
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$jsonContents = file_get_contents($filename);
	$name = $_POST['name'];
	$type = $_POST['type'];
	$email = $_POST['email'];
   $jsonModify = json_decode($jsonContents, true);
	foreach($jsonModify['users'] as $i=>$user) {
		if (strcmp(substr($user['name'],-3), substr($name,-3)) == 0) {
			$jsonModify['users'][$i]['type'] = $type;
			$jsonModify['users'][$i]['email'] = $email;
			console_log($jsonModify['users'][$i]['type']);
		}
	}
	$newJsonString = json_encode($jsonModify);
	console_log($newJsonString);
	file_put_contents($filename, $newJsonString);
	console_log($GLOBALS['data']);
}
?>

<?php
	function console_log( $data ){
	  echo '<script>';
	  echo 'console.log('. json_encode( $data ) .')';
	  echo '</script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User List</title>

	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/theme.css">
</head>
<body>
	<header>
		<h1 class="container">User List</h1>
	</header>
<!-- <nav class="nav col-sm-12 col-md-6" style="text-align:center"> </nav>
 -->
  <div class="container">

	<?php
	if(isset($_GET['id'])) {
		$data = json_decode($file);
		showUser($data->users[$_GET['id']]);

		echo "
		<div style='margin-top:1em' >
			<a href='user_admin.php'>Back to List</a>
		</div>";

	} else {
		$data = json_decode($file);
		echo "<ul class='collapsed'>";
		foreach($data->users as $i=>$user) {
			echo "
			<li class='flex-parent user-list-item'>
				<div class='flex-child'>$user->name</div>
				<div class='flex-none'>[<a href='?id=$i'>visit</a>]</div>
			</li>
			";
		}
		echo "</ul>";

	}

	?>

	</div>
</div>
</body>
</html>
