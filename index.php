<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class( 'animated fadeIn' ) ?>>
	<div class="container-fluid">

		<!-- add extra container element for Masonry -->
		<div class="grid">
			<div class="grid-sizer col-lg-4 col-sm-6 col-xs-12"></div>

			<div class="grid-item grid-item--highlight col-xs-12 visible-xs-block">
				<div class="grid-item-content">
					<?php get_template_part( 'partials/author-bio', 'index' ); ?>
				</div>
			</div>

			<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
				<!-- add inner element for column content -->
				<a href="index.html" class="grid-item-content grid-item-content--category">
					<div class="grid-item-content-wrapper">
						<h2 class="grid-item-headline">#products</h2>
						<div class="show-on-hover">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed laborum dolorem</p>
							<button class="btn btn-transparent read-more-button">Read More <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
						</div>
					</div>
				</a>
			</div>

			<div class="grid-item grid-item--highlight col-sm-6 hidden-xs hidden-lg">
				<div class="grid-item-content grid-item-content--height2">
					<?php get_template_part( 'partials/author-bio', 'index' ); ?>
				</div>
			</div>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="grid-item col-lg-4 col-sm-6 col-xs-12">
					<a href="<?php the_permalink(); ?>" class="grid-item-content grid-item-content--post">
						<div class="background-cover" style="background-image: linear-gradient( 180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6) ), url( https://placeimg.com/800/800/tech )"></div>
						<div class="grid-item-content-wrapper">
							<h2 class="grid-item-headline"><?php the_title(); ?></h2>
							<div class="show-on-hover">
								<?php the_excerpt(); ?>
								<iframe src="https://yvoschaap.com/producthunt/counter.html#href=http%3A%2F%2Fhtmltowordpress.io%2F&amp;layout=wide" width="100" height="25" scrolling="no" frameborder="0" allowtransparency="true" class="center-block"></iframe>
								<button class="btn btn-transparent read-more-button"><?php _e( 'Read More', 'wordpress-portfolio-theme' ); ?> <i class="fa fa-angle-double-right read-more-button__icon" aria-hidden="true"></i></button>
							</div>
						</div>
					</a>
				</div>

				<?php if ( 0 === $wp_query->current_post ) : ?>
					<div class="grid-item grid-item--highlight col-lg-4 visible-lg-block">
						<div class="grid-item-content grid-item-content--height2">
							<?php get_template_part( 'partials/author-bio', 'index' ); ?>
						</div>
					</div>
				<?php endif; ?>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'wordpress-portfolio-theme' ); ?></p>
			<?php endif; ?>

		</div>
	</div>

	<?php wp_footer(); ?>

</body>
</html>