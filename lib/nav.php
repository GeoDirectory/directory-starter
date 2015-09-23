<?php
// register nav menus
register_nav_menus(
	array(
		'primary-menu' => __( 'Primary Menu', 'directory_starter' ),   // main menu for header
		'footer-links' => __( 'Footer Links', 'directory_starter' )    // links menu for footer
	)
);