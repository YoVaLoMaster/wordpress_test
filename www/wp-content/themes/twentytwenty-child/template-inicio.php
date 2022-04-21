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
                                <img src="'.get_the_post_thumbnail_url().'" class="card-img-top" alt="'.get_the_title().'">
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
        <div class="container-fluid px-0 py-5">
            <div class="row py-5">
                <div class="col-12 ">
                    <h1>Portfolio</h1>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-12 d-flex px-0">

                    <?php
                        $args = array(
                            'post_type' => 'raul',
                            'posts_per_page' => '6' 
                        );
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    // print_r($the_query);
                                    echo '<div class="col-2 px-2">
                                        <div class="card ">
                                            <img src="'.get_the_post_thumbnail_url().'" class="card-img-top" alt="'.get_the_title().'">
                                            <div class="card-body">
                                                <h5 class="card-title">'.get_the_title().'</h5>
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
<?php

    get_footer();