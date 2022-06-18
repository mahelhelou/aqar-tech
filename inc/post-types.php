<?php

/**
 * Aqar Tech post types
 *
 * @package Aqar Tech
 */

function aqar_tech_post_types() {
  // Investment post type
  register_post_type( 'investment', [
    'show_in_rest'    => true,
    'supports'        => [ 'title', 'editor', 'thumbnail' ],
    'has_archive'     => true,
    'rewrite'         => [ 'slug' => 'investments' ],
    'public'          => true,
    'taxonomies'      => [ 'post_tag', 'category' ],
    'labels'          => [
      'name'          => __( 'Investments' ),
      'add_new_item'  => __( 'Add New Investment' ),
      'edit_item'     => __( 'Edit Investment' ),
      'all_items'     => __( 'All Investments' ),
      'singular_name' => __( 'Investment' ),
      'view_item'     => __( 'View Investment' )
    ],
   'menu_icon'         => 'dashicons-tagcloud'
  ] );

	// Testimonial post type
  register_post_type( 'testimonial', [
    'supports'        => [ 'title', 'editor' ],
    'public'          => true,
    'labels'          => [
      'name'          => __( 'Testimonials' ),
      'add_new_item'  => __( 'Add New Testimonial' ),
      'edit_item'     => __( 'Edit Testimonial' ),
      'all_items'     => __( 'All Testimonials' ),
      'singular_name' => __( 'Testimonial' ),
      'view_item'     => __( 'View Testimonial' )
  ],
  'menu_icon'         => 'dashicons-format-quote'
  ] );

	// Team post type
	register_post_type( 'team', [
		'supports'        => [ 'title', 'editor', 'thumbnail' ],
		'has_archive'     => true,
		'rewrite'         => [ 'slug' => 'team' ],
		'public'          => true,
		'labels'          => [
			'name'          => __( 'Team' ),
			'add_new_item'  => __( 'Add New Team Member' ),
			'edit_item'     => __( 'Edit Team Member' ),
			'all_items'     => __( 'All Team Members' ),
			'singular_name' => __( 'Team Member' ),
			'view_item'     => __( 'View Team Member' )
	],
	'menu_icon'         => 'dashicons-groups'
	] );

	// FAQ post type
	register_post_type( 'faq', [
		'supports'        => [ 'title', 'editor' ],
		'has_archive'     => true,
		'rewrite'         => [ 'slug' => 'faqs' ],
		'public'          => true,
		'labels'          => [
			'name'          => __( 'FAQ' ),
			'add_new_item'  => __( 'Add New FAQ' ),
			'edit_item'     => __( 'Edit FAQ' ),
			'all_items'     => __( 'All FAQs' ),
			'singular_name' => __( 'FAQ' ),
			'view_item'     => __( 'View FAQ' )
	],
	'menu_icon'         => 'dashicons-editor-help'
	] );
}

add_action( 'init', 'aqar_tech_post_types' );