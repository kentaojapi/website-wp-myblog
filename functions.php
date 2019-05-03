<?php
// load JavaScript files.
//function my_script_method() {
//	wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js", '', '3.4.0'); 
//	wp_enqueue_script('motions', get_template_directory_uri() . '/js/motions.js', array('jquery'), '', true );
//}
//add_action( 'wp_enqueue_scripts', 'my_script_method');


// header menus
add_theme_support('menus');

// thumbnail
add_theme_support('post-thumbnails');

// navigation add class
add_filter( 'previous_posts_link_attributes', 'add_prev_posts_link_class' );
function add_prev_posts_link_class() {
	  return 'class="prev-link"';
}
add_filter( 'next_posts_link_attributes', 'add_next_posts_link_class' );
function add_next_posts_link_class() {
	  return 'class="next-link"';
}

// Sidebar
register_sidebar(array(
	'name' => 'sidemenu',
	'id' => 'sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	)
);
?>
