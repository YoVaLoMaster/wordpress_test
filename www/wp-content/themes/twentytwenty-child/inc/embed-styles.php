<?php
/**
 * Embed Styles
 *
 * @package santa-cole
 */

/* ------------- Embed Modular CSS */
function include_styles() {
  wp_enqueue_style('santa-cole-bs-css', '/wp-content/themes/twentytwenty-child/dist/css/bootstrap.min.css' );
  wp_enqueue_style('santa-cole-bsmm-css', '/wp-content/themes/twentytwenty-child/dist/css/bootstrap.min.css.map' );
  wp_enqueue_style('santa-cole-bsmm-css', '/wp-content/themes/twentytwenty-child/dist/css/bootstrap.css.map' );
  // wp_enqueue_style( 'slick-css', '/wp-content/themes/twentytwenty-child/dist/css/slick.css' );
  // wp_enqueue_style('style-borders', '/wp-content/themes/twentytwenty-child/dist/css/style-borders.css' );
  // wp_enqueue_style('style-colors', '/wp-content/themes/twentytwenty-child/dist/css/style-colors.css' );
  // wp_enqueue_style('style-fonts', '/wp-content/themes/twentytwenty-child/dist/css/style-fonts.css' );
  // wp_enqueue_style('style-footer', '/wp-content/themes/twentytwenty-child/dist/css/style-footer.css' );
  // wp_enqueue_style('style-general', '/wp-content/themes/twentytwenty-child/dist/css/style-general.css' );
  // wp_enqueue_style('style-icons', '/wp-content/themes/twentytwenty-child/dist/css/style-icons.css' );
  // wp_enqueue_style('style-slick', '/wp-content/themes/twentytwenty-child/dist/css/style-slick.css' );
  // wp_enqueue_style('style-header', '/wp-content/themes/twentytwenty-child/dist/css/style-header.css' );
  // wp_enqueue_style('custom-css', '/wp-content/themes/twentytwenty-child/dist/css/custom.css' );
  wp_enqueue_style('custom-css', '/wp-content/themes/twentytwenty-child/css/build/main.min.css' );
}
add_action( 'wp_enqueue_scripts', 'include_styles' );
