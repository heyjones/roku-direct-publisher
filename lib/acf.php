<?php

namespace roku_direct_publisher\acf;

if( !class_exists( 'acf' ) ){

  define( 'ACF_LITE', true );

  include_once( ROKU_DIRECT_PUBLISHER_DIR . 'vendor/advanced-custom-fields/acf.php' );

  add_filter( 'acf/settings/dir', __NAMESPACE__ . '\\acf_settings_dir' );
  add_filter( 'acf/settings/path', __NAMESPACE__ . '\\acf_settings_path' );

  function acf_settings_dir( $dir ){
    $dir = ROKU_DIRECT_PUBLISHER_DIR . 'vendor/advanced-custom-fields/';
    return $dir;
  }

  function acf_settings_path( $path ){
    $path = ROKU_DIRECT_PUBLISHER_URL . 'vendor/advanced-custom-fields/';
    return $path;
  }

}

register_field_group( array (
  'id' => 'acf_video',
  'title' => 'Video',
  'fields' => array (
    array (
      'key' => 'field_5ace12484bbf0',
      'label' => 'Type',
      'name' => 'roku_type',
      'type' => 'radio',
      'choices' => array (
        'movie' => 'Movie',
        'episode' => 'Episode',
        'shortFormVideo' => 'Short Film',
        'tvSpecial' => 'TV Special',
      ),
      'other_choice' => 0,
      'save_other_choice' => 0,
      'default_value' => '',
      'layout' => 'horizontal',
    ),
    array (
      'key' => 'field_5afc7d496c3b2',
      'label' => 'File',
      'name' => 'roku_file',
      'type' => 'file',
      'instructions' => 'Please make sure that the video file that you upload meets the <a href="https://sdkdocs.roku.com/display/sdkdoc/Audio+and+Video+Support" target="_blank">streaming specifications</a>.',
      'save_format' => 'object',
      'library' => 'all',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'roku_video',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
  ),
  'options' => array (
    'position' => 'normal',
    'layout' => 'default',
    'hide_on_screen' => array (
    ),
  ),
  'menu_order' => 0,
) );
