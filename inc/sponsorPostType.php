<?php
// Register Custom Post Type
function custom_post_type_sponsor() {

	$labels = array(
		'name'                  => _x( 'Sponsors', 'Post Type General Name', 'jonkopiongskanotklubb' ),
		'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', 'jonkopiongskanotklubb' ),
		'menu_name'             => __( 'Sponsors', 'jonkopiongskanotklubb' ),
		'name_admin_bar'        => __( 'Sponsor', 'jonkopiongskanotklubb' ),
		'archives'              => __( 'Sponsor Archives', 'jonkopiongskanotklubb' ),
		'attributes'            => __( 'Sponsor Attributes', 'jonkopiongskanotklubb' ),
		'parent_item_colon'     => __( 'Parent Sponsor:', 'jonkopiongskanotklubb' ),
		'all_items'             => __( 'All Sponsors', 'jonkopiongskanotklubb' ),
		'add_new_item'          => __( 'Add New Sponsor', 'jonkopiongskanotklubb' ),
		'add_new'               => __( 'Add New', 'jonkopiongskanotklubb' ),
		'new_item'              => __( 'New Sponsor', 'jonkopiongskanotklubb' ),
		'edit_item'             => __( 'Edit Sponsor', 'jonkopiongskanotklubb' ),
		'update_item'           => __( 'Update Sponsor', 'jonkopiongskanotklubb' ),
		'view_item'             => __( 'View Sponsor', 'jonkopiongskanotklubb' ),
		'view_items'            => __( 'View Sponsors', 'jonkopiongskanotklubb' ),
		'search_items'          => __( 'Search Sponsor', 'jonkopiongskanotklubb' ),
		'not_found'             => __( 'Not found', 'jonkopiongskanotklubb' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'jonkopiongskanotklubb' ),
		'featured_image'        => __( 'Sponsor Logo', 'jonkopiongskanotklubb' ),
		'set_featured_image'    => __( 'Set featured image', 'jonkopiongskanotklubb' ),
		'remove_featured_image' => __( 'Remove featured image', 'jonkopiongskanotklubb' ),
		'use_featured_image'    => __( 'Use as featured image', 'jonkopiongskanotklubb' ),
		'insert_into_item'      => __( 'Insert into Sponsor', 'jonkopiongskanotklubb' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Sponsor', 'jonkopiongskanotklubb' ),
		'items_list'            => __( 'Items list', 'jonkopiongskanotklubb' ),
		'items_list_navigation' => __( 'Items list navigation', 'jonkopiongskanotklubb' ),
		'filter_items_list'     => __( 'Filter Sponsors list', 'jonkopiongskanotklubb' ),
	);
	$args = array(
		'label'                 => __( 'Sponsor', 'jonkopiongskanotklubb' ),
		'description'           => __( 'Sponsorer', 'jonkopiongskanotklubb' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'sponsors_post_type', $args );

}
add_action( 'init', 'custom_post_type_sponsor', 0 );
?>