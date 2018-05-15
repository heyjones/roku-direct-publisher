<?php

/*
Plugin Name: Roku Direct Publisher
Plugin URI:  https://github.com/heyjones/roku-direct-publisher
Description: WordPress Plugin for Roku Direct Publisher (https://developer.roku.com/publish)
Version:     0.0
Author:      Chris Jones
Author URI:  http://heyjones.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

namespace roku_direct_publisher;

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if( !defined( 'ROKU_DIRECT_PUBLISHER_DIR' ) ){
  define( 'ROKU_DIRECT_PUBLISHER_DIR', plugin_dir_path( __FILE__ ) );
}
if( !defined( 'ROKU_DIRECT_PUBLISHER_URL' ) ){
  define( 'ROKU_DIRECT_PUBLISHER_URL', plugin_dir_url( __FILE__ ) );
}

require_once( ROKU_DIRECT_PUBLISHER_DIR . 'lib/acf.php' );
require_once( ROKU_DIRECT_PUBLISHER_DIR . 'lib/feed.php' );
require_once( ROKU_DIRECT_PUBLISHER_DIR . 'lib/settings.php' );

require_once( ROKU_DIRECT_PUBLISHER_DIR . 'post_types/video.php' );

require_once( ROKU_DIRECT_PUBLISHER_DIR . 'taxonomies/category.php' );
require_once( ROKU_DIRECT_PUBLISHER_DIR . 'taxonomies/tag.php' );
require_once( ROKU_DIRECT_PUBLISHER_DIR . 'taxonomies/genre.php' );
//require_once( ROKU_DIRECT_PUBLISHER_DIR . 'taxonomies/format.php' );
//require_once( ROKU_DIRECT_PUBLISHER_DIR . 'taxonomies/rating.php' );
