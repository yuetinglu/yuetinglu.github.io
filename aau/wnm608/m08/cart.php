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


<header>

	<div class="container">
		<div class="row flex-center">
			<div class="col-sm-12 col-md-6">
				<h1>California Coastline</h1>
			</div>
			<!-- nav.nav>ul>li*3>a[href=#]>{Link $} -->
			<nav class="nav col-sm-12 col-md-6" style="text-align:center">
				<ul class="flex-parent" style="display:inline-flex">
					<li><a href="home.php">Home</a></li>
					<li><a href="product.php">Shop</a></li>
					<li><a href="cart.php">
						</hdear>
						<header>
			            <div class="container flex-parent">
				        <div class="flex-child"></div>
				        <div class="flex-none">
					    <div class="cart-value">
						Cart: <span>0</span>
					</div>
				</div>
			</div>
		</header>
					<li><a href="about.php">About</a></li>
					<!-- from w3schools-->
					<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
				</ul>
		</nav>
	</div>
</header>

	<body>

				<div class="row gutters">
		<div class="col-sm-12 col-md-6">
			<h3><span><a href="home.php">HOME</a> > <a href="product.php">SHOP</a> > </span>
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

<footer class="footer">
        All right reserve. content: Yueting Lu. Email: contact@yuetinglu.com
    </footer>
</body>
</html>
