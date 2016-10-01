<?php get_header(); ?>

<div class="container-fluid">

	<!-- add extra container element for Masonry -->
	<div class="grid">
		<div class="grid-sizer col-lg-4 col-sm-6 col-xs-12"></div>

		<div class="grid-item grid-item--author col-xs-12 visible-xs-block">
			<div class="grid-item__content">
				<?php get_template_part( 'partials/author-bio', 'index' ); ?>
			</div>
		</div>

		<div class="grid-item grid-item--category col-lg-4 col-sm-6 col-xs-12">
			<!-- add inner element for column content -->
			<a href="index.html" class="grid-item__content js-link-zoom">
				<div class="grid-item__content__wrapper">
					<h2>#products</h2>
					<div class="grid-item__hover-reveal">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
						<button class="btn transparent-button transparent-button--black read-more-button"><?php _e( 'See More', 'wordpress-portfolio-theme' ); ?> <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
					</div>
				</div>
			</a>
		</div>

		<div class="grid-item grid-item--author col-sm-6 hidden-xs hidden-lg">
			<div class="grid-item__content grid-item__content--long">
				<?php get_template_part( 'partials/author-bio', 'index' ); ?>
			</div>
		</div>

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

			<?php if ( 0 === $wp_query->current_post ) : ?>
				<div class="grid-item grid-item--author col-lg-4 visible-lg-block">
					<div class="grid-item__content grid-item__content--long">
						<?php get_template_part( 'partials/author-bio', 'index' ); ?>
					</div>
				</div>
			<?php endif; ?>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.', 'wordpress-portfolio-theme' ); ?></p>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>