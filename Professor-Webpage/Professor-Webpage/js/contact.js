$(document).ready(function() {
	google.maps.event.addDomListener(window, 'load', initialize);
	$('.btn-appointment').on('click', function(event) {
		event.preventDefault();
		
	});
	$('.btn-feedback').on('click', function() {
		
	});
});

function initialize() {
	google.maps.visualRefresh = true;
	var myLatlng = new google.maps.LatLng(22.719568,75.857727);
	var mapOptions = {
		zoom: 15,
		scrollwheel: false,
		center: myLatlng
	};
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);
	var contentString = '<div id="content" class="HT-W">' +
		'<b>Dr. Puneet Gupta</b><br />' +
		'Room 411, POD-1A (Scandium Building),<br />' +
		'IIT Indore, Simrol 453552, India' +
		'</div>';
	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'MY WORK PLACE'
	});
	infowindow.open(map, marker);
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	});
}