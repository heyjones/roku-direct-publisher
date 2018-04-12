<?php

namespace roku_direct_publisher\acf;

if( !class_exists( 'acf' ) ){
  include_once( ROKU_DIRECT_PUBLISHER_DIR . 'vendor/advanced-custom-fields/acf.php' );
}

add_filter( 'acf/settings/dir', __NAMESPACE__ . '\\acf_settings_dir' );
add_filter( 'acf/settings/path', __NAMESPACE__ . '\\acf_settings_path' );
add_filter( 'acf/settings/load_json', __NAMESPACE__ . '\\acf_settings_load_json' );
// DEV ONLY
add_filter( 'acf/settings/save_json', __NAMESPACE__ . '\\acf_settings_save_json' );
// DEV ONLY

function acf_settings_dir( $dir ){
  $dir = ROKU_DIRECT_PUBLISHER_DIR . 'vendor/advanced-custom-fields/';
  return $dir;
}
function acf_settings_path( $path ){
  $path = ROKU_DIRECT_PUBLISHER_URL . 'vendor/advanced-custom-fields/';
  return $path;
}

function acf_settings_load_json( $paths ){
  $paths[] = ROKU_DIRECT_PUBLISHER_DIR . 'acf-json/';
  return $paths;
}

function acf_settings_save_json( $path ){
  $path = ROKU_DIRECT_PUBLISHER_DIR . 'acf-json/';
  return $path;
}
