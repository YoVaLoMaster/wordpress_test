<?php
    /* Template Name: Contacto */
    get_header('');
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php

        get_template_part( 'template-parts/entry-header' );

        // if ( ! is_search() ) {
        // 	get_template_part( 'template-parts/featured-image' );
        // }

    ?>
    <section>
   
            <div class="container-fluid px-0 py-0">
                <div class="d-flex">
                    <div class="col-12 col-lg-5 px-0 border-r border-r-no customheightsection">

                    <?php the_field('mapa'); ?>

                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11929.154217792831!2d2.338462!3d41.6278939!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4aa83c108f02fd83!2sParc%20de%20Belloch!5e0!3m2!1ses!2ses!4v1647333053120!5m2!1ses!2ses" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>              -->
                    </div>
                    <div class="col-12 col-lg-7 px-0 d-flex align-items-center justify-content-center ">
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