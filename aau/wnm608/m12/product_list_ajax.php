<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>


	<?php include "parts/head.html" ?>

<style>
.product {
	border:1px solid black;
	margin:1em;
	padding:1em;
}
</style>

<script>




function showProductList(arr) {
	console.log("arr = " + arr);
	var result = "";
	for(let i in arr) {
		result += `
				<div class="col-sm-6 col-md-3">
					<div class="product">
						<img src="${arr[i].main_image}" alt="" class="media-image">
						<div class="product-description"><button class="centered-child js-addtocart">Add To Cart</button></div>
					</div>
					<div class="product-price">
						<a href=${arr[i].url}</br>${arr[i].name}</br><span>${arr[i].price}</span></a>
					</div>
			</div>
		`;
	}
	$(".product-list").html(`
		<div class="card">
			<div class="grid">
				<div class="row gutters">
		${result}
				</div>
			</div>
		</div>
	`);
}

function getProductList(str) {
	console.log("getProductList str = " + str) 
	$.ajax({
		url:"data_feed.php?"+str,
		dataType:"json"
	})
	.done(showProductList)
	.fail(function( jqXHR, textStatus, errorThrown ) {
		console.log("Failed ajax query")
		console.log("jqXHR = " + jqXHR.responseText)
		console.log("textStatus = " + textStatus)
		console.log("errorThrown = " + errorThrown)
	})
	.always(console.log("Finsihed"))
	
}
// .fail()
// .always()






$(function(){ // document ready
	console.log(location.search)
	getProductList(
		location.search!="" ?
		location.search.substr(1) :
		''
		)



	$("#main-search").on("submit",function(e){
		e.preventDefault();

		console.dir(this)
		if($("#main-search .form-search").val().length>3) {
			getProductList("where=title,description&like="+$("#main-search .form-search").val())
		}
	})

	// FILTER API
	$(".js-filter").on("click",function(e){
		e.preventDefault();

		getProductList(`where=${$(this).data("filter")}&what=${$(this).data("value")}`)
	})
	// SORT API
	$(".js-orderby").on("click",function(e){
		e.preventDefault();

		console.log("honk")

		getProductList(`orderby=${$(this).data("orderby")}&direction=${$(this).data("direction")}`)
	})
	$(".js-getall").on("click",function(e){
		e.preventDefault();
		getProductList()
	})


})




	
</script>

</head>
<body>


	<?php include "parts/header.html" ?>

	<div class="container">
	<div class="top-search">
		<form id="main-search">
			<input type="search" class="form-search" name="main-search-input">
			<input type="submit" value="search">
		</form>
	</div>

	<div class="categories">

		<h2>FILTERS</h2>
		<button class="js-getall">All</button>
		<button class="js-filter" data-filter="category" data-value="fruit">Fruits</button>
		<button class="js-filter" data-filter="category" data-value="vegetable">Vegetables</button>
		<button class="js-filter" data-filter="price" data-value="5.00">5.00</button>

		<hr>

		<h2>SORTS</h2>
		<button class="js-orderby" data-orderby="price" data-direction="DESC">Highest to Lowest</button>
		<button class="js-orderby" data-orderby="price" data-direction="ASC">Lowest to Highest</button>
		<button class="js-orderby" data-orderby="date_create" data-direction="DESC">Newest</button>
		<button class="js-orderby" data-orderby="date_create" data-direction="ASC">Oldest</button>
	</div>

	<div class="product-list"></div>

	</div>	
</body>
</html>