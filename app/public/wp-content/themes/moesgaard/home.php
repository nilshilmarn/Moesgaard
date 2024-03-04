<?php

/**
 * 
 * The hone page file
 * 
 * @package moesgaard
 * @since v1.0
 */


get_header();

?>
    <div class="content-area">
        <div class="container">
            <div class="row">
                
                
                <section class=" overflow-hidden p-5">
                    <h1 class="mb-3 text-center">Seneste long reads</h1>
                    <p class="text-center mb-5">Kort lille beskrivelse</p>
                    <div class="d-flex gap-5 flex-lg-row flex-column">
                    <?php 

                    // Query posts from the category "longReads"
                    $longRead_posts = new WP_Query(array(
                        'category_name' => 'longRead',
                        'posts_per_page' => 3 // Adjust the number of posts per page as needed
                    ));                    


                    if ($longRead_posts->have_posts())
                    {
                    ?>
                        <div class="col-12 col-lg-8">
                            <?php 
                            $longRead_posts->the_post();
                            get_template_part( 'template-parts/longread', 'main');
                            ?>
                        </div>
                        <?php
                            ?>
                            <div class="d-flex gap-5 flex-lg-column">
                                <?php 
                                $count = 1;
                                while($count <= 2)
                                {
                                    $longRead_posts->the_post();
                                    get_template_part( 'template-parts/longread', 'reads');
                                    $count++;
                                }
                                ?>  
                            </div>
                        <?php
                    wp_reset_postdata();
                    }
                    ?>
                    </div>
                </section>

                <section class="oveflow-hidden p-5">
                    <h1 class="mb-3 text-center">Explainer videoer</h1>
                    <p class="text-center mb-5">Kort lille beskrivelse</p>

                    <div class="row">
                        <?php
                        // Query posts from the category "explainerVideo"
                        $explainerVideo_posts = new WP_Query(array(
                            'category_name' => 'explainerVideo',
                            'posts_per_page' => 4 // Adjust the number of posts per page as needed
                        ));

                        if ($explainerVideo_posts->have_posts()) {
                            while ($explainerVideo_posts->have_posts()) {
                                $explainerVideo_posts->the_post();
                                get_template_part('template-parts/explainerVideo', 'main');
                            }
                            wp_reset_postdata(); // Reset post data to the main query
                        } else {
                            // If no posts found
                            echo 'No posts found';
                        }
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>




<?php get_footer();