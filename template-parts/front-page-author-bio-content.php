<div class="grid-item__content__wrapper">
	<img src="<?php echo get_template_directory_uri() ?>/images/harri-heljala.jpg" class="avatar img-responsive center-block" />
	<h1>Harri Heljala</h1>
	<p>consectetur adipisicing elit. Adipisci eum et animi, doloremque ratione consequuntur optio deserunt ullam beatae. Nulla pariatur neque eum expedita repudiandae, unde dolor aliquam quas blanditiis.</p>

	<?php
		$tags = get_tags();
		if ( ! empty( $tags ) ) :
	?>
		<ul>
			<?php foreach ( $tags as $tag ) : ?>
				<li><a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>