
//  LIST CODE
function getProductList(query, nextFunction) {
	console.log("getProductList query = " + query) 
	$.ajax({
		url:"data_feed.php?"+query,
		dataType:"json"
	})
	.done(nextFunction)
	.fail(function( jqXHR, textStatus, errorThrown ) {
		console.log("Failed ajax query")
		console.log("jqXHR = " + jqXHR.responseText)
		console.log("textStatus = " + textStatus)
		console.log("errorThrown = " + errorThrown)
	})
	.always(console.log("Finsihed"))
	
}


function showProductList(arr) {
	console.log("arr = " + arr);
	var result = "";
	for(let i in arr) {
		result += `
				<div class="col-sm-6 col-md-3">
					<div class="product">
						<img src="${arr[i].main_image}" alt="" class="media-image">
					</div>
					<div class="product-price">
						<a href=product_item.php?id=${arr[i].id}>${arr[i].name}</br><span>${arr[i].price}</span></a>
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




// CART CODE
function getCart(){
	let res = sessionStorage.cart?
		JSON.parse(sessionStorage.cart):
		[];
	console.log("getCart: " + res);
	console.log("getCart size: " + res.length);
	return res;
}
function setCart(arr){
	console.log("Set cart");
	sessionStorage.cart =
		JSON.stringify(arr);
}
function setCartBadge() {
	console.log("setCartBadge");
	$(".cart-total").html(getCart().length||"0")
}
function getCartItems(){
	return cartitems = getCart().reduce((r,o,i,a)=>{
		if(r!="")r+=",";
		return r+=o.pid;
	},'')
}

function showCartList(arr) {
	if(!arr.length) {
		$(".cart-list").html("No Items in Cart")
		return;
	}
	console.log(arr)

	let result = "";
	let totaltotal = 0;
	let cart = getCart();

	for(let i in cart) {
		console.log(arr[i]);
		if (arr[i] == null) {
			continue;
		}
		let total = cart[i].amt * arr[i].price;
		totaltotal += total;

		// THIS IS THE LOOPING TEMPLATE
		result += `
			<tr>
				<td class="js-removefromcart" data-id="${arr[i].id}">&times;</td>
				<td><img src="${arr[i].main_image}" class="media-image"></td>
				<td>${arr[i].name}</td>
				<td>${cart[i].amt}</td>
				<td class="cart-number">\$${arr[i].price}</td>
				<td class="cart-number">\$${total}</td>
			</tr>
		`;
	}

	$(".cart-list").html(`
	<div class="table-handler">
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>Image</th>
					<th>Title</th>
					<th>Amount</th>
					<th>Price</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>

			<!-- Looping Content -->
			${result}
			<!-- End Looping Content -->

			</tbody>
		</table>
	</div>
	<hr>
	<div class="flex-parent">
		<div class="flex-child"></div>
		<div class="flex-none" style="margin-right:1em">Total</div>
		<div class="flex-none">\$${totaltotal}</div>
	</div>
		<div class= "flex-none checkout"> <button> checkout</button> </div>	
	`);
}




$(function(){
	setCartBadge()

	$(".product-thumb").on("mouseenter",function(e){
		$(".product-mainimage img").attr("src",this.src)
	});


	$(".js-addtocart").on("click",function(e){
		console.log("Adding to cart!")
		let amt = +$("#cart-amount").val();
		if(!amt) return;
		let id = $(this).data("id");

		let cart = getCart();
		let ci = cart.find(o=>o.pid==id);
		console.log(ci)
		if(ci) {
			ci.amt += amt;
		} else {
			cart.push({
				amt:amt,
				pid:id
			})
		}
		setCart(cart);
		setCartBadge();
	})
	// Event Delegation
	$(document).on("click",".js-removefromcart",function(e){
		let id = $(this).data("id");
		let cart = getCart().filter(o=>
			o.pid!=id);
		setCart(cart);
		setCartBadge();

		let cartitems = getCartItems();
		console.log(cartitems)
		getProductList(
			cartitems?
			"where=id&in="+cartitems:
			'where=id&what=none',
			showCartList)
	})


	$("#main-search").on("submit",function(e){
		e.preventDefault();

		console.dir(this)
		if($("#main-search .form-search").val().length>3) {
			getProductList("where=name,description&like="+$("#main-search .form-search").val(),showProductList)
		}
	})

	// FILTER API
	$(".js-filter").on("click",function(e){
		e.preventDefault();
		getProductList(`where=name,description&like=${$(this).data("value")}`,showProductList)
	})
	// SORT API
	$(".js-orderby").on("click",function(e){
		e.preventDefault();

		console.log("honk")

		getProductList(`orderby=${$(this).data("orderby")}&direction=${$(this).data("direction")}`,showProductList)
	})
	$(".js-getall").on("click",function(e){
		e.preventDefault();
		getProductList('',showProductList)
	})


})

function scaleNavBar() {
  var x = document.getElementById("navList");
  if (x.className === "topnav") {
    x.className += "navResponsive";
  } else {
    x.className = "topnav";
  }
}

// $(function(){

// 	$(".product-thumb").on("mouseenter",function(e){
// 		$(".product-mainimage img").attr("src",this.src)
// 	});
	
// 	$(".js-addtocart").on("click",function(e){
// 	console.log("honk")
// 	var cart_amount = $(".cart-value span").html();
// 	$(".cart-value span").html(++cart_amount);
// 	})


// 	$(".change-amount").on("input",function(e){
// 		var amount = $(this).val();
// 		var price = +$(this).next().html();
// 		var newtotal = amount * price;
// 		$(this).next().next().html(newtotal.toFixed(2));
// 		var totaltotal = 0;
// 		$(".total").each(function(){
// 			totaltotal += +$(this).html();
// 		})
// 		$(".total-total").html(totaltotal.toFixed(2));
// 	})

// });