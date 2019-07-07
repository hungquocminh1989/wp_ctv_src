<?php
defined( 'ABSPATH' ) || exit;

//Use at Front and Admin

add_action( 'after_setup_theme', 'repoSetupTheme');
add_action('switch_theme', 'repoDeactivateTheme');
add_action('after_switch_theme', 'repoActiveTheme');

function repoSetupTheme(){
	add_theme_support('title-tag');

	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support('post-thumbnails');
	add_image_size('img_100_200',100,200,TRUE);

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');
	
	//WooCommerce
	add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
    /*add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );*/

	//load_theme_textdomain('mmen', TEMPLATE_DIRECTORY . '/resources/lang');
}

function repoActiveTheme(){
	 
}

function repoDeactivateTheme(){
	 
}