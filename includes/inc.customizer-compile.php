<?php

//require_once 'customizer/customizer-css-wphead.php';

add_filter( 'fl_theme_compile_less_paths', function( $paths ){
    $paths[] = get_stylesheet_directory() . '/less/gwd-customizer.less';

   return $paths;
});

add_filter( 'fl_less_vars', function( $vars ) {
  $mods = FLCustomizer::get_mods();
  
  for( $h = 2; $h <= 6; $h++ ){
	  $vars['gwstandard_h' . $h . '_color'] = $mods['gwstandard_h' . $h . '_color'] ?: '#4a4a4a';
  }
  
    $vars['gwstandard__body_font__margin_bottom'] = $mods['gwstandard__body_font__margin_bottom'] ?: 10;
    $vars['gwstandard__intro_text__font_size'] = $mods['gwstandard__intro_text__font_size'] ?: 18;
	$vars['gwstandard__intro_text__line_height'] = $mods['gwstandard__intro_text__line_height'] ?: 1.6;
	$vars['gwstandard__intro_text__margin_bottom'] = $mods['gwstandard__intro_text__margin_bottom'] ?: 18;
	$vars['gwstandard__secondary_intro__font_size'] = $mods['gwstandard__secondary_intro__font_size'] ?: 20;
	$vars['gwstandard__secondary_intro__line_height'] = $mods['gwstandard__secondary_intro__line_height'] ?: 1.6;
	$vars['gwstandard__secondary_intro__margin_bottom'] = $mods['gwstandard__secondary_intro__margin_bottom'] ?: 20;
	$vars['gwstandard__small_text__font_size'] = $mods['gwstandard__small_text__font_size'] ?: 14;
	$vars['gwstandard__small_text__line_height'] = $mods['gwstandard__small_text__line_height'] ?: 1.2;
	$vars['gwstandard__small_text__margin_bottom'] = $mods['gwstandard__small_text__margin_bottom'] ?: 10;

  return $vars;
});