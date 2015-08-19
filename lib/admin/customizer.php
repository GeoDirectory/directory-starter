<?php
function directory_theme_customizer( $wp_customize ) {
	//  =============================
	//  = Sections                  =
	//  =============================

	$wp_customize->add_section( 'dt_general_section', array(
		'title'       => __( 'General', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'General Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_header_section', array(
		'title'       => __( 'Header', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Header Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_typography_section', array(
		'title'       => __( 'Typography', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Typography', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_links_section', array(
		'title'       => __( 'Links', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Links Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_alerts_section', array(
		'title'       => __( 'Alerts', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Alert colors', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_primary_menu_section', array(
		'title'       => __( 'Primary Menu', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Primary Menu Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_content_box_section', array(
		'title'       => __( 'Content Box', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Content Box Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_footer_widget_section', array(
		'title'       => __( 'Footer Widgets', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Footer Widgets Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_copyright_section', array(
		'title'       => __( 'Copyright', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Copyright Section', DIRECTORY_THEME ),
	) );

	$wp_customize->add_section( 'dt_button_section', array(
		'title'       => __( 'Buttons', DIRECTORY_THEME ),
		'priority'    => 30,
		'description' => __( 'Buttons Section', DIRECTORY_THEME ),
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
		'section'  => 'dt_header_section',
		'settings' => 'logo',
	) ) );
	//  =============================
	//  = container                 =
	//  =============================
	$wp_customize->add_setting( 'dt_container_width', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_WIDTH,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Container Width', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_container_width', array(
		'type'        => 'text',
		'label'   => 'Container Width',
		'section' => 'dt_general_section',
	) );


	$wp_customize->add_setting( 'dt_container_padding_right', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_PADDING_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Container Padding Right', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_container_padding_right', array(
		'label'   => 'Container Padding Right',
		'section' => 'dt_general_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_container_padding_left', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_PADDING_LEFT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Container Padding Left', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_container_padding_left', array(
		'label'   => 'Container Padding Left',
		'section' => 'dt_general_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_container_margin_right', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_MARGIN_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Container Margin Right', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_container_margin_right', array(
		'label'   => 'Container Margin Right',
		'section' => 'dt_general_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_container_margin_left', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTAINER_MARGIN_LEFT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Container Margin Left', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_container_margin_left', array(
		'label'   => 'Container Margin Left',
		'section' => 'dt_general_section',
		'type'    => 'text',
	) );

	//  =============================
	//  = Logo                      =
	//  =============================
	$wp_customize->add_setting( 'dt_logo_margin_right', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Logo Margin Right', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_logo_margin_right', array(
		'label'   => 'Logo Margin Right',
		'section' => 'dt_header_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_logo_margin_left', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_LEFT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Logo Margin Left', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_logo_margin_left', array(
		'label'   => 'Logo Margin Left',
		'section' => 'dt_header_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_logo_margin_top', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_TOP,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Logo Margin Top', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_logo_margin_top', array(
		'label'   => 'Logo Margin Top',
		'section' => 'dt_header_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_logo_margin_bottom', array(
		'transport' => 'postMessage',
		'default'     => DT_LOGO_MARGIN_BOTTOM,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Logo Margin Bottom', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_logo_margin_bottom', array(
		'label'   => 'Logo Margin Bottom',
		'section' => 'dt_header_section',
		'type'    => 'text',
	) );

	//  =============================
	//  = Typography                =
	//  =============================
	$wp_customize->add_setting( 'dt_font_family', array(
		'transport' => 'postMessage',
		'default'     => DT_FONT_FAMILY,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Font Family', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_font_family', array(
		'label'   => 'Font Family',
		'section' => 'dt_typography_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_font_size', array(
		'transport' => 'postMessage',
		'default'     => DT_FONT_SIZE,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Font Size', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_font_size', array(
		'label'   => 'Font Size',
		'section' => 'dt_typography_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_line_height', array(
		'transport' => 'postMessage',
		'default'     => DT_LINE_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Line Height', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_line_height', array(
		'label'   => 'Line Height',
		'section' => 'dt_typography_section',
		'type'    => 'text',
	) );
	//  =============================
	//  = Colors                    =
	//  =============================

	$wp_customize->add_setting( 'dt_background_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BACKGROUND_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_background_color', array(
		'label'       => __( 'Body Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_background_color',
		'description' => __( 'Select body background color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_body_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BODY_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_body_color', array(
		'label'       => __( 'Body Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_body_color',
		'description' => __( 'Select body color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  = content box colors        =
	//  =============================
	$wp_customize->add_setting( 'dt_content_bg', array(
		'transport' => 'postMessage',
		'default'           => DT_CONTENT_BG,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_content_bg', array(
		'label'       => __( 'Content Box Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_content_box_section',
		'settings'    => 'dt_content_bg',
		'description' => __( 'Content Box Background Color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_content_border', array(
		'transport' => 'postMessage',
		'default'           => DT_CONTENT_BORDER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_content_border', array(
		'label'       => __( 'Content Box Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_content_box_section',
		'settings'    => 'dt_content_border',
		'description' => __( 'Content Box Border Color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_content_shadow', array(
		'transport' => 'postMessage',
		'default'     => DT_CONTENT_SHADOW,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Content Box Shadow Color', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_content_shadow', array(
		'label'   => 'Content Box Shadow Color',
		'section' => 'dt_content_box_section',
		'settings'    => 'dt_content_shadow',
		'type'    => 'text',
	) );

	//  =============================
	//  = h1 to h6                  =
	//  =============================
	$wp_customize->add_setting( 'dt_h1toh6_color', array(
		'transport' => 'postMessage',
		'default'           => DT_H1TOH6_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_h1toh6_color', array(
		'label'       => __( 'h1 to h6 Color', DIRECTORY_THEME ),
		'section'     => 'dt_typography_section',
		'settings'    => 'dt_h1toh6_color',
		'description' => __( 'Select h1 to h6 color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  = Alerts                    =
	//  =============================

	$wp_customize->add_setting( 'dt_alert_yellow', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_YELLOW,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_yellow', array(
		'label'       => __( 'Alert Warning Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_yellow',
		'description' => __( 'Alert Warning Color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_red', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_RED,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_red', array(
		'label'       => __( 'Alert Error Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_red',
		'description' => __( 'Alert Error Color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_green', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_GREEN,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_green', array(
		'label'       => __( 'Alert Success Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_green',
		'description' => __( 'Alert Success Color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_alert_blue', array(
		'transport' => 'postMessage',
		'default'           => DT_ALERT_BLUE,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_alert_blue', array(
		'label'       => __( 'Alert Info Color', DIRECTORY_THEME ),
		'section'     => 'dt_alerts_section',
		'settings'    => 'dt_alert_blue',
		'description' => __( 'Alert Info Color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  = Links                    =
	//  =============================
	$wp_customize->add_setting( 'dt_link_color', array(
		'default'           => DT_LINK_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_color', array(
		'label'       => __( 'Link Color', DIRECTORY_THEME ),
		'section'     => 'dt_links_section',
		'settings'    => 'dt_link_color',
		'description' => __( 'Select Link color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_link_hover', array(
		'default'           => DT_LINK_HOVER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_hover', array(
		'label'       => __( 'Link Hover Color', DIRECTORY_THEME ),
		'section'     => 'dt_links_section',
		'settings'    => 'dt_link_hover',
		'description' => __( 'Select link hover color', DIRECTORY_THEME ),
	) ) );

	$wp_customize->add_setting( 'dt_link_visited', array(
		'default'           => DT_LINK_VISITED,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_link_visited', array(
		'label'       => __( 'Link Visited Color', DIRECTORY_THEME ),
		'section'     => 'dt_links_section',
		'settings'    => 'dt_link_visited',
		'description' => __( 'Select link visited color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  = Header                    =
	//  =============================

	$wp_customize->add_setting( 'dt_header_height', array(
		'transport' => 'postMessage',
		'default'     => DT_HEADER_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Header Height', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_header_height', array(
		'label'   => 'Header Height',
		'section' => 'dt_header_section',
		'settings'    => 'dt_header_height',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'dt_header_bg_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_BG_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_bg_color', array(
		'label'       => __( 'Header Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_header_bg_color',
		'description' => __( 'Select header background color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_header_link_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_LINK_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_link_color', array(
		'label'       => __( 'Header Link Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_header_link_color',
		'description' => __( 'Select header link color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_header_text_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_TEXT_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_text_color', array(
		'label'       => __( 'Header Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_header_text_color',
		'description' => __( 'Select header text color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_header_link_hover', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_LINK_HOVER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_link_hover', array(
		'label'       => __( 'Header Link Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_header_link_hover',
		'description' => __( 'Select header link color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_header_border_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_BORDER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_border_color', array(
		'label'       => __( 'Header Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_header_border_color',
		'description' => __( 'Select header border color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_header_shadow_color', array(
		'transport' => 'postMessage',
		'default'           => DT_HEADER_SHADOW_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_header_shadow_color', array(
		'label'       => __( 'Header Shadow Color', DIRECTORY_THEME ),
		'section'     => 'dt_header_section',
		'settings'    => 'dt_header_shadow_color',
		'description' => __( 'Select header shadow color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  = Primary Nav               =
	//  =============================
	$wp_customize->add_setting( 'dt_p_nav_height', array(
		'transport' => 'postMessage',
		'default'     => DT_P_NAV_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Primary Menu Height', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_p_nav_height', array(
		'label'   => 'Primary Menu Height',
		'section' => 'dt_primary_menu_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_p_nav_line_height', array(
		'transport' => 'postMessage',
		'default'     => DT_P_NAV_LINE_HEIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Primary Menu Line Height', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_p_nav_line_height', array(
		'label'   => 'Primary Menu Line Height',
		'section' => 'dt_primary_menu_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_p_nav_padding_left_right', array(
		'transport' => 'postMessage',
		'default'     => DT_P_NAV_PADDING_LEFT_RIGHT,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Primary Menu Padding Left Right', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_p_nav_padding_left_right', array(
		'label'   => 'Primary Menu Padding Left Right',
		'section' => 'dt_primary_menu_section',
		'type'    => 'text',
	) );

	//  =============================
	//  = Primary Nav Submenu       =
	//  =============================
	$wp_customize->add_setting( 'dt_p_nav_submenu_bg_color', array(
		'transport' => 'postMessage',
		'default'           => DT_P_NAV_SUBMENU_BG_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_submenu_bg_color', array(
		'label'       => __( 'Primary Menu - Sub menu Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_primary_menu_section',
		'settings'    => 'dt_p_nav_submenu_bg_color',
		'description' => __( 'Primary Menu - Sub menu Background Color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_p_nav_submenu_bg_hover', array(
		'transport' => 'postMessage',
		'default'           => DT_P_NAV_SUBMENU_BG_HOVER,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_p_nav_submenu_bg_hover', array(
		'label'       => __( 'Primary Menu - Sub menu Background hover Color', DIRECTORY_THEME ),
		'section'     => 'dt_primary_menu_section',
		'settings'    => 'dt_p_nav_submenu_bg_hover',
		'description' => __( 'Primary Menu - Sub menu Background hover Color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  = Footer Widget             =
	//  =============================
	$wp_customize->add_setting( 'dt_fw_bg', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BG,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_bg', array(
		'label'       => __( 'Footer Section Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_widget_section',
		'settings'    => 'dt_fw_bg',
		'description' => __( 'Select footer section background color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_border_top_color', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BORDER_TOP_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_border_top_color', array(
		'label'       => __( 'Footer Section Border Top Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_widget_section',
		'settings'    => 'dt_fw_border_top_color',
		'description' => __( 'Select Footer Section Border Top Color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_border_bottom_color', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BORDER_BOTTOM_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_border_bottom_color', array(
		'label'       => __( 'Footer Section Border Bottom Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_widget_section',
		'settings'    => 'dt_fw_border_bottom_color',
		'description' => __( 'Select Footer Section Border Bottom Color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_fw_box_shadow_color', array(
		'transport' => 'postMessage',
		'default'           => DT_FW_BOX_SHADOW_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_fw_box_shadow_color', array(
		'label'       => __( 'Footer Section Box Shadow Color', DIRECTORY_THEME ),
		'section'     => 'dt_footer_widget_section',
		'settings'    => 'dt_fw_box_shadow_color',
		'description' => __( 'Select Footer Section Box Shadow Color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  =     Copyright             =
	//  =============================

	$wp_customize->add_setting( 'dt_copyright_bg', array(
		'transport' => 'postMessage',
		'default'           => DT_COPYRIGHT_BG,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_copyright_bg', array(
		'label'       => __( 'Copyright Section Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_copyright_section',
		'settings'    => 'dt_copyright_bg',
		'description' => __( 'Select copyright section background color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_copyright_padding_top', array(
		'transport' => 'postMessage',
		'default'     => DT_COPYRIGHT_PADDING_TOP,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Copyright Padding Top', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_copyright_padding_top', array(
		'label'   => 'Copyright Padding Top',
		'section' => 'dt_copyright_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_copyright_padding_bottom', array(
		'transport' => 'postMessage',
		'default'     => DT_COPYRIGHT_PADDING_BOTTOM,
		'sanitize_callback' => 'sanitize_text_field',
		'capability'  => 'edit_theme_options',
		'description' => __( 'Enter Copyright Padding Bottom', DIRECTORY_THEME ),
	) );
	$wp_customize->add_control( 'dt_copyright_padding_bottom', array(
		'label'   => 'Copyright Padding Bottom',
		'section' => 'dt_copyright_section',
		'type'    => 'text',
	) );


	$wp_customize->add_setting( 'dt_copyright_border_color', array(
		'transport' => 'postMessage',
		'default'           => DT_COPYRIGHT_BORDER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_copyright_border_color', array(
		'label'       => __( 'Copyright Section Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_copyright_section',
		'settings'    => 'dt_copyright_border_color',
		'description' => __( 'Select copyright section border color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  =     Buttons               =
	//  =============================

	$wp_customize->add_setting( 'dt_btn_text_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_TEXT_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_text_color', array(
		'label'       => __( 'Button Text Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_text_color',
		'description' => __( 'Select button text color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_bg_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_BG_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_bg_color', array(
		'label'       => __( 'Button Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_bg_color',
		'description' => __( 'Select button background color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_hover_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_HOVER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_hover_color', array(
		'label'       => __( 'Button Hover Background Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_hover_color',
		'description' => __( 'Select button hover background color', DIRECTORY_THEME ),
	) ) );


	$wp_customize->add_setting( 'dt_btn_border_color', array(
		'transport' => 'postMessage',
		'default'           => DT_BTN_BORDER_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
		'capability'        => 'edit_theme_options',
		'type'              => 'option',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dt_btn_border_color', array(
		'label'       => __( 'Button Border Color', DIRECTORY_THEME ),
		'section'     => 'dt_button_section',
		'settings'    => 'dt_btn_border_color',
		'description' => __( 'Select button border color', DIRECTORY_THEME ),
	) ) );

	//  =============================
	//  =     Built in Settings     =
	//  =============================
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
}

add_action( 'customize_register', 'directory_theme_customizer' );
