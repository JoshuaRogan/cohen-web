var cohen = cohen || {};


cohen.init_slider = function() {
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		nav: false
	});
};


/**
 * Activate dropdown on hovers
 * @return {[type]} [description]
 */
cohen.init_nav = function() {
	$('.dropdown').hover(function() {
			$(this).addClass('open');
		},
		function() {
			$(this).removeClass('open');
		});
};