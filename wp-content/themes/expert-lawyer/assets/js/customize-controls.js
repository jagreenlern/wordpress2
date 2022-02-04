( function( api ) {

	// Extends our custom "expert-lawyer" section.
	api.sectionConstructor['expert-lawyer'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );