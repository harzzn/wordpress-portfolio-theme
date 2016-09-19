<?php

add_action( 'wp_enqueue_scripts', 'wppt_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'wppt_enqueue_scripts' );

function wppt_enqueue_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootswatch/paper/bootstrap.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/node_modules/animate.css/animate.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.theme.css', array( 'owl.carousel' ) );

	wp_enqueue_style( 'grid', get_template_directory_uri() . '/styles/grid.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/styles/main.css', array( 'bootstrap', 'animate', 'font-awesome', 'owl.carousel', 'owl.theme', 'grid' ) );
}

function wppt_enqueue_scripts() {
	wp_enqueue_script( 'masonry.pkgd', get_template_directory_uri() . '/node_modules/masonry-layout/dist/masonry.pkgd.js', array( 'jquery' ) );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/node_modules/owlcarousel/owl-carousel/owl.carousel.js', array( 'jquery' ) );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/scripts/main.js', array( 'jquery', 'owl.carousel', 'masonry.pkgd' ) );
}