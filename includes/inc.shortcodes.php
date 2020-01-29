<?php

//Year Shortcode
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
add_shortcode('YEAR', 'year_shortcode');