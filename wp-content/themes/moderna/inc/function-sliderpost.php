<?php 
/**
 * Register a custom post type called "slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_slider_init() {
	$labels = array(
		'name'                  => _x( 'sliders', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'slider', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'sliders', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'slider', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New slider', 'textdomain' ),
		'new_item'              => __( 'New slider', 'textdomain' ),
		'edit_item'             => __( 'Edit slider', 'textdomain' ),
		'view_item'             => __( 'View slider', 'textdomain' ),
		'all_items'             => __( 'All sliders', 'textdomain' ),
		'search_items'          => __( 'Search sliders', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent sliders:', 'textdomain' ),
		'not_found'             => __( 'No sliders found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No sliders found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'wpdocs_codex_slider_init' );

function wpdocs_codex_card_init() {
	$labels = array(
		'name'                  => _x( 'cards', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'card', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'cards', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'card', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New card', 'textdomain' ),
		'new_item'              => __( 'New card', 'textdomain' ),
		'edit_item'             => __( 'Edit card', 'textdomain' ),
		'view_item'             => __( 'View card', 'textdomain' ),
		'all_items'             => __( 'All cards', 'textdomain' ),
		'search_items'          => __( 'Search cards', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent cards:', 'textdomain' ),
		'not_found'             => __( 'No cards found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No cards found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'card Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'card archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into card', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this card', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter cards list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'cards list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'cards list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'card' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
	);

	register_post_type( 'card', $args );
}

add_action( 'init', 'wpdocs_codex_card_init' );

 function wpdocs_codex_work_init() {
	$labels = array(
		'name'                  => _x( 'works', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'work', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'works', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'work', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New work', 'textdomain' ),
		'new_item'              => __( 'New work', 'textdomain' ),
		'edit_item'             => __( 'Edit work', 'textdomain' ),
		'view_item'             => __( 'View work', 'textdomain' ),
		'all_items'             => __( 'All works', 'textdomain' ),
		'search_items'          => __( 'Search works', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent works:', 'textdomain' ),
		'not_found'             => __( 'No works found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No works found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'work Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'work archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into work', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this work', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter works list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'works list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'works list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
	);

	register_post_type( 'work', $args );
}

add_action( 'init', 'wpdocs_codex_work_init' );

?>






