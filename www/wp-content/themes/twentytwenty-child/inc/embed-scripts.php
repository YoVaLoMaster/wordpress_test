<?php
/**
 * Embed Scripts
 *
 * @package santa-cole
 */

/* ------------- Embed JS Scripts */
function include_scripts() {
  
  wp_enqueue_script ('jquery', '/wp-content/themes/twentytwenty-child/dist/js/jquery-3.5.1.min.js', array('jquery'), '', true);
  wp_enqueue_script ('popper', '/wp-content/themes/twentytwenty-child/dist/js/popper.min.js', array('jquery'), '', true);
  wp_enqueue_script ('bs-js', '/wp-content/themes/twentytwenty-child/dist/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script ('slick-js', '/wp-content/themes/twentytwenty-child/dist/js/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script ('spinner-js', '/wp-content/themes/twentytwenty-child/dist/js/bootstrap-input-spinner.js', array('jquery'), '', true);
  wp_enqueue_script ('fc-scrollify', '/wp-content/themes/twentytwenty-child/dist/js/jquery.scrollify.js', array('jquery'), '', true);
  wp_enqueue_script ('chocolat', '/wp-content/themes/twentytwenty-child/dist/js/chocolat.js', array('jquery'), '', true);
  wp_enqueue_script ('fc-init', '/wp-content/themes/twentytwenty-child/dist/js/init.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'include_scripts' );
