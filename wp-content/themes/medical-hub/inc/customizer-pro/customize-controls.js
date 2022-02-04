( function( api ) {

	// Extends our custom "medical-hub" section.
	api.sectionConstructor['medical-hub'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
