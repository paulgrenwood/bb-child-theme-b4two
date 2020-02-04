<?php
	
add_filter( 'fl_theme_add_panel_data', function( $data, $key ) {
        if ( 'fl-general' === $key ) {
                $data['sections']['fl-body-font']['options']['gwstandard__intro_text__font_size'] = array(

                        'setting' => array(
                                'default' => '18',
                                ),
                        'control' => array(
                                'class'      => 'FLCustomizerControl',
                                'type'       => 'slider',
                                'label'      => __( 'Intro Text Font Size', 'gwstandard' ),
                                'responsive' => true,
                                'choices'    => array(
                                        'min'  => 10,
                                        'max'  => 72,
                                        'step' => 1,
                                ),
                        ),
                );
        }
        return $data;
}, 10, 2 );


/*
//INTRO TEXT FONT SIZE - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__intro_text__font_size',
		array(
			'default' => '18',
			'transport' => 'postMessage'
		)
	);
	//INTRO TEXT FONT SIZE - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__intro_text__font_size',
			array(
				'label'		=> __('Intro Text Font Size', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'  => 10,
					'max'  => 72,
					'step' => 1
				)
			)
		)
	);
*/
