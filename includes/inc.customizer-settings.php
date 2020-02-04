<?php

add_action('customize_register','gwstandard_customizer_options', 12);

function gwstandard_customizer_options( $wp_customize ){
	
	$wp_customize->remove_panel( 'fl-header' );
	$wp_customize->remove_panel( 'fl-footer' );


	/*
	===
	LOGO
	===
	*/
	
	// LOGO - SETTINGS
	$wp_customize->add_setting( 'gwstandard_theme_logo' );
	
	// LOGO - CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Image_control(
			$wp_customize,
			'gwstandard_theme_logo',
			array(
				'label'		=> __( 'Upload Logo', 'gwstandard' ),
				'section' 	=> 'title_tagline',
				'settings'	=> 'gwstandard_theme_logo'
			)
		)
	);

	/*
	===
	HEADING CONTROLS
	===
	*/
	
	//H2 - SETTINGS
	$wp_customize->add_setting(
		'gwstandard_h2_color',
		array(
			'default' => '#4a4a4a',
		)
	);
	//H2 - CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gwstandard_h2_color',
			array(
				'label'		=> __( 'H2 Color', 'gwstandard' ),
				'section'	=> 'fl-heading-font',
				'settings'	=> 'gwstandard_h2_color'		
			)
		)
	);
	
	
	//H3 - SETTINGS
	$wp_customize->add_setting(
		'gwstandard_h3_color',
		array(
			'default' => '#4a4a4a',
		)
	);
	
	//H3 - CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gwstandard_h3_color',
			array(
				'label'		=> __( 'H3 Color', 'gwstandard' ),
				'section'	=> 'fl-heading-font',
				'settings'	=> 'gwstandard_h3_color'		
			)
		)
	);
	
	
	//H4 - SETTINGS
	$wp_customize->add_setting(
		'gwstandard_h4_color',
		array(
			'default' => '#4a4a4a',
		)
	);
	
	//H4 - CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gwstandard_h4_color',
			array(
				'label'		=> __( 'H4 Color', 'gwstandard' ),
				'section'	=> 'fl-heading-font',
				'settings'	=> 'gwstandard_h4_color'		
			)
		)
	);
	
	
	//H5 - SETTINGS
	$wp_customize->add_setting(
		'gwstandard_h5_color',
		array(
			'default' => '#4a4a4a',
		)
	);
	
	//H5 - CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gwstandard_h5_color',
			array(
				'label'		=> __( 'H5 Color', 'gwstandard' ),
				'section'	=> 'fl-heading-font',
				'settings'	=> 'gwstandard_h5_color'		
			)
		)
	);
	
	//H6 - SETTINGS
	$wp_customize->add_setting(
		'gwstandard_h6_color',
		array(
			'default' => '#4a4a4a',
		)
	);
	
	//H6 - CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'gwstandard_h6_color',
			array(
				'label'		=> __( 'H6 Color', 'gwstandard' ),
				'section'	=> 'fl-heading-font',
				'settings'	=> 'gwstandard_h6_color'		
			)
		)
	);
	
	/*
	===
	INTRO / SMALL TEXT
	===
	*/
	
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
			),
		),
		'responsive'	=> true,
	);
	
	//PARAGRAPH - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__body_font__margin_bottom',
		array(
			'default' => '10',
			'transport' => 'postMessage'
		)
	);
	//PARAGRAPH - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__body_font__margin_bottom',
			array(
				'label'		=> __( 'Paragraph Margin Bottom', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 0,
					'max'	=> 100,
					'step'	=> 1
				)
			)
		)
	);
	
	
	//INTRO TEXT LINE HEIGHT - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__intro_text__line_height',
		array(
			'default' => '1.6',
			'transport' => 'postMessage'
		)
	);
	
	//INTRO TEXT LINE HEIGHT - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__intro_text__line_height',
			array(
				'label'		=> __('Intro Text Line Height', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 2.5,
					'step'	=> 0.05
				)
			)
		)
	);
	
	//INTRO TEXT MARGIN BOTTOM - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__intro_text__margin_bottom',
		array(
			'default' => '18',
			'transport' => 'postMessage'
		)
	);
	
	//INTRO TEXT MARGIN BOTTOM - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__intro_text__margin_bottom',
			array(
				'label'		=> __( 'Intro Text Margin Bottom', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 0,
					'max'	=> 100,
					'step'	=> 1
				)
			)
		)
	);
	
	
	//SECONDARY INTRO FONT SIZE - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__secondary_intro__font_size',
		array(
			'default' => '20',
			'transport' => 'postMessage'
		)	
	);
	
	//SECONDARY INTRO FONT SIZE - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__secondary_intro__font_size',
			array(
				'label'		=> __('Secondary Intro Font Size', 'gwstandard' ),
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
	
	//SECONDARY INTRO LINE HEIGHT - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__secondary_intro__line_height',
		array(
			'default' => '1.6',
			'transport' => 'postMessage'
		)
	);
	
	//SECONDARY INTRO LINE HEIGHT - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__secondary_intro__line_height',
			array(
				'label'		=> __('Secondary Intro Line Height', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 2.5,
					'step'	=> 0.05
				)
			)
		)
	);
	
	//SECONDARY INTRO MARGIN BOTTOM - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__secondary_intro__margin_bottom',
		array(
			'default' => '20',
			'transport' => 'postMessage'
		)
	);
	
	//SECONDARY INTRO MARGIN BOTTOM - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__secondary_intro__margin_bottom',
			array(
				'label'		=> __( 'Secondary Intro Margin Bottom', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 0,
					'max'	=> 100,
					'step'	=> 1
				)
			)
		)
	);
	
	
	//SMALL TEXT FONT SIZE - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__small_text__font_size',
		array(
			'default' => '14',
			'transport' => 'postMessage'
		)
	);
	
	//SMALL TEXT FONT SIZE - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__small_text__font_size',
			array(
				'label'		=> __('Small Text Font Size', 'gwstandard' ),
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
		
	//SMALL TEXT LINE HEIGHT - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__small_text__line_height',
		array(
			'default' => '1.2',
			'transport' => 'postMessage'
		)
	);
	
	//SMALL TEXT LINE HEIGHT - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__small_text__line_height',
			array(
				'label'		=> __('Small Text Line Height', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 1,
					'max'	=> 2.5,
					'step'	=> 0.05
				)
			)
		)
	);
	
	
	//SMALL TEXT MARGIN BOTTOM - SETTINGS
	$wp_customize->add_setting(
		'gwstandard__small_text__margin_bottom',
		array(
			'default' => '10',
			'transport' => 'postMessage'
		)
	);
	
	//SMALL TEXT MARGIN BOTTOM - CONTROLS
	$wp_customize->add_control(
		new FLCustomizerControl(
			$wp_customize,
			'gwstandard__small_text__margin_bottom',
			array(
				'label'		=> __( 'Small Text Margin Bottom', 'gwstandard' ),
				'type'		=> 'slider',
				'section'	=> 'fl-body-font',
				'choices'	=> array(
					'min'	=> 0,
					'max'	=> 100,
					'step'	=> 1
				)
			)
		)
	);
}
?>