jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

function advance_blogging_menu_open() {
	jQuery(".side-menu").addClass('open');
}
function advance_blogging_menu_close() {
	jQuery(".side-menu").removeClass('open');
}

function advance_blogging_search_show() {
	jQuery(".search-outer").addClass('show');
}
function advance_blogging_search_hide() {
	jQuery(".search-outer").removeClass('show');
}

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});

	// Back to top
	jQuery(document).ready(function () {
	    jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 0) {
				jQuery('.scrollup').fadeIn();
			} else {
				jQuery('.scrollup').fadeOut();
			}
	    });
	    jQuery('.scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
	    });
	});

	$(window).load(function() {
		$(".preloader").delay(2000).fadeOut("slow");
	});

})( jQuery );

( function( window, document ) {
	function advance_blogging_keepFocusInMenu() {
		document.addEventListener( 'keydown', function( e ) {
			const advance_blogging_nav = document.querySelector( '.side-menu' );

			if ( ! advance_blogging_nav || ! advance_blogging_nav.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...advance_blogging_nav.querySelectorAll( 'input, a, button' )],
				advance_blogging_lastEl = elements[ elements.length - 1 ],
				advance_blogging_firstEl = elements[0],
				advance_blogging_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && advance_blogging_lastEl === advance_blogging_activeEl ) {
				e.preventDefault();
				advance_blogging_firstEl.focus();
			}

			if ( shiftKey && tabKey && advance_blogging_firstEl === advance_blogging_activeEl ) {
				e.preventDefault();
				advance_blogging_lastEl.focus();
			}
		} );
	}

	function advance_blogging_keepfocus_search() {
		document.addEventListener( 'keydown', function( e ) {
			const advance_blogging_search = document.querySelector( '.search-outer' );

			if ( ! advance_blogging_search || ! advance_blogging_search.classList.contains( 'show' ) ) {
				return;
			}

			const elements = [...advance_blogging_search.querySelectorAll( 'input, a, button' )],
				advance_blogging_lastEl = elements[ elements.length - 1 ],
				advance_blogging_firstEl = elements[0],
				advance_blogging_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && advance_blogging_lastEl === advance_blogging_activeEl ) {
				e.preventDefault();
				advance_blogging_firstEl.focus();
			}

			if ( shiftKey && tabKey && advance_blogging_firstEl === advance_blogging_activeEl ) {
				e.preventDefault();
				advance_blogging_lastEl.focus();
			}
		} );
	}

	advance_blogging_keepFocusInMenu();

	advance_blogging_keepfocus_search();
} )( window, document );