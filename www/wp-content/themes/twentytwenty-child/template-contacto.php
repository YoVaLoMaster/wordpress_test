<?php
    /* Template Name: Contacto */
    get_header('');
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php get_template_part( 'template-parts/entry-header' );?>
    <section>
        <div class="container-fluid px-0 py-0">
            <div class="d-block d-lg-flex contacto">
                <div class="col-12 col-lg-5 px-0 ">
                    <?php the_field('mapa'); ?>
                </div>
                <div class="col-12 col-lg-7 px-0 d-flex align-items-center justify-content-center customheightsection">
                    <div class="infocotact text-center">
                        <?php the_field('datos'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>

<?php
    get_footer();