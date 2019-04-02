<?php

include "lib/php/print_o.php";

$filename = "data/learning_json.json";
$file = file_get_contents($filename);
$data = json_decode($file);

// $_POST, file_put_contents, json_encode

// print_o($data);

// for($i=0;$i<count($data->notes);$i++) {
// 	echo "<div>{$data->notes[$i]}</div>";
// }


$empty_user = (object)array(
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>array()
);




// LOGIC
if(isset($_GET['action'])) {
	if($_GET['action']=="update") {
		$data->users[$_GET['id']]->name = $_POST['user-name'];
		$data->users[$_GET['id']]->type = $_POST['user-type'];
		$data->users[$_GET['id']]->email = $_POST['user-email'];
		$data->users[$_GET['id']]->classes = explode("," , $_POST['user-classes']);

		file_put_contents($filename, json_encode($data));

		header("location:?id=".$_GET['id']);
	}
	if($_GET['action']=="create") {
		$empty_user->name = $_POST['user-name'];
		$empty_user->type = $_POST['user-type'];
		$empty_user->email = $_POST['user-email'];
		$empty_user->classes = explode("," , $_POST['user-classes']);

		$id = count($data->users);

		// array_push($data->users, $empty_user);
		$data->users[] = $empty_user;

		file_put_contents($filename, json_encode($data));

		header("location:?id=$id");
	}
	if($_GET['action']=="delete") {
		array_splice($data->users, $_GET['id'], 1);
		file_put_contents($filename, json_encode($data));

		header("location:user_admin.php");
	}
}








// Define a new function
// The values passed into a function can be referred to as its arguments or parameters.
// These arguments can be named whatever we want.
// Arguments have a local scope
function showUser($user){

	// print_o($_GET);
	// print_o($_POST);

	?>

	<div class="flex-parent" style="margin:1em 0">
		<div class="flex-child"></div>
		<div class="flex-none">
			<a href="?id=<?= $_GET['id'] ?>&action=delete">delete</a>
		</div>
	</div>

	<div class="card">
		<form action="?id=<?= $_GET['id'] ?>&action=<?=
			$_GET['id']=="new" ? "create" : "update"
		?>" method="post" class="user">
			<div class="form-control">
				<label class="form-label" for="user-name">Name</label>
				<input class="form-input" type="text" value="<?= $user->name ?>" name="user-name" id="user-name">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-type">Type</label>
				<input class="form-input" type="text" value="<?= $user->type ?>" name="user-type" id="user-type">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-email">Email</label>
				<input class="form-input" type="text" value="<?= $user->email ?>" name="user-email" id="user-email">
			</div>
			<div class="form-control">
				<label class="form-label" for="user-classes">Classes</label>
				<input class="form-input" type="text" value="<?= implode(",",$user->classes) ?>" name="user-classes" id="user-classes">
			</div>
			<div class="form-control flex-parent flex-center">
				<div class="flex-child" style="padding:0 1em;width:50%">
					<a href="user_admin.php">Back to List</a>
				</div>
				<input class="form-button" type="submit">
			</div>
		</form>
	</div>

	<?php

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

	<div class="container">

	<?php

	if(isset($_GET['id'])) {

		// TERNARY - comparison?iftrue:iffalse

		showUser(
			$_GET['id']=="new" ?
			$empty_user :
			$data->users[$_GET['id']]
		);

	} else {

		?>
		<nav class="nav">
			<ul>
				<li><a href="?id=new">Add New User</a></li>
			</ul>
		</nav>
		<?php

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

</body>
</html>