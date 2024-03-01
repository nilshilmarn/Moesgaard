<?php



if (!function_exists( 'moesgaard_theme_setup' ))
{

    /**
     * Theme setup
     */

     function moesgaard_theme_setup()
     {
        load_theme_textdomain('moesgaard', get_template_directory(), '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
                )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');

        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary Menu', 'moesgaard')
            )
        );
     }
}

add_action('after_setup_theme', 'moesgaard_theme_setup');


/**
 * Enqueue styles and scripts
 */

function moesgaard_assets() 
{
    // Enqueue styles
    wp_enqueue_style('bootstrap.min.css', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.3', 'all');

    wp_enqueue_style('moesgaard', get_stylesheet_uri(), array('bootstrap.min.css'), 'v1.0', 'all');

    // Enqueue scripts
    wp_enqueue_script('bootstrap.min.js', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.3', true);

    if (is_singular() && comments_open() && get_option( 'thread_commnets'))
    {
        wp_enqueue_script('comment-reply');
    }

}


add_action('wp_enqueue_scripts', 'moesgaard_assets');



function moesgaard_excerpt_readmore( $more)
{
    return '...';
}

add_filter( 'excerpt_more', 'moesgaard_excerpt_readmore');




function moesgaard_pagination()
{
    global $wp_query;
    $links = paginate_links( array(
        'current'       => max(1, get_query_var( 'paged' )),
        'total'         => $wp_query -> max_num_pages,
        'type'          => 'list',
        'prev_text'     => 'Tilbage',
        'next_text'     => 'Næste'   
        ) 
    );
    $links = '<nav class="moesgaard_pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post( $links );
}


function my_custom_fonts() { 
    wp_enqueue_style( 'my-custom-fonts', get_template_directory_uri() . 'assets/fonts/suisseIntl/stylesheet.css', false );
}
add_action( 'wp_enqueue_scripts', 'my_custom_fonts' );