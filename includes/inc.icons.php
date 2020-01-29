<?php

// Enable Font Awesome 5 Pro
add_filter( 'fl_enable_fa5_pro', '__return_true' );
add_filter( 'fl_get_fa5_url', function() { return get_stylesheet_directory_uri() . '/fonts/node_modules/@fortawesome/fontawesome-pro/css/all.min.css'; } );