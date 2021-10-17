jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 120) {
		jQuery('.wrap_figure').addClass('fixed');
	} else {
  		jQuery('.wrap_figure').removeClass('fixed');
	}
});

jQuery(function($){
 	"use strict";
   	jQuery('.gb_navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
  	});
});

function education_insight_gb_Menu_open() {
	jQuery(".mobile_menu_nav").addClass('show');
}
function education_insight_gb_Menu_close() {
	jQuery(".mobile_menu_nav").removeClass('show');
}

jQuery(function($){
	$('.gb_toggle').click(function () {
        education_insight_Keyboard_loop($('.mobile_menu_nav'));
    });
});

jQuery(window).load(function() {
	jQuery(".preloader").delay(2000).fadeOut("slow");
});