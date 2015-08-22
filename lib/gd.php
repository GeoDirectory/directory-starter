<?php
// GeoDirectory Plugin compatibility functions.

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
add_filter('geodir_comment_avatar_size', 'dt_comment_avatar_size');

// Change avatar size
function dt_geodir_buddypress_reviews_before_content() {
	return '<div id="reviewsTab">';
}
add_filter('geodir_buddypress_reviews_before_content', 'dt_geodir_buddypress_reviews_before_content');

// Change avatar size
function dt_geodir_buddypress_reviews_after_content() {
	return '</div>';
}
add_filter('geodir_buddypress_reviews_after_content', 'dt_geodir_buddypress_reviews_after_content');

function dt_geodir_reviews_g_size()
{
	return 60;
}

add_filter('geodir_recent_reviews_g_size', 'dt_geodir_reviews_g_size');