<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Interactions</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/theme.css">

		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/interactivity.js"></script>
	</head>
	<body>

    <?php include "parts/header.html" ?>
		<div class="grid">
				<div class="row gutters">
		<div class="col-sm-12 col-md-6">
			<h3><span><a href="home.html">HOME</a> > <a href="product.html">SHOP</a> > </span>
			<span>CLIFF</span></h3>
		</div>

		<div class="grid">
			<div class="row gutters">
				<div class="col-sm-4"><img src="img/2.png" alt="" class="media-image"></div>
				<div class="col-sm-6 container card">
				   <p>Coastline</P>
						<p>My focus is to create a series of representational landscape paintings depicting the ocean,
							the bay, beaches, cliffs and bridges along the California coastline.
							When I first arrived in San Francisco, I was very excited.
							This is a city that is surrounded by the sea on three sides,
							which is so different from my hometown, an inland city.
							Later I had a trip along the California State Route 1. </p>

			        <P>Size: 16 X 12 X 0.8</P>
			        <p>Year: 2016</p>
			        <p>Material: oil on canvas</p>
							<p class="price">
								<span>500</span> USD
							</p>
							<div class="input">
							<button class="js-addtocart">Add To Cart</button>
							</div>
				</div>
			</div>
		</div>
    <?php include "parts/footer.html" ?>
	</body>
</html>
