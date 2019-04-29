
function refreshPage() {
     $.mobile.changePage(
        window.location.href,
        {
          allowSamePageTransition : true,
          transition              : 'none',
          showLoadMsg             : false,
          reloadPage              : true
        }
      );
}

function jump(f, h){
    location.href = location.href.replace(f, h)                 //Go to the target element.
    var url = location.href;               //Save down the URL without hash.
    history.replaceState(null,null,url);   //Don't like hashes. Changing it back.
    refreshPage();
}


$("#scan").ready(function () {
    refreshPage();
    $(".scan-img")
    .toggle( "pulsate" , function complete() {
        jump("scan", "knowledge")
    });
});

$("#game").ready(function () {
    refreshPage;
    $("#apple").draggable();
    $("#banana").draggable();
    $("#orange").draggable();
    $("#napkins").draggable();
    $("#plastic").draggable();
    $("#wood").draggable();

    $("#composite").droppable({
   	  accept:("#apple, #orange, #banana, #wood"),
      tolerance:'touch',
      drop: function(event, ui) {

        $("#right-bin")
        .find("p")
        .html("You found the right bin!!!")
        .effect( "bounce", "fast" )
        .toggle( "drop" );

        $(this)
        .effect( "bounce", "fast" );

        $("#points")
        .find("p")
        .html("+1")
        .effect( "bounce", "fast" )
        .toggle( "drop" );
      }
    });

    $("#recycle").droppable({
   	  accept:("#napkins"),
      tolerance:'touch',
      drop: function(event, ui) {

        $("#right-bin")
        .find("p")
        .html("You found the right bin!!!")
        .effect( "bounce", "fast" )
        .toggle( "drop" );

        $(this)
        .effect( "bounce", "fast" );

        $("#points")
        .find("p")
        .html("+1")
        .effect( "bounce", "fast" )
        .toggle( "drop" );
      }
    });

    $("#unrecyclable").droppable({
   	  accept:("#plastic"),
      tolerance:'touch',
      drop: function(event, ui) {

        $("#right-bin")
        .find("p")
        .html("You found the right bin!!!")
        .effect( "bounce", "fast" )
        .toggle( "drop" );

        $(this)
        .effect( "bounce", "fast" );

        $("#points")
        .find("p")
        .html("+1")
        .effect( "bounce", "fast" )
        .toggle( "drop" );
      }
    });

    $("#replay").click(function(){
		location.reload(true);
	});
});

