
	
<footer class="bg-white rs-section border-t" data-section-name="footer">
	<div class="wrapper">
		<div class="container-fluid py-5">
			<div class="row">
		
				<div class="col-3 col-lg-6 d-flex align-items-center mainmfoter" >
					<div>
						<?php
							// Site title or logo.
							twentytwenty_site_logo();
						?>
					</div>
					
				</div>
				
				<div class="col-9 col-lg-6 d-flex flex-column justify-content-between">
					<div class="d-flex justify-content-end text-right flex-column legalcontent">
						<a href="<?php the_field('instagram', 'option'); ?>" target="_blank"><span class="fs-20 icon-instagram"></span></a>
						<p class="fs-16 color-green mb-0"><?php the_field('email', 'option'); ?></p>
						<p class="fs-16 color-green mb-0"><?php the_field('telefono', 'option'); ?></p>
						<p class="fs-16 color-green mb-0"><?php  echo '&copy '.get_bloginfo('name').' '.date("Y",time()); ?></p>
					</div>
				</div>
			</div>
			
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