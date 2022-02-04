function vw_dentist_menu_open_nav() {
	window.vw_dentist_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vw_dentist_menu_close_nav() {
	window.vw_dentist_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   });
});

jQuery(document).ready(function () {
	window.vw_dentist_currentfocus=null;
  	vw_dentist_checkfocusdElement();
	var vw_dentist_body = document.querySelector('body');
	vw_dentist_body.addEventListener('keyup', vw_dentist_check_tab_press);
	var vw_dentist_gotoHome = false;
	var vw_dentist_gotoClose = false;
	window.vw_dentist_responsiveMenu=false;
 	function vw_dentist_checkfocusdElement(){
	 	if(window.vw_dentist_currentfocus=document.activeElement.className){
		 	window.vw_dentist_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_dentist_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_dentist_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_dentist_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_dentist_gotoHome = true;
			} else {
				vw_dentist_gotoHome = false;
			}

		}else{

			if(window.vw_dentist_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_dentist_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_dentist_responsiveMenu){
				if(vw_dentist_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_dentist_gotoClose = true;
				} else {
					vw_dentist_gotoClose = false;
				}
			
			}else{

			if(window.vw_dentist_responsiveMenu){
			}}}}
		}
	 	vw_dentist_checkfocusdElement();
	}
});


jQuery('document').ready(function($){
	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})
	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 100) {
	        jQuery('.scrollup i').fadeIn();
	    } else {
	        jQuery('.scrollup i').fadeOut();
	    }
	});
	jQuery('.scrollup').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
});

jQuery(document).ready(function () {
  	function vw_dentist_search_loop_focus(element) {
	  var vw_dentist_focus = element.find('select, input, textarea, button, a[href]');
	  var vw_dentist_firstFocus = vw_dentist_focus[0];  
	  var vw_dentist_lastFocus = vw_dentist_focus[vw_dentist_focus.length - 1];
	  var KEYCODE_TAB = 9;

	  element.on('keydown', function vw_dentist_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) { 
	      return; 
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === vw_dentist_firstFocus) {
	        vw_dentist_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === vw_dentist_lastFocus) {
	        vw_dentist_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box span a').click(function(){
        jQuery(".serach_outer").slideDown(1000);
    	vw_dentist_search_loop_focus(jQuery('.serach_outer'));
    });

    jQuery('.closepop a').click(function(){
        jQuery(".serach_outer").slideUp(1000);
    });
});