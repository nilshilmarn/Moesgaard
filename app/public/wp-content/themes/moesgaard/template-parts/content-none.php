<?php 
/**
 * 
 * When no content is available
 * 
 * @package moesgaard
 * @since v1.0
 */


if (is_home() && current_user_can( 'publish_posts'))
{
    printf(
        '<p>' . wp_kses(
                __( 'Ready to publish your fist post? <a href="%1$s">Get started here</a>', 'moesgaard'),
                array(
                    'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
            esc_url( admin_url( 'post-new.php'))
        );
}
else if (is_search())
{
?>

    <div class="search-results-none">
        <h2><?php esc_html_e( 'Not Found', 'moesgaard'); ?></h2>
        <p><?php esc_html_e( 'The content you are looking for is no longer available.', 'moesgaard'); ?></p>
    </div>

<?php

get_search_form();

}
else 
{
?>

    <div class="search-results-none">
        <h2><?php esc_html_e( 'Not Found', 'moesgaard'); ?></h2>
        <p><?php esc_html_e( 'The content you are looking for is no longer available.', 'moesgaard'); ?></p>
    </div>

<?php
get_search_form();
}
?>
