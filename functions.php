<?php
// Require navwalker
require_once get_template_directory() . '/bs4navwalker.php';

// Theme support
function theme_setup(){
	//support featured images
	add_theme_support('post-thumbnails');

	//nav menus
	register_nav_menu('top', 'Top menu');

	//post formats decommentare la linea sotto se voglio attivarli
	//add_theme_support('post-formats', array('gallery'));
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

	register_sidebar(array(
        'name'  => 'Footer 1',
        'id'    => 'footer-1',
        'before_widget' => '<div class="modulo-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'  => 'Footer 2',
        'id'    => 'footer-2',
        'before_widget' => '<div class="modulo-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'  => 'Footer 3',
        'id'    => 'footer-3',
        'before_widget' => '<div class="modulo-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    register_sidebar(array(
        'name'  => 'Footer 4',
        'id'    => 'footer-4',
        'before_widget' => '<div class="modulo-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}

add_action('widgets_init', 'scvt_init_widgets');