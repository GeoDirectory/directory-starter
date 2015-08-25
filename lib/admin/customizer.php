<?php
function directory_theme_customizer( $wp_customize ) {
	//  =============================
	//  = Panels                  =
	//  =============================
	$wp_customize->add_panel( 'dt_general_panel', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => 'General',
		'description'    => '',
	) );

	$wp_customize->add_panel( 'dt_header_panel', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => 'Header',
		'description'    => '',
	) );

	$wp_customize->add_panel( 'dt_body_panel', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => 'Body',
		'description'    => '',
	) );

	$wp_customize->add_panel( 'dt_footer_panel', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => 'Footer',
		'description'    => '',
	) );

	//  =============================
	//  = Sections                  =
	//  =============================

	// general
	$wp_customize->add_section( 'dt_alerts_section', array(
		'title'       => __( 'Alert Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Alert Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_general_panel',
	) );

	$wp_customize->add_section( 'dt_button_section', array(
		'title'       => __( 'Button Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Button Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_general_panel',
	) );

	$wp_customize->add_section( 'dt_general_spacing_section', array(
		'title'       => __( 'Spacing', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Spacing', DIRECTORY_THEME ),
		'panel'  => 'dt_general_panel',
	) );

	// header
	$wp_customize->add_section( 'dt_header_logo_section', array(
		'title'       => __( 'Logo', DIRECTORY_THEME ),
		'priority'    => 9,
		'description' => __( 'Logo', DIRECTORY_THEME ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_text_section', array(
		'title'       => __( 'Text Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Text Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_bg_section', array(
		'title'       => __( 'Background Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Background Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_typography_section', array(
		'title'       => __( 'Typography', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Typography', DIRECTORY_THEME ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_spacing_section', array(
		'title'       => __( 'Spacing', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Spacing', DIRECTORY_THEME ),
		'panel'  => 'dt_header_panel',
	) );

	// Body

	$wp_customize->add_section( 'dt_body_text_section', array(
		'title'       => __( 'Text Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Text Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_body_panel',
	) );

	$wp_customize->add_section( 'dt_body_bg_section', array(
		'title'       => __( 'Background Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Background Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_body_panel',
	) );

	$wp_customize->add_section( 'dt_body_typography_section', array(
		'title'       => __( 'Typography', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Typography', DIRECTORY_THEME ),
		'panel'  => 'dt_body_panel',
	) );

	$wp_customize->add_section( 'dt_body_spacing_section', array(
		'title'       => __( 'Spacing', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Spacing', DIRECTORY_THEME ),
		'panel'  => 'dt_body_panel',
	) );

	// footer
	$wp_customize->add_section( 'dt_footer_text_section', array(
		'title'       => __( 'Text Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Text Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_bg_section', array(
		'title'       => __( 'Background Colors', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Background Colors', DIRECTORY_THEME ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_typography_section', array(
		'title'       => __( 'Typography', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Typography', DIRECTORY_THEME ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_spacing_section', array(
		'title'       => __( 'Spacing', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Spacing', DIRECTORY_THEME ),
		'panel'  => 'dt_footer_panel',
	) );



	//  =============================
	//  = logo                      =
	//  =============================
	$wp_customize->add_setting( 'logo', array(
		'sanitize_callback' => 'esc_url_raw',
		'description' => __( 'Upload a logo to replace the default site name and description in the header', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label'    => __( 'Logo', DIRECTORY_THEME ),
		'section'  => 'dt_header_logo_section',
		'settings' => 'logo',
	) ) );
	//  =============================
	//  = container                 =
	//  =============================
	$wp_customize->add_setting( 'dt_container_width', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_WIDTH,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'dt_container_width', array(
		'type'        => 'text',
		'label'   => 'Desktop Container Width',
		'section' => 'dt_general_spacing_section',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTAINER_WIDTH ),
	) );


	$wp_customize->add_setting( 'dt_container_padding_right', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_PADDING_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_padding_right', array(
		'label'   => 'Container Padding Right',
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTAINER_PADDING_RIGHT ),
	) );


	$wp_customize->add_setting( 'dt_container_padding_left', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_PADDING_LEFT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_padding_left', array(
		'label'   => 'Container Padding Left',
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTAINER_PADDING_LEFT ),
	) );


	$wp_customize->add_setting( 'dt_container_margin_right', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_MARGIN_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_margin_right', array(
		'label'   => 'Container Margin Right',
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTAINER_MARGIN_RIGHT ),
	) );


	$wp_customize->add_setting( 'dt_container_margin_left', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_MARGIN_LEFT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_margin_left', array(
		'label'   => 'Container Margin Left',
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTAINER_MARGIN_LEFT ),
	) );

	//  =============================
	//  = Logo                      =
	//  =============================
	$wp_customize->add_setting( 'dt_logo_margin_right', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_logo_margin_right', array(
		'label'   => 'Logo Margin Right',
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LOGO_MARGIN_RIGHT ),
	) );


	$wp_customize->add_setting( 'dt_logo_margin_left', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_LEFT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_logo_margin_left', array(
		'label'   => 'Logo Margin Left',
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LOGO_MARGIN_LEFT ),
	) );


	$wp_customize->add_setting( 'dt_logo_margin_top', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_TOP,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_logo_margin_top', array(
		'label'   => 'Logo Margin Top',
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LOGO_MARGIN_TOP ),
	) );

	//  =============================
	//  = Typography                =
	//  =============================
	$wp_customize->add_setting( 'dt_font_family', array(
		'transport' => 'postMessage',
		'default'     => DT_FONT_FAMILY,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_font_family', array(
		'label'   => 'Font Family',
		'section' => 'dt_body_typography_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_FONT_FAMILY ),
	) );


	$wp_customize->add_setting( 'dt_font_size', array(
		'transport' => 'postMessage',
		'default'     => DT_FONT_SIZE,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_font_size', array(
		'label'   => 'Font Size',
		'section' => 'dt_body_typography_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_FONT_SIZE ),
	) );


	$wp_customize->add_setting( 'dt_line_height', array(
		'transport' => 'postMessage',
		'default'     => DT_LINE_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_line_height', array(
		'label'   => 'Line Height',
		'section' => 'dt_body_typography_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LINE_HEIGHT ),
	) );
	//  =============================
	//  = Colors                    =
	//  =============================

	$wp_customize->add_setting( 'dt_body_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BODY_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_body_color', array(
		'label'       => __( 'Body Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_body_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_BODY_COLOR ),
	) ) );

	//  =============================
	//  = content box colors        =
	//  =============================
	$wp_customize->add_setting( 'dt_content_bg', array(
		'transport' => 'postMessage',
		'default'           => DT_CONTENT_BG,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_content_bg', array(
		'label'       => __( 'Content Box Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_bg_section',
		'settings'    => 'dt_content_bg',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTENT_BG ),
	) ) );

	$wp_customize->add_setting( 'dt_content_border', array(
		'transport' => 'postMessage',
		'default'           => DT_CONTENT_BORDER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_content_border', array(
		'label'       => __( 'Content Box Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_bg_section',
		'settings'    => 'dt_content_border',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTENT_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_content_shadow', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTENT_SHADOW,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_content_shadow', array(
		'label'   => 'Content Box Shadow Color',
		'section' => 'dt_body_bg_section',
		'settings'    => 'dt_content_shadow',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_CONTENT_SHADOW ),
	) );

	//  =============================
	//  = h1 to h6                  =
	//  =============================
	$wp_customize->add_setting( 'dt_h1toh6_color', array(
		'transport' => 'postMessage',
		'default'           => DT_H1TOH6_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_h1toh6_color', array(
		'label'       => __( 'h1 to h6 Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_h1toh6_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_H1TOH6_COLOR ),
	) ) );

	//  =============================
	//  = Alerts                    =
	//  =============================

	$wp_customize->add_setting( 'dt_alert_yellow', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_YELLOW,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow', array(
		'label'       => __( 'Alert Warning Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_YELLOW ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_RED,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red', array(
		'label'       => __( 'Alert Error Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_RED ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_GREEN,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green', array(
		'label'       => __( 'Alert Success Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_GREEN ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_BLUE,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue', array(
		'label'       => __( 'Alert Info Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_BLUE ),
	) ) );


	$wp_customize->add_setting( 'dt_alert_yellow_text', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_YELLOW_TEXT,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow_text', array(
		'label'       => __( 'Alert Warning Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow_text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_YELLOW_TEXT ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red_text', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_RED_TEXT,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red_text', array(
		'label'       => __( 'Alert Error Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red_text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_RED_TEXT ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green_text', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_GREEN_TEXT,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green_text', array(
		'label'       => __( 'Alert Success Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green_text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_GREEN_TEXT ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue_text', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_BLUE_TEXT,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue_text', array(
		'label'       => __( 'Alert Info Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue_text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_BLUE_TEXT ),
	) ) );


	$wp_customize->add_setting( 'dt_alert_yellow_border', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_YELLOW_BORDER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow_border', array(
		'label'       => __( 'Alert Warning Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow_border',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_YELLOW_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red_border', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_RED_BORDER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red_border', array(
		'label'       => __( 'Alert Error Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red_border',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_RED_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green_border', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_GREEN_BORDER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green_border', array(
		'label'       => __( 'Alert Success Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green_border',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_GREEN_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue_border', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_BLUE_BORDER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue_border', array(
		'label'       => __( 'Alert Info Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue_border',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_ALERT_BLUE_BORDER ),
	) ) );

	//  =============================
	//  = Links                    =
	//  =============================
	$wp_customize->add_setting( 'dt_link_color', array(
		'default'           => DT_LINK_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_color', array(
		'label'       => __( 'Link Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_link_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LINK_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_link_hover', array(
		'default'           => DT_LINK_HOVER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_hover', array(
		'label'       => __( 'Link Hover Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_link_hover',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LINK_HOVER ),
	) ) );

	$wp_customize->add_setting( 'dt_link_visited', array(
		'default'           => DT_LINK_VISITED,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_visited', array(
		'label'       => __( 'Link Visited Color', DIRECTORY_THEME ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_link_visited',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_LINK_VISITED ),
	) ) );

	//  =============================
	//  = Header                    =
	//  =============================

	$wp_customize->add_setting( 'dt_header_height', array(
		'transport' => 'postMessage',
		'default'     => DT_HEADER_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_header_height', array(
		'label'   => 'Header Height',
		'section' => 'dt_header_spacing_section',
		'settings'    => 'dt_header_height',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_HEIGHT ),
	) );

	$wp_customize->add_setting( 'dt_header_bg_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_BG_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_bg_color', array(
		'label'       => __( 'Header Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_header_bg_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_BG_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_header_link_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_LINK_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_link_color', array(
		'label'       => __( 'Header Link Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_text_section',
		'settings'    => 'dt_header_link_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_LINK_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_header_text_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_TEXT_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_text_color', array(
		'label'       => __( 'Header Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_text_section',
		'settings'    => 'dt_header_text_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_TEXT_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_header_link_hover', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_LINK_HOVER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_link_hover', array(
		'label'       => __( 'Header Link Hover Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_text_section',
		'settings'    => 'dt_header_link_hover',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_LINK_HOVER ),
	) ) );


	$wp_customize->add_setting( 'dt_header_border_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_BORDER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_border_color', array(
		'label'       => __( 'Header Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_header_border_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_BORDER_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_header_shadow_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_SHADOW_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_shadow_color', array(
		'label'       => __( 'Header Shadow Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_header_shadow_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_HEADER_SHADOW_COLOR ),
	) ) );

	//  =============================
	//  = Primary Nav               =
	//  =============================
	$wp_customize->add_setting( 'dt_p_nav_height', array(
		'transport' => 'postMessage',
		'default'     => DT_P_NAV_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_p_nav_height', array(
		'label'   => 'Primary Menu Height',
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_P_NAV_HEIGHT ),
	) );


	$wp_customize->add_setting( 'dt_p_nav_line_height', array(
		'transport' => 'postMessage',
		'default'     => DT_P_NAV_LINE_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_p_nav_line_height', array(
		'label'   => 'Primary Menu Line Height',
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_P_NAV_LINE_HEIGHT ),
	) );


	$wp_customize->add_setting( 'dt_p_nav_padding_left_right', array(
		'transport' => 'postMessage',
		'default'     => DT_P_NAV_PADDING_LEFT_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_p_nav_padding_left_right', array(
		'label'   => 'Primary Menu Padding Left Right',
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_P_NAV_PADDING_LEFT_RIGHT ),
	) );

	//  =============================
	//  = Primary Nav Submenu       =
	//  =============================
	$wp_customize->add_setting( 'dt_p_nav_submenu_bg_color', array(
		'transport' => 'postMessage',
		'default'           => DT_P_NAV_SUBMENU_BG_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_submenu_bg_color', array(
		'label'       => __( 'Primary Menu - Sub menu Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_p_nav_submenu_bg_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_P_NAV_SUBMENU_BG_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_p_nav_submenu_bg_hover', array(
		'transport' => 'postMessage',
		'default'           => DT_P_NAV_SUBMENU_BG_HOVER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_submenu_bg_hover', array(
		'label'       => __( 'Primary Menu - Sub menu Background hover Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_p_nav_submenu_bg_hover',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_P_NAV_SUBMENU_BG_HOVER ),
	) ) );

	//  =============================
	//  = Footer Widget             =
	//  =============================
	$wp_customize->add_setting( 'dt_fw_bg', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BG,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_bg', array(
		'label'       => __( 'Footer Section Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_bg',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_FW_BG ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_border_top_color', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BORDER_TOP_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_border_top_color', array(
		'label'       => __( 'Footer Section Border Top Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_border_top_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_FW_BORDER_TOP_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_border_bottom_color', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BORDER_BOTTOM_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_border_bottom_color', array(
		'label'       => __( 'Footer Section Border Bottom Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_border_bottom_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_FW_BORDER_BOTTOM_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_box_shadow_color', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BOX_SHADOW_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_box_shadow_color', array(
		'label'       => __( 'Footer Section Box Shadow Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_box_shadow_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_FW_BOX_SHADOW_COLOR ),
	) ) );

	//  =============================
	//  =     Copyright             =
	//  =============================

	$wp_customize->add_setting( 'dt_copyright_bg', array(
		'transport' => 'postMessage',
		'default'           => DT_COPYRIGHT_BG,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_copyright_bg', array(
		'label'       => __( 'Copyright Section Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_copyright_bg',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_COPYRIGHT_BG ),
	) ) );


	$wp_customize->add_setting( 'dt_copyright_padding_top', array(
		'transport' => 'postMessage',
		'default'     => DT_COPYRIGHT_PADDING_TOP,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_copyright_padding_top', array(
		'label'   => 'Copyright Padding Top',
		'section' => 'dt_footer_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_COPYRIGHT_PADDING_TOP ),
	) );


	$wp_customize->add_setting( 'dt_copyright_padding_bottom', array(
		'transport' => 'postMessage',
		'default'     => DT_COPYRIGHT_PADDING_BOTTOM,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_copyright_padding_bottom', array(
		'label'   => 'Copyright Padding Bottom',
		'section' => 'dt_footer_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_COPYRIGHT_PADDING_BOTTOM ),
	) );


	$wp_customize->add_setting( 'dt_copyright_border_color', array(
		'transport' => 'postMessage',
		'default'           => DT_COPYRIGHT_BORDER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_copyright_border_color', array(
		'label'       => __( 'Copyright Section Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_copyright_border_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_COPYRIGHT_BORDER_COLOR ),
	) ) );

	//  =============================
	//  =     Buttons               =
	//  =============================

	$wp_customize->add_setting( 'dt_btn_text_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_TEXT_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_text_color', array(
		'label'       => __( 'Button Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_text_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_BTN_TEXT_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_bg_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_BG_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_bg_color', array(
		'label'       => __( 'Button Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_bg_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_BTN_BG_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_hover_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_HOVER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_hover_color', array(
		'label'       => __( 'Button Hover Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_hover_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_BTN_HOVER_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_border_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_BORDER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_border_color', array(
		'label'       => __( 'Button Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_border_color',
		'description' => sprintf( __( 'Default: %s', DIRECTORY_THEME ), DT_BTN_BORDER_COLOR ),
	) ) );

	//  =============================
	//  =     Built in Settings     =
	//  =============================
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

	$wp_customize->get_section( 'title_tagline' )->panel  = 'dt_general_panel';
	$wp_customize->get_section( 'colors' )->panel  = 'dt_general_panel';

	$wp_customize->get_section( 'header_image' )->panel  = 'dt_header_panel';
	$wp_customize->get_section( 'header_image' )->priority  = 10;

	$wp_customize->get_section( 'background_image' )->panel  = 'dt_body_panel';
	$wp_customize->get_section( 'background_image' )->priority  = 10;

	$wp_customize->get_section( 'static_front_page' )->panel  = 'dt_general_panel';
}

add_action( 'customize_register', 'directory_theme_customizer' );
