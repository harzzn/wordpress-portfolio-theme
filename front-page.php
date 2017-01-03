<?php get_header(); ?>

	<?php get_template_part( 'template-parts/global', 'grid-start' ); ?>

		<?php get_template_part( 'template-parts/front-page', 'author-bio-container-small' ); ?>

		<?php

			/**
			 * Get the items under the main categories to show on front-page
			 */
			if ( defined( 'WPPT_MAIN_CATEGORIES' ) ) {

				// To count the number of categories, explode the string if needed
				if ( is_array( WPPT_MAIN_CATEGORIES ) ) {
					$include = WPPT_MAIN_CATEGORIES;
				} else {
					$include = explode( ',', WPPT_MAIN_CATEGORIES );
				}

				// Create the query to get the categories
				$query = array(
					'include' => $include
				);

				// If more than one categories, use the order from WPPT_MAIN_CATEGORIES
				if ( count( $include ) > 1 ) {
					$query['orderby'] = 'include';
				}

				// Get categories
				$categories = get_categories( $query );

				// Loop through the categories
				foreach ( $categories as $category_key => $category ) {

					// Insert the category name
					include( locate_template( 'template-parts/front-page-category.php' ) );

					// Insert the author bio if first category
					if ( 0 === $category_key ) {
						get_template_part( 'template-parts/front-page', 'author-bio-container-medium' );
					}

					// Create custom query to get the posts from the category
					global $query_string;
					query_posts( $query_string . '&cat=' . $category->term_id );

					// Insert loop for this category
					include( locate_template( 'template-parts/global-the-loop.php' ) );
				}
			} else {
				// If no main categories defined show the normal loop
				include( locate_template( 'template-parts/global-the-loop.php' ) );
			}
		?>

	<?php get_template_part( 'template-parts/global', 'grid-end' ); ?>

<?php get_footer(); ?>