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

require_once( plugin_dir_path( __FILE__ ) . 'post_types/video.php' );

require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/format.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/genre.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/tag.php' );
require_once( plugin_dir_path( __FILE__ ) . 'taxonomies/rating.php' );
