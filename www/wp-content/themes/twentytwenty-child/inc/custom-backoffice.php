<?php
/**
 * Custom Back-Office
 *
 * @package santa_cole
 */

/* ------------- Custom Admin Menu for Authors */

add_action( 'admin_menu', 'remove_menus_author' );
function remove_menus_author() {

	$author = wp_get_current_user();

  if( isset( $author->roles[0] ) ) {
      $current_role = $author->roles[0];
  } else {
      $current_role = 'no_role';
  }

	if( 'author' == $current_role ) {
		remove_menu_page( 'index.php');
		remove_menu_page( 'edit.php' );          						// Posts
	  remove_menu_page( 'upload.php' );        						// Media
	  remove_menu_page( 'tools.php' );         						// Tools
	  remove_menu_page( 'edit-comments.php' ); 						// Comments
		remove_menu_page( 'edit.php?post_type=country' );		// Country
		remove_menu_page( 'edit.php?post_type=state' );			// State
		remove_menu_page( 'edit.php?post_type=city' );			// City
		remove_menu_page( 'profile.php' );									// Profile
		remove_menu_page( 'wpcf7' ); 												// Contact Form 7
		remove_menu_page( 'post-new.php');
		remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker');
		remove_submenu_page( 'edit.php?post_type=teacherfile','post-new.php?post_type=teacherfile' );

	}

}


/* ------------- Customize Login Logo */
function my_login_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$custom_logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<style type="text/css">
#login h1 a,
.login h1 a {
		background-image: url(<?php echo $custom_logo_url[0]; ?>);
		height: 84px;
		width: 100%;
		background-size: contain;
		background-repeat: no-repeat;
}
#login #nav a, #login .privacy-policy-page-link, #login .forgetmenot,
#login #backtoblog {
	 display:none;
}
#login .button-primary {
	background:#222;
	border-color:#222;
}
#login .dashicons-visibility::before, #factoria-footer a  {
	color:#222;
}
#login input[type="text"]:focus,
#login input[type="password"]:focus,
#login input[type="checkbox"]:focus {
	border-color:#222;
	border-width:2px;
	box-shadow:0 0 0;
}
</style>
<?php
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_footer() {
	echo '<div id="factoria-footer" style="width:320px; margin:0 auto">'
	. '<p style="text-align:center; margin-top:20px">'
	. 'Framework basado en Wordpress desarrollado por '
	. '<a href="https://www.santacole.com" target="_blank">'
	. 'Intramundana</a></p>'
	. '</div>';
}
add_action('login_footer','my_login_footer');

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
