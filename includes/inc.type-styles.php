<?php
	
// Add Formats Dropdown Menu To MCE
if ( ! function_exists( 'wpex_style_select' ) ) {
	function wpex_style_select( $buttons ) {
		array_push( $buttons, 'styleselect' );
		return $buttons;
	}
}
add_filter( 'mce_buttons', 'wpex_style_select' );

// Add new styles to the TinyMCE "formats" menu dropdown
if ( ! function_exists( 'wpex_styles_dropdown' ) ) {
	function wpex_styles_dropdown( $settings ) {

		// Create array of new styles
		$new_styles = array(
        	array(
            	'title' => 'Headings',
                'items' => array(
					array(
						'title' => 'Heading 1',
						'block' => 'h1'
					),
					array(
						'title' => 'Heading 2',
						'block' => 'h2'
					),
					array(
						'title' => 'Heading 3',
						'block' => 'h3'
					),
					array(
						'title' => 'Heading 4',
						'block' => 'h4'
					),
					array(
						'title' => 'Heading 5',
						'block' => 'h5'
					),
					array(
						'title' => 'Heading 6',
						'block' => 'h6'
					)
				)
			),
			array(
				'title' => 'Buttons',
				'items' => array(
					array(
						'title' => 'Primary Button',
						'selector' => 'a',
						'classes' => 'fl-button'
					),
					array(
						'title' => 'Primary Button (Small)',
						'selector' => 'a',
						'classes' => 'fl-button fl-button_small'
					),
					array(
						'title' => 'Ghost Button',
						'selector' => 'a',
						'classes' => 'fl-button fl-button_ghost'
					),
					array(
						'title' => 'Ghost Button (Small)',
						'selector' => 'a',
						'classes' => 'fl-button fl-button_ghost fl-button_small'
					)
				)
			),
			array(
				'title' => 'Text',
				'items' => array(
					array(
						'title' => 'Paragraph',
						'block' => 'p',
					),
					array(
						'title' => 'Intro Text',
						'block' => 'p',
						'classes' => 'intro_text'
					),
					array(
						'title' => 'Intro Text (Alt)',
						'block' => 'p',
						'classes' => 'intro_text_alt'
					),
					array(
						'title' => 'Small Text',
						'block' => 'p',
						'classes' => 'small_text'
					)
				)
			)
		);

		// Merge old & new styles
		$settings['style_formats_merge'] = true;

		// Add new styles
		$settings['style_formats'] = json_encode( $new_styles );

		// Return New Settings
		return $settings;

	}
}
add_filter( 'tiny_mce_before_init', 'wpex_styles_dropdown' );

// Hooks your functions into the correct filters
function b42s_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'b42s_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'b42s_register_mce_button' );
	}
}
add_action('admin_head', 'b42s_add_mce_button');

// Declare script for new button
function b42s_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['b42s_mce_button'] = get_stylesheet_directory_uri() .'/js/mce-button.js';
	return $plugin_array;
}

// Register new button in the editor
function b42s_register_mce_button( $buttons ) {
	array_push( $buttons, 'b42s_mce_button' );
	return $buttons;
}

add_filter('tiny_mce_before_init','b42s_editor_dynamic_styles');
function b42s_editor_dynamic_styles( $mceInit ) {
    $styles = 'body.mce-content-body .fl-button{background-color:#4a4a4a;color:#fff;padding:12px 24px;display:inline-block;text-decoration:none;border:2px solid #4a4a4a;border-radius:9999px}body.mce-content-body .fl-button:focus,body.mce-content-body .fl-button:hover{color:#4a4a4a;background-color:transparent}body.mce-content-body .fl-button.fl-button_ghost{color:#4a4a4a;background-color:transparent}body.mce-content-body .fl-button.fl-button_ghost:focus,body.mce-content-body .fl-button.fl-button_ghost:hover{background-color:#4a4a4a;color:#fff}body.mce-content-body .fl-button.fl-button_small{padding:5px 15px}body.mce-content-body p.intro_text{font-size:1.5em}body.mce-content-body p.intro_text_alt{font-size:1.25em}body.mce-content-body p.small_text{font-size:.75em}';
    if ( isset( $mceInit['content_style'] ) ) {
        $mceInit['content_style'] .= ' ' . $styles . ' ';
    } else {
        $mceInit['content_style'] = $styles . ' ';
    }
    return $mceInit;
}