<div class="grid-item grid-item--category col-lg-4 col-sm-6 col-xs-12">
	<a href="<?php echo get_category_link( $category->term_id ); ?>" class="grid-item__content js-link-zoom">
		<div class="grid-item__content__wrapper">
			<h2>#<?php echo $category->name; ?></h2>
			<div class="grid-item__hover-reveal">
				<p><?php echo $category->description; ?></p>
				<button class="btn transparent-button transparent-button--black read-more-button"><?php _e( 'See More', 'wordpress-portfolio-theme' ); ?> <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
			</div>
		</div>
	</a>
</div>