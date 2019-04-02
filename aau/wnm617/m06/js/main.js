$(function() {
	$("#map_canvas1").googleMap({
	  zoom: 12, // Initial zoom level (optional)
	  coords: [37.555368, -122.276013], // Map center (optional)
	  type: "ROADMAP" // Map type (optional)
	});
  
	$("#map_canvas2").googleMap({
	  zoom: 12, // Initial zoom level (optional)
	  coords: [37.555368, -122.276013], // Map center (optional)
	  type: "ROADMAP" // Map type (optional)
	}).addMarker({
	     zoom: 12, // Initial zoom level (optional)
      coords: [37.556803, -122.275836], // GPS coords
      url: 'http://www.safeway.com', // Link to redirect onclick (optional)
      id: 'marker', // Unique ID for your marker
      icon: 'img/safeway.png'
    }).addMarker({
	   zoom: 12, // Initial zoom level (optional)    
      coords: [37.558592, -122.282735], // GPS coords
      url: 'http://www.target.com', // Link to redirect onclick (optional)
      id: 'marker', // Unique ID for your marker
      icon: 'img/target.jpg'
    }).addMarker({
 	    zoom: 12, // Initial zoom level (optional)     
      coords: [37.555368, -122.276013], // GPS coords
      url: 'http://www.library.com', // Link to redirect onclick (optional)
      id: 'marker', // Unique ID for your marker
      icon: 'img/library.png'
    });
})