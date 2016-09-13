(function( $ ) {
	'use strict';

	$( function() {

		var $grid = $('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
			percentPosition: true
		});

		$grid.on( 'click', 'a', function() {
			$( 'body' ).css( 'transition', ' all .5s ease-in-out' ).css( 'transform', 'scale(1.05)' );
		});

	});
})( jQuery );