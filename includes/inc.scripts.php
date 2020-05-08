<?php

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

function b42s__vendor_scripts(){
	wp_enqueue_script( 'basicScroll', FL_CHILD_THEME_URL . '/vendor/node_modules/basicscroll/dist/basicScroll.min.js', array(), '1.0.0', true);
	wp_enqueue_script( 'stickybits', FL_CHILD_THEME_URL . '/vendor/node_modules/stickybits/dist/stickybits.min.js', array(), '3.7.3', true);
}
add_action( 'wp_enqueue_scripts', 'b42s__vendor_scripts', 9);

function b42s__register_scripts(){
	wp_register_script('dflip', FL_CHILD_THEME_URL . '/vendor/dflip/js/dflip.min.js', array('jquery'), '1.5.6', true );
	wp_register_style('dflip', FL_CHILD_THEME_URL . '/vendor/dflip/css/dflip.css' );
	wp_register_style('dflip-icons', FL_CHILD_THEME_URL . '/vendor/dflip/css/themify-icons.css' );
}
add_action('wp_enqueue_scripts', 'b42s__register_scripts', 10);