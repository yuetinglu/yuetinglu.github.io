<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<?php include "parts/head.html" ?>
</head>
<?php include "parts/header.html" ?>

<body onLoad="setCartBadge()">			
	<div class="view-window" style="background-image:url('img/header.png')"></div>		
	<div>
		<h2>What's New!</h2>
	</div>
	<div class="product-container">
		<!-- .grid>.row.gutters>.col-sm-6.col-md-3*4>.product>img.media-image[src=https://via.placeholder.com/500]+.product-description>button{Add To Cart} -->
		<div class="grid">
			<div class="row gutters">
				<div class="col-sm-6 col-md-3 col-lg-3">
					<a href="product_item.php?id=6">
					<div class="product">
					    <img src="img/6.png" alt="" class="media-image">
					</div>
				    </a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<a href="product_item.php?id=7">
						<div class="product">
							<img src="img/7.png" alt="" class="media-image">	
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<a href="product_item.php?id=8">
						<div class="product">
							<img src="img/8.png" alt="" class="media-image">	
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-3 col-lg-3">
					<a href="product_item.php?id=3">
						<div class="product">
							<img src="img/3.png" alt="" class="media-image">	
						</div>
					</a>
				</div>
			</div>
		</div>
  </body>
<?php include "parts/footer.html" ?>

</html>