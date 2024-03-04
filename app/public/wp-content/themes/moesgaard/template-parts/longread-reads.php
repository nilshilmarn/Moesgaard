<?php 
/**
 * 
 * The longread reads template
 * 
 * @package moesgaard
 * @since v1.0
 */




?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>" class="read-more">
        <?php
            if (has_post_thumbnail()) {

                the_post_thumbnail(
                    'large',
                    array(
                        'class' => 'img-fluid mb-3'
                    )
                );
            }
        ?>
    </a>
    <?php the_tags(''); ?>
    <a href="<?php the_permalink(); ?>" class="read-more">
        <h4> <?php the_title(); ?> </h4>
        <p class="excerpt"><?php force_balance_tags( the_excerpt() ); ?></p>
    </a>
</article>