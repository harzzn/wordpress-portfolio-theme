<?php get_header(); ?>

	<div class="container-fluid">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-lg-7 col-md-7">
				<?php
					$wppt_link_url = get_post_meta( get_the_ID(), 'wppt_link_url', true );
					$wppt_link_text = get_post_meta( get_the_ID(), 'wppt_link_text', true );
				?>

				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo $wppt_link_url; ?>" target="_blank" rel="external" title="<?php echo $wppt_link_text; ?>" class="background-cover featured-image display-block" <?php wppt_the_grid_item_background_style(); ?>>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>" class="back-home-link"><i class="fa fa-caret-left" aria-hidden="true"></i> <?php _e( 'Back to Listing', 'wordpress-portfolio-theme' ); ?></a>
					</a>
				<?php endif; ?>
				<a href="<?php echo $wppt_link_url; ?>" class="pull-right external-link" target="_blank" rel="external" title="<?php echo $wppt_link_text; ?>"><?php echo $wppt_link_text; ?> <i class="fa fa-external-link" aria-hidden="true"></i></a>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="lead"><?php the_excerpt(); ?></div>
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>