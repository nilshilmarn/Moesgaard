<?php 

/**
 * 
 * The header file
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 * 
 * @package moesgaard
 * @since moesgaard v1.0
 * 
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiable" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

    <div class="navbar mb-5 border-bottom">
        <div class="container-fluid px-5">
            <a href="/" class="navbar-brand">
            <?php 
            
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            if ( has_custom_logo() ) {
                echo '<img width="150" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            
            ?> 
            </a>
            <div class="row justify-content-end">
                <div class="col-md-6">
                <?php wp_nav_menu(
                    array(
                        'theme_location'        => 'primary', // as registered in functions.php
                        'depth'                 => 3,
                        'container'             => 'nav',
                        'container_class'       => 'main-menu',
                        'menu_class'            => 'top-menu d-flex flex-row navigation justify-content-end list-unstyled',
                        'fallback_cb'           => false
                    )
                    ); ?>
            </div>
        </div>
    </div>
</div>