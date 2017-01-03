<?php

// Support for featured images
add_theme_support( 'post-thumbnails' );

// Add the hooks to enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'wppt_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'wppt_enqueue_scripts' );

/**
 * Enqueue theme styles
 */
function wppt_enqueue_styles() {

	// Dependencies
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootswatch/paper/bootstrap.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/node_modules/animate.css/animate.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.theme.css', array( 'owl.carousel' ) );

	// Theme specific styles
	wp_enqueue_style( 'overwrites', get_template_directory_uri() . '/styles/overwrites.css' );
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/styles/grid.css' );
	wp_enqueue_style( 'single', get_template_directory_uri() . '/styles/single.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/styles/main.css', array( 'bootstrap', 'animate', 'font-awesome', 'owl.carousel', 'owl.theme', 'overwrites', 'grid', 'single' ) );
}

/**
 * Enqueue theme scripts
 */
function wppt_enqueue_scripts() {

	// Dependencies
	wp_enqueue_script( 'masonry.pkgd', get_template_directory_uri() . '/node_modules/masonry-layout/dist/masonry.pkgd.js', array( 'jquery' ) );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.carousel.js', array( 'jquery' ) );

	// Theme specific scripts
	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array( 'jquery', 'owl.carousel', 'masonry.pkgd' ) );
}

/**
 * Echo the transparent button class based on if there is a background image
 */
function wppt_the_transparent_button_class() {
	echo wppt_get_transparent_button_class();
}

/**
 * Return the transparent button class based on if there is a background image
 * @return string Transparent button class
 */
function wppt_get_transparent_button_class() {
	$class = 'transparent-button';

	if ( has_post_thumbnail() ) {
		return $class;
	} else {
		return $class . ' transparent-button--black';
	}
}

/**
 * Echo the grid item background class based on if there is a background image
 */
function wppt_the_grid_item_background_class() {
	echo wppt_get_grid_item_background_class();
}

/**
 * Return the grid item background class based on if there is a background image
 * @return string Grid item background class
 */
function wppt_get_grid_item_background_class() {
	if ( has_post_thumbnail() ) {
		return 'grid-item--has-background';
	} else {
		return 'grid-item--no-background';
	}
}

/**
 * Echo the grid item background style based on bg-image setttings of the post
 */
function wppt_the_grid_item_background_style() {
	echo wppt_get_grid_item_background_style();
}

/**
 * Return the grid item background style based on bg-image setttings of the post
 * @return string Grid item background style
 */
function wppt_get_grid_item_background_style() {

	if ( ! has_post_thumbnail() ) {
		return '';
	}

	$background_position = get_post_meta( get_the_ID(), 'wppt_grid_background_position', true );
	$background = 'style="background-image: linear-gradient( 180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6) )';

	$post_thumbnail_url = get_the_post_thumbnail_url( null, 'full' );

	if ( is_single() || is_page() ) {
		$background = 'style="background-image: ';
	} else {
		$background .= ', ';
	}

	$background .= "url( $post_thumbnail_url )";

	if ( ! empty( $background_position ) ) {
		$background .= "; background-position: $background_position";
	}

	return $background . '";';
}

/**
 * Return the blog owner user object
 * @return (WP_User|false WP_User object on success, false on failure.
 */
function wppt_get_author() {
	return get_user_by( 'email', get_bloginfo( 'admin_email' ) );
}