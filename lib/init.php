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
	load_theme_textdomain(DIRECTORY_THEME, get_stylesheet_directory() . '/languages');

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

	add_editor_style( get_stylesheet_directory_uri() . '/assets/css/editor-style.css' );

	$args = array(
		'default-text-color'      => 'FFFFFF',
		'height'                 => DT_HEADER_HEIGHT,
		'width'                  => 1600
	);

	add_theme_support( 'custom-header', $args );
}
add_action('after_setup_theme', 'directory_theme_setup');