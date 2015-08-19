<?php
function dt_header_image() {
	$style = '';
	if ($url = esc_url( get_header_image() )) {
		$style = 'background: url('.$url.') no-repeat scroll top;';
	}
	return $style;
}