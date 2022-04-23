<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

		get_template_part( 'template-parts/entry-header' );

		// if ( ! is_search() ) {
		// 	get_template_part( 'template-parts/featured-image' );
		// }

	?>


		<section class="mt-5">
			<div class="wrapper">
				<div class="container-fluid px-0 py-3">
					<div class="py-0 py-lg-5">
						<div class="col-12">
						
							<img src="<?php the_field('imagen'); ?>" class="img-fluid d-lg-none d-block pb-5" >
							<?php
								if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
									the_excerpt();
								} else {
									the_content( __( 'Continue reading', 'twentytwenty' ) );
								}
							?> 
						</div>
					</div>
				</div>
			</div>
		</section>



	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
