<?php
function directory_theme_customizer( $wp_customize ) {
	//  =============================
	//  = Header                    =
	//  =============================
	$wp_customize->add_section( 'directory_theme_header_section' , array(
		'title'       => __( 'Header', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Header Section', DIRECTORY_THEME ),
	) );

	//logo
	$wp_customize->add_setting('directory_theme_options[logo]', array(
		'description' => __( 'Upload a logo to replace the default site name and description in the header', DIRECTORY_THEME ),
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label'    => __( 'Logo', DIRECTORY_THEME ),
		'section'  => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[logo]',
	)));

	//height
	$wp_customize->add_setting('directory_theme_options[header_height]', array(
		'default' => 85
	));
	$wp_customize->add_control( 'header_height', array(
		'type'        => 'number',
		'priority'    => 10,
		'section'     => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[header_height]',
		'label'       => 'Header Height',
		'description' => __( 'Enter header section height', DIRECTORY_THEME ),
	) );
	//header bg color
	$wp_customize->add_setting('directory_theme_options[header_bg_color]', array(
		'default'           => '2F2F2F',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
		'label'    => __('Header Background Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[header_bg_color]',
		'description' => __( 'Select header background color', DIRECTORY_THEME ),
	)));
	//header link color
	$wp_customize->add_setting('directory_theme_options[header_link_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_link_color', array(
		'label'    => __('Header Link Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[header_link_color]',
		'description' => __( 'Select header link color', DIRECTORY_THEME ),
	)));
	//header link hover color
	$wp_customize->add_setting('directory_theme_options[header_link_hover_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_link_hover_color', array(
		'label'    => __('Header Link Hover Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[header_link_hover_color]',
		'description' => __( 'Select header link hover color', DIRECTORY_THEME ),
	)));
	//header text color
	$wp_customize->add_setting('directory_theme_options[header_text_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_text_color', array(
		'label'    => __('Header Text Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[header_text_color]',
		'description' => __( 'Select header text color', DIRECTORY_THEME ),
	)));
	//header border bottom color
	$wp_customize->add_setting('directory_theme_options[header_border_bottom_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_border_bottom_color', array(
		'label'    => __('Header Border Bottom Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_header_section',
		'settings' => 'directory_theme_options[header_border_bottom_color]',
		'description' => __( 'Select header border bottom color', DIRECTORY_THEME ),
	)));

	//  =============================
	//  = Alerts                    =
	//  =============================
	$wp_customize->add_section( 'directory_theme_alerts_section' , array(
		'title'       => __( 'Alerts', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Alert colors', DIRECTORY_THEME ),
	) );

	// Alert info color
	$wp_customize->add_setting('directory_theme_options[alert_info_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'alert_info_color', array(
		'label'    => __('Header Alert Info Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_alerts_section',
		'settings' => 'directory_theme_options[alert_info_color]',
		'description' => __( 'Select alert info color', DIRECTORY_THEME ),
	)));
	// Alert warning color
	$wp_customize->add_setting('directory_theme_options[alert_warning_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'alert_warning_color', array(
		'label'    => __('Header Alert Warning Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_alerts_section',
		'settings' => 'directory_theme_options[alert_warning_color]',
		'description' => __( 'Select alert warning color', DIRECTORY_THEME ),
	)));
	// Alert error color
	$wp_customize->add_setting('directory_theme_options[alert_error_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'alert_error_color', array(
		'label'    => __('Header Alert Error Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_alerts_section',
		'settings' => 'directory_theme_options[alert_error_color]',
		'description' => __( 'Select alert error color', DIRECTORY_THEME ),
	)));
	// Alert success color
	$wp_customize->add_setting('directory_theme_options[alert_success_color]', array(
		'default'           => 'FFFFFF',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'           => 'option',
	));
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'alert_success_color', array(
		'label'    => __('Header Alert Success Color', DIRECTORY_THEME),
		'section'  => 'directory_theme_alerts_section',
		'settings' => 'directory_theme_options[alert_success_color]',
		'description' => __( 'Select alert success color', DIRECTORY_THEME ),
	)));
	//  =============================
	//  = Footer                    =
	//  =============================
	$wp_customize->add_section( 'directory_theme_footer_section' , array(
		'title'       => __( 'Footer', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Footer Section', DIRECTORY_THEME ),
	) );
	$wp_customize->add_setting( 'copyright_textbox', array(
		'default' => DT_COPYRIGHT_TEXT,
		'capability'     => 'edit_theme_options',
		'description' => __( 'Enter your copyright text here', DIRECTORY_THEME ),
	));
	$wp_customize->add_control( 'copyright_textbox', array(
		'label' => 'Copyright Text',
		'section' => 'directory_theme_footer_section',
		'type' => 'text',
	));

}
add_action( 'customize_register', 'directory_theme_customizer' );
