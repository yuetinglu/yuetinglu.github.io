
$(".recycle-button").click(function() {
	$(".recycle-content").toggle("slow", function() {})
})

$(".n-recycle-button").click(function() {
	$(".n-recycle-content").toggle("slow", function() {})
})

$(".composite-button").click(function() {
	$(".composite-content").toggle("slow", function() {})
})

$(".introduction-button").click(function() {
	$(".introduction-content").toggle("slow", function() {})
})

$(".like").click(function(){
	let dataName = $( this ).data( "name" );
	if (localStorage["likeCount" + dataName] ) {
	   localStorage["likeCount" + dataName] = Number(localStorage["likeCount" + dataName] )+1;
	}
	else{
	   localStorage["likeCount" + dataName] = 1;
	} 
	$(this).children("span").html(localStorage["likeCount" + dataName]);
});