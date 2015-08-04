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