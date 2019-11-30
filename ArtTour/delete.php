<?php

include "db_connect.php";

$query_string = "
			DELETE FROM products
			WHERE name = 'Muir Beach'
		";
$result = $conn->query($query_string);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	You successfully deleted a new product!
	<div>
		<a href="product_list_ajax.php?v=1.2">Back to List</a>
	</div>

	</form action=""
		<input type="text" value="Muir Beach2">
	</from>
</body>
</html>