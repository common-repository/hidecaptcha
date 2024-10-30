(function($) {
	// timeout before checking. 
	// I don't want it to depend on some contactform7 event
	setTimeout(function() {
		if( $('.wpcf7').length > 0 ) { 
	    	$('.grecaptcha-badge').addClass( 'show' );
		} 	
	}, 2500);
})(jQuery);