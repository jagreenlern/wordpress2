( function( api ) {

	// Extends our custom "play-school-kindergarten" section.
	api.sectionConstructor['play-school-kindergarten'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );