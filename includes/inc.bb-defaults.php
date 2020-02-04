<?php

add_filter( 'fl_builder_register_settings_form', 'b42s__beaver_builder_register_settings_form_short', 10, 2 );
/** 
 * Filter the Global Settings Options.
 * Media breakpoints and form title have been changed.
 */
function b42s__beaver_builder_register_settings_form_short( $form, $id ) {
	if ( 'global' == $id ) {
    // Modify the form title and media breakpoints.
	$form['title'] = 'Site-Wide Settings';
	
	//Default Row Width: 900px	
	$form['tabs']['general']['sections']['rows']['fields']['row_width']['default'] = '900';   
	//Default Row Padding: 40px
	$form['tabs']['general']['sections']['rows']['fields']['row_padding']['default'] = '40';
		
	$form['tabs']['general']['sections']['rows']['fields']['row_margins']['default'] = '40';
	
	//Default Responsive Breakpoint: 767px	
	$form['tabs']['general']['sections']['responsive']['fields']['responsive_breakpoint']['default'] = '767';
	
	//Default Module Margins: 10px
	$form['tabs']['general']['sections']['modules']['fields']['module_margins']['default'] = '10';	   
   } 
   
   return $form;
}