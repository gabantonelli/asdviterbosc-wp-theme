<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme support
function theme_setup(){
	//nav menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'asdviterbosc' ),
	) );
}

add_action('after_setup_theme', 'theme_setup' );