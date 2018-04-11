<?php

namespace roku_direct_publisher\acf;

add_filter( 'acf/settings/dir', __NAMESPACE__ . '\\acf_settings_dir');
add_filter( 'acf/settings/path', __NAMESPACE__ . '\\acf_settings_path');

function acf_settings_dir( $dir ){
  $dir = plugin_dir_path( __FILE__ ) . 'vendor/advanced-custom-fields/';
  return $dir;
}
function acf_settings_path( $path ){
  $path = plugin_dir_url( __FILE__ ) . 'vendor/advanced-custom-fields/';
  return $path;
}
