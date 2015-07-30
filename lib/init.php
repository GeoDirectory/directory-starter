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
}
add_action('after_setup_theme', 'directory_theme_setup');