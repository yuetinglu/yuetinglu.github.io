

$("#game").ready(function () {


    function refreshPage()
		{
		    jQuery.mobile.changePage(window.location.href, {
		        allowSamePageTransition: true,
		        transition: 'none',
		        reloadPage: true
		    });
		}



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
        $(this)
        .addClass("ui-state-highlight")
        .find("p")
        .html("You found the right bin!!!");
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

    
    