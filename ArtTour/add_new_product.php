<!-- anker butten -->
<?php 

include "db_connect.php";

// The fields do no need to match the order in the database, but the values need to match the order of the fields.

// That's--> That\'s

$query_string = "INSERT INTO `products`
(
	`id`,
	`data_create`,
	`data_modify`,
	`main_image`,
	`other_images`,
	`category`,
	`price`,
	`description`,
	`name`,
	`url`,
	`email`
)
VALUES
(
	9,
	NOW(),
	NOW(),
	'img/9.png',
	' ',
	'Beach',
	900,
	'8 X 10, Oil painting on canvas',
	'Muir Beach',
	'This project presents a series of landscape paintings that depict the California coastline. This idea was inspired when I took a trip along California State Route 1. I focused on an expressive realistic representation of the coast.',
	'Muir Beach.php',
	' '
)";

$result = $conn->query($query_string);

if($conn->errno) die($conn->error);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	You successfully added a new product!
	<div>
		<a href="product_list_ajax.php?v=1.1">Back to List</a>
	</div>

	</form action=""
		<input type="text" value="Muir Beach2">
	</from>
</body>
</html>