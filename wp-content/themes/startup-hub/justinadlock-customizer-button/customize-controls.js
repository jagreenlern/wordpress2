( function( api ) {

	// Extends our custom "startup-hub" section.
	api.sectionConstructor['startup-hub'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
