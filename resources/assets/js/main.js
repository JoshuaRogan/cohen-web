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
	
})