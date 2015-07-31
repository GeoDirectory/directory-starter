<?php
function directory_theme_customizer( $wp_customize ) {
	// logo
	$wp_customize->add_section( 'directory_theme_logo_section' , array(
		'title'       => __( 'Logo', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Upload a logo to replace the default site name and description in the header', DIRECTORY_THEME ),
	) );

	$wp_customize->add_setting( 'directory_theme_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control(
			$wp_customize,
			'directory_theme_logo',
			array(
				'label'    => __( 'Logo', DIRECTORY_THEME ),
				'section'  => 'directory_theme_logo_section',
				'settings' => 'directory_theme_logo',
			)
		)
	);

	//copyright
	$wp_customize->add_section( 'directory_theme_copyright_section' , array(
		'title'       => __( 'Copyright', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Enter your copyright text here', DIRECTORY_THEME ),
	) );
	$wp_customize->add_setting(
		'copyright_textbox',
		array(
			'default' => DT_COPYRIGHT_TEXT,
		)
	);
	$wp_customize->add_control(
		'copyright_textbox',
		array(
			'label' => 'Copyright Text',
			'section' => 'directory_theme_copyright_section',
			'type' => 'text',
		)
	);

}
add_action( 'customize_register', 'directory_theme_customizer' );
