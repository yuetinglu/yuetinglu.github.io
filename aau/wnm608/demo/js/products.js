

$(function(){

	$(".product-thumb").on("mouseenter",function(e){
		$(".product-mainimage img").attr("src",this.src)
	});

});
