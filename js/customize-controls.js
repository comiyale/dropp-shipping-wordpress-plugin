( function( api ) {

	// Extends our custom "dropshipping-store" section.
	api.sectionConstructor['dropshipping-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );