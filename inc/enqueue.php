<?php

/**
 * Aqar Tech assets (Styles and scripts)
 *
 * @package Aqar Tech
 */

function aqar_tech_assets() {
  // Load styles
  wp_enqueue_style( 'aqar-tech-styles', get_template_directory_uri() . '/app/dist/styles.css', [], '1.0' );

	// Remove jQuery
	// wp_deregister_script( 'jquery' );

  // Load scripts
  wp_enqueue_script( 'aqar-tech-scripts', get_template_directory_uri() . '/app/dist/bundled.js', [ 'jquery' ], '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'aqar_tech_assets' );