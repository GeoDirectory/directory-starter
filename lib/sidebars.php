<?php
function directory_theme_widgets_init()
{
	// Sidebars
	register_sidebar(array(
		'name' => __('Sidebar Primary', DIRECTORY_THEME),
		'id' => 'sidebar-primary',
		'description' => __( 'Primary Sidebar.', DIRECTORY_THEME ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	if (FOOTER_SIDEBAR_COUNT > 0) {
		register_sidebar(array(
			'name' => __('Sidebar Footer 1', DIRECTORY_THEME),
			'id' => 'sidebar-footer1',
			'description' => __( 'Sidebar Footer 1.', DIRECTORY_THEME ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}

	if (FOOTER_SIDEBAR_COUNT > 1) {
		register_sidebar(array(
			'name' => __('Sidebar Footer 2', DIRECTORY_THEME),
			'id' => 'sidebar-footer2',
			'description' => __( 'Sidebar Footer 2.', DIRECTORY_THEME ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}

	if (FOOTER_SIDEBAR_COUNT > 2) {
		register_sidebar(array(
			'name' => __('Sidebar Footer 3', DIRECTORY_THEME),
			'id' => 'sidebar-footer3',
			'description' => __( 'Sidebar Footer 3.', DIRECTORY_THEME ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}

	if (FOOTER_SIDEBAR_COUNT > 3) {
		register_sidebar(array(
			'name' => __('Sidebar Footer 4', DIRECTORY_THEME),
			'id' => 'sidebar-footer4',
			'description' => __( 'Sidebar Footer 4.', DIRECTORY_THEME ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}


}

add_action('widgets_init', 'directory_theme_widgets_init');