<?php

namespace roku_direct_publisher\feed;

/*

Documentation:
https://github.com/rokudev/feed-specifications/blob/master/direct-publisher-feed-specification.md

*/

add_action( 'init', __NAMESPACE__ . '\\init' );

function init(){
  add_feed( 'roku-direct-publisher', 'roku_direct_publisher\feed\json' );
}

function json(){
  header( 'Content-Type: application/json' );
  $settings = get_option( 'roku_direct_publisher', true );
  $videos = get_posts( array(
    'post_type' => 'roku_video',
    'posts_per_page' => 1
  ) );
  $json = array(
    'providerName' => $settings['provider_name'],
    'lastUpdated' => $videos[0]->post_modified_gmt,
    'language' => $settings['language'],
    'movies' => videos( 'movie' ),
    'series' => videos( 'episode' ),
    'shortFormVideos' => videos( 'shortFormVideo' ),
    'tvSpecials' => videos( 'tvSpecial' ),
    'categories' => array(
    ),
    'playlists' => array(
    )
  );
  wp_send_json( $json );
}

function videos( $type ){
  $videos = array();
  $posts = get_posts( array(
    'meta_key' => 'roku_type',
    'meta_value' => $type,
    'post_type' => 'roku_video',
    'posts_per_page' => -1
  ) );
  foreach( $posts as $post ){
    $video = array(
      'id' => $post->ID,
      'title' => $post->post_title,
      'content' => null,
      'genres' => array_map( 'strtolower', wp_get_post_terms( $post->ID, 'roku_genre', array( 'fields' => 'names' ) ) ),
      'thumbnail' => get_the_post_thumbnail_url( $post->ID, 'roku_1080' ),
      'releaseDate' => date( 'c', strtotime( $post->post_modified_gmt ) ),
      'shortDescription' => $post->post_excerpt,
      'longDescription' => $post->post_content,
      'tags' => array_map( 'strtolower', wp_get_post_terms( $post->ID, 'roku_tag', array( 'fields' => 'names' ) ) ),
      'credits' => null,
      'rating' => null,
      'externalIds' => null
    );
    $videos[] = $video;
  }
  return $videos;
}

function series(){

}
