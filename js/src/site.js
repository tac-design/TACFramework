(function($) {




	/* Simple accordion */

	var allPanels = $('.js-accordion > dd').hide();
    
	$('.accordion > dt > a').click(function() {
		allPanels.slideUp();
		$(this).parent().next().slideDown();
		return false;
	});



	
	
});