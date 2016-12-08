<?php get_header(); ?>

	<div class="container-fluid">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-lg-7 col-md-7">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="background-cover featured-image" style="<?php wppt_the_grid_item_background(); ?>"></div>
				<?php endif; ?>
				<a href="<?php echo get_post_meta( get_the_ID(), 'wppt_link_url', true ); ?>" class="pull-right external-link" target="_blank" rel="external"><?php echo get_post_meta( get_the_ID(), 'wppt_link_text', true ); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="lead"><?php the_excerpt(); ?></div>
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>