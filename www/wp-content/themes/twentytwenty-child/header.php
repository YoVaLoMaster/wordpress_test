<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title( '|', true, 'right' ); ?> <?php echo get_bloginfo( 'name' ); ?></title>	
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container">
	<header>
	<?php  if (!wp_is_mobile()): ?>
		<nav class="navbar-main navbar-expand-lg
			<?php
			if ( is_user_logged_in() ) {
			$user = wp_get_current_user();
			if ($user->roles[0] == 'administrator') { ?>
				logged-admin
			<?php
			}
			}
			?>
			navbar-transition">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-6">
							<div class="navbar-brand py-3">
								<a href="<?php echo get_home_url(); ?>">
									<?php
										// Site title or logo.
										twentytwenty_site_logo();
									?>
								</a>
							</div> 
						</div>
						<div class="col-6 d-flex justify-content-end">
							<div class="">
								<?php
									wp_nav_menu([
									'menu'	           => 'contacto',
									'theme_location'   => 'contacto',
									'container'        => 'div',
									'container_id'     => 'navbar',
									'depth'            => 2,
									'container_class'  => 'menu ',
									'menu_id'          => 'main-menu',
									'menu_class'       => 'navbar-nav nav-primary',
									'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
									'walker'           => new WP_Bootstrap_Navwalker()
									]);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
 
	<?php  elseif (wp_is_mobile()): ?>
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row my-3">
					<div class="col-4">
						<a class="fs-16 iconmenu-mobil class-show forcecolor-clear" id="openmenu-mobile">
							<?php _e('Menu', 'raul') ?>
						</a>
						<a class="fs-16 iconmenu-mobil class-hide forcecolor-dark" id="closemenu-mobile">
							<span class="con-arrow-thin-left"></span> <?php _e('Cerrar', 'raul') ?>
						</a>
					</div>
					<div class="col-8">
						<?php
							wp_nav_menu([
							'menu'	           => 'contacto',
							'theme_location'   => 'contacto',
							'container'        => 'div',
							'container_id'     => 'navbar_contacto',
							'depth'            => 2,
							'container_class'  => 'menu ',
							'menu_id'          => 'main-menu-mobil-contacto',
							'menu_class'       => 'navbar-nav nav-primary',
							'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
							'walker'           => new WP_Bootstrap_Navwalker()
							]);
						?>
					</div>
				</div>
		

				<div class="row">
					<div class="col-12">
						<div class="navbar-brand-mobile py-0">
							<a href="<?php echo get_home_url(); ?>"><span class="icon-logo fs-50 forcecolor-clear"></span></a>
						</div> 
					</div>
					
				</div>  
			</div>  
		</div>  
	<?php endif; ?>	
	</header>


	<div id="content" class="site-content">
