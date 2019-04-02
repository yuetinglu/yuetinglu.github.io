
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

<?php include "parts/header.html" ?>

	<body>

				<div class="row gutters">
		<div class="col-sm-12 col-md-6">
			<h3><span><a href="home.html">HOME</a> > <a href="product.html">SHOP</a> > </span>
			<span>CART</span></h3>
		</div>
	<div class="cart-content container-cart">


	<div class="cart-content container flex-parent">
		<div class="flex-child"><img src="img/1.png" alt="" class="small-img">
			<a href="product-detail.html">
			  <div class="cart-item-name">Cliff <br/><br/>$500</div>
		    </a>
		</div>
		<div class="flex-child cart-item-name">
			<input type="number" value="1" class="change-amount" min="0" max="10" style="margin-right:2.5em">
			<span class="hidden product-price">500</span>
			$<span class="total">500</span>
		</div>
	</div>

	<div class="container flex-parent">
		<div class="flex-child"><img src="img/3.png" alt="" class="small-img">
			<a href="product-detail.html">
			  <div class="cart-item-name">Cliff <br/><br/>$500</div>
		    </a>
		</div>
		<div class="flex-child cart-item-name">
			<input type="number" value="1" class="change-amount" min="0" max="10" style="margin-right:2.5em">
			<span class="hidden product-price">500</span>
			$<span class="total">500</span>
		</div>
	</div>

	<div class="container flex-parent">
		<div class="flex-child"><img src="img/2.png" alt="" class="small-img">
			<a href="product-detail.html">
			 <div class="cart-item-name">Cliff <br/><br/>$500</div>
		    </a>
		</div>
		<div class="flex-child cart-item-name">
			<input type="number" value="1" class="change-amount" min="0" max="10" style="margin-right:2.5em">
			<span class="hidden product-price">500</span>
			$<span class="total">500</span>
		</div>
	</div>
	<hr/>

	<div class="container flex-parent">
			<div class="flex-child"></div>
			<div class="flex-none">
				        <p>Tax：$135</p>
                        <p>Shipping：Free Shipping</p>
						<p>Total： $<span class="total-total">1500</span></br></p>
			</div>
	</div>
</div>
</body>
<?php include "parts/footer.html" ?>
</html>
