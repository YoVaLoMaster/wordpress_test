<?php
    /* Template Name: home */
    get_header();
    
?>

<section>
    <div class="container-fluid px-0">
        

        <div class="slider-servicios">
            <?php 

                $argsslider = array(
                    'post_type' => 'slider',
                    'posts_per_page' => '6' 
                );
                $the_query_slider = new WP_Query( $argsslider );
                if ( $the_query_slider->have_posts() ) {
                    while ( $the_query_slider->have_posts() ) {
                        $the_query_slider->the_post();
                        echo '
                            <div>
                                <div class="title-slier">
                                    <h1>'.get_the_title().'</h1>
                                    <p>'.get_the_excerpt().'</p>
                                </div>
                               '.get_the_post_thumbnail( get_the_ID(), "full" ).'
                            </div>        
                        ';
                    }
                    wp_reset_postdata();
                }
            
            ?>
        </div>
        <!-- ARROWS SLIDER PRIMARY -->
        <div class="control-slider-sev">
            <span class="arrow-left">
                <span class="slick-prev icon-arrow-thin-left "></span>
            </span>
            <span class="arrow-right">
                <span class="slick-next icon-arrow-thin-right "></span>
            </span>
        </div> 
    </div>
</section>
<section>
    <div class="wrapper">
        <div class="container-fluid px-0 pt-5">
            <div class="py-lg-5 px-3 px-lg-0 pb-5 d-block d-lg-flex align-items-center">
                <div class="col-12 col-lg-8 pb-3">
                    <h1><?php the_field('titulo') ?></h1>
                </div>
                <div class="col-12 col-lg-4 d-block d-lg-flex justify-content-end filteroptio">
                    <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                        <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                        <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'post_type' => 'raul' ) ); ?>
                    </select>
                </div>
            </div>

            <div class=" pb-0">
                <div class="d-flex flex-wrap px-3 px-lg-0">
                    <?php
                        $args = array(
                            'post_type' => 'raul',
                            'posts_per_page' => '6' 
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    echo '<div class="col-12 col-lg-4 pb-5">
                                        <div class="card ">
                                            <img src="'.get_field('imagen', $the_query->ID).'" class="card-img-top" alt="'.get_the_title().'">
                                            <div class="card-body">
                                                <h4 class="card-title">'.get_the_title().'</h4>
                                                <p class="card-text">'.limite_extracto( get_the_excerpt(), '8' ).'</p>
                                                <a href="'.get_the_guid().'" class="btn btn-primary py-2 px-5">Ver mas </a>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            wp_reset_postdata();
                        }
                    ?>  
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="wrapper">
        <div class="container-fluid px-0 pb-lg-5">
            <div class=" py-lg-5 pb-5 pt-0 px-3 ">
                <div class="col-12 px-3 px-lg-0">
                    <h2 class="pb-3"><?php the_field('titulodescripcion') ?></h2>
                    <p><?php the_field('descripcion') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

    get_footer();