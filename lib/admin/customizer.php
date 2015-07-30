<?php
function mytheme_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'header_textcolor' , array(
		'default'     => '#000000',
		'transport'   => 'refresh',
	) );

	$wp_customize->add_section( 'mytheme_new_section_name' , array(
		'title'      => __( 'Visible Section Name', 'mytheme' ),
		'priority'   => 30,
	) );
}
add_action( 'customize_register', 'mytheme_customize_register' );