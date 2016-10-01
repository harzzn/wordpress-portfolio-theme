(function( $ ) {
	'use strict';

	$( function() {

		/**
		 * Init Masonry
		 */
		var $grid = $('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
			percentPosition: true
		});

		/**
		 * Grid click effect
		 */
		$grid.on( 'click', '.js-link-zoom', function() {
			$( 'body' ).addClass( 'body-zoom' );
		});

	});
})( jQuery );