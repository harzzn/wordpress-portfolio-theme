<?php if ( ! empty( wppt_get_author() ) ) : ?>
	<div class="grid-item grid-item--author col-lg-4 visible-lg-block">
		<div class="grid-item__content grid-item__content--long">
			<?php get_template_part( 'template-parts/global', 'author-bio-content' ); ?>
		</div>
	</div>
<?php endif; ?>