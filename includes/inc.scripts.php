<?php

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

function b42s__vendor_scripts(){
	wp_enqueue_script( FL_CHILD_THEME_URL . '/vendor/node_modules/basicscroll/dist/basicScroll.min.js', array(), '1.0.0', true);
	wp_enqueue_script( FL_CHILD_THEME_URL . '/vendor/node_modules/stickybits/dist/stickybits.min.js', array(), '3.7.3', true);
}
add_action( 'wp_enqueue_scripts', 'b42s__vendor_scripts');