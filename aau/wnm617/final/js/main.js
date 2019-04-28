
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
        $(this)
        .addClass("ui-state-highlight")
        .find("p")
        .html("You found the right bin!!!");
      }
    });

    $("#recycle").droppable({
   	  accept:("#napkins"),
      tolerance:'touch',
      drop: function(event, ui) {

        $("#right-bin")
        .find("p")
        .html("You found the right bin!!!")
        .effect( "bounce", "slow" )
        .toggle( "drop" );

        $(this)
        .effect( "bounce", "fast" );

        $("#points")
        .find("p")
        .html("+1")
        .effect( "bounce", "slow" )
        .toggle( "drop" );
      }
    });

    $("#unrecyclable").droppable({
   	  accept:("#plastic"),
      tolerance:'touch',
      drop: function(event, ui) {
        $(this)
        .addClass("ui-state-highlight")
        .find("p")
        .html("You found the right bin!!!");
              }
    });

    $("#replay").click(function(){
		location.reload(true);
	});
});


$("#game-btn").onclick = refreshPage;

$('[data-role=page]').live('pageshow', function(event) {
    refreshPage;
})

window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});