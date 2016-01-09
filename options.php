<?php

namespace Squarely\Options;

if ( ! class_exists( 'SquarelyOptions' ) ) :
class SquarelyOptions {

  private static $instance;

  public $version = '1.0';
  public $extra_scripts;
  public $layout;

  protected function __construct() {

    $this->include_required_files();
    // add_action( 'tgmpa_register', array( $this, 'require_plugins' ) );

    if ( ! get_theme_mod( 'squarely_version', false ) ) {
      set_theme_mod( 'squarely_version', $this->version );
    }

  }

  public static function get_instance() {
    if ( null == self::$instance ) {
      self::$instance = new self;
    }

    return self::$instance;
  }

  private function include_required_files() {

    /**
     * If Kirki is not already installed, use the included version
     */
    if ( ! class_exists( 'Kirki' ) ) {
      require get_template_directory() . '/inc/kirki/kirki.php';
    }

    /**
     * Customizer additions.
     */
    require get_template_directory() . '/inc/customizer.php';

    /**
     * Include additional theme classes
     */
    require get_template_directory() . '/inc/squarely-layout.php';
    require get_template_directory() . '/inc/squarely-scripts.php';

    /**
     * Load Jetpack compatibility file.
     */
    require get_template_directory() . '/inc/jetpack.php';
    
    /**
     * If jetpack is not installed then we need to include its site-logo module
     */
    if ( ! function_exists( 'site_logo_init' ) ) {
      require get_template_directory() . '/inc/site-logo.php';
    }

  }

}
endif;


if ( ! function_exists( 'SquarelyOptions' ) ) :
function SquarelyOptions() {
  return SquarelyOptions::get_instance();
}
endif;
// Global for backwards compatibility.
$GLOBALS['squarelyoptions'] = SquarelyOptions();
global $squarelyoptions;
