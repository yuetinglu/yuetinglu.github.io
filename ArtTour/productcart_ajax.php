<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Cart</title>
	<?php include "parts/head.html" ?>

<script>
$(function(){
	let cartitems = getCartItems();
	console.log(cartitems);
	getProductList(
		cartitems?
		"where=id&in="+cartitems:
		'where=id&what=none',
		showCartList)
})
</script>
<style>
body {
	background-color:white;
}
</style>
</head>
<body onLoad="setCartBadge()">

	<?php include "parts/header.html" ?>
	<div class="container-cart">
	<div class="cart-list"></div>
	</div>	
</body>
<?php include "parts/footer.html" ?>

</html>