<?php
	
add_filter( 'fl_theme_add_panel_data', function( $data, $key ) {
        if ( 'fl-general' === $key ) {
                // Intro: Font Size
                $data['sections']['fl-body-font']['options']['b42s__intro_text__font_size'] = array(
					'setting' => array(
                    	'default'		=> '18',
                    ),
                    'control' => array(
                        'class'			=> 'FLCustomizerControl',
                        'type'			=> 'slider',
                        'label'			=> __( 'Intro: Font Size', 'b42s' ),
                        'responsive'	=> true,
                        'choices' => array(
                            'min'		=> 10,
                            'max'		=> 72,
                            'step'		=> 1,
                        ),
                    ),
                );
                
                // Paragraph: Margin Bottom
                $data['sections']['fl-body-font']['options']['b42s__body_font__margin_bottom'] = array(
	              	'setting' => array(
		              	'default'		=> '10',
	              	),
	              	'control' => array(
		              	'class'			=> 'FLCustomizerControl',
		              	'type'			=> 'slider',
		              	'label'			=> __('P: Margin Bottom', 'b42s' ),
		              	'responsive'	=> true,
		              	'choices' => array(
			            	'min'		=> 0,
							'max'		=> 100,
							'step'		=> 1
		              	),
	              	),
                );
                
                // Intro: Line Height
                $data['sections']['fl-body-font']['options']['b42s__intro_text__line_height'] = array(
	                'setting' => array(
		                'default'		=> '1.6'
	                ),
	                'control' => array(
		                'class'			=> 'FLCustomizerControl',
		                'type'			=> 'slider',
		                'label'			=> __('Intro: Line Height', 'b42s'),
		                'responsive'	=> true,
		                'choices' => array(
			            	'min'		=> 1,
			            	'max'		=> 2.5,
			            	'step'		=> 0.05
		                ),
	                ),
                );
        }
        return $data;
}, 10, 2 );




/*

*/
