<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme support
function theme_setup(){
	//support featured images
	add_theme_support('post-thumbnails');

	//nav menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'asdviterbosc' ),
	) );
}

add_action('after_setup_theme', 'theme_setup' );

// Excerpt lenght
function set_excerpt_length(){
	return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget locations
function scvt_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}

add_action('widgets_init', 'scvt_init_widgets');