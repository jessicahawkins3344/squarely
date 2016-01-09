<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 *
 */
$squarely_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/walker.php',
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/feature.php'    // Feature Posts
];
foreach ($squarely_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'squarely'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);

//* Enqueue Backstretch script
add_action( 'wp_enqueue_scripts', 'enqueue_backstretch' );
function enqueue_backstretch() {

  //* Load scripts only on single Posts, static Pages and other single pages and only if featured image is present
  if ( is_singular() && has_post_thumbnail() )

    wp_enqueue_script( 'backstretch', get_bloginfo( 'stylesheet_directory' ) . '/dist/scripts/jquery.backstretch.js', array( 'jquery' ), '1.0.0' );
    wp_enqueue_script( 'backstretch-set', get_bloginfo('stylesheet_directory').'/dist/scripts/backstretch-set.js' , array( 'jquery', 'backstretch' ), '1.0.0' );

    wp_localize_script( 'backstretch-set', 'BackStretchImg', array( 'src' => wp_get_attachment_url( get_post_thumbnail_id() ) ) );

}

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}
