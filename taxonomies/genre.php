<?php

namespace roku_direct_publisher\genre;

add_action( 'init', __NAMESPACE__ . '\\init', 10 );

function init() {
	$labels = array(
		'name'                       => _x( 'Genres', 'Taxonomy General Name', 'roku_direct_publisher' ),
		'singular_name'              => _x( 'Genre', 'Taxonomy Singular Name', 'roku_direct_publisher' ),
		'menu_name'                  => __( 'Genres', 'roku_direct_publisher' ),
		'all_items'                  => __( 'All Genres', 'roku_direct_publisher' ),
		'parent_item'                => __( 'Parent Genre', 'roku_direct_publisher' ),
		'parent_item_colon'          => __( 'Parent Genre:', 'roku_direct_publisher' ),
		'new_item_name'              => __( 'New Genre Name', 'roku_direct_publisher' ),
		'add_new_item'               => __( 'Add New Genre', 'roku_direct_publisher' ),
		'edit_item'                  => __( 'Edit Genre', 'roku_direct_publisher' ),
		'update_item'                => __( 'Update Genre', 'roku_direct_publisher' ),
		'view_item'                  => __( 'View Genre', 'roku_direct_publisher' ),
		'separate_items_with_commas' => __( 'Separate genres with commas', 'roku_direct_publisher' ),
		'add_or_remove_items'        => __( 'Add or remove genres', 'roku_direct_publisher' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'roku_direct_publisher' ),
		'popular_items'              => __( 'Popular Genres', 'roku_direct_publisher' ),
		'search_items'               => __( 'Search Genres', 'roku_direct_publisher' ),
		'not_found'                  => __( 'Not Found', 'roku_direct_publisher' ),
		'no_terms'                   => __( 'No genres', 'roku_direct_publisher' ),
		'items_list'                 => __( 'Genres list', 'roku_direct_publisher' ),
		'items_list_navigation'      => __( 'Genres list navigation', 'roku_direct_publisher' ),
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
	\register_taxonomy( 'roku_genre', array( 'roku_video' ), $args );
	$genres = array(
    'action' => 'Action',
    'adventure' => 'Adventure',
    'animals' => 'Animals',
    'animated' => 'Animated',
    'anime' => 'Anime',
    'children' => 'Children',
    'comedy' => 'Comedy',
    'crime' => 'Crime',
    'documentary' => 'Documentary',
    'drama' => 'Drama',
    'educational' => 'Educational',
    'fantasy' => 'Fantasy',
    'faith' => 'Faith',
    'food' => 'Food',
    'fashion' => 'Fashion',
    'gaming' => 'Gaming',
    'health' => 'Health',
    'history' => 'History',
    'horror' => 'Horror',
    'miniseries' => 'Miniseries',
    'mystery' => 'Mystery',
    'nature' => 'Nature',
    'news' => 'News',
    'reality' => 'Reality',
    'romance' => 'Romance',
    'science' => 'Science',
    'science-fiction' => 'Science Fiction',
    'sitcom' => 'Sitcom',
    'special' => 'Special',
    'sports' => 'Sports',
    'thriller' => 'Thriller',
    'technology' => 'Technology'
  );
  foreach( $genres as $slug => $description ){
    wp_insert_term( $description, 'roku_genre', array( 'slug' => $slug ) );
  }
}
