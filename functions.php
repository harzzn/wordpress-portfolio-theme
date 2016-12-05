<?php

add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', 'wppt_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'wppt_enqueue_scripts' );

function wppt_enqueue_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootswatch/paper/bootstrap.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/node_modules/animate.css/animate.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.theme.css', array( 'owl.carousel' ) );

	wp_enqueue_style( 'overwrites', get_template_directory_uri() . '/styles/overwrites.css' );
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/styles/grid.css' );
	wp_enqueue_style( 'single', get_template_directory_uri() . '/styles/single.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/styles/main.css', array( 'bootstrap', 'animate', 'font-awesome', 'owl.carousel', 'owl.theme', 'overwrites', 'grid', 'single' ) );
}

function wppt_enqueue_scripts() {
	wp_enqueue_script( 'masonry.pkgd', get_template_directory_uri() . '/node_modules/masonry-layout/dist/masonry.pkgd.js', array( 'jquery' ) );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.carousel.js', array( 'jquery' ) );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array( 'jquery', 'owl.carousel', 'masonry.pkgd' ) );
}

function wppt_the_grid_item_background() {
	echo wppt_get_grid_item_background();
}

function wppt_get_grid_item_background() {
	$background_position = get_post_meta( get_the_ID(), 'wppt_grid_background_position', true );
	$background = 'background-image: linear-gradient( 180deg, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6) )';

	if ( has_post_thumbnail() ) {
		$post_thumbnail_url = get_the_post_thumbnail_url( null, 'full' );

		if ( is_single() || is_page() ) {
			$background = 'background-image: ';
		} else {
			$background .= ', ';
		}

		$background .= "url( $post_thumbnail_url )";
	}

	if ( ! empty( $background_position ) ) {
		$background .= "; background-position: $background_position";
	}

	return $background . ';';
}

function wppt_get_author() {
	return get_user_by( 'email', get_bloginfo( 'admin_email' ) );
}