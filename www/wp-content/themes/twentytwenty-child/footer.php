
	
<footer class="bg-white rs-section border-t" data-section-name="footer">
	<div class="wrapper">
		<div class="container-fluid py-5">
			<div class="row">
			<?php  if (!wp_is_mobile()): ?>
				<div class="col-12 col-lg-6 d-flex flex-column justify-content-between" >
					<div>
						<?php
							// Site title or logo.
							twentytwenty_site_logo();
						?>
					</div>
					
				</div>
				
				<div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
					<div class="d-flex justify-content-end text-right flex-column legalcontent">
						<a href="#" target="_blank"><span class="fs-20 icon-instagram"></span></a>
						<p class="fs-16 color-green mb-0"><?php _e('jhonnyraulvarela@gmail.com', 'raul') ?></p>
						<p class="fs-16 color-green mb-0"><?php _e('+34 658 873 968', 'raul') ?></p>
						<p class="fs-16 color-green mb-0">
							<?php 
								echo '&copy '.get_bloginfo('name').' '.date("Y",time());
							?>
						</p>
					</div>
				</div>
			</div>
			<?php  elseif (wp_is_mobile()): ?>
				<div class="col-12 d-flex justify-content-between mb-4">
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
				<div class="col-12 ">
					<div class=" mb-4 mainimg-footer">
						<?php dynamic_sidebar( 'Footer_Logo' ); ?>
					</div>
					<div class="legalcontent mb-4">
						<p class="fs-16 color-green mb-0"><?php _e('jhonnyraulvarela@gmail.com', 'raul') ?></p>
						<p class="fs-16 color-green mb-0"><?php _e('+34 938 619 100', 'raul') ?></p>
					</div>
				</div>
				<div class="col-12 d-flex align-items-center justify-content-between">
					<div class="legalcontent">
						<?php echo '&copy '.get_bloginfo('name').' '.date("Y",time());?>
					</div>
					<div class="iconofooter">
						<a href="#" target="_blank"><span class="fs-20 icon-instagram"></span></a>
					</div>
				</div>
			<?php endif; ?>	
		</div>
	</div>
</footer>
</div><!-- end #container -->

<?php 
	wp_reset_query();
	wp_footer(); 
?>
</body>
</html>