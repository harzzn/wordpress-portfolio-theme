<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="grid-item grid-item--post col-lg-4 col-sm-6 col-xs-12">
		<a href="<?php the_permalink(); ?>" class="grid-item__content js-link-zoom">
			<div class="grid-item__background-cover" style="<?php wppt_the_grid_item_background(); ?>"></div>
			<div class="grid-item__content__wrapper">
				<h2><?php the_title(); ?></h2>
				<div class="grid-item__hover-reveal">
					<?php the_excerpt(); ?>

					<?php
						$external_info = get_post_meta( get_the_ID(), 'wppt_external_info', true );
						if ( ! empty( $external_info ) ) {
							echo $external_info;
						}
					?>

					<button class="btn transparent-button read-more-button"><?php _e( 'Read More', 'wordpress-portfolio-theme' ); ?> <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
				</div>
			</div>
		</a>
	</div>

	<?php if ( is_home() && 0 === $wp_query->current_post ) : ?>
		<?php get_template_part( 'template-parts/front-page', 'author-bio-container-medium' ); ?>
	<?php endif; ?>

	<?php if ( ( is_home() && 1 === $wp_query->current_post ) || ( isset( $category_key ) && 0 === $category_key && 0 === $wp_query->current_post ) ) : ?>
		<?php get_template_part( 'template-parts/front-page', 'author-bio-container-large' ); ?>
	<?php endif; ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.', 'wordpress-portfolio-theme' ); ?></p>
<?php endif; ?>