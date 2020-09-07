<?php
/**
 * Plugin Name: Sedoo - VUE JS Components
 * Description: Permet l'affichage de block vue js par les blocs gutenberg
 * Version: 0.2.0
 * Author: Nicolas Gruwe 
 * GitHub Plugin URI: sedoo/sedoo-wppl-components
 * GitHub Branch:     master
 */


include 'sedoo-wppl-components-functions.php';
include 'sedoo-wppl-components-acf.php';
include 'inc/sedoo-wppl-components-acf-fields.php';

// Register Custom Post Type
function sedoo_custompost_vuejselements() {

	$labels = array(
		'name'                  => _x( 'Composants WEB', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'VueJS', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Composant WEB', 'text_domain' ),
		'name_admin_bar'        => __( 'Composant WEB', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'VueJS', 'text_domain' ),
		'description'           => __( 'Elements VUEJS', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title','author','revisions'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'vuejs', $args );
   
}
add_action( 'init', 'sedoo_custompost_vuejselements', 0 );


/**
 * Enable unfiltered_html capability for Editors.
 * source : https://gist.github.com/kellenmace/9e6a6fbb92ec75940f23d2a6f01c9b59#gistcomment-3270716
 * Not compatible with wp 5, See comment by innocenat
 */
function sedoo_add_unfiltered_html_capability_to_editors( $caps, $cap, $user_id ) {
	if ( 'unfiltered_html' === $cap && (user_can( $user_id, 'editor' ) || user_can( $user_id, 'administrator' ) ) ) {
	$caps = array( 'unfiltered_html' );
	}
	return $caps;
}
add_filter( 'map_meta_cap', 'sedoo_add_unfiltered_html_capability_to_editors', 1, 4 );