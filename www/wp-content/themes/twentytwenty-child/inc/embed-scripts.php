<?php
/**
 * Embed Scripts
 *
 * @package santa-cole
 */

/* ------------- Embed JS Scripts */
function include_scripts() {
  
  wp_enqueue_script ('jquery', '/wp-content/themes/twentytwenty-child/dist/js/jquery-3.5.1.min.js', array('jquery'), '', true);
  wp_enqueue_script ('bs-js', '/wp-content/themes/twentytwenty-child/dist/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script ('slick-js', '/wp-content/themes/twentytwenty-child/dist/js/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script ('fc-init', '/wp-content/themes/twentytwenty-child/js/build/app.min.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'include_scripts' );
