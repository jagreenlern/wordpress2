function kids_online_store_openNav() {
  jQuery(".sidenav").addClass('show');
}
function kids_online_store_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function kids_online_store_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const kids_online_store_nav = document.querySelector( '.sidenav' );

      if ( ! kids_online_store_nav || ! kids_online_store_nav.classList.contains( 'show' ) ) {
        return;
      }

      const elements = [...kids_online_store_nav.querySelectorAll( 'input, a, button' )],
        kids_online_store_lastEl = elements[ elements.length - 1 ],
        kids_online_store_firstEl = elements[0],
        kids_online_store_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && kids_online_store_lastEl === kids_online_store_activeEl ) {
        e.preventDefault();
        kids_online_store_firstEl.focus();
      }

      if ( shiftKey && tabKey && kids_online_store_firstEl === kids_online_store_activeEl ) {
        e.preventDefault();
        kids_online_store_lastEl.focus();
      }
    } );
  }

  kids_online_store_keepFocusInMenu();
} )( window, document );

jQuery(document).ready(function() {
	var owl = jQuery('#top-slider .owl-carousel');
		owl.owlCarousel({
			margin: 25,
			nav: true,
			autoplay:true,
			autoplayTimeout:500,
			autoplayHoverPause:true,
			loop: true,
			navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
			responsive: {
			  0: {
			    items: 1
			  },
			  600: {
			    items: 1
			  },
			  1024: {
			    items: 1
			}
		}
	})
})