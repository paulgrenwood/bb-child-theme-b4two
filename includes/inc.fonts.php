<?php

// Enable Avenir Next in WP & BB
function avenir_next__custom_font ( $system_fonts ) {
  $system_fonts[ 'Avenir Next' ] = array(
    'fallback' => 'Avenir, sans-serif',
    'weights' => array(
        '200',
		'300',
		'400',
		'500',
		'600',
		'700',
		'900'
    ),
  );
  return $system_fonts;
}

add_filter( 'fl_theme_system_fonts', 'avenir_next__custom_font' );
add_filter( 'fl_builder_font_families_system', 'avenir_next__custom_font' );