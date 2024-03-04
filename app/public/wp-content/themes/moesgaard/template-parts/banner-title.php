<?php 
/**
 * 
 * Title banner
 * 
 * @package moesgaard
 * @since v1.0
 */


    $blog_info      = get_bloginfo('name'); // Name of the blog
    $description    = get_bloginfo('description', 'display');



?>

<section class="title-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
        
                <?php

                    if (is_page()) 
                    {
                        the_title( '<h1 class="page-title">', '</h1>');
                
                    }
                    else if (is_single())
                    {
                    ?>
                        <p class="tag-line sub-title"><?php echo get_the_date( 'd M, y');?></p>

                    <?php
                        the_title( '<h1 class="page-title">', '</h1>');
                    }
                    else if (!is_front_page() && is_home())
                    {

                        $moesgaard_blog_title = get_the_title( get_option( 'page_for_posts', true ) );

                    ?>

                        <h1 class="page-title"> <?php  echo esc_html( $moesgaard_blog_title );  ?></h1>

                    <?php
                    }
                    else if (is_home())
                    {
                        if ($description)
                        {
                    ?>
                        <p class="tag-line sub-title"> <?php  echo esc_html( $description );  ?><p>

                    <?php
                        }
                    ?>
                        <h1> <?php  echo esc_html_e( 'Moesgaard', 'moesgaard');  ?></h1>
                    <?php
                    }
                    else if (is_archive())
                    {
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                    }
                    else if (is_404())
                    {
                    ?>
                        <p class="tag-line sub-title">404 fejl<p>
                        <h1> <?php  echo esc_html_e( 'Siden du leder efter eksisterer ikke', 'moesgaard');  ?></h1>
                    <?php
                    }
                    else if (is_search())
                    {
                        $search_title = sprintf('%s %s', __('Søgeresultater for: ', 'moesgaard'), get_search_query());

                    ?>
                        <h1 class="page-title"> <?php  echo esc_html( $search_title);  ?></h1>
                        
                    <?php
                    }

                ?>


            </div>
        </div>
    </div>
</section>