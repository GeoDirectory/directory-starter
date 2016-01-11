<?php
// register nav menus
register_nav_menus(
	array(
		'primary-menu' => __( 'Primary Menu', 'directory-starter' ),   // main menu for header
		'footer-links' => __( 'Footer Links', 'directory-starter' )    // links menu for footer
	)
);