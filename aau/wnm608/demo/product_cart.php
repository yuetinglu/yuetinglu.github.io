<?php

// include require include_once require_once
require_once "db_connect.php";
include "lib/php/print_o.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Cart</title>
	<?php include "parts/head.html" ?>
</head>
<body>

	<?php include "parts/header.html" ?>

	<div class="container"><div class="card">
		<?php

		$query_string = "
			SELECT * FROM products
			WHERE id in (2,5,9)
		";

		$result = $conn->query($query_string);

		if($conn->errno) die($conn->error);

		if(!$result->num_rows) {
			echo "<div class='col-sm-12'>No results</div>";
		}

	?>
	<div class="table-handler">
	<table class="table">
		<thead>
			<tr>
				<th>Image</th>
				<th>Title</th>
				<th>Amount</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
	<?php

	$totaltotal = 0;

		while($row = $result->fetch_object()) {

			$amount = rand(1,4);
			$total = $amount * $row->price;
			$totaltotal += $total;

			// LOOPED TEMPLATE
			?>
			<tr>
				<td><img src="<?= $row->main_image ?>" class="cart-thumb"></td>
				<td><?= $row->title ?></td>
				<td><?= $amount ?></td>
				<td class="cart-number">$<?= number_format($row->price,2,".",",") ?></td>
				<td class="cart-number">$<?= number_format($total,2,".",",") ?></td>
			</tr>
			<?php
			// END LOOPED TEMPLATE

		}

		?>
		</tbody>
	</table>
	</div>
	<div class="flex-parent">
		<div class="flex-child"></div>
		<div class="flex-none" style="margin-right:1em">Total</div>
		<div class="flex-none">$<?= number_format($totaltotal,2,".",",") ?></div>

	</div>		
	</div>
	</div>
	
</body>
</html>