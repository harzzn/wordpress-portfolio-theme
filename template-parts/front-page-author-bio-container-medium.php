<?php if ( ! empty( wppt_get_author() ) ) : ?>
	<div class="grid-item grid-item--author col-sm-6 hidden-xs hidden-lg">
		<div class="grid-item__content grid-item__content--long">
			<?php get_template_part( 'template-parts/front-page', 'author-bio-content' ); ?>
		</div>
	</div>
<?php endif; ?>