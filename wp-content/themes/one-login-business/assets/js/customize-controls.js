( function( api ) {

	// Extends our custom "one-login-business" section.
	api.sectionConstructor['one-login-business'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );