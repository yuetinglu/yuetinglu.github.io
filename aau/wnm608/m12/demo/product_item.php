<?php

// include require include_once require_once
require_once "db_connect.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/grid.css">
<link rel="stylesheet" href="css/theme.css">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

	<?php include "parts/header.html" ?>

	<div class="container">
		<?php

		$query_string = "
			SELECT * FROM products
			WHERE id = '{$_GET['id']}'
		";

		$result = $conn->query($query_string);

		if($conn->errno) die($conn->error);

		if(!$result->num_rows) {
			echo "<div class='col-sm-12'>No results</div>";
		}

		while($row = $result->fetch_object()) {

			$eximages = explode(",", $row->other_images);

			print_o($row);
			print_o($eximages);

			// LOOPED TEMPLATE
			?>

<div class="grid">
	<div class="row gutters">
		<div class="col-sm-12 col-md-5">

			<div class="card">
				<a href="product_item.php?id=<?= $row->id ?>" class="productlist-item">
					<div class="productlist-image">
						<img src="<?= $row->main_image ?>" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-12 col-md-7">
			<h2><?= $row->title ?></h2>
			<div>$<?= $row->price ?></div>
			<div><?= $row->description ?></div>
		</div>
	</div>
</div>
			<?php
			// END LOOPED TEMPLATE

		}

		?>		
	</div>
	
</body>
</html>