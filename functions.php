<?php

function mccfm_resources() {

wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'mccfm_resources');


// custom header

$args = array(
	'flex-width'    => true,
	'width'         => 200,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/LogoWit200.png',
);
add_theme_support( 'custom-header', $args );


// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
		
	}
	
	return $post->ID;
		
}

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme Setup
function lerenwordpress_setup() {
	
// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
));

register_nav_menus(array(
'prehead' => __( 'Preheader Menu'),
));
	
// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 1920, 800, true);
	
	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'lerenwordpress_setup');

// Sidebar
function widgetsarea() {
	register_sidebar( array(
	'name' => 'Home Widgets',
	'id' => 'home-sidebar',
	'description' => 'Homepage, full width widget area',
	) );
	
	register_sidebar( array(
	'name' => 'Pages Widgets',
	'id' => 'pages-sidebar',
	'description' => 'Pages, sidebar widget area',
	) );	
}

add_action('widgets_init', 'widgetsarea');



?>