<?php

include "lib/php/print_o.php";

$filename = "data/learning_json.json";
$file = file_get_contents($filename);
$data = json_decode($file);

// print_o($data);

// for($i=0;$i<count($data->notes);$i++) {
// 	echo "<div>{$data->notes[$i]}</div>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User List</title>
</head>
<body>
	<header>
		<h1>User List</h1>
	</header>

	<?php

	for($i=0;$i<count($data->notes);$i++) {
		echo "<div>{$data->notes[$i]}</div>";
	}

	?>

	<hr>

	<?php

	echo "<ul>";
	foreach($data->users as $user) {
		echo "
		<li>
			$user->name
		</li>
		";
	}
	echo "</ul>";

	?>

</body>
</html>