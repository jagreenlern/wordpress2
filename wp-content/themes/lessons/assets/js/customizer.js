/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.logo-area .logo-index span' ).html( to );
		} );
	} );
 
	// Site tagline.
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.logo-area p' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) { 
			if ( 'blank' === to ) {
				$( '.logo-index' ).css({
					display: 'none'
				});
				// Add class for different logo styles if title and description are hidden.
				$( 'body' ).addClass( 'title-tagline-hidden' );
			} else {
 
				$( '.logo-index' ).css({
					display: 'block'
				}); 
				// Add class for different logo styles if title and description are visible.
				$( 'body' ).removeClass( 'title-tagline-hidden' );
			} 
			$( '.logo-area .logo-index span, .logo-area .logo-index p' ).css( 'color', to );  
		} );
	} );
 
	// logo 
	wp.customize( 'custom_logo', function( value ) {
		value.bind( function( to ) {
			$( '.logo-area a img' ).attr( 'src',to );
		} );
	} );
  
	// header default text
	wp.customize( 'header_default_text', function( value ) {
	  value.bind( function( to ) {
	    $( '.page-title' ).html( to );
	  } );
	} );
	// copyright text
	wp.customize( 'v_copyright_text', function( value ) {
	  value.bind( function( to ) {
	    $( '.footer-logo-wrap p' ).html( to );
	  } );
	} );
} )( jQuery );
