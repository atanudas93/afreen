
<?php
// Register Custom Post Type home-video
function create_homevideo_cpt() {

	$labels = array(
		'name' => _x( 'home-videos Posts', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'home-videos', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Home Videos', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'home-videos', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'home-videos Archives', 'textdomain' ),
		'attributes' => __( 'home-videos Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent home-video:', 'textdomain' ),
		'all_items' => __( 'All Custom Posts', 'textdomain' ),
		'add_new_item' => __( 'Add New home-video', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New home-videos', 'textdomain' ),
		'edit_item' => __( 'Edit home-videos', 'textdomain' ),
		'update_item' => __( 'Update home-videos', 'textdomain' ),
		'view_item' => __( 'View home-videos', 'textdomain' ),
		'view_items' => __( 'View Custom Posts', 'textdomain' ),
		'search_items' => __( 'Search home-videos', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into home-video', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this home-video', 'textdomain' ),
		'items_list' => __( 'Custom Posts list', 'textdomain' ),
		'items_list_navigation' => __( 'Custom Posts list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Custom Posts list', 'textdomain' ),
	);
	$rewrite = array(
		'slug' => 'home-videos',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'home-videos', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-collapse',
		'supports' => array('title', 'editor','thumbnail', 'revisions', 'author','page-attributes', 'post-formats',),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'home-videos', $args );

}
add_action( 'init', 'create_homevideo_cpt', 0 );

add_theme_support('responsive-embeds');
add_theme_support('custom-fields');
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
