<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR0Jwn0qzSvQSSQcwYEAhpziovJshfMog"></script>
<script>
(function( $ ) {

/**
 * initMap
 *
 * Renders a Google Map onto the selected jQuery element
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @return  object The map instance.
 */
function initMap( $el ) {

	// Find marker elements within map.
	var $markers = $el.find('.marker');

	// Create gerenic map.
	var mapArgs = {
		zoom        : $el.data('zoom') || 16,
		mapTypeId   : google.maps.MapTypeId.ROADMAP,
		styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
	};
	var map = new google.maps.Map( $el[0], mapArgs );

	// Add markers.
	map.markers = [];
	$markers.each(function(){
		initMarker( $(this), map );
	});

	// Center map based on markers.
	centerMap( map );

	// Return map instance.
	return map;
}

/**
 * initMarker
 *
 * Creates a marker for the given jQuery element and map.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   jQuery $el The jQuery element.
 * @param   object The map instance.
 * @return  object The marker instance.
 */
function initMarker( $marker, map ) {

	// Get position from marker.
	var lat = $marker.data('lat');
	var lng = $marker.data('lng');
	var latLng = {
		lat: parseFloat( lat ),
		lng: parseFloat( lng )
	};

	var image = '<?php echo esc_html( get_template_directory_uri() ); ?>/img/pin.svg';

	// Create marker instance.
	var marker = new google.maps.Marker({
		position : latLng,
		map: map,
		size: new google.maps.Size(40, 51), // Original size of SVG (make sure this is defined in the SVG file itself or the pin won't show in Firefox).
		scaledSize: new google.maps.Size(40, 51), // Size to display in map.

		// Add size and centering attributes of defined marker.
		icon: new google.maps.MarkerImage(image, null, null, null, new google.maps.Size(40,51)),
	});

	// Append to reference for later use.
	map.markers.push( marker );

	// If marker contains HTML, add it to an infoWindow.
	if( $marker.html() ){

		// Create info window.
		var infowindow = new google.maps.InfoWindow({
			content: $marker.html()
		});

		// Show info window when marker is clicked.
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}
}

/**
 * centerMap
 *
 * Centers the map showing all markers in view.
 *
 * @date    22/10/19
 * @since   5.8.6
 *
 * @param   object The map instance.
 * @return  void
 */
function centerMap( map ) {

	// Create map boundaries from all map markers.
	var bounds = new google.maps.LatLngBounds();
	map.markers.forEach(function( marker ){
		bounds.extend({
			lat: marker.position.lat(),
			lng: marker.position.lng()
		});
	});

	// Case: Single marker.
	if( map.markers.length == 1 ){
		map.setCenter( bounds.getCenter() );

	// Case: Multiple markers.
	} else{
		map.fitBounds( bounds );
	}
}

// Render maps on page load.
$(document).ready(function(){
	$('.acf-map').each(function(){
		var map = initMap( $(this) );
	});
});

})(jQuery);
</script>

<?php 
$location = get_field( 'map', 'option' );
if( $location ) :
	?>

	<div class="acf-map is-google-map" data-zoom="16">
		<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
	</div>

	<?php
endif;
