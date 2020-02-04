<?php

//require_once 'customizer/customizer-css-wphead.php';

add_filter( 'fl_theme_compile_less_paths', function( $paths ){
    $paths[] = get_stylesheet_directory() . '/less/b42s-customizer.less';

   return $paths;
});

add_filter( 'fl_less_vars', function( $vars ) {
  $mods = FLCustomizer::get_mods();
  
  for( $h = 2; $h <= 6; $h++ ){
	  $vars['b42s__h' . $h . '__color'] = $mods['b42s__h' . $h . '__color'] ?: '#4a4a4a';
  }
  
    $vars['b42s__body_font__margin_bottom'] = $mods['b42s__body_font__margin_bottom'] ?: 10;
    $vars['b42s__intro_text__font_size'] = $mods['b42s__intro_text__font_size'] ?: 18;
	$vars['b42s__intro_text__line_height'] = $mods['b42s__intro_text__line_height'] ?: 1.6;
	$vars['b42s__intro_text__margin_bottom'] = $mods['b42s__intro_text__margin_bottom'] ?: 18;
	$vars['b42s__intro_text_alt__font_size'] = $mods['b42s__intro_text_alt__font_size'] ?: 20;
	$vars['b42s__intro_text_alt__line_height'] = $mods['b42s__intro_text_alt__line_height'] ?: 1.6;
	$vars['b42s__intro_text_alt__margin_bottom'] = $mods['b42s__intro_text_alt__margin_bottom'] ?: 20;
	$vars['b42s__small_text__font_size'] = $mods['b42s__small_text__font_size'] ?: 14;
	$vars['b42s__small_text__line_height'] = $mods['b42s__small_text__line_height'] ?: 1.2;
	$vars['b42s__small_text__margin_bottom'] = $mods['b42s__small_text__margin_bottom'] ?: 10;

  return $vars;
});