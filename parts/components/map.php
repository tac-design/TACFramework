<script type="text/javascript">

	jQuery(function($) {
		
		// Asynchronously Load the map API - NEED TO ADD API KEY HERE. 
		var script = document.createElement('script');
		script.src = "http://maps.googleapis.com/maps/api/js?callback=initialize&key=KEY";
		document.body.appendChild(script);
	});

	function initialize() {
		var map;
		var bounds = new google.maps.LatLngBounds();
		var image = '<?php echo esc_html( get_template_directory_uri() ); ?>/img/pin.png';
		var mapOptions = {
		    mapTypeId: 'roadmap',
		    scrollwheel: false,
		    center: new google.maps.LatLng(54.9703186,-1.5832597), // EDIT THIS.
		    zoom: 16,
		    styles: [] // EDIT THIS.
		};

		// Display a map on the page
		map = new google.maps.Map(document.getElementById("map"), mapOptions);
		map.setTilt(0);

		// Multiple Markers
		var markers = [
			['Business Name', 54.9703186,-1.5832597], // EDIT THIS.
		];

		// Info Window Content.
		var infoWindowContent = [ // EDIT THIS.
			['<div class="map-marker">' +
			'<h3>Business Name</h3>' +
			'<p>Address</p>' + 
			'</div>'],
		];

		// Display multiple markers on a map.
		var infoWindow = new google.maps.InfoWindow(), marker, i;

		// Loop through our array of markers & place each one on the map. 
		for( i = 0; i < markers.length; i++ ) {
			var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
			bounds.extend(position);
			marker = new google.maps.Marker({
				position: position,
				map: map,
				title: markers[i][0],
				size: new google.maps.Size(32, 32), // Original size of SVG (make sure this is defined in the SVG file itself or the pin won't show in Firefox).
				scaledSize: new google.maps.Size(32, 32), // Size to display in map.

				// Add size and centering attributes of defined marker.
				icon: new google.maps.MarkerImage(image, null, null, null, new google.maps.Size(32,32)),
			});

			// Allow each marker to have an info window.
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infoWindow.setContent(infoWindowContent[i][0]);
					infoWindow.open(map, marker);
				}
			})(marker, i));
		}
	}

</script>

<div id="map" class="flexible-container"></div>
