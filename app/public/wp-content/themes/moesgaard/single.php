<?php 

/**
 * 
 * The single posts file
 * 
 * 
 * @package moesgaard
 * @since moesgaard v1.0
 * 
 */


 get_header();
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
        ?>
            <div class="col-8 offset-md-2 overflow-hidden">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php 
                    if (has_post_thumbnail()) {

                        the_post_thumbnail( 'full');

                    }
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