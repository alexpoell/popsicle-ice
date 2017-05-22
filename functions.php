<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
//For fixing navigation in Sage. Added 25/11/15
require_once('wp_bootstrap_navwalker.php');

$home = "Homepage";
acf_add_options_page( $home );

add_action('pre_get_posts', 'remove_podpress_from_automatic_excerpts');
function remove_podpress_from_automatic_excerpts() {
  /* This function removes podPress elements from post content on the homepage of the blog. It helps especially if the home page shows only excerpts of the posts.*/
  if ( is_home() ) {
    global $podPress;
    if ( TRUE=== isset($podPress) AND TRUE === is_object($podPress) ) {
      remove_filter('the_content', array(&$podPress, 'insert_content'));
    }
  }
}
