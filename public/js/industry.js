$(document).ready(function(){

$('.toggler').click(function() {
	/* Act on the event */
	$(this).toggleClass('change');
	$('.site-nav').toggleClass('site-nav-open');
	// $('.toggler-cover h6').text('NAV');

	if( $('.toggler-cover h6').text() == "MENU") {
		$('.toggler-cover h6').text('NAVIGATION');
		$('.toggler-cover h6').css({'transition':'.5s all'});
	}else{
		$('.toggler-cover h6').text('MENU');
		$('.toggler-cover h6').css({'transition':'.1s all'});
	}
});
	
});