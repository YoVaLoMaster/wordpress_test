<?php 
    function style_raul(){
        wp_enqueue_style( 'child-theme-css', '[URL_CSS_PARENT]' );
    }
    add_action( 'wp_enqueue_scripts', 'style_raul' );





function raul_post_type(){
	$args = array(
		'label'                 => __( 'Portfolio', 'raul' ),
		'description'           => __( 'Portfolio prueba Raul', 'raul' ),
		'supports'              => array( 'title', 'thumbnail','editor' ),
		'public'                => true,
		'menu_position'         => 8,
		'has_archive'           => true,
		'rewrite'               =>  array('slug' => 'raul'),
		'menu_icon' => 'dashicons-format-gallery',
		
	);
	register_post_type( 'raul', $args );
}
add_action('init', 'raul_post_type');

function slider_post_type(){
	$args = array(
		'label'                 => __( 'Slider', 'raul' ),
		'description'           => __( 'Slider prueba Raul', 'raul' ),
		'supports'              => array( 'title', 'thumbnail','editor' ),
		'public'                => true,
		'menu_position'         => 9,
		'has_archive'           => true,
		'rewrite'               =>  array('slug' => 'slider'),
		'menu_icon' => 'dashicons-format-gallery',
		
	);
	register_post_type( 'slider', $args );
}
add_action('init', 'slider_post_type');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	

	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


function limite_extracto( $texto, $limite = '20' ) {
    $extracto = explode( ' ', $texto );
    return implode( ' ', array_slice($extracto, 0, $limite) );
}

/**
 * Implement the Custom Header feature.
 */
require '/var/www/html/wp-content/themes/twentytwenty-child/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require '/var/www/html/wp-content/themes/twentytwenty-child/inc/template-functions.php';


/**
 * Embed Modular CSS
 */
require '/var/www/html/wp-content/themes/twentytwenty-child/inc/embed-styles.php';

/**
 * Embed JS Scripts
 */
require '/var/www/html/wp-content/themes/twentytwenty-child/inc/embed-scripts.php';


/**
 * Bootstrap Navwalker.
 */
require '/var/www/html/wp-content/themes/twentytwenty-child/inc/bootstrap-wp-navwalker.php';


/**
 * Dynamic Tags
 */
require '/var/www/html/wp-content/themes/twentytwenty-child/inc/dynamic-tags.php';
