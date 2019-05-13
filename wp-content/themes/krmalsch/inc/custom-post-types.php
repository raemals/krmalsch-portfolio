<?php
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Gallery', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'text_domain' ),
		'description'           => __( 'Gallery', 'text_domain' ),
		'labels'                => $labels,
        'supports'              => array( 'title','author' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => null,
        'menu_icon' 		    => 'dashicons-heart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
        'can_export'            => true,
        'query_var'             => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_admin_column' => true
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'custom_post_type', 0 );



function codex_custom_taxonomy() {
	$labels_urcdept = array(
		'name'                   => _x( 'URC Department', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'          => _x( 'URC Department', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'              => __( 'URC Department', 'text_domain' ),
	);
	$args_urcdept = array(
		'labels'                 => $labels_urcdept,
		'hierarchical'           => true,
		'show_admin_column'      => true
	);
	register_taxonomy( 'urcdept_taxonomy', array( 'gallery' ), $args_urcdept );
}
add_action( 'init', 'codex_custom_taxonomy', 0 );




?>