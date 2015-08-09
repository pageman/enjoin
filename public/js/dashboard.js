var map;
function initialize() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 10,
    center: {lat: 14.56, lng: 121}
  });
  
  $.get('http://localhost:8000/api/nearby', function(data) { 
  	$.each(data, function(key, value){
  		console.info(value);
  		var image = 'http://namicon.nexucloud.com/' + value.name + '/36/2b3a42/ff530d/';
  		var myLatLng = new google.maps.LatLng(value.location_lat, value.location_lon);
		  var beachMarker = new google.maps.Marker({
		      position: myLatLng,
		      map: map,
		      icon: image
		  });
  	});
  });
  
}

google.maps.event.addDomListener(window, 'load', initialize);