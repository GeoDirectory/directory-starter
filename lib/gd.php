<?php
// GeoDirectory Plugin compatibility functions.
add_action('init', 'directory_theme_set_default_rating_icon');
function directory_theme_set_default_rating_icon() {
	$default_star = get_option('geodir_default_rating_star_icon');
	if (!$default_star || ($default_star == geodir_plugin_url() . '/geodirectory-assets/images/stars.png')) {
		update_option('geodir_default_rating_star_icon', get_template_directory_uri() . '/assets/images/star.png');
	}
}

if (defined('GEODIRREVIEWRATING_VERSION') && is_admin()) {
	add_action('init', 'directory_theme_set_default_multi_rating_icon');
}
function directory_theme_set_default_multi_rating_icon() {
	$default_star = get_option('geodir_reviewrating_overall_off_img');
	if (!$default_star || ($default_star == GEODIR_REVIEWRATING_PLUGINDIR_URL . '/icons/stars.png')) {
		update_option('geodir_reviewrating_overall_off_img', get_template_directory_uri() . '/assets/images/star.png');
	}

	$default_color = get_option('geodir_reviewrating_overall_color');
	if (!$default_color || ($default_color == '#ff9900')) {
		update_option('geodir_reviewrating_overall_color', '#ed695d');
	}
}

// Change some GD settings
add_action( 'after_switch_theme', 'directory_theme_geodirectory_settings' );
function directory_theme_geodirectory_settings() {
	update_option('geodir_set_as_home', '1');
	update_option('geodir_width_home_contant_section', '67');
	update_option('geodir_width_listing_contant_section', '67');
	update_option('geodir_width_search_contant_section', '67');
	update_option('geodir_width_author_contant_section', '67');
	update_option('geodir_listing_view', 'listview');
	update_option('geodir_search_view', 'listview');
	update_option('geodir_author_view', 'listview');
}

// Change avatar size
function dt_comment_avatar_size() {
	return 60;
}
add_action('geodir_comment_avatar_size', 'dt_comment_avatar_size');