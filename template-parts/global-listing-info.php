<div class="grid-item grid-item--category grid-item--active col-lg-4 col-sm-6 col-xs-12">
	<div class="grid-item__content">
		<div class="grid-item__content__wrapper">
			<h2>
				<?php
					if ( is_archive() ) {
						the_archive_title();
					} elseif ( is_search() ) {
						_e( 'Search Results', 'wordpress-portfolio-theme' );
					}
				?>
			</h2>
			<div class="grid-item__hover-reveal">
				<p>
					<?php
						if ( is_archive() ) {
							the_archive_description();
						} elseif ( is_search() ) {
							_e( 'You searched for: ', 'wordpress-portfolio-theme' );
							echo esc_html( get_search_query( false ) );
						}
					?>
				</p>
			</div>
		</div>
	</div>
</div>