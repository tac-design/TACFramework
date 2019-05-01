jQuery(document).ready(function($) {

	/* Instantiate the Micromodal module. */
	MicroModal.init();
	

	/* Simple accordion */
	var allPanels = $('.accordion > dd').hide();
    
	$('.js-accordion > dt > a').click(function() {
		allPanels.slideUp();
		$(this).parent().next().slideDown();
		return false;
	});


	/* Example of an owl carousel */
	$('.js-carousel').owlCarousel({
		items: 1,
		nav: false,
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 5000,
		loop: true,
		dots: true,
		animateOut: 'fadeOut',
		autoHeight: true,
	});
	
});