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
    <script src="js/Slideshow.js"></script>
</head>
<body>

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
                    </a>
                    </li>
					<li><a href="about.php">About</a></li>
				 	
				 	<!-- from w3schools-->
				    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">


				</ul>
			</nav>
		</div>
		</header>
		<body>

			
	<div class="col-sm-12">
		<div class="view-window" style="background-image:url('img/DSC02218.JPG')">
			<!-- from images.google.com -->
		<img class="centered-child" src="img/Viewfinder.png" alt="">
	</div>
	
     

		
		<div>
			<h2>What's New!</h2>
		</div>
	<div class="container product-container">
		<!-- .grid>.row.gutters>.col-sm-6.col-md-3*4>.product>img.media-image[src=https://via.placeholder.com/500]+.product-description>button{Add To Cart} -->
		<div class="grid">
			<div class="row gutters">
				<div class="col-sm-6 col-md-3">
					<a href="product-detail.html">
					<div class="product">
					    <img src="img/2.png" alt="" class="media-image">
					</div>
				    </a>
				</div>

				<div class="col-sm-6 col-md-3">
					<div class="product">
						<img src="img/6.png" alt="" class="media-image">
						
					</div>
					
				</div>
				<div class="col-sm-6 col-md-3">
				<a href="product-detail.html">
					<div class="product">
						<img src="img/7.png" alt="" class="media-image">
						
					</div>
				</a>
					
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="product">
						<img src="img/8.png" alt="" class="media-image">
				</div>
			    </div>
			</div>
		</div>

		<footer class="footer">
        All right reserve. content: Yueting Lu. Email: contact@yuetinglu.com
    </footer>
  </body>

	
</html>
					
						
					
						

	
	
	