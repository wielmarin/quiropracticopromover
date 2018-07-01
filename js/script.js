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


 // Contact Tab Open/Close
	// Contact button
	
	jQuery('.contact-onscroll-open-tekst1').click(function() {
		jQuery('.contact-onscroll-open').animate({right: '-85px'}, 800);
	});
	
	jQuery('#closecontact').click(function() {
		jQuery('.contact-onscroll-open').animate({right: '-350px'}, 800);
	});
	






//////////////////// End Ready Function

});