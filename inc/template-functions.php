<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package dc
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dc_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'dc_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dc_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'dc_pingback_header' );

/**
 * Register custom post type to characters
 */
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Characters', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Character', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Character', 'text_domain' ),
		'name_admin_bar'        => __( 'Character', 'text_domain' ),
		'archives'              => __( 'Character Archives', 'text_domain' ),
		'attributes'            => __( 'Character Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Character:', 'text_domain' ),
		'all_items'             => __( 'All Characters', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Character', 'text_domain' ),
		'edit_item'             => __( 'Edit Character', 'text_domain' ),
		'update_item'           => __( 'Update Character', 'text_domain' ),
		'view_item'             => __( 'View Character', 'text_domain' ),
		'view_items'            => __( 'View Character', 'text_domain' ),
		'search_items'          => __( 'Search Character', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Character', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Character', 'text_domain' ),
		'items_list'            => __( 'Characters list', 'text_domain' ),
		'items_list_navigation' => __( 'Characters list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Characters list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Character', 'text_domain' ),
		'description'           => __( 'Character villain or superhero, or staff', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'character', $args );

}
add_action( 'init', 'custom_post_type', 0 );