<<<<<<< HEAD
$('#messages').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var recipient = button.data('whatever') ;// Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('.modal-title').text('Message to ' + recipient);
  });
=======
$('.user-save').on('click', function(e){
	e.preventDefault();
	$(this).html($(this).html()+'d');
})
>>>>>>> d6ba88af2f8b2108e532e419e57dae9f7ce32610

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