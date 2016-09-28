<?php

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

function directory_theme_setup(){
	/*
	 * Make Directory Theme available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 *
	 * You may need this tool. https://poedit.net/
	 */
	load_theme_textdomain('directory-starter', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Post thumbnails
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );

	$default_color = trim( DT_BACKGROUND_COLOR, '#' );

	add_theme_support( 'custom-background', apply_filters( 'directory_theme_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	add_editor_style( get_template_directory_uri() . '/assets/css/editor-style.css' );

	$args = array(
		'default-text-color'      => 'FFFFFF',
		'height'                 => DT_HEADER_HEIGHT,
		'width'                  => 1600
	);

	add_theme_support( 'custom-header', $args );
}
add_action('after_setup_theme', 'directory_theme_setup');

add_action( 'dt_footer_copyright', 'dt_footer_copyright_default', 10 );
function dt_footer_copyright_default() {
	$dt_disable_footer_credits = esc_attr(get_theme_mod('dt_disable_footer_credits', DT_DISABLE_FOOTER_CREDITS));
	if ($dt_disable_footer_credits != '1') {
		$theme = wp_get_theme();
		$theme_name = $theme->display('Name');
		$theme_url = $theme->display('ThemeURI');


		if(is_front_page()){
			$wp_link = '<a href="https://wordpress.org" target="_blank" title="' . esc_attr__('WordPress', 'directory-starter') . '"><span>' . __('WordPress', 'directory-starter') . '</span></a>';
			$default_footer_value = sprintf(__('Copyright &copy; %1$s %2$s %3$s Theme %4$s', 'directory-starter'),date('Y'),"<a href='$theme_url' target='_blank' title='$theme_name'>", $theme_name, "</a>");
			$default_footer_value .= sprintf(__(' - Powered by %s.', 'directory-starter'), $wp_link);
		}else{
			$wp_link = __('WordPress', 'directory-starter');
			$default_footer_value = sprintf(__('Copyright &copy; %1$s %2$s Theme', 'directory-starter'),date('Y'), $theme_name);
			$default_footer_value .= sprintf(__(' - Powered by %s.', 'directory-starter'), $wp_link);
		}


		echo $default_footer_value;

	}else{
		echo esc_attr( get_theme_mod( 'dt_copyright_text', DT_COPYRIGHT_TEXT ) );
	}
}