<?php get_header(); ?>

	<?php get_template_part( 'template-parts/global', 'grid-start' ); ?>

		<?php get_template_part( 'template-parts/front-page', 'author-bio-container-small' ); ?>

		<?php
			if ( defined( 'WPPT_MAIN_CATEGORIES' ) ) {

				$categories = get_categories( array(
					'include' => WPPT_MAIN_CATEGORIES,
					'orderby' => 'include'
				));

				foreach ( $categories as $category_key => $category ) {

					include( locate_template( 'template-parts/front-page-category.php' ) );

					if ( 0 === $category_key ) {
						get_template_part( 'template-parts/front-page', 'author-bio-container-medium' );
					}

					global $query_string;
					query_posts( $query_string . '&cat=' . $category->term_id );
					include( locate_template( 'template-parts/global-the-loop.php' ) );
				}
			} else {
				include( locate_template( 'template-parts/global-the-loop.php' ) );
			}
		?>

	<?php get_template_part( 'template-parts/global', 'grid-end' ); ?>

<?php get_footer(); ?>