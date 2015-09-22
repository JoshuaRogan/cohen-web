/**
 * Main JS File
 */
var cohen = cohen || {};

$( document ).ready(function(){
	
	cohen.init_nav();
	cohen.init_slider();

	if($('#google-map').length){
		cohen.init_map('#google-map');
	}

	//If there are form stack forms normlize them
	if($('.form-stack').length){
		cohen.clear_formstack_form();
		setTimeout(function(){
			$('.fsPage').css('opacity', 1);
            $('.preloader-wrapper').addClass('loaded');

            //Add Some helpful placeholders
            // $).setAttribute("placeholder", "Enter your number");
            $('.fsFieldCity').attr('placeholder', "Enter your city");
            $('.fsFieldAddress ').attr('placeholder', "Enter your Address");
            $('#field20157223-address2').attr('placeholder', "Address Line 2");
		}, 300);
	}

	if($('.page-before-after').length){
		cohen.init_smile_gallery();
	}

	if($('.page-about-us').length){
		cohen.init_about_sliders();
	}


	
})