jQuery( document ).ready(function() {

////////// Start

		// Menu Open
	 jQuery('#menuopen').click(function() {
		jQuery('#menuopen').hide(),
		jQuery('#close').show(),
		jQuery('div.frontnav').fadeIn(500);
	});
		// Menu Close
	jQuery('#close').click(function() {
		jQuery('#menuopen').show(),
		jQuery('#close').hide(),
		jQuery('div.frontnav').hide();
		
	});

		// Change menu on scroll
		jQuery(function() {
		   jQuery(window).scroll(function () {
			  if (jQuery(this).scrollTop() > 15) {
				 jQuery('#menuopen').css('right','0px');
				 jQuery('#menuopen p').hide();
			  }
			  if (jQuery(this).scrollTop() < 15) {
				 jQuery('#menuopen').css('right','25px');
				 jQuery('#menuopen p').show();
			  }
		   });
		});









//////////////////// End Ready Function

});