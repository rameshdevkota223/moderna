<?php 
function register_custom_taxonomy() {

	$labels = array(
		'name'              => _x( 'Work Tags', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Work Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Work Tags', 'textdomain' ),
		'all_items'         => __( 'All Work Tags', 'textdomain' ),
		'view_item'         => __( 'View Work Tag', 'textdomain' ),
		'parent_item'       => __( 'Parent Work Tag', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Work Tag:', 'textdomain' ),
		'edit_item'         => __( 'Edit Work Tag', 'textdomain' ),
		'update_item'       => __( 'Update Work Tag', 'textdomain' ),
		'add_new_item'      => __( 'Add New Work Tag', 'textdomain' ),
		'new_item_name'     => __( 'New Work Tag Name', 'textdomain' ),
		'not_found'         => __( 'No Work Tags Found', 'textdomain' ),
		'back_to_items'     => __( 'Back to Work Tags', 'textdomain' ),
		'menu_name'         => __( 'Work Tag', 'textdomain' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'worktag' ),
		'show_in_rest'      => true,
	);


	register_taxonomy( 'worktag', 'work', $args );
		


}

add_action( 'init', 'register_custom_taxonomy', 0 );



?>