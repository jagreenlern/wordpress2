(function( $ ) {

	'use strict';

	$(function() {

		var data = {};
		data.startuphub_plugins_list = 'yes';
		$.ajax({
			url: document.URL,
			cache: false,
			type: "get",
			data: data,
			success: function(response) {

				if( $( response ).find('.startuphub-addons-list').length > 0 ) {

					$('.startuphub-addons-list').replaceWith( $( response ).find('.startuphub-addons-list') );
				}
			}
		});
	});

})( jQuery );
