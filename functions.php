<?php

// Defining a few constants to make it easier to link to stylesheets, JavaScript, etc 
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");
// End Constants


// Adding Menu support
add_theme_support('nav-menus');
if ( function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'primary_menu' => 'Primary Menu'
		)
	);
}
// End Menu

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => __('Primary Sidebar', 'primary-sidebar'),
		'id' => 'primary-widget-area',
		'description' => __('The primary widget area', 'dir'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}

?>