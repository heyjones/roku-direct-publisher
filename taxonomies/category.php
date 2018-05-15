<?php

namespace roku_direct_publisher\category;

add_action( 'init', __NAMESPACE__ . '\\init', 10 );

function init() {
	$labels = array(
		'name'                       => _x( 'Categories', 'Taxonomy General Name', 'roku_direct_publisher' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'roku_direct_publisher' ),
		'menu_name'                  => __( 'Categories', 'roku_direct_publisher' ),
		'all_items'                  => __( 'All Categories', 'roku_direct_publisher' ),
		'parent_item'                => __( 'Parent Category', 'roku_direct_publisher' ),
		'parent_item_colon'          => __( 'Parent Category:', 'roku_direct_publisher' ),
		'new_item_name'              => __( 'New Category Name', 'roku_direct_publisher' ),
		'add_new_item'               => __( 'Add New Category', 'roku_direct_publisher' ),
		'edit_item'                  => __( 'Edit Category', 'roku_direct_publisher' ),
		'update_item'                => __( 'Update Category', 'roku_direct_publisher' ),
		'view_item'                  => __( 'View Category', 'roku_direct_publisher' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'roku_direct_publisher' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'roku_direct_publisher' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roku_direct_publisher' ),
		'popular_items'              => __( 'Popular Categories', 'roku_direct_publisher' ),
		'search_items'               => __( 'Search Categories', 'roku_direct_publisher' ),
		'not_found'                  => __( 'Not Found', 'roku_direct_publisher' ),
		'no_terms'                   => __( 'No categories', 'roku_direct_publisher' ),
		'items_list'                 => __( 'Categories list', 'roku_direct_publisher' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'roku_direct_publisher' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	\register_taxonomy( 'roku_category', array( 'roku_video' ), $args );
}
