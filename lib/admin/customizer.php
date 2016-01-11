<?php
function directory_theme_customizer( $wp_customize ) {

//  =============================
//  = Panels                  =
//  =============================

	$wp_customize->add_panel( 'dt_general_panel', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('General', 'directory-starter' ),
		'description'    => '',
	) );

	$wp_customize->add_panel( 'dt_header_panel', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Header', 'directory-starter' ),
		'description'    => '',
	) );

	$wp_customize->add_panel( 'dt_body_panel', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Body', 'directory-starter' ),
		'description'    => '',
	) );

	$wp_customize->add_panel( 'dt_footer_panel', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Footer', 'directory-starter' ),
		'description'    => '',
	) );

//  =============================
//  = Sections                  =
//  =============================

	//  =============================
	//  = General                   =
	//  =============================

	$wp_customize->add_section( 'dt_general_spacing_section', array(
		'title'       => __( 'Spacing', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Spacing', 'directory-starter' ),
		'panel'  => 'dt_general_panel',
	) );

	$wp_customize->add_section( 'dt_alerts_section', array(
		'title'       => __( 'Alert Colors', 'directory-starter' ),
		'priority'    => 50,
		'description' => __( 'Alert Colors', 'directory-starter' ),
		'panel'  => 'dt_general_panel',
	) );

	$wp_customize->add_section( 'dt_button_section', array(
		'title'       => __( 'Button Colors', 'directory-starter' ),
		'priority'    => 50,
		'description' => __( 'Button Colors', 'directory-starter' ),
		'panel'  => 'dt_general_panel',
	) );

	//  =============================
	//  = Header                    =
	//  =============================

	$wp_customize->add_section( 'dt_header_top_section', array(
		'title'       => __( 'Header Top', 'directory-starter' ),
		'priority'    => 8,
		'description' => __( 'Header Top', 'directory-starter' ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_logo_section', array(
		'title'       => __( 'Logo', 'directory-starter' ),
		'priority'    => 9,
		'description' => __( 'Logo', 'directory-starter' ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_text_section', array(
		'title'       => __( 'Text Colors', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Text Colors', 'directory-starter' ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_bg_section', array(
		'title'       => __( 'Background Colors', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Background Colors', 'directory-starter' ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_typography_section', array(
		'title'       => __( 'Typography', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Typography', 'directory-starter' ),
		'panel'  => 'dt_header_panel',
	) );

	$wp_customize->add_section( 'dt_header_spacing_section', array(
		'title'       => __( 'Spacing', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Spacing', 'directory-starter' ),
		'panel'  => 'dt_header_panel',
	) );

	//  =============================
	//  = Body                      =
	//  =============================

	$wp_customize->add_section( 'dt_body_text_section', array(
		'title'       => __( 'Text Colors', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Text Colors', 'directory-starter' ),
		'panel'  => 'dt_body_panel',
	) );

	$wp_customize->add_section( 'dt_body_bg_section', array(
		'title'       => __( 'Background Colors', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Background Colors', 'directory-starter' ),
		'panel'  => 'dt_body_panel',
	) );

	$wp_customize->add_section( 'dt_body_typography_section', array(
		'title'       => __( 'Typography', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Typography', 'directory-starter' ),
		'panel'  => 'dt_body_panel',
	) );

	$wp_customize->add_section( 'dt_body_spacing_section', array(
		'title'       => __( 'Spacing', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Spacing', 'directory-starter' ),
		'panel'  => 'dt_body_panel',
	) );

	//  =============================
	//  = Footer                    =
	//  =============================

	$wp_customize->add_section( 'dt_footer_text_section', array(
		'title'       => __( 'Text Colors', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Text Colors', 'directory-starter' ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_bg_section', array(
		'title'       => __( 'Background Colors', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Background Colors', 'directory-starter' ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_typography_section', array(
		'title'       => __( 'Typography', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Typography', 'directory-starter' ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_spacing_section', array(
		'title'       => __( 'Spacing', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Spacing', 'directory-starter' ),
		'panel'  => 'dt_footer_panel',
	) );

	$wp_customize->add_section( 'dt_footer_copy_text_section', array(
		'title'       => __( 'Copyright Text', 'directory-starter' ),
		'priority'    => 30,
		'description' => __( 'Copyright Text', 'directory-starter' ),
		'panel'  => 'dt_footer_panel',
	) );


//  =============================
//  = Settings                  =
//  =============================

/*********************************
 * General
 *********************************/

	/* Site Identity */

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_section( 'title_tagline' )->panel  = 'dt_general_panel';

	$wp_customize->get_section( 'colors' )->panel  = 'dt_general_panel';


	/* Spacing */

	$wp_customize->add_setting( 'dt_container_width', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_container_width_default_value', DT_CONTAINER_WIDTH),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'dt_container_width', array(
		'type'        => 'text',
		'label'   => __( 'Desktop Container Width', 'directory-starter' ),
		'section' => 'dt_general_spacing_section',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTAINER_WIDTH ),
	) );


	$wp_customize->add_setting( 'dt_container_padding_right', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_container_padding_right_default_value', DT_CONTAINER_PADDING_RIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_padding_right', array(
		'label'   => __( 'Container Padding Right', 'directory-starter' ),
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTAINER_PADDING_RIGHT ),
	) );


	$wp_customize->add_setting( 'dt_container_padding_left', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_container_padding_left_default_value', DT_CONTAINER_PADDING_LEFT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_padding_left', array(
		'label'   => __('Container Padding Left', 'directory-starter' ),
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTAINER_PADDING_LEFT ),
	) );


	$wp_customize->add_setting( 'dt_container_margin_right', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_container_margin_right_default_value', DT_CONTAINER_MARGIN_RIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_margin_right', array(
		'label'   => __('Container Margin Right', 'directory-starter' ),
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTAINER_MARGIN_RIGHT ),
	) );


	$wp_customize->add_setting( 'dt_container_margin_left', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_container_margin_left_default_value', DT_CONTAINER_MARGIN_LEFT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_container_margin_left', array(
		'label'   => __('Container Margin Left', 'directory-starter' ),
		'section' => 'dt_general_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTAINER_MARGIN_LEFT ),
	) );

	/* Static Front Page */

	$wp_customize->get_section( 'static_front_page' )->panel  = 'dt_general_panel';
	$wp_customize->get_section( 'static_front_page' )->priority  = 40;

	/* Alert Colors */

	$wp_customize->add_setting( 'dt_alert_yellow', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_yellow_default_value', DT_ALERT_YELLOW),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow', array(
		'label'       => __( 'Alert Warning Background Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_YELLOW ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_red_default_value', DT_ALERT_RED),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red', array(
		'label'       => __( 'Alert Error Background Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_RED ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_green_default_value', DT_ALERT_GREEN),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green', array(
		'label'       => __( 'Alert Success Background Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_GREEN ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_blue_default_value', DT_ALERT_BLUE),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue', array(
		'label'       => __( 'Alert Info Background Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_BLUE ),
	) ) );


	$wp_customize->add_setting( 'dt_alert_yellow_text', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_yellow_text_default_value', DT_ALERT_YELLOW_TEXT),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow_text', array(
		'label'       => __( 'Alert Warning Text Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow_text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_YELLOW_TEXT ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red_text', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_red_text_default_value', DT_ALERT_RED_TEXT),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red_text', array(
		'label'       => __( 'Alert Error Text Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red_text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_RED_TEXT ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green_text', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_green_text_default_value', DT_ALERT_GREEN_TEXT),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green_text', array(
		'label'       => __( 'Alert Success Text Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green_text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_GREEN_TEXT ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue_text', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_blue_text_default_value', DT_ALERT_BLUE_TEXT),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue_text', array(
		'label'       => __( 'Alert Info Text Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue_text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_BLUE_TEXT ),
	) ) );


	$wp_customize->add_setting( 'dt_alert_yellow_border', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_yellow_border_default_value', DT_ALERT_YELLOW_BORDER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow_border', array(
		'label'       => __( 'Alert Warning Border Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow_border',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_YELLOW_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red_border', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_red_border_default_value', DT_ALERT_RED_BORDER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red_border', array(
		'label'       => __( 'Alert Error Border Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red_border',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_RED_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green_border', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_green_border_default_value', DT_ALERT_GREEN_BORDER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green_border', array(
		'label'       => __( 'Alert Success Border Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green_border',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_GREEN_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue_border', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_alert_blue_border_default_value', DT_ALERT_BLUE_BORDER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue_border', array(
		'label'       => __( 'Alert Info Border Color', 'directory-starter' ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue_border',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ALERT_BLUE_BORDER ),
	) ) );

	/* Button Colors */

	$wp_customize->add_setting( 'dt_btn_text_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_btn_text_color_default_value', DT_BTN_TEXT_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_text_color', array(
		'label'       => __( 'Button Text Color', 'directory-starter' ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_text_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_BTN_TEXT_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_bg_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_btn_bg_color_default_value', DT_BTN_BG_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_bg_color', array(
		'label'       => __( 'Button Background Color', 'directory-starter' ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_bg_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_BTN_BG_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_hover_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_btn_hover_color_default_value', DT_BTN_HOVER_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_hover_color', array(
		'label'       => __( 'Button Hover Background Color', 'directory-starter' ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_hover_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_BTN_HOVER_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_border_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_btn_border_color_default_value', DT_BTN_BORDER_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_border_color', array(
		'label'       => __( 'Button Border Color', 'directory-starter' ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_border_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_BTN_BORDER_COLOR ),
	) ) );

/*********************************
 * Header
 *********************************/
	// Header top
	$wp_customize->add_setting( 'dt_enable_header_top', array(
			'default' => apply_filters('dt_enable_header_top_default_value', DT_ENABLE_HEADER_TOP),
			'sanitize_callback' => 'sanitize_text_field',
			'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_enable_header_top', array(
			'label'   => __('Enable Header Top Section', 'directory-starter' ),
			'section' => 'dt_header_top_section',
			'type'    => 'checkbox',
			'std'         => '0',
			'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_ENABLE_HEADER_TOP ),
	) );

	/* Logo */

	$wp_customize->add_setting( 'logo', array(
		'sanitize_callback' => 'esc_url_raw',
		'description' => __( 'Upload a logo to replace the default site name and description in the header', 'directory-starter' ),
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label'    => __( 'Logo', 'directory-starter' ),
		'section'  => 'dt_header_logo_section',
		'settings' => 'logo',
	) ) );

	/* header Image */

	$wp_customize->get_section( 'header_image' )->panel  = 'dt_header_panel';
	$wp_customize->get_section( 'header_image' )->priority  = 10;

	/* Text Colors */
	$wp_customize->get_control( 'header_textcolor' )->section = 'dt_header_text_section';

	$wp_customize->add_setting( 'dt_header_link_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_header_link_color_default_value', DT_HEADER_LINK_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_link_color', array(
		'label'       => __( 'Header Link Color', 'directory-starter' ),
		'section'     => 'dt_header_text_section',
		'settings'    => 'dt_header_link_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_HEADER_LINK_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_header_link_hover', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_header_link_hover_default_value', DT_HEADER_LINK_HOVER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_link_hover', array(
		'label'       => __( 'Header Link Hover Color', 'directory-starter' ),
		'section'     => 'dt_header_text_section',
		'settings'    => 'dt_header_link_hover',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_HEADER_LINK_HOVER ),
	) ) );

	/* Background Colors */

	$wp_customize->add_setting( 'dt_header_bg_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_header_bg_color_default_value', DT_HEADER_BG_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_bg_color', array(
		'label'       => __( 'Header Background Color', 'directory-starter' ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_header_bg_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_HEADER_BG_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_header_border_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_header_border_color_default_value', DT_HEADER_BORDER_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_border_color', array(
		'label'       => __( 'Header Border Color', 'directory-starter' ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_header_border_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_HEADER_BORDER_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_header_shadow_color', array(
		'default' => apply_filters('dt_header_shadow_color_default_value', DT_HEADER_SHADOW_COLOR),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_header_shadow_color', array(
		'label'   => __( 'Header Shadow Color', 'directory-starter' ),
		'section' => 'dt_header_bg_section',
		'settings'    => 'dt_header_shadow_color',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_HEADER_SHADOW_COLOR ),
	) );

//	$wp_customize->add_setting( 'dt_p_nav_menu_bg_hover', array(
//		'transport' => 'postMessage',
//		'default' => apply_filters('dt_p_nav_menu_bg_hover_default_value', DT_P_NAV_MENU_BG_HOVER),
//		'sanitize_callback' => 'sanitize_hex_color',
//		'capability'        => 'edit_theme_options',
//	) );
//	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_menu_bg_hover', array(
//		'label'       => __( 'Primary Menu - Menu Background hover Color', 'directory-starter' ),
//		'section'     => 'dt_header_bg_section',
//		'settings'    => 'dt_p_nav_menu_bg_hover',
//		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_P_NAV_MENU_BG_HOVER ),
//	) ) );

	$wp_customize->add_setting( 'dt_p_nav_submenu_bg_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_p_nav_submenu_bg_color_default_value', DT_P_NAV_SUBMENU_BG_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_submenu_bg_color', array(
		'label'       => __( 'Primary Menu - Sub menu Background Color', 'directory-starter' ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_p_nav_submenu_bg_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_P_NAV_SUBMENU_BG_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_p_nav_submenu_bg_hover', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_p_nav_submenu_bg_hover_default_value', DT_P_NAV_SUBMENU_BG_HOVER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_submenu_bg_hover', array(
		'label'       => __( 'Primary Menu - Sub menu Background hover Color', 'directory-starter' ),
		'section'     => 'dt_header_bg_section',
		'settings'    => 'dt_p_nav_submenu_bg_hover',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_P_NAV_SUBMENU_BG_HOVER ),
	) ) );

	/* Spacing */

	$wp_customize->add_setting( 'dt_header_height', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_header_height_default_value', DT_HEADER_HEIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_header_height', array(
		'label'   => __('Header Height', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'settings'    => 'dt_header_height',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_HEADER_HEIGHT ),
	) );

	$wp_customize->add_setting( 'dt_logo_margin_right', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_logo_margin_right_default_value', DT_LOGO_MARGIN_RIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_logo_margin_right', array(
		'label'   => __('Logo Margin Right', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LOGO_MARGIN_RIGHT ),
	) );


	$wp_customize->add_setting( 'dt_logo_margin_left', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_logo_margin_left_default_value', DT_LOGO_MARGIN_LEFT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_logo_margin_left', array(
		'label'   => __('Logo Margin Left', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LOGO_MARGIN_LEFT ),
	) );


	$wp_customize->add_setting( 'dt_logo_margin_top', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_logo_margin_top_default_value', DT_LOGO_MARGIN_TOP),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_logo_margin_top', array(
		'label'   => __('Logo Margin Top', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LOGO_MARGIN_TOP ),
	) );

	$wp_customize->add_setting( 'dt_p_nav_height', array(
		'default' => apply_filters('dt_p_nav_height_default_value', DT_P_NAV_HEIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_p_nav_height', array(
		'label'   => __('Primary Menu Height', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_P_NAV_HEIGHT ),
	) );


	$wp_customize->add_setting( 'dt_p_nav_line_height', array(
		'default' => apply_filters('dt_p_nav_line_height_default_value', DT_P_NAV_LINE_HEIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_p_nav_line_height', array(
		'label'   => __('Primary Menu Line Height', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_P_NAV_LINE_HEIGHT ),
	) );


	$wp_customize->add_setting( 'dt_p_nav_padding_left_right', array(
		'default' => apply_filters('dt_p_nav_padding_left_right_default_value', DT_P_NAV_PADDING_LEFT_RIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_p_nav_padding_left_right', array(
		'label'   => __('Primary Menu Padding Left Right', 'directory-starter' ),
		'section' => 'dt_header_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_P_NAV_PADDING_LEFT_RIGHT ),
	) );

/*********************************
 * Body
 *********************************/

	/* Background Image */

	$wp_customize->get_section( 'background_image' )->panel  = 'dt_body_panel';
	$wp_customize->get_section( 'background_image' )->priority  = 10;

	/* Text Colors */

	$wp_customize->add_setting( 'dt_body_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_body_color_default_value', DT_BODY_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_body_color', array(
		'label'       => __( 'Body Color', 'directory-starter' ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_body_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_BODY_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_h1toh6_color', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_h1toh6_color_default_value', DT_H1TOH6_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_h1toh6_color', array(
		'label'       => __( 'h1 to h6 Color', 'directory-starter' ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_h1toh6_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_H1TOH6_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_link_color', array(
		'default' => apply_filters('dt_link_color_default_value', DT_LINK_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_color', array(
		'label'       => __( 'Link Color', 'directory-starter' ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_link_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LINK_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_link_hover', array(
		'default' => apply_filters('dt_link_hover_default_value', DT_LINK_HOVER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_hover', array(
		'label'       => __( 'Link Hover Color', 'directory-starter' ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_link_hover',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LINK_HOVER ),
	) ) );

	$wp_customize->add_setting( 'dt_link_visited', array(
		'default' => apply_filters('dt_link_visited_default_value', DT_LINK_VISITED),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_visited', array(
		'label'       => __( 'Link Visited Color', 'directory-starter' ),
		'section'     => 'dt_body_text_section',
		'settings'    => 'dt_link_visited',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LINK_VISITED ),
	) ) );

	/* Background Colors */

	$wp_customize->get_control( 'background_color' )->section = 'dt_body_bg_section';

	$wp_customize->add_setting( 'dt_content_bg', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_content_bg_default_value', DT_CONTENT_BG),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_content_bg', array(
		'label'       => __( 'Content Box Background Color', 'directory-starter' ),
		'section'     => 'dt_body_bg_section',
		'settings'    => 'dt_content_bg',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTENT_BG ),
	) ) );

	$wp_customize->add_setting( 'dt_content_border', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_content_border_default_value', DT_CONTENT_BORDER),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_content_border', array(
		'label'       => __( 'Content Box Border Color', 'directory-starter' ),
		'section'     => 'dt_body_bg_section',
		'settings'    => 'dt_content_border',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTENT_BORDER ),
	) ) );

	$wp_customize->add_setting( 'dt_content_shadow', array(
		'default' => apply_filters('dt_content_shadow_default_value', DT_CONTENT_SHADOW),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_content_shadow', array(
		'label'   => __('Content Box Shadow Color', 'directory-starter' ),
		'section' => 'dt_body_bg_section',
		'settings'    => 'dt_content_shadow',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_CONTENT_SHADOW ),
	) );

	/* Spacing */

	/* Typography */

	$wp_customize->add_setting( 'dt_font_family', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_font_family_default_value', DT_FONT_FAMILY),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_font_family', array(
		'label'   => __('Font Family', 'directory-starter' ),
		'section' => 'dt_body_typography_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_FONT_FAMILY ),
	) );


	$wp_customize->add_setting( 'dt_font_size', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_font_size_default_value', DT_FONT_SIZE),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_font_size', array(
		'label'   => __('Font Size', 'directory-starter' ),
		'section' => 'dt_body_typography_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_FONT_SIZE ),
	) );


	$wp_customize->add_setting( 'dt_line_height', array(
		'transport' => 'postMessage',
		'default' => apply_filters('dt_line_height_default_value', DT_LINE_HEIGHT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_line_height', array(
		'label'   => __('Line Height', 'directory-starter' ),
		'section' => 'dt_body_typography_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_LINE_HEIGHT ),
	) );

/*********************************
 * Footer
 *********************************/

	/* Text Colors */

	/* Background Colors */

	$wp_customize->add_setting( 'dt_fw_bg', array(
		'default' => apply_filters('dt_fw_bg_default_value', DT_FW_BG),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_bg', array(
		'label'       => __( 'Footer Section Background Color', 'directory-starter' ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_bg',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_FW_BG ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_border_top_color', array(
		'default' => apply_filters('dt_fw_border_top_color_default_value', DT_FW_BORDER_TOP_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_border_top_color', array(
		'label'       => __( 'Footer Section Border Top Color', 'directory-starter' ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_border_top_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_FW_BORDER_TOP_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_border_bottom_color', array(
		'default' => apply_filters('dt_fw_border_bottom_color_default_value', DT_FW_BORDER_BOTTOM_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_border_bottom_color', array(
		'label'       => __( 'Footer Section Border Bottom Color', 'directory-starter' ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_border_bottom_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_FW_BORDER_BOTTOM_COLOR ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_box_shadow_color', array(
		'default' => apply_filters('dt_fw_box_shadow_color_default_value', DT_FW_BOX_SHADOW_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_box_shadow_color', array(
		'label'       => __( 'Footer Section Box Shadow Color', 'directory-starter' ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_fw_box_shadow_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_FW_BOX_SHADOW_COLOR ),
	) ) );

	$wp_customize->add_setting( 'dt_copyright_bg', array(
		'default' => apply_filters('dt_copyright_bg_default_value', DT_COPYRIGHT_BG),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_copyright_bg', array(
		'label'       => __( 'Copyright Section Background Color', 'directory-starter' ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_copyright_bg',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_COPYRIGHT_BG ),
	) ) );

	$wp_customize->add_setting( 'dt_copyright_border_color', array(
		'default' => apply_filters('dt_copyright_border_color_default_value', DT_COPYRIGHT_BORDER_COLOR),
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_copyright_border_color', array(
		'label'       => __( 'Copyright Section Border Color', 'directory-starter' ),
		'section'     => 'dt_footer_bg_section',
		'settings'    => 'dt_copyright_border_color',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_COPYRIGHT_BORDER_COLOR ),
	) ) );

	/* Spacing */

	$wp_customize->add_setting( 'dt_copyright_padding_top', array(
		'default' => apply_filters('dt_copyright_padding_top_default_value', DT_COPYRIGHT_PADDING_TOP),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_copyright_padding_top', array(
		'label'   => __('Copyright Padding Top', 'directory-starter' ),
		'section' => 'dt_footer_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_COPYRIGHT_PADDING_TOP ),
	) );


	$wp_customize->add_setting( 'dt_copyright_padding_bottom', array(
		'default' => apply_filters('dt_copyright_padding_bottom_default_value', DT_COPYRIGHT_PADDING_BOTTOM),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
	) );
	$wp_customize->add_control( 'dt_copyright_padding_bottom', array(
		'label'   => __('Copyright Padding Bottom', 'directory-starter' ),
		'section' => 'dt_footer_spacing_section',
		'type'    => 'text',
		'description' => sprintf( __( 'Default: %s', 'directory-starter' ), DT_COPYRIGHT_PADDING_BOTTOM ),
	) );

	/* Typography */

	/* Copyright Text */

	$wp_customize->add_setting( 'dt_copyright_text', array(
		'default' => apply_filters('dt_copyright_text_default_value', DT_COPYRIGHT_TEXT),
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options'
	) );
	$wp_customize->add_control( 'dt_copyright_text', array(
		'type'        => 'text',
		'label'   => __('Copyright Text', 'directory-starter' ),
		'section' => 'dt_footer_copy_text_section'
	) );

}

add_action( 'customize_register', 'directory_theme_customizer' );
