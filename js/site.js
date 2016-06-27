
	jQuery(document).ready(function($) {
		
		// Needed for mobile select nav menu
		jQuery( ".select-menu" ).change(function() {
        	window.location = jQuery(this).find("option:selected").val();
    	});

	});
