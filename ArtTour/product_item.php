<?php

// include require include_once require_once
require_once "db_connect.php";
include "lib/php/print_o.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>
	<?php include "parts/head.html" ?>
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

			// print_o($row);
			// print_o($eximages);

			// LOOPED TEMPLATE
			?>


		<div class="grid">
			<div class="row gutters">
				<div class="col-sm-4"><img src="<?= $row->main_image ?>" alt="" class="media-image"></div>
				<div class="col-sm-6 container card">
					<h2><?= $row->name?></h2>
					<body><?= $row->description ?></body>
					<hr>
					<body><?= $row->brief ?></body>
					<hr>
					<h3>$<?= $row->price ?></h3>
					<hr>
					<div class="select-parent">
						<select id="cart-amount" class="form-select">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
						<br>
						<button class="btn js-addtocart" data-id="<?= $row->id ?>">Add To Cart</button>	
					</div>			
				</div>
				</div>
			</div>
		</div>


<!-- 	<div class="grid">
		<div class="row gutters">
			<div class="col-sm-12 col-md-7 product-mainimage">		
						<img src="<?= $row->main_image ?>" alt="">						
						<img src="<?= $row->main_image ?>" class='product-thumb' alt="">
			</div>	
			<div class="col-sm-12 col-md-5 product-mainimage">
					<h2><?= $row->name?></h2>
					<body><?= $row->description ?></body>
					<hr>
					<body><?= $row->brief ?></body>
					<hr>
					<h3>$<?= $row->price ?></h3>
					<hr>
					<div class="select-parent">
						<select id="cart-amount" class="form-select">
							<option>0</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
						<br>
						<button class="btn js-addtocart" data-id="<?= $row->id ?>">Add To Cart</button>	
					</div>			
			</div>
		</div>
	</div> -->
			<?php
			// END LOOPED TEMPLATE

		}

		?>		
	</div>
	
</body>

<?php include "parts/footer.html" ?>
</html>