<?php
/**
 * @package MTM6303Plugin
 */
/*
Plugin Name: MTM6303 Plugin
Plugin URI: http://algonquincollege.com
Description: This is a Plugin created for Hosun's MTM6303 Final
Version: 1.0.0
Author: Hosun Na
Author URI: http://algonquincollege.com
License: GPLv2 or later
Text Domain: mtm6303Plugin
*/

function mtm6303finalplugin_init() 
{
    // register_post_type('mtm6303finalplugin_images',
    // mtm6303finalplugin_register_post_type());

    // echo "Test Plugin";

    $args = array(
        'public' => true,
        'label' => 'MTM6303 Slider',
        'supports' => array(
            'title',
            'thumnail',
            'editor',
        )
    );
    register_post_type('mtm6303finalplugin_mtm6303slider', mtm6303finalplugin_register_post_type());
}
add_action('init', 'mtm6303finalplugin_init');

// Register Custom Content Type 



function mtm6303finalplugin_register_post_type() {

    //MTM6303 Slider
	$labels = array(
		'name'                  => __( 'MTM6303 Slider', 'MTM6303 Slider General Name', 'mtm6303finalplugin' ),
		'singular_name'         => __( 'MTM6303 Slider', 'MTM6303 Slider Singular Name', 'mtm6303finalplugin' ),
		'add_new_item'          => __( 'Add New MTM6303 Slider', 'mtm6303finalplugin' ),
		'add_new'               => __( 'Add MTM6303 Slider', 'mtm6303finalplugin' ),
		'edit_item'             => __( 'Edit MTM6303 Slider', 'mtm6303finalplugin' ),
		'new_item'              => __( 'Update MTM6303 Slider', 'mtm6303finalplugin' ),
		'view_item'             => __( 'View MTM6303 Slider', 'mtm6303finalplugin' ),
		'search_items'          => __( 'Search MTM6303 Slider', 'mtm6303finalplugin' ),
		'not_found'             => __( 'Not MTM6303 Slider found', 'mtm6303finalplugin' ),
		'not_found_in_trash'    => __( 'Not MTM6303 Slider found in Trash', 'mtm6303finalplugin' ),
	);

	$args = array(
		// 'label'                 => __( 'MTM6303 Slider', 'mtm6303finalplugin' ),
		// 'description'           => __( 'MTM6303 Slider Description', 'mtm6303finalplugin' ),
		'labels'                => $labels,
        'has_archive'           => true,
        'public'                => true,
        'hierarchical'          => false,
		'supports'              => array(
            'title',
            'editor',
            'excerpt',
            'thumnail',
            'page-attributes'
        ),

        'rewrite' => array( 'slug' => 'mtm6303slider' ),
        'show_in_rest' => true
	);
	
    return $args;
}

// add_action( 'init', 'custom_post_type', 0 );

