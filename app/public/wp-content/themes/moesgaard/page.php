<?php 

/**
 * 
 * The page template file
 * 
 * 
 * @package moesgaard
 * @since moesgaard v1.0
 * 
 */


 get_header();
 get_template_part( 'template-parts/banner', 'title');
?>



<div class="content-area">
    <div class="container">
        <div class="row">

        <?php 
            if (have_posts())
            {
                while(have_posts())
                {
                    the_post();

                    if (has_post_thumbnail()) {

                        the_post_thumbnail(
                            'large',
                            array(
                                'class' => 'img-fluid'
                            )
                        );
                    }
        ?>
            <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php 
                    the_content();
                ?>

                </article>
            </div>
        <?php
                }
            } else 
            {
                get_template_part( 'template-parts/content', 'none');
            }
        ?>
        </div>
    </div>
</div>







<?php get_footer();