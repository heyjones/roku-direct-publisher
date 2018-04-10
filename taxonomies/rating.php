<?php

namespace roku_direct_publisher\rating;

add_action( 'init', __NAMESPACE__ . '\\init', 10 );

function init() {
  /*
  ratings
  */
	$labels = array(
		'name'                       => _x( 'Rating', 'Taxonomy General Name', 'roku_direct_publisher' ),
		'singular_name'              => _x( 'Rating', 'Taxonomy Singular Name', 'roku_direct_publisher' ),
		'menu_name'                  => __( 'Ratings', 'roku_direct_publisher' ),
		'all_items'                  => __( 'All Ratings', 'roku_direct_publisher' ),
		'parent_item'                => __( 'Parent Rating', 'roku_direct_publisher' ),
		'parent_item_colon'          => __( 'Parent Rating:', 'roku_direct_publisher' ),
		'new_item_name'              => __( 'New Rating Name', 'roku_direct_publisher' ),
		'add_new_item'               => __( 'Add New Rating', 'roku_direct_publisher' ),
		'edit_item'                  => __( 'Edit Rating', 'roku_direct_publisher' ),
		'update_item'                => __( 'Update Rating', 'roku_direct_publisher' ),
		'view_item'                  => __( 'View Rating', 'roku_direct_publisher' ),
		'separate_items_with_commas' => __( 'Separate ratings with commas', 'roku_direct_publisher' ),
		'add_or_remove_items'        => __( 'Add or remove ratings', 'roku_direct_publisher' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roku_direct_publisher' ),
		'popular_items'              => __( 'Popular Ratings', 'roku_direct_publisher' ),
		'search_items'               => __( 'Search Ratings', 'roku_direct_publisher' ),
		'not_found'                  => __( 'Not Found', 'roku_direct_publisher' ),
		'no_terms'                   => __( 'No ratings', 'roku_direct_publisher' ),
		'items_list'                 => __( 'Ratings list', 'roku_direct_publisher' ),
		'items_list_navigation'      => __( 'Ratings list navigation', 'roku_direct_publisher' ),
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
	\register_taxonomy( 'roku_rating', array( 'roku_video' ), $args );
  $ratings = array(
    '12',
    '12A',
    '14+',
    '14A',
    '15',
    '18',
    '18+',
    '18A',
    'A',
    'AA',
    'C',
    'C8',
    'E',
    'G',
    'NC17',
    'PG',
    'PG13',
    'R',
    'R18',
    'TV14',
    'TVG',
    'TVMA',
    'TVPG',
    'TVY',
    'TVY14',
    'TVY7',
    'U',
    'Uc',
    'UNRATED'
  );
  foreach( $ratings as $rating ){
    wp_insert_term( $rating, 'roku_rating' );
  }
  $labels = array(
		'name'                       => _x( 'Rating Sources', 'Taxonomy General Name', 'roku_direct_publisher' ),
		'singular_name'              => _x( 'Rating Source', 'Taxonomy Singular Name', 'roku_direct_publisher' ),
		'menu_name'                  => __( 'Rating Sources', 'roku_direct_publisher' ),
		'all_items'                  => __( 'All Rating Sources', 'roku_direct_publisher' ),
		'parent_item'                => __( 'Parent Rating Source', 'roku_direct_publisher' ),
		'parent_item_colon'          => __( 'Parent Rating Source:', 'roku_direct_publisher' ),
		'new_item_name'              => __( 'New Rating Source Name', 'roku_direct_publisher' ),
		'add_new_item'               => __( 'Add New Rating Source', 'roku_direct_publisher' ),
		'edit_item'                  => __( 'Edit Rating Source', 'roku_direct_publisher' ),
		'update_item'                => __( 'Update Rating Source', 'roku_direct_publisher' ),
		'view_item'                  => __( 'View Rating Source', 'roku_direct_publisher' ),
		'separate_items_with_commas' => __( 'Separate rating sources with commas', 'roku_direct_publisher' ),
		'add_or_remove_items'        => __( 'Add or remove rating sources', 'roku_direct_publisher' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roku_direct_publisher' ),
		'popular_items'              => __( 'Popular Rating Sources', 'roku_direct_publisher' ),
		'search_items'               => __( 'Search Rating Sources', 'roku_direct_publisher' ),
		'not_found'                  => __( 'Not Found', 'roku_direct_publisher' ),
		'no_terms'                   => __( 'No rating sources', 'roku_direct_publisher' ),
		'items_list'                 => __( 'Rating Sources list', 'roku_direct_publisher' ),
		'items_list_navigation'      => __( 'Rating Sources list navigation', 'roku_direct_publisher' ),
	);
	$args = array(
		'labels'                     => $labels,
    'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => false,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	\register_taxonomy( 'roku_rating_source', array( 'roku_video' ), $args );
  $rating_sources = array(
    'BBFC' => 'British Board of Film Classification',
    'CHVRS' => 'Canadian Home Video Rating System',
    'CPR' => 'Canadian Parental Rating',
    'MPAA' => 'Motion Picture Association of America',
    'UK_CP' => 'UK Content Provider',
    'USA_PR' => 'USA Parental Rating'
  );
  foreach( $rating_sources as $rating_source => $description ){
    wp_insert_term( $rating_source, 'roku_rating_source', array( 'description' => $description ) );
  }
}
