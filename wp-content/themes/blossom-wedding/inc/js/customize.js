jQuery(document).ready(function($){
    /* Move Fornt page widgets to frontpage panel */
	wp.customize.section( 'sidebar-widgets-about' ).panel( 'frontpage_settings' );
	wp.customize.section( 'sidebar-widgets-about' ).priority( '20' );
    wp.customize.section( 'sidebar-widgets-quote' ).panel( 'frontpage_settings' );
    wp.customize.section( 'sidebar-widgets-quote' ).priority( '70' );
    wp.customize.section( 'sidebar-widgets-gallery' ).panel( 'frontpage_settings' );
    wp.customize.section( 'sidebar-widgets-gallery' ).priority( '100' )    
    wp.customize.section( 'sidebar-widgets-invitation' ).panel( 'frontpage_settings' );
    wp.customize.section( 'sidebar-widgets-invitation' ).priority( '110' );
    
    /* Home page preview url */
    wp.customize.panel( 'frontpage_settings', function( section ){
        section.expanded.bind( function( isExpanded ) {
            if( isExpanded ){
                wp.customize.previewer.previewUrl.set( blossom_wedding_cdata.home );
            }
        });
    });
});


( function( api ) {

    // Extends our custom "example-1" section.
    api.sectionConstructor['blossom-wedding-pro-section'] = api.Section.extend( {

        // No events for this type of section.
        attachEvents: function () {},

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    } );

} )( wp.customize );