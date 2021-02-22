$(function() {
	

	/* Initialise the Micromodal module. */
	MicroModal.init();


	/* Example swiper carousel. */
	var swiper = new Swiper('.swiper-container', {

		slidesPerView: 'auto',
		spaceBetween: 10,
		loop: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

	});

});