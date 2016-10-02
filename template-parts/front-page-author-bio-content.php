<?php
	$author = get_user_by( 'email', get_bloginfo( 'admin_email' ) );
	$name = $author->first_name . ' ' . $author->last_name;
?>

<aside class="grid-item__content__wrapper">
	<img src="<?php echo get_avatar_url( $author->ID, array( 'size' => 400 ) ); ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>" class="avatar img-responsive center-block" />
	<h1><?php echo $name; ?></h1>

	<?php if ( defined( 'WPPT_AUTHOR_LINKS' ) ) : ?>
		<ul class="author-links">
			<?php foreach ( json_decode( WPPT_AUTHOR_LINKS ) as $link ) : ?>
				<li><a href="<?php echo $link->href ?>" target="_blank" title="<?php echo $name; ?> on <?php echo $link->name ?>"><i class="fa fa-<?php echo $link->icon ?>" aria-hidden="true"></i></a></li>
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
				<li><a href="<?php echo get_tag_link( $tag->term_id ); ?>" title="All <?php echo $name; ?>'s Portfolio Items Tagged as <?php echo $tag->name ?>">#<?php echo $tag->name ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</aside>