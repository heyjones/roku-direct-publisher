<?php

namespace roku_direct_publisher\tag;

add_action( 'init', __NAMESPACE__ . '\\init', 10 );

function init() {
	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'roku_direct_publisher' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'roku_direct_publisher' ),
		'menu_name'                  => __( 'Tags', 'roku_direct_publisher' ),
		'all_items'                  => __( 'All Tags', 'roku_direct_publisher' ),
		'parent_item'                => __( 'Parent Tag', 'roku_direct_publisher' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'roku_direct_publisher' ),
		'new_item_name'              => __( 'New Tag Name', 'roku_direct_publisher' ),
		'add_new_item'               => __( 'Add New Tag', 'roku_direct_publisher' ),
		'edit_item'                  => __( 'Edit Tag', 'roku_direct_publisher' ),
		'update_item'                => __( 'Update Tag', 'roku_direct_publisher' ),
		'view_item'                  => __( 'View Tag', 'roku_direct_publisher' ),
		'separate_items_with_commas' => __( 'Separate tags with commas', 'roku_direct_publisher' ),
		'add_or_remove_items'        => __( 'Add or remove tags', 'roku_direct_publisher' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roku_direct_publisher' ),
		'popular_items'              => __( 'Popular Tags', 'roku_direct_publisher' ),
		'search_items'               => __( 'Search Tags', 'roku_direct_publisher' ),
		'not_found'                  => __( 'Not Found', 'roku_direct_publisher' ),
		'no_terms'                   => __( 'No tags', 'roku_direct_publisher' ),
		'items_list'                 => __( 'Tags list', 'roku_direct_publisher' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'roku_direct_publisher' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	\register_taxonomy( 'roku_tag', array( 'roku_video' ), $args );
}
