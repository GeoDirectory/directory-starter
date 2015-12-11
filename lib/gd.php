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

//Custom Field Functions
function dt_godir_check_custom_field_exists($htmlvar_name, $post_type) {
	global $wpdb;
	$check_html_variable = $wpdb->get_var(
		$wpdb->prepare(
			"select htmlvar_name from " . GEODIR_CUSTOM_FIELDS_TABLE . " where htmlvar_name = %s and post_type = %s ",
			array($htmlvar_name, $post_type)
		)
	);
	return $check_html_variable;
}

function dt_godir_check_fieldset_exists($site_title, $post_type) {
	global $wpdb;
	$check_field_set = $wpdb->get_var(
		$wpdb->prepare(
			"select site_title from " . GEODIR_CUSTOM_FIELDS_TABLE . " where site_title = %s and post_type = %s ",
			array($site_title, $post_type)
		)
	);
	return $check_field_set;
}

function dt_godir_delete_custom_field($htmlvar_name, $post_type) {
	global $wpdb;
	$id = $wpdb->get_var(
		$wpdb->prepare(
			"select id from " . GEODIR_CUSTOM_FIELDS_TABLE . " where htmlvar_name = %s and post_type = %s ",
			array($htmlvar_name, $post_type)
		)
	);
	if ($id) {
		geodir_custom_field_delete($id);
	}
}

function dt_godir_add_cpt_dummy_column($post_type) {
	global $plugin_prefix;
	$detail_table = $plugin_prefix .$post_type.'_detail';
	geodir_add_column_if_not_exist($detail_table, 'post_dummy', "enum( '1', '0' ) NULL DEFAULT '0'");
}

function dt_godir_add_custom_fields($fieldsets = array(), $fields = array(), $filters = array(), $fields_to_remove = array()) {

	// Field Set
	if ($fieldsets) {
		foreach ( $fieldsets as $fieldset_index => $fieldset ) {
			$check_geodir_field_set = dt_godir_check_fieldset_exists( $fieldset['site_title'], $fieldset['listing_type'] );
			if ( ! $check_geodir_field_set ) {
				geodir_custom_field_save( $fieldset );
			}
		}
	}

	// Custom Fields
	if ($fields) {
		foreach ( $fields as $field_index => $field ) {
			$check_cf_exists = dt_godir_check_custom_field_exists( $field['htmlvar_name'], $field['listing_type'] );
			if ( ! $check_cf_exists ) {
				geodir_custom_field_save( $field );
			}
		}
	}

	// Advance Search Filters
	if ($filters && function_exists('geodir_load_translation_geodiradvancesearch')) {
		foreach ($filters as $filter_index => $filter) {
			geodir_custom_advance_search_field_save($filter);
		}
	}

	// Fields to delete
	if ($fields_to_remove) {
		foreach($fields_to_remove as $field_key => $field_names) {
			foreach($field_names as $field_name) {
				dt_godir_delete_custom_field($field_name, $field_key);
			}
		}
	}
}