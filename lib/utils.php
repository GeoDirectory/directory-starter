<?php
function directory_theme_paginate() {
	global $wp_query;
	$big_num = 999999999;
	if ( $wp_query->max_num_pages <= 1 )
		return;
	echo '<nav class="pagination">';
	echo paginate_links( array(
		'base'         => str_replace( $big_num, '%#%', esc_url( get_pagenum_link($big_num) ) ),
		'format'       => '',
		'current'      => max( 1, get_query_var('paged') ),
		'total'        => $wp_query->max_num_pages,
		'prev_text'    => '&larr;',
		'next_text'    => '&rarr;',
		'type'         => 'list',
		'end_size'     => 3,
		'mid_size'     => 3
	) );
	echo '</nav>';
}

function darken_color($hex, $percent) {
	preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $hex, $primary_colors);
	str_replace('%', '', $percent);
	$color = "#";
	for($i = 1; $i <= 3; $i++) {
		$primary_colors[$i] = hexdec($primary_colors[$i]);
		$primary_colors[$i] = round($primary_colors[$i] * (100-($percent*2))/100);
		$color .= str_pad(dechex($primary_colors[$i]), 2, '0', STR_PAD_LEFT);
	}
	return $color;
}
function lighten_color($hex, $percent) {
	preg_match('/^#?([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i', $hex, $primary_colors);
	str_replace('%', '', $percent);
	$color = "#";
	for($i = 1; $i <= 3; $i++) {
		$primary_colors[$i] = hexdec($primary_colors[$i]);
		$primary_colors[$i] = round($primary_colors[$i] * (100+($percent*2))/100);
		$color .= str_pad(dechex($primary_colors[$i]), 2, '0', STR_PAD_LEFT);
	}
	return $color;
}