<?php

/**
 * Aqar Tech features
 *
 * @package Aqar Tech
 */

function aqar_tech_features() {
  /**
   * 1. Title tag
   * 2. Post thumbnail (Featured image)
   */

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'aqar_tech_features' );
