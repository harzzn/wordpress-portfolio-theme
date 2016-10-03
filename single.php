<?php get_header(); ?>

	<div class="container-fluid">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="col-md-7">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="background-cover featured-image" style="background-image: url(<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>);"></div>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<div class="lead"><?php the_excerpt(); ?></div>
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; ?>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>