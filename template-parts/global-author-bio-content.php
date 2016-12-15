<?php
	$author = wppt_get_author();
	$name = $author->first_name . ' ' . $author->last_name;
?>

<aside class="grid-item__content__wrapper text-center">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo( 'name' ); ?>" rel="author me" class="home-link">
		<img src="<?php echo get_avatar_url( $author->ID, array( 'size' => 400 ) ); ?>" alt="<?php echo $name; ?>" class="avatar img-responsive center-block" />

		<?php if ( is_single() || is_page() ) : ?>
			<h2><?php echo $name; ?></h2>
		<?php else : ?>
			<h1><?php echo $name; ?></h1>
		<?php endif; ?>
	</a>

	<?php if ( defined( 'WPPT_AUTHOR_LINKS' ) ) : ?>
		<ul class="author-links">
			<?php foreach ( json_decode( WPPT_AUTHOR_LINKS ) as $link ) : ?>
				<li><a href="<?php echo $link->href ?>" rel="author me noreferrer noopener" target="_blank" title="<?php echo $name; ?> on <?php echo $link->name ?>"><i class="fa fa-<?php echo $link->icon ?>" aria-hidden="true"></i><span class="screen-reader-text"><?php echo $name; ?> on <?php echo $link->name ?></span></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

	<p><?php echo $author->description; ?></p>

	<?php
		$tags = get_tags();
		if ( ! empty( $tags ) ) :
	?>
		<ul class="tag-list">
			<?php foreach ( $tags as $tag ) : ?>
				<li><a href="<?php echo get_tag_link( $tag->term_id ); ?>" rel="tag" title="All <?php echo $name; ?>'s Portfolio Items Tagged as <?php echo $tag->name ?>"><span class="screen-reader-text">All <?php echo $name; ?>'s Portfolio Items Tagged as </span>#<?php echo $tag->name ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</aside>