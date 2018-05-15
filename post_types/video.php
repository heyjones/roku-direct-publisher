<?php

namespace roku_direct_publisher\video;

add_action( 'init', __NAMESPACE__ . '\\init' );
add_action( 'after_setup_theme', __NAMESPACE__ . '\\after_setup_theme' );
add_action( 'admin_head', __NAMESPACE__ . '\\admin_head' );
add_action( 'add_meta_boxes', __NAMESPACE__ . '\\add_meta_boxes' );
add_filter( 'admin_post_thumbnail_html', __NAMESPACE__ . '\\admin_post_thumbnail_html' );

function init(){
	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'roku_direct_publisher' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'roku_direct_publisher' ),
		'menu_name'             => __( 'Roku', 'roku_direct_publisher' ),
		'name_admin_bar'        => __( 'Video', 'roku_direct_publisher' ),
		'archives'              => __( 'Video Archives', 'roku_direct_publisher' ),
		'attributes'            => __( 'Video Attributes', 'roku_direct_publisher' ),
		'parent_item_colon'     => __( 'Parent Video:', 'roku_direct_publisher' ),
		'all_items'             => __( 'All Videos', 'roku_direct_publisher' ),
		'add_new_item'          => __( 'Add New Video', 'roku_direct_publisher' ),
		'add_new'               => __( 'Add New', 'roku_direct_publisher' ),
		'new_item'              => __( 'New Video', 'roku_direct_publisher' ),
		'edit_item'             => __( 'Edit Video', 'roku_direct_publisher' ),
		'update_item'           => __( 'Update Video', 'roku_direct_publisher' ),
		'view_item'             => __( 'View Video', 'roku_direct_publisher' ),
		'view_items'            => __( 'View Videos', 'roku_direct_publisher' ),
		'search_items'          => __( 'Search Video', 'roku_direct_publisher' ),
		'not_found'             => __( 'Not found', 'roku_direct_publisher' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'roku_direct_publisher' ),
		'featured_image'        => __( 'Thumbnail', 'roku_direct_publisher' ),
		'set_featured_image'    => __( 'Set thumbnail', 'roku_direct_publisher' ),
		'remove_featured_image' => __( 'Remove thumbnail', 'roku_direct_publisher' ),
		'use_featured_image'    => __( 'Use as thumbnail', 'roku_direct_publisher' ),
		'insert_into_item'      => __( 'Insert into video', 'roku_direct_publisher' ),
		'uploaded_to_this_item' => __( 'Uploaded to this video', 'roku_direct_publisher' ),
		'items_list'            => __( 'Videos list', 'roku_direct_publisher' ),
		'items_list_navigation' => __( 'Videos list navigation', 'roku_direct_publisher' ),
		'filter_items_list'     => __( 'Filter videos list', 'roku_direct_publisher' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'roku_direct_publisher' ),
		'description'           => __( 'Roku Direct Publisher', 'roku_direct_publisher' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'excerpt', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'data:image/svg+xml;base64,' . base64_encode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><path fill="white" d="M15.92041,18.95538c-.64569,0-1.195.87769-1.195,1.96411s.54926,1.96528,1.195,1.96528c.66071,0,1.20905-.87879,1.20905-1.96528S16.58112,18.95538,15.92041,18.95538Z"/><path fill="white" d="M32.5,0H7.5A7.522,7.522,0,0,0,0,7.5v25A7.522,7.522,0,0,0,7.5,40h25A7.522,7.522,0,0,0,40,32.5V7.5A7.522,7.522,0,0,0,32.5,0ZM10.38855,24.51282l-2.2027-3.05677H7.44507v3.05018H5v-9.1634H8.50269c2.01928,0,3.66754,1.37311,3.66754,3.06263a2.97656,2.97656,0,0,1-1.59351,2.51385L13.163,24.51282Zm5.53186.14428a3.73736,3.73736,0,1,1,3.76349-3.73761A3.73441,3.73441,0,0,1,15.92041,24.6571ZM35,24.50616h-.52179L33.379,23.55811A3.39725,3.39725,0,0,1,30.97461,24.657c-2.14276,0-2.99365-1.30566-2.99365-2.72058V17.675l-3.0951,3.094,3.7367,3.73718H25.54565L22.6051,21.59332v2.91284H20.16052v-7.1809H22.6051V20.1507l2.81665-2.81611h5.00452v3.92872c0,1.1405.27594,1.497.87744,1.497a1.3695,1.3695,0,0,0,1.25165-.78253V17.33459H35Z"/><path fill="white" d="M8.20087,16.86688h-.7558v3.06354h.7558a1.53179,1.53179,0,0,0,0-3.06354Z"/></svg>' ),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'post',
	);
	\register_post_type( 'roku_video', $args );
}

function after_setup_theme(){
  add_image_size( 'roku_1080', 1920, 1080, true );
  add_image_size( 'roku_720', 1280, 720, true );
  add_image_size( 'roku_480', 800, 450, true );
}

function admin_head(){
  remove_meta_box( 'postexcerpt', 'roku_video', 'normal' );
}

function add_meta_boxes( $post_type ){
  add_meta_box( 'short_description', __( 'Short Description', 'roku_direct_publisher' ), 'roku_direct_publisher\video\render_short_description', 'roku_video', 'normal', 'high' );
	add_meta_box( 'long_description', __( 'Long Description', 'roku_direct_publisher' ), 'roku_direct_publisher\video\render_long_description', 'roku_video', 'normal', 'high' );
}

function render_short_description( $post ){
	?>
	<textarea name="excerpt" rows="4" style="margin: 12px 0 0; width: 100%;"><?php echo $post->post_excerpt; ?></textarea>
	<p class="howto">A video description that does not exceed 200 characters. The text will be clipped if longer.</p>
	<?php
}

function render_long_description( $post ){
	?>
	<textarea name="content" rows="10" style="margin: 12px 0 0; width: 100%;"><?php echo $post->post_content; ?></textarea>
	<p class="howto">A longer video description that does not exceed 500 characters. The text will be clipped if longer. Must be different from the short description.</p>
	<?php
}

function admin_post_thumbnail_html( $content ){
	$content .= '<p class="howto">Provide an image that is at least 1920px wide and 1080px tall.</p>';
	return $content;
}
