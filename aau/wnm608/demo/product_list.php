<?php

// include require include_once require_once
require_once "db_connect.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/grid.css">
<link rel="stylesheet" href="css/theme.css">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/interactivity.js"></script>
</head>
<body>

<?php include "parts/header.html" ?>
<div class="product-container">
	<div class="container">
		<!-- <div class="card"> -->
			<div class="grid">
				<div class="row gutters">
		<?php
		$query_string = "
			SELECT * FROM products
		";

		$result = $conn->query($query_string);

		if($conn->errno) {

			die($conn->error);
			console_log($conn->error);
		}

		while($row = $result->fetch_object()) {
			// LOOPED TEMPLATE
			?>
			<div class="col-sm-6 col-md-3">
				<div class="product">
					<img src="<?= $row->main_image ?>" alt="" class="media-image">
					<div class="product-description"><button class="centered-child js-addtocart">Add To Cart</button></div>
				</div>
				<div class="product-price">
					<a href=<?= $row->url ?><?= $row->name ?></br><span><?= $row->price ?></span></a>
				</div>
			</div>
			<?php
			// END LOOPED TEMPLATE
		}
		?>
				</div>
			</div>
		<!-- </div> -->
	</div>
</div>
<?php include "parts/footer.html" ?>
</body>
</html>
