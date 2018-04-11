<?php

namespace roku_direct_publisher\format;

add_action( 'init', __NAMESPACE__ . '\\init', 10 );

function init() {
	$labels = array(
		'name'                       => _x( 'Formats', 'Taxonomy General Name', 'roku_direct_publisher' ),
		'singular_name'              => _x( 'Format', 'Taxonomy Singular Name', 'roku_direct_publisher' ),
		'menu_name'                  => __( 'Formats', 'roku_direct_publisher' ),
		'all_items'                  => __( 'All Formats', 'roku_direct_publisher' ),
		'parent_item'                => __( 'Parent Format', 'roku_direct_publisher' ),
		'parent_item_colon'          => __( 'Parent Format:', 'roku_direct_publisher' ),
		'new_item_name'              => __( 'New Format Name', 'roku_direct_publisher' ),
		'add_new_item'               => __( 'Add New Format', 'roku_direct_publisher' ),
		'edit_item'                  => __( 'Edit Format', 'roku_direct_publisher' ),
		'update_item'                => __( 'Update Format', 'roku_direct_publisher' ),
		'view_item'                  => __( 'View Format', 'roku_direct_publisher' ),
		'separate_items_with_commas' => __( 'Separate formats with commas', 'roku_direct_publisher' ),
		'add_or_remove_items'        => __( 'Add or remove formats', 'roku_direct_publisher' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roku_direct_publisher' ),
		'popular_items'              => __( 'Popular Formats', 'roku_direct_publisher' ),
		'search_items'               => __( 'Search Formats', 'roku_direct_publisher' ),
		'not_found'                  => __( 'Not Found', 'roku_direct_publisher' ),
		'no_terms'                   => __( 'No formats', 'roku_direct_publisher' ),
		'items_list'                 => __( 'Formats list', 'roku_direct_publisher' ),
		'items_list_navigation'      => __( 'Formats list navigation', 'roku_direct_publisher' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	\register_taxonomy( 'roku_format', array( 'roku_video' ), $args );
  $formats = array(
    'movie' => 'Movie',
    'episode' => 'Episode',
    'shortFormVideo' => 'Short Film',
    'tvSpecial' => 'TV Special'
  );
  foreach( $formats as $slug => $description ){
    wp_insert_term( $description, 'roku_format', array( 'slug' => $slug ) );
  }
}
