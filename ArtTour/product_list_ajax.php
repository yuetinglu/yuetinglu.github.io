<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/head.html" ?>
</head>

<script type="text/javascript">
	console.log(location.search)
	getProductList(
		location.search!="" ?
		location.search.substr(1) :
		'',
		showProductList
	)
</script>
	<?php include "parts/header.html" ?>

<body onLoad="setCartBadge()">
	<div class="topnav">
		<div class="grid">
			<div class="row gutters">
				
				<div class="dropdown col-sm-2 col-md-1">
				  <button class="dropbtn">FILTERS</button>
				  <div class="dropdown-content">
					<button class="js-getall">All</button>
					<button class="js-filter" data-filter="category" data-value="Cliff">Cliff</button>
					<button class="js-filter" data-filter="category" data-value="Beach">Beach</button>
					<button class="js-filter" data-filter="category" data-value="Sea">Sea</button>
				  </div>
				</div>
				<div class="dropdown col-sm-2 col-md-1">
					  <button class="dropbtn">SORTS</button>
					  <div class="dropdown-content">
						<button class="js-orderby" data-orderby="price" data-direction="DESC">Highest to Lowest</button>
						<button class="js-orderby" data-orderby="price" data-direction="ASC">Lowest to Highest</button>
						<button class="js-orderby" data-orderby="data_create" data-direction="DESC">Newest</button>
						<button class="js-orderby" data-orderby="data_create" data-direction="ASC">Oldest</button>
					  </div>
				</div>	
				<div class="search-container col-sm-7 col-md-4">
					<form id="main-search">
						<input type="text" class="form-search" name="main-search-input" placeholder="searching arts...">
			  			<button type="submit"><i class="fa fa-search" value="search"></i></button>
					</form>		
				</div>
				<div class="func"> 
					<button> <a href="add_new_product.php"> add new</a>  </button>
				</div>	
				<div class="func"> 
					<button> <a href="delete.php"> delete product </a></button>
				</div>	
				<div class="product-list"></div>				
			</div>			
		</div>
	</div>

</body>
<?php include "parts/footer.html" ?>
</html>